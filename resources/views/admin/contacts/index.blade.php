@extends('layouts.admin')

@section('page-title', ($adminSite->label() ?? 'INN Group').' — Contacts')

@section('content')
    <header class="mb-8">
        <h2 class="text-2xl font-bold text-inn-navy">{{ $adminSite->label() }} contact leads</h2>
        <p class="mt-1 text-sm text-slate-500">Only submissions from this site are shown.</p>
    </header>

    {{-- Stats --}}
    <section class="mb-8 grid grid-cols-2 gap-4 lg:grid-cols-4">
        <x-admin.stat-card label="Total leads" :value="$stats['total']" icon="📋" accent="slate" class="relative" />
        <x-admin.stat-card label="Pending leads" :value="$stats['pending']" icon="⏳" accent="amber" class="relative" />
        <x-admin.stat-card label="Approved leads" :value="$stats['approved']" icon="✓" accent="emerald" class="relative" />
        <x-admin.stat-card label="Leads today" :value="$stats['today']" icon="📅" accent="teal" class="relative" />
    </section>

    {{-- Filters --}}
    <section class="mb-6 rounded-2xl border border-white/60 bg-white/70 p-4 shadow-sm backdrop-blur-md lg:p-5">
        <form method="GET" action="{{ admin_route('contacts.index') }}" class="flex flex-col gap-4 lg:flex-row lg:flex-wrap lg:items-end">
            <fieldset class="flex flex-wrap gap-2">
                <legend class="sr-only">Status filter</legend>
                @foreach (['all' => 'All', 'pending' => 'Pending', 'approved' => 'Approved'] as $value => $label)
                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="{{ $value }}" class="peer sr-only" @checked(($filters['status'] ?? 'all') === $value)>
                        <span class="inline-block rounded-xl border border-slate-200 px-4 py-2 text-sm font-medium text-slate-600 transition peer-checked:border-inn-navy peer-checked:bg-inn-navy peer-checked:text-white hover:bg-slate-50">
                            {{ $label }}
                        </span>
                    </label>
                @endforeach
            </fieldset>

            <label class="min-w-[200px] flex-1">
                <span class="sr-only">Search</span>
                <input
                    type="search"
                    name="search"
                    value="{{ $filters['search'] ?? '' }}"
                    placeholder="Search name, email, or domain…"
                    class="w-full rounded-xl border border-slate-200 bg-white/90 px-4 py-2.5 text-sm outline-none ring-tax-teal/30 transition focus:border-tax-teal focus:ring-2"
                >
            </label>

            <label>
                <span class="mb-1 block text-xs font-medium text-slate-500">Sort</span>
                <select name="sort" class="rounded-xl border border-slate-200 bg-white/90 px-4 py-2.5 text-sm outline-none focus:border-tax-teal focus:ring-2">
                    <option value="newest" @selected(($filters['sort'] ?? 'newest') === 'newest')">Newest first</option>
                    <option value="oldest" @selected(($filters['sort'] ?? '') === 'oldest')>Oldest first</option>
                    <option value="status" @selected(($filters['sort'] ?? '') === 'status')>By status</option>
                </select>
            </label>

            <button type="submit" class="btn-primary bg-inn-navy text-white hover:bg-inn-slate">Apply</button>
            @if (request()->hasAny(['status', 'search', 'sort']))
                <a href="{{ admin_route('contacts.index') }}" class="btn-primary border border-slate-200 bg-white text-slate-600 hover:bg-slate-50">Reset</a>
            @endif
        </form>
    </section>

    {{-- Table --}}
    <section class="overflow-hidden rounded-2xl border border-white/60 bg-white/80 shadow-sm backdrop-blur-md">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[900px] text-sm">
                <thead>
                    <tr class="border-b border-slate-100 bg-slate-50/80 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3 lg:px-6">Lead ID</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Phone</th>
                        <th class="px-4 py-3">Source</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Submitted</th>
                        <th class="px-4 py-3 text-right lg:px-6">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($contacts as $contact)
                        <tr class="transition hover:bg-slate-50/80 {{ $contact->isPending() ? 'bg-amber-50/30' : '' }}">
                            <td class="px-4 py-4 font-mono text-xs text-slate-500 lg:px-6">#{{ str_pad($contact->id, 5, '0', STR_PAD_LEFT) }}</td>
                            <td class="px-4 py-4 font-medium text-inn-navy">{{ $contact->name }}</td>
                            <td class="px-4 py-4 text-slate-600">{{ $contact->email }}</td>
                            <td class="px-4 py-4 text-slate-600">{{ $contact->phone ?: '—' }}</td>
                            <td class="px-4 py-4">
                                <span class="rounded-lg bg-slate-100 px-2 py-1 text-xs font-medium capitalize text-slate-700">{{ $contact->source_domain }}</span>
                            </td>
                            <td class="px-4 py-4">
                                <x-admin.status-badge :status="$contact->status" />
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-slate-500">{{ $contact->created_at->format('d M Y, H:i') }}</td>
                            <td class="px-4 py-4 lg:px-6">
                                <div class="flex flex-wrap items-center justify-end gap-2">
                                    <a href="{{ admin_route('contacts.show', $contact) }}" class="rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-medium text-slate-700 transition hover:border-tax-teal hover:text-tax-teal">
                                        View
                                    </a>

                                    @if ($contact->isPending())
                                        <form action="{{ admin_route('contacts.approve', $contact) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="rounded-lg bg-tax-teal px-3 py-1.5 text-xs font-medium text-white transition hover:bg-tax-deep">
                                                Approve
                                            </button>
                                        </form>
                                    @else
                                        <span class="rounded-lg border border-slate-100 bg-slate-50 px-3 py-1.5 text-xs font-medium text-slate-400 cursor-not-allowed" title="Already Approved">
                                            Already Approved
                                        </span>
                                    @endif

                                    <form
                                        method="POST"
                                        action="{{ admin_route('contacts.destroy', $contact) }}"
                                        class="inline"
                                        onsubmit="return confirm('Delete this contact lead? This cannot be undone.');"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-lg border border-red-100 px-3 py-1.5 text-xs font-medium text-red-600 transition hover:bg-red-50 hover:border-red-200">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-16 text-center">
                                <p class="text-slate-500">No leads match your filters.</p>
                                <a href="{{ admin_route('contacts.index') }}" class="mt-2 inline-block text-sm text-tax-teal hover:underline">Clear filters</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    <footer class="mt-6">
        {{ $contacts->links() }}
    </footer>

@endsection
