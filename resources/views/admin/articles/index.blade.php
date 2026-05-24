@extends('layouts.admin')
@section('page-title', 'Articles')
@section('content')
<div class="mb-4 flex justify-between"><h2 class="font-semibold">Articles</h2><a href="{{ admin_route('articles.create') }}" class="btn-primary bg-inn-navy text-white text-sm">+ Add</a></div>
<table class="w-full rounded-xl border border-slate-200 bg-white text-sm"><thead class="bg-slate-50 text-xs uppercase text-slate-500"><tr><th class="px-4 py-3 text-left">Title</th><th class="px-4 py-3">Domain</th><th class="px-4 py-3">Status</th><th></th></tr></thead>
<tbody class="divide-y">
        @foreach($articles as $a)
            <tr>
                <td class="px-4 py-3">{{ $a->title }}</td>
                <td class="px-4 py-3">{{ $a->source_domain }}</td>
                <td class="px-4 py-3">{{ $a->published ? 'Published' : 'Draft' }}</td>
                <td class="px-4 py-3 text-right">
                    <a href="{{ admin_route('articles.edit', $a) }}" class="text-tax-teal hover:underline">Edit</a>
                    <span class="mx-2 text-slate-300">|</span>
                    <form method="POST" action="{{ admin_route('articles.destroy', $a) }}" class="inline" onsubmit="return confirm('Delete “{{ $a->title }}”? This cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody></table>
{{ $articles->links() }}
@endsection
