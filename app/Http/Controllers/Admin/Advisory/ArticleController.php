<?php

namespace App\Http\Controllers\Admin\Advisory;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleController extends Controller
{
    use BelongsToAdvisory;

    public function index(): View
    {
        return view('admin.advisory.articles.index', [
            'articles' => Article::query()
                ->forDomain(self::ADVISORY_DOMAIN)
                ->latest()
                ->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.advisory.articles.form', [
            'article' => new Article(['source_domain' => self::ADVISORY_DOMAIN]),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['source_domain'] = self::ADVISORY_DOMAIN;
        $data['slug'] = Str::slug($data['slug'] ?? $data['title']);
        $data['image'] = $this->resolveImage($request);

        Article::create($data);

        return redirect()->route('admin.advisory.articles.index')->with('success', 'Article created.');
    }

    public function edit(Article $article): View
    {
        $this->ensureAdvisory($article);

        return view('admin.advisory.articles.form', compact('article'));
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $this->ensureAdvisory($article);

        $data = $this->validated($request);
        $data['source_domain'] = self::ADVISORY_DOMAIN;
        $data['slug'] = Str::slug($data['slug'] ?? $data['title']);
        $data['image'] = $this->resolveImage($request, $article);

        $article->update($data);

        return redirect()->route('admin.advisory.articles.index')->with('success', 'Article updated.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $this->ensureAdvisory($article);

        $this->deleteStoredImage($article->image);
        $article->delete();

        return redirect()->route('admin.advisory.articles.index')->with('success', 'Article deleted.');
    }

    protected function validated(Request $request): array
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'nullable|string',
            'image' => 'nullable|string|max:2048',
            'image_file' => 'nullable|image|max:4096',
            'remove_image' => 'nullable|boolean',
            'published' => 'nullable|boolean',
            'published_at' => 'nullable|date',
        ]);

        $data['published'] = $request->boolean('published');
        unset($data['image_file'], $data['remove_image']);

        return $data;
    }

    protected function resolveImage(Request $request, ?Article $article = null): ?string
    {
        if ($request->boolean('remove_image')) {
            $this->deleteStoredImage($article?->image);

            return null;
        }

        if ($request->hasFile('image_file')) {
            $this->deleteStoredImage($article?->image);

            return $request->file('image_file')->store('articles', 'public');
        }

        if ($request->filled('image')) {
            $this->deleteStoredImage($article?->image);

            return $request->string('image')->trim()->toString();
        }

        return $article?->image;
    }

    protected function deleteStoredImage(?string $image): void
    {
        if (! $image || str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
            return;
        }

        Storage::disk('public')->delete($image);
    }
}
