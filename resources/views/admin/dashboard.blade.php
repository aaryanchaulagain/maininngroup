@extends('layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
    <p class="mb-8 max-w-2xl text-slate-600">
        Choose a site in the sidebar to manage its content. Each section only shows data for that subdomain.
    </p>

    <div class="grid gap-6 lg:grid-cols-2">
        @foreach ($sites as $siteKey => $site)
            @php
                $config = $site['config'];
                $firstNav = $config['nav'][0]['route'] ?? 'contacts.index';
                $entryUrl = route(admin_route_name($firstNav, $siteKey));
                $contactsUrl = collect($config['nav'])->firstWhere('route', 'contacts.index')
                    ? route(admin_route_name('contacts.index', $siteKey))
                    : $entryUrl;
            @endphp
            <article class="flex flex-col rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="border-b border-slate-100 px-6 py-5">
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <h2 class="text-lg font-bold text-inn-navy">{{ $config['label'] }}</h2>
                            <p class="mt-1 text-sm text-slate-500">{{ $config['description'] ?? '' }}</p>
                        </div>
                        @if ($site['pending_contacts'] > 0)
                            <span class="rounded-full bg-amber-100 px-2.5 py-1 text-xs font-semibold text-amber-800">
                                {{ $site['pending_contacts'] }} pending
                            </span>
                        @endif
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3 px-6 py-5 sm:grid-cols-4">
                    @foreach ($site['stats'] as $stat)
                        <div class="rounded-lg bg-slate-50 px-3 py-3">
                            <p class="text-xs font-medium uppercase tracking-wide text-slate-500">{{ $stat['label'] }}</p>
                            <p class="mt-1 text-2xl font-bold text-inn-navy">{{ $stat['value'] }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="mt-auto flex flex-wrap gap-2 border-t border-slate-100 px-6 py-4">
                    <a href="{{ $contactsUrl }}" class="rounded-lg bg-inn-navy px-4 py-2 text-sm font-medium text-white hover:bg-slate-800">
                        Manage {{ $siteKey === 'main' ? 'contacts' : 'site' }}
                    </a>
                    <a href="{{ is_callable($config['public_url'] ?? null) ? $config['public_url']() : domain_url($config['domain_key'], '/') }}"
                       target="_blank" rel="noopener"
                       class="rounded-lg border border-slate-200 px-4 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50">
                        View live site ↗
                    </a>
                </div>
            </article>
        @endforeach
    </div>

    <div class="mt-10 rounded-2xl border border-slate-200 bg-white">
        <div class="border-b border-slate-200 px-6 py-4">
            <h2 class="font-semibold text-inn-navy">Recent contact submissions (all sites)</h2>
        </div>
        <div class="divide-y divide-slate-100">
            @forelse ($recentContacts as $contact)
                @php
                    $contactRoute = admin_route_name('contacts.show', $contact->source_domain);
                @endphp
                <a href="{{ route($contactRoute, $contact) }}" class="flex items-center justify-between px-6 py-4 hover:bg-slate-50">
                    <div>
                        <p class="font-medium">{{ $contact->name }}</p>
                        <p class="text-sm text-slate-500">
                            {{ $contact->email }} · {{ ucfirst($contact->source_domain) }} · {{ ucfirst($contact->status) }}
                        </p>
                    </div>
                    <span class="text-xs text-slate-400">{{ $contact->created_at->diffForHumans() }}</span>
                </a>
            @empty
                <p class="px-6 py-8 text-sm text-slate-500">No contacts yet.</p>
            @endforelse
        </div>
    </div>
@endsection
