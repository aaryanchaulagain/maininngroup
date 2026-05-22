@extends('layouts.admin')
@section('page-title', 'Page content')
@section('content')
<form method="GET" class="mb-4 flex gap-2">
    <select name="domain" onchange="this.form.submit()" class="rounded border px-3 py-2 text-sm">
        <option value="">All domains</option>
        @foreach(['main','tax','loan'] as $d)<option value="{{ $d }}" @selected(request('domain')===$d)>{{ $d }}</option>@endforeach
    </select>
</form>
<div class="mb-4 flex justify-between"><h2 class="font-semibold">CMS content</h2><a href="{{ route('admin.contents.create') }}" class="btn-primary bg-inn-navy text-white text-sm">+ Add</a></div>
<table class="w-full rounded-xl border bg-white text-sm"><thead class="bg-slate-50 text-xs uppercase"><tr><th class="px-4 py-3 text-left">Domain</th><th class="px-4 py-3">Section</th><th class="px-4 py-3">Key</th><th></th></tr></thead>
<tbody class="divide-y">@foreach($contents as $c)<tr><td class="px-4 py-3">{{ $c->source_domain }}</td><td class="px-4 py-3">{{ $c->section }}</td><td class="px-4 py-3">{{ $c->key }}</td><td class="px-4 py-3 text-right"><a href="{{ route('admin.contents.edit', $c) }}" class="text-tax-teal">Edit</a></td></tr>@endforeach</tbody></table>
{{ $contents->links() }}
@endsection
