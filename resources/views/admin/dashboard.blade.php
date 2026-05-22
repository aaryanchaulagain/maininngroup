@extends('layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
        @foreach ([
            ['Pending leads', $stats['contacts'], 'admin.contacts.index'],
            ['Articles', $stats['articles'], 'admin.articles.index'],
            ['Team', $stats['team'], 'admin.teams.index'],
            ['FAQs', $stats['faqs'], 'admin.faqs.index'],
            ['Calculators', $stats['calculators'], 'admin.calculators.index'],
            ['Content', $stats['contents'], 'admin.contents.index'],
        ] as [$label, $count, $route])
            <a href="{{ route($route) }}" class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm transition hover:shadow-md">
                <p class="text-xs font-medium uppercase tracking-wider text-slate-500">{{ $label }}</p>
                <p class="mt-2 text-3xl font-bold text-inn-navy">{{ $count }}</p>
            </a>
        @endforeach
    </div>

    <div class="mt-8 rounded-xl border border-slate-200 bg-white">
        <div class="border-b border-slate-200 px-6 py-4">
            <h2 class="font-semibold">Recent contacts</h2>
        </div>
        <div class="divide-y divide-slate-100">
            @forelse ($recentContacts as $contact)
                <a href="{{ route('admin.contacts.show', $contact) }}" class="flex items-center justify-between px-6 py-4 hover:bg-slate-50">
                    <div>
                        <p class="font-medium">{{ $contact->name }}</p>
                        <p class="text-sm text-slate-500">{{ $contact->email }} · {{ ucfirst($contact->source_domain) }} · {{ ucfirst($contact->status) }}</p>
                    </div>
                    <span class="text-xs text-slate-400">{{ $contact->created_at->diffForHumans() }}</span>
                </a>
            @empty
                <p class="px-6 py-8 text-sm text-slate-500">No contacts yet.</p>
            @endforelse
        </div>
    </div>
@endsection
