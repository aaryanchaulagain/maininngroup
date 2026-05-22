@extends('layouts.admin')
@section('page-title', 'FAQ')
@section('content')
<div class="mb-4 flex justify-between"><h2 class="font-semibold">FAQs</h2><a href="{{ route('admin.faqs.create') }}" class="btn-primary bg-inn-navy text-white text-sm">+ Add</a></div>
<table class="w-full rounded-xl border bg-white text-sm"><thead class="bg-slate-50 text-xs uppercase"><tr><th class="px-4 py-3 text-left">Question</th><th class="px-4 py-3">Domain</th><th></th></tr></thead>
<tbody class="divide-y">@foreach($faqs as $f)<tr><td class="px-4 py-3">{{ Str::limit($f->question, 60) }}</td><td class="px-4 py-3">{{ $f->source_domain }}</td><td class="px-4 py-3 text-right"><a href="{{ route('admin.faqs.edit', $f) }}" class="text-tax-teal">Edit</a></td></tr>@endforeach</tbody></table>
{{ $faqs->links() }}
@endsection
