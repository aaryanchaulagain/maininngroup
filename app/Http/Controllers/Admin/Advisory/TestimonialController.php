<?php

namespace App\Http\Controllers\Admin\Advisory;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TestimonialController extends Controller
{
    use BelongsToAdvisory;

    public function index(): View
    {
        return view('admin.advisory.testimonials.index', [
            'testimonials' => Testimonial::query()
                ->forDomain(self::ADVISORY_DOMAIN)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.advisory.testimonials.form', [
            'testimonial' => new Testimonial(['source_domain' => self::ADVISORY_DOMAIN, 'active' => true]),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['source_domain'] = self::ADVISORY_DOMAIN;
        $data['image'] = $this->resolveImage($request);
        $this->syncFeatured($data);

        Testimonial::create($data);

        return redirect()->route('admin.advisory.testimonials.index')->with('success', 'Testimonial created.');
    }

    public function edit(Testimonial $testimonial): View
    {
        $this->ensureAdvisory($testimonial);

        return view('admin.advisory.testimonials.form', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial): RedirectResponse
    {
        $this->ensureAdvisory($testimonial);

        $data = $this->validated($request);
        $data['source_domain'] = self::ADVISORY_DOMAIN;
        $data['image'] = $this->resolveImage($request, $testimonial);
        $this->syncFeatured($data, $testimonial->id);

        $testimonial->update($data);

        return redirect()->route('admin.advisory.testimonials.index')->with('success', 'Testimonial updated.');
    }

    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $this->ensureAdvisory($testimonial);

        $this->deleteStoredImage($testimonial->image);
        $testimonial->delete();

        return redirect()->route('admin.advisory.testimonials.index')->with('success', 'Testimonial deleted.');
    }

    protected function validated(Request $request): array
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'quote' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|string|max:2048',
            'image_file' => 'nullable|image|max:4096',
            'remove_image' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'sort_order' => 'integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $data['active'] = $request->boolean('active');
        $data['is_featured'] = $request->boolean('is_featured');
        unset($data['image_file'], $data['remove_image']);

        return $data;
    }

    protected function syncFeatured(array $data, ?int $exceptId = null): void
    {
        if (! ($data['is_featured'] ?? false)) {
            return;
        }

        $query = Testimonial::query()
            ->forDomain(self::ADVISORY_DOMAIN)
            ->where('is_featured', true);

        if ($exceptId) {
            $query->where('id', '!=', $exceptId);
        }

        $query->update(['is_featured' => false]);
    }

    protected function resolveImage(Request $request, ?Testimonial $testimonial = null): ?string
    {
        if ($request->boolean('remove_image')) {
            $this->deleteStoredImage($testimonial?->image);

            return null;
        }

        if ($request->hasFile('image_file')) {
            $this->deleteStoredImage($testimonial?->image);

            return $request->file('image_file')->store('testimonials', 'public');
        }

        if ($request->filled('image')) {
            $this->deleteStoredImage($testimonial?->image);

            return $request->string('image')->trim()->toString();
        }

        return $testimonial?->image;
    }

    protected function deleteStoredImage(?string $image): void
    {
        if (! $image || str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
            return;
        }

        Storage::disk('public')->delete($image);
    }
}
