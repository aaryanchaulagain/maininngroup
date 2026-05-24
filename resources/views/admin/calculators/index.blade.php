@extends('layouts.admin')
@section('page-title', 'Calculators')
@section('content')
<div class="mb-4 flex justify-between"><h2 class="font-semibold">Calculators</h2><a href="{{ admin_route('calculators.create') }}" class="btn-primary bg-inn-navy text-white text-sm">+ Add</a></div>
<table class="w-full rounded-xl border bg-white text-sm"><thead class="bg-slate-50 text-xs uppercase"><tr><th class="px-4 py-3 text-left">Name</th><th class="px-4 py-3">Slug</th><th></th></tr></thead>
<tbody class="divide-y">@foreach($calculators as $c)<tr><td class="px-4 py-3">{{ $c->name }}</td><td class="px-4 py-3">{{ $c->slug }}</td><td class="px-4 py-3 text-right"><a href="{{ admin_route('calculators.edit', $c) }}" class="text-tax-teal">Edit</a></td></tr>@endforeach</tbody></table>
{{ $calculators->links() }}
@endsection
