@extends('layouts.admin')
@section('page-title', $content->exists ? 'Edit content' : 'New content')
@section('content')
<form method="POST" action="{{ $content->exists ? admin_route('contents.update', $content) : admin_route('contents.store') }}" class="max-w-2xl space-y-4 rounded-xl border bg-white p-6">
    @csrf @if($content->exists) @method('PUT') @endif
    <x-admin.source-domain-field :value="old('source_domain', $content->source_domain ?? 'loan')" :locked="$siteLocked ?? false" />
    <p><label class="text-sm font-medium">Section</label><input name="section" value="{{ old('section',$content->section) }}" placeholder="hero" required class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Key</label><input name="key" value="{{ old('key',$content->key) }}" placeholder="title" required class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Type</label><select name="type" class="mt-1 block w-full rounded border px-3 py-2">@foreach(['text','html','json'] as $t)<option value="{{ $t }}" @selected(old('type',$content->type)===$t)>{{ $t }}</option>@endforeach</select></p>
    <p><label class="text-sm font-medium">Value</label><textarea name="value" rows="6" class="mt-1 block w-full rounded border px-3 py-2">{{ old('value',$content->value) }}</textarea></p>
    <button class="btn-primary bg-tax-teal text-white">Save</button>
</form>
@endsection
