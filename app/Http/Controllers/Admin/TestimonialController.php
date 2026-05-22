<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TestimonialController extends Controller
{
    public function index(): View
    {
        return view('admin.testimonials.index', [
            'testimonials' => Testimonial::orderBy('sort_order')->orderBy('id')->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.testimonials.form', ['testimonial' => new Testimonial]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['image'] = $this->resolveImage($request);
        $this->syncFeatured($data);

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created.');
    }

    public function edit(Testimonial $testimonial): View
    {
        return view('admin.testimonials.form', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial): RedirectResponse
    {
        $data = $this->validated($request);
        $data['image'] = $this->resolveImage($request, $testimonial);
        $this->syncFeatured($data, $testimonial->id);

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated.');
    }

    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $this->deleteStoredImage($testimonial->image);
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted.');
    }

    protected function validated(Request $request): array
    {
        $data = $request->validate([
            'source_domain' => 'required|in:main,tax,loan',
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
            ->where('source_domain', $data['source_domain'])
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
