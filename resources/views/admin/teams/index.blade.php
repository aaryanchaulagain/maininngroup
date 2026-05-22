@extends('layouts.admin')
@section('page-title', 'Team')
@section('content')
@php
    $storageLinked = file_exists(public_path('storage')) || is_link(public_path('storage'));
@endphp

@if (! $storageLinked)
    <div class="mb-4 rounded-lg border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-900">
        Uploaded team photos need <code class="rounded bg-amber-100 px-1">php artisan storage:link</code> to display on the site.
    </div>
@endif

<div class="mb-4 flex justify-between">
    <h2 class="font-semibold">Team members</h2>
    <a href="{{ route('admin.teams.create') }}" class="btn-primary bg-inn-navy text-white text-sm">+ Add member</a>
</div>

<p class="mb-4 max-w-3xl text-sm text-slate-600">
    Click a <strong>name</strong> to edit the profile introduction (Step 2). Use <strong>Edit card</strong> for photo, role, and contact details (Step 1).
</p>

<table class="w-full rounded-xl border bg-white text-sm">
    <thead class="bg-slate-50 text-xs uppercase">
        <tr>
            <th class="px-4 py-3 text-left">Name</th>
            <th class="px-4 py-3">Domain</th>
            <th class="px-4 py-3">Role</th>
            <th class="px-4 py-3">Intro</th>
            <th class="px-4 py-3">Active</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="divide-y">
        @forelse($teams as $t)
            <tr class="{{ ! $t->active ? 'bg-slate-50 text-slate-500' : '' }}">
                <td class="px-4 py-3">
                    <a href="{{ route('admin.teams.intro.edit', $t) }}" class="font-medium text-inn-navy hover:text-tax-teal hover:underline">{{ $t->name }}</a>
                    @if ($t->slug && $t->source_domain === 'tax')
                        <div class="mt-0.5 font-mono text-xs text-slate-400">/aboutus/team/{{ $t->slug }}</div>
                    @endif
                </td>
                <td class="px-4 py-3">
                    <span class="rounded px-2 py-0.5 text-xs {{ $t->source_domain === 'tax' ? 'bg-sky-100 text-sky-800' : 'bg-violet-100 text-violet-800' }}">
                        {{ $t->source_domain === 'tax' ? 'Innovative Tax' : 'Innovative Loan' }}
                    </span>
                </td>
                <td class="px-4 py-3">{{ $t->role }}</td>
                <td class="px-4 py-3">
                    @if (filled($t->bio))
                        <span class="text-emerald-700">Added</span>
                    @else
                        <a href="{{ route('admin.teams.intro.edit', $t) }}" class="text-amber-700 hover:underline">Add intro</a>
                    @endif
                </td>
                <td class="px-4 py-3">{{ $t->active ? 'Yes' : 'No' }}</td>
                <td class="px-4 py-3 text-right whitespace-nowrap">
                    <a href="{{ route('admin.teams.edit', $t) }}" class="text-tax-teal hover:underline">Edit card</a>
                    <span class="mx-2 text-slate-300">|</span>
                    <form method="POST" action="{{ route('admin.teams.destroy', $t) }}" class="inline" onsubmit="return confirm('Delete {{ $t->name }}?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="px-4 py-8 text-center text-slate-500">No team members yet.</td>
            </tr>
        @endforelse
    </tbody>
</table>
{{ $teams->links() }}
@endsection
