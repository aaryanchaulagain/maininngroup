@extends('layouts.admin')

@section('page-title', 'Lead #'.str_pad($contact->id, 5, '0', STR_PAD_LEFT))

@section('content')
    <header class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <a href="{{ admin_route('contacts.index', request()->only(['status', 'search', 'sort'])) }}" class="inline-flex items-center gap-1 text-sm font-medium text-tax-teal hover:underline">
            &larr; Back to leads
        </a>
        <x-admin.status-badge :status="$contact->status" />
    </header>

    <section class="grid gap-6 lg:grid-cols-3">
        {{-- Main details --}}
        <article class="lg:col-span-2 rounded-2xl border border-white/60 bg-white/80 p-6 shadow-sm backdrop-blur-md lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Lead #{{ str_pad($contact->id, 5, '0', STR_PAD_LEFT) }}</p>
            <h2 class="mt-2 text-2xl font-bold text-inn-navy">{{ $contact->name }}</h2>
            <p class="mt-1 text-sm text-slate-500">{{ $contact->sourceDomainLabel() }}</p>

            <dl class="mt-8 grid gap-6 sm:grid-cols-2">
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400">Email</dt>
                    <dd class="mt-1"><a href="mailto:{{ $contact->email }}" class="font-medium text-tax-teal hover:underline">{{ $contact->email }}</a></dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400">Phone</dt>
                    <dd class="mt-1 text-slate-700">{{ $contact->phone ?: '—' }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400">Source domain</dt>
                    <dd class="mt-1 capitalize text-slate-700">{{ $contact->source_domain }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400">Status</dt>
                    <dd class="mt-2"><x-admin.status-badge :status="$contact->status" /></dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400">Submitted at</dt>
                    <dd class="mt-1 text-slate-700">{{ $contact->created_at->format('l, d M Y \a\t H:i') }}</dd>
                </div>
                @if ($contact->approved_at)
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400">Approved at</dt>
                        <dd class="mt-1 text-slate-700">{{ $contact->approved_at->format('l, d M Y \a\t H:i') }}</dd>
                    </div>
                @endif
                @if ($contact->approver)
                    <div class="sm:col-span-2">
                        <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400">Approved by</dt>
                        <dd class="mt-1 text-slate-700">{{ $contact->approver->name }} <span class="text-slate-400">({{ $contact->approver->email }})</span></dd>
                    </div>
                @endif
            </dl>

            <div class="mt-8 border-t border-slate-100 pt-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider text-slate-400">Full message</h3>
                <p class="mt-3 whitespace-pre-wrap rounded-xl bg-slate-50 p-5 text-sm leading-relaxed text-slate-700">{{ $contact->message }}</p>
            </div>
        </article>

        {{-- Actions sidebar --}}
        <aside class="rounded-2xl border border-white/60 bg-white/80 p-6 shadow-sm backdrop-blur-md">
            <h3 class="text-sm font-semibold text-inn-navy">Actions</h3>

            <div class="mt-6 space-y-3">
                @if ($contact->isPending())
                    <form action="{{ admin_route('contacts.approve', $contact) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-primary w-full bg-tax-teal text-white hover:bg-tax-deep">
                            Approve &amp; notify client
                        </button>
                    </form>
                    <p class="text-xs text-slate-500">Sends a confirmation email to <strong>{{ $contact->email }}</strong>.</p>
                @else
                    <button type="button" disabled class="btn-primary w-full cursor-not-allowed border border-slate-200 bg-slate-100 text-slate-400">
                        Already Approved
                    </button>
                    <p class="text-xs text-slate-500">This lead was approved{{ $contact->approved_at ? ' on '.$contact->approved_at->format('d M Y') : '' }}.</p>
                @endif

                <form
                    method="POST"
                    action="{{ admin_route('contacts.destroy', $contact) }}"
                    onsubmit="return confirm('Delete this contact lead? This cannot be undone.');"
                >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-primary w-full border border-red-200 bg-white text-red-600 hover:bg-red-50">
                        Delete lead
                    </button>
                </form>
            </div>
        </aside>
    </section>

@endsection
