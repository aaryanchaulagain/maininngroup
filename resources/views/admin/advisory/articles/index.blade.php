@extends('layouts.admin')
@section('page-title', 'Business Advisory — Articles')
@section('content')
<div class="mb-4 flex justify-between items-center">
    <h2 class="font-semibold text-inn-navy">Articles</h2>
    <a href="{{ route('admin.advisory.articles.create') }}" class="btn-primary bg-inn-navy text-white text-sm">+ Add article</a>
</div>

<table class="w-full rounded-xl border border-slate-200 bg-white text-sm">
    <thead class="bg-slate-50 text-xs uppercase text-slate-500">
        <tr>
            <th class="px-4 py-3 text-left">Title</th>
            <th class="px-4 py-3">Published</th>
            <th class="px-4 py-3">Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="divide-y">
        @forelse($articles as $a)
            <tr>
                <td class="px-4 py-3">
                    <span class="font-medium">{{ $a->title }}</span>
                    @if($a->slug)
                        <div class="mt-0.5 font-mono text-xs text-slate-400">/articles/{{ $a->slug }}</div>
                    @endif
                </td>
                <td class="px-4 py-3">{{ $a->published ? 'Yes' : 'Draft' }}</td>
                <td class="px-4 py-3">{{ $a->published_at?->format('d M Y') ?? '—' }}</td>
                <td class="px-4 py-3 text-right whitespace-nowrap">
                    @if($a->published && $a->slug)
                        <a href="{{ route('advisory.articles.show', $a) }}" target="_blank" rel="noopener" class="text-slate-500 hover:underline">Preview</a>
                        <span class="mx-2 text-slate-300">|</span>
                    @endif
                    <a href="{{ route('admin.advisory.articles.edit', $a) }}" class="text-tax-teal hover:underline">Edit</a>
                    <span class="mx-2 text-slate-300">|</span>
                    <form method="POST" action="{{ route('admin.advisory.articles.destroy', $a) }}" class="inline" onsubmit="return confirm('Delete “{{ $a->title }}”?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4" class="px-4 py-8 text-center text-slate-500">No articles yet. Add your first article for the advisory site.</td></tr>
        @endforelse
    </tbody>
</table>
{{ $articles->links() }}
@endsection
