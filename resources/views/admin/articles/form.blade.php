@extends('layouts.admin')
@section('page-title', $article->exists ? 'Edit article' : 'New article')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{ $article->exists ? admin_route('articles.update', $article) : admin_route('articles.store') }}" class="max-w-2xl space-y-4 rounded-xl border bg-white p-6">
    @csrf
    @if($article->exists) @method('PUT') @endif
    <x-admin.source-domain-field :value="old('source_domain', $article->source_domain)" :locked="$siteLocked ?? false" />
    <p><label class="text-sm font-medium">Title</label><input name="title" value="{{ old('title',$article->title) }}" required class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Slug</label><input name="slug" value="{{ old('slug',$article->slug) }}" class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Excerpt</label><textarea name="excerpt" rows="2" class="mt-1 block w-full rounded border px-3 py-2">{{ old('excerpt',$article->excerpt) }}</textarea></p>
    <p><label class="text-sm font-medium">Body</label><textarea name="body" rows="8" class="mt-1 block w-full rounded border px-3 py-2">{{ old('body',$article->body) }}</textarea></p>

    <div class="space-y-3 rounded-lg border border-slate-200 bg-slate-50 p-4">
        <p class="text-sm font-medium text-inn-navy">Featured image</p>
        @if($article->imageUrl())
            <img src="{{ $article->imageUrl() }}" alt="" class="max-h-40 rounded-lg border object-cover">
            <label class="flex items-center gap-2 text-sm text-slate-600">
                <input type="checkbox" name="remove_image" value="1"> Remove current image
            </label>
        @endif
        <p>
            <label class="text-sm font-medium">Upload image</label>
            <input type="file" name="image_file" accept="image/jpeg,image/png,image/webp,image/gif" class="mt-1 block w-full text-sm">
            <span class="mt-1 block text-xs text-slate-500">JPG, PNG, WebP or GIF — max 4 MB</span>
        </p>
        <p>
            <label class="text-sm font-medium">Or image URL</label>
            <input type="url" name="image" value="{{ old('image', str_starts_with((string) $article->image, 'http') ? $article->image : '') }}" placeholder="https://…" class="mt-1 block w-full rounded border px-3 py-2">
            <span class="mt-1 block text-xs text-slate-500">Use a full URL if the image is hosted elsewhere (e.g. live site CDN)</span>
        </p>
    </div>

    <p><label class="flex items-center gap-2 text-sm"><input type="checkbox" name="published" value="1" @checked(old('published',$article->published))> Published</label></p>
    <p><label class="text-sm font-medium">Published at</label><input type="datetime-local" name="published_at" value="{{ old('published_at', optional($article->published_at)->format('Y-m-d\TH:i')) }}" class="mt-1 block w-full rounded border px-3 py-2"></p>
    <button class="btn-primary bg-tax-teal text-white">Save</button>
</form>
@endsection
