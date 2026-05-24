@extends('layouts.admin')
@section('page-title', $team->exists ? 'Edit team member' : 'New team member')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{ $team->exists ? admin_route('teams.update', $team) : admin_route('teams.store') }}" class="max-w-2xl space-y-4 rounded-xl border bg-white p-6">
    @csrf @if($team->exists) @method('PUT') @endif

    <p class="rounded-lg border border-sky-200 bg-sky-50 px-4 py-3 text-sm text-sky-900">
        <strong>Step 1 — Card on Meet The Team.</strong> After saving, you will open <strong>Step 2</strong> to add the full profile introduction (shown when visitors click the name).
    </p>

    <x-admin.source-domain-field :value="old('source_domain', $team->source_domain)" :locked="$siteLocked ?? false" />
    <p><label class="text-sm font-medium">Name</label><input name="name" value="{{ old('name', $team->name) }}" required class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p>
        <label class="text-sm font-medium">Position / role (card)</label>
        <input name="role" value="{{ old('role', $team->role) }}" placeholder="Principal / CEO / Accountant" class="mt-1 block w-full rounded border px-3 py-2">
        <span class="mt-1 block text-xs text-slate-500">Also editable in Step 2 (profile introduction)</span>
    </p>
    <p class="rounded-lg border border-slate-200 bg-slate-50 px-3 py-2 text-xs text-slate-600">
        Fill all three contact fields below so the <strong>phone, email, and mobile</strong> icons appear and are clickable on the team card and profile page.
    </p>
    <p><label class="text-sm font-medium">Email</label><input type="email" name="email" value="{{ old('email', $team->email) }}" placeholder="info@innovativeassociates.com.au" class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Office phone</label><input name="office_phone" value="{{ old('office_phone', $team->office_phone) }}" placeholder="02 8592 1165" class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Mobile</label><input name="phone" value="{{ old('phone', $team->phone) }}" placeholder="0434 392 347" class="mt-1 block w-full rounded border px-3 py-2"></p>

    <div class="space-y-3 rounded-lg border border-slate-200 bg-slate-50 p-4">
        <p class="text-sm font-medium text-inn-navy">Photo (card + profile page)</p>
        @if($team->photoUrl())
            <img src="{{ $team->photoUrl() }}" alt="" class="max-h-48 rounded-lg border object-cover">
            <label class="flex items-center gap-2 text-sm text-slate-600">
                <input type="checkbox" name="remove_photo" value="1"> Remove current photo
            </label>
        @endif
        <p>
            <label class="text-sm font-medium">Upload photo</label>
            <input type="file" name="photo_file" accept="image/jpeg,image/png,image/webp,image/gif" class="mt-1 block w-full text-sm">
        </p>
        <p>
            <label class="text-sm font-medium">Or photo URL</label>
            <input type="url" name="photo" value="{{ old('photo', str_starts_with((string) $team->photo, 'http') ? $team->photo : '') }}" placeholder="https://…" class="mt-1 block w-full rounded border px-3 py-2">
        </p>
    </div>

    @if ($team->exists)
        <p>
            <label class="text-sm font-medium">URL slug</label>
            <input name="slug" value="{{ old('slug', $team->slug) }}" class="mt-1 block w-full rounded border px-3 py-2 font-mono text-sm">
            <span class="mt-1 block text-xs text-slate-500">Profile URL: {{ route('tax.about.team.show', ['slug' => old('slug', $team->slug) ?: 'example']) }}</span>
        </p>
        <p>
            <a href="{{ admin_route('teams.intro.edit', $team) }}" class="text-sm font-medium text-tax-teal hover:underline">Edit profile introduction (Step 2) →</a>
        </p>
    @endif

    <p>
        <label class="text-sm font-medium">Sort order</label>
        <input type="number" name="sort_order" min="0" value="{{ old('sort_order', $team->sort_order ?? 0) }}" class="mt-1 block w-full rounded border px-3 py-2">
    </p>
    <p>
        <input type="hidden" name="active" value="0">
        <label class="flex gap-2 text-sm">
            <input type="checkbox" name="active" value="1" @checked(old('active', $team->active ?? true))>
            Active (show on website)
        </label>
    </p>
    <div class="flex flex-wrap gap-3">
        <button type="submit" class="btn-primary bg-tax-teal text-white">Save member</button>
        @if ($team->exists)
            <a href="{{ admin_route('teams.intro.edit', $team) }}" class="inline-flex items-center rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Edit introduction</a>
        @endif
    </div>
</form>
@endsection
