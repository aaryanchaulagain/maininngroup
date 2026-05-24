@extends('layouts.admin')
@section('page-title', $testimonial->exists ? 'Edit testimonial' : 'New testimonial')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{ $testimonial->exists ? admin_route('testimonials.update', $testimonial) : admin_route('testimonials.store') }}" class="max-w-2xl space-y-4 rounded-xl border bg-white p-6">
    @csrf
    @if($testimonial->exists) @method('PUT') @endif

    <x-admin.source-domain-field :value="old('source_domain', $testimonial->source_domain)" :locked="$siteLocked ?? false" />
    <p><label class="text-sm font-medium">Headline</label><input name="title" value="{{ old('title', $testimonial->title) }}" required placeholder="Phenomenal" class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Quote</label><textarea name="quote" rows="5" required class="mt-1 block w-full rounded border px-3 py-2">{{ old('quote', $testimonial->quote) }}</textarea></p>
    <p><label class="text-sm font-medium">Author name</label><input name="author" value="{{ old('author', $testimonial->author) }}" required placeholder="Dharma Adhikari" class="mt-1 block w-full rounded border px-3 py-2"></p>

    <div class="space-y-3 rounded-lg border border-slate-200 bg-slate-50 p-4">
        <p class="text-sm font-medium text-inn-navy">Photo (circular on site)</p>
        @if($testimonial->imageUrl())
            <img src="{{ $testimonial->imageUrl() }}" alt="" class="h-32 w-32 rounded-full border object-cover">
            <label class="flex items-center gap-2 text-sm text-slate-600">
                <input type="checkbox" name="remove_image" value="1"> Remove current photo
            </label>
        @endif
        <p>
            <label class="text-sm font-medium">Upload photo</label>
            <input type="file" name="image_file" accept="image/jpeg,image/png,image/webp,image/gif" class="mt-1 block w-full text-sm">
        </p>
        <p>
            <label class="text-sm font-medium">Or photo URL</label>
            <input type="url" name="image" value="{{ old('image', str_starts_with((string) $testimonial->image, 'http') ? $testimonial->image : '') }}" placeholder="https://…" class="mt-1 block w-full rounded border px-3 py-2">
        </p>
    </div>

    <p><label class="text-sm font-medium">Sort order</label><input type="number" name="sort_order" value="{{ old('sort_order', $testimonial->sort_order ?? 0) }}" class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="flex items-center gap-2 text-sm"><input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $testimonial->is_featured))> Featured on loan home page</label></p>
    <p><label class="flex items-center gap-2 text-sm"><input type="checkbox" name="active" value="1" @checked(old('active', $testimonial->active ?? true))> Active (visible on site)</label></p>
    <button class="btn-primary bg-tax-teal text-white">Save</button>
</form>
@endsection
