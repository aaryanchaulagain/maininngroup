@extends('layouts.admin')
@section('page-title', $calculator->exists ? 'Edit calculator' : 'New calculator')
@section('content')
<form method="POST" action="{{ $calculator->exists ? admin_route('calculators.update', $calculator) : admin_route('calculators.store') }}" class="max-w-2xl space-y-4 rounded-xl border bg-white p-6">
    @csrf @if($calculator->exists) @method('PUT') @endif
    <x-admin.source-domain-field :value="old('source_domain', $calculator->source_domain ?? 'tax')" :locked="$siteLocked ?? false" />
    <p><label class="text-sm font-medium">Name</label><input name="name" value="{{ old('name',$calculator->name) }}" required class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Slug</label><input name="slug" value="{{ old('slug',$calculator->slug) }}" class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Config JSON</label><textarea name="config_json" rows="4" class="mt-1 block w-full rounded border px-3 py-2 font-mono text-xs">{{ old('config_json', json_encode($calculator->config ?? ['rate' => 0.325], JSON_PRETTY_PRINT)) }}</textarea></p>
    <p><label class="flex gap-2 text-sm"><input type="checkbox" name="active" value="1" @checked(old('active',$calculator->active ?? true))> Active</label></p>
    <button class="btn-primary bg-tax-teal text-white">Save</button>
</form>
@endsection
