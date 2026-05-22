<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('admin.articles.index', [
            'articles' => Article::latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.articles.form', ['article' => new Article]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug'] = Str::slug($data['slug'] ?? $data['title']);
        $data['image'] = $this->resolveImage($request);

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article created.');
    }

    public function edit(Article $article): View
    {
        return view('admin.articles.form', compact('article'));
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug'] = Str::slug($data['slug'] ?? $data['title']);
        $data['image'] = $this->resolveImage($request, $article);

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $this->deleteStoredImage($article->image);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article deleted.');
    }

    protected function validated(Request $request): array
    {
        $data = $request->validate([
            'source_domain' => 'required|in:main,tax,loan',
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
