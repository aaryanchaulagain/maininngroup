@props(['label', 'value', 'icon' => null, 'accent' => 'slate'])

@php
    $accents = [
        'slate' => 'from-slate-500/10 to-slate-500/5 border-slate-200/60 text-slate-700',
        'amber' => 'from-amber-500/15 to-amber-500/5 border-amber-200/60 text-amber-800',
        'emerald' => 'from-emerald-500/15 to-emerald-500/5 border-emerald-200/60 text-emerald-800',
        'teal' => 'from-teal-500/15 to-teal-500/5 border-teal-200/60 text-teal-800',
    ];
    $classes = $accents[$accent] ?? $accents['slate'];
@endphp

<section {{ $attributes->merge(['class' => "rounded-2xl border bg-gradient-to-br p-5 shadow-sm backdrop-blur-md transition duration-300 hover:-translate-y-0.5 hover:shadow-md {$classes}"]) }}>
    <p class="text-xs font-semibold uppercase tracking-wider opacity-70">{{ $label }}</p>
    <p class="mt-2 text-3xl font-bold tabular-nums">{{ $value }}</p>
    @if ($icon)
        <span class="absolute right-5 top-5 text-2xl opacity-80">{{ $icon }}</span>
    @endif
</section>
