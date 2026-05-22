@extends('layouts.admin')
@section('page-title', 'Profile introduction — '.$team->name)
@section('content')
<div class="mb-4 max-w-2xl rounded-lg border border-violet-200 bg-violet-50 px-4 py-3 text-sm text-violet-900">
    <strong>Step 2 — Profile page.</strong> Shown when visitors click <strong>{{ $team->name }}</strong> on Meet The Team: position, photo, biography, then contact icons.
    <a href="{{ route('admin.teams.edit', $team) }}" class="ml-1 font-medium underline">← Back to card details</a>
</div>

<form method="POST" action="{{ route('admin.teams.intro.update', $team) }}" class="max-w-3xl space-y-4 rounded-xl border bg-white p-6">
    @csrf
    @method('PUT')

    <p class="text-sm text-slate-600">
        Member: <strong>{{ $team->name }}</strong>
        @if ($team->slug && $team->source_domain === 'tax')
            · <a href="{{ route('tax.about.team.show', $team->slug) }}" target="_blank" rel="noopener" class="text-tax-teal hover:underline">Preview on site</a>
        @endif
    </p>

    <p>
        <label class="text-sm font-medium">Title label</label>
        <input name="title_label" value="{{ old('title_label', $team->title_label) }}" placeholder="Principal" class="mt-1 block w-full rounded border px-3 py-2">
        <span class="mt-1 block text-xs text-slate-500">Optional small label above the position (e.g. Principal)</span>
    </p>

    <p>
        <label class="text-sm font-medium">Position / role</label>
        <input name="role" value="{{ old('role', $team->role) }}" placeholder="Principal / CEO / Accountant" class="mt-1 block w-full rounded border px-3 py-2">
        <span class="mt-1 block text-xs text-slate-500">Shown first on the profile page and on the team card (e.g. Principal / CEO / Accountant)</span>
    </p>

    <p>
        <label class="text-sm font-medium">Introduction / biography</label>
        <textarea name="bio" rows="16" class="mt-1 block w-full rounded border px-3 py-2 font-mono text-sm leading-relaxed">{{ old('bio', $team->bio) }}</textarea>
        <span class="mt-1 block text-xs text-slate-500">Separate paragraphs with a blank line. Shown after the photo on the profile page.</span>
    </p>

    <div class="flex flex-wrap gap-3">
        <button type="submit" class="btn-primary bg-tax-teal text-white">Save introduction</button>
        <a href="{{ route('admin.teams.index') }}" class="inline-flex items-center rounded-lg border border-slate-300 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Back to list</a>
    </div>
</form>
@endsection
