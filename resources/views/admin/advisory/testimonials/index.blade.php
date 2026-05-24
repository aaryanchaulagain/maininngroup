@extends('layouts.admin')
@section('page-title', 'Business Advisory — Testimonials')
@section('content')
<div class="mb-4 flex justify-between">
    <h2 class="font-semibold text-inn-navy">Testimonials</h2>
    <a href="{{ route('admin.advisory.testimonials.create') }}" class="btn-primary bg-inn-navy text-white text-sm">+ Add testimonial</a>
</div>

<p class="mb-4 text-sm text-slate-600">Shown on the Business Advisory <strong>home page</strong>. Mark one as featured to highlight it first.</p>

<table class="w-full rounded-xl border border-slate-200 bg-white text-sm">
    <thead class="bg-slate-50 text-xs uppercase text-slate-500">
        <tr>
            <th class="px-4 py-3 text-left">Title</th>
            <th class="px-4 py-3">Author</th>
            <th class="px-4 py-3">Featured</th>
            <th class="px-4 py-3">Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="divide-y">
        @forelse($testimonials as $t)
            <tr>
                <td class="px-4 py-3">{{ $t->title }}</td>
                <td class="px-4 py-3">{{ $t->author }}</td>
                <td class="px-4 py-3">{{ $t->is_featured ? 'Yes' : '—' }}</td>
                <td class="px-4 py-3">{{ $t->active ? 'Active' : 'Hidden' }}</td>
                <td class="px-4 py-3 text-right">
                    <a href="{{ route('admin.advisory.testimonials.edit', $t) }}" class="text-tax-teal hover:underline">Edit</a>
                    <span class="mx-2 text-slate-300">|</span>
                    <form method="POST" action="{{ route('admin.advisory.testimonials.destroy', $t) }}" class="inline" onsubmit="return confirm('Delete testimonial from {{ $t->author }}?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="px-4 py-8 text-center text-slate-500">No testimonials yet.</td></tr>
        @endforelse
    </tbody>
</table>
{{ $testimonials->links() }}
@endsection
