@props(['status'])

@if ($status === 'approved' || $status === \App\Models\Contact::STATUS_APPROVED)
    <span {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full border border-emerald-200 bg-emerald-100 px-2.5 py-1 text-xs font-semibold text-emerald-800']) }}>
        Approved
    </span>
@else
    <span {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full border border-amber-200 bg-amber-100 px-2.5 py-1 text-xs font-semibold text-amber-800']) }}>
        Pending
    </span>
@endif
