@props(['eyebrow' => null, 'title', 'subtitle' => null, 'light' => false])

<div {{ $attributes->merge(['class' => 'reveal mx-auto max-w-3xl text-center']) }}>
    @if ($eyebrow)
        <p class="mb-3 text-xs font-semibold uppercase tracking-[0.2em] {{ $light ? 'text-loan-gold' : 'text-tax-teal' }}">{{ $eyebrow }}</p>
    @endif
    <h2 class="font-display text-3xl font-normal tracking-tight sm:text-4xl lg:text-5xl {{ $light ? 'text-white' : 'text-inn-navy' }}">{{ $title }}</h2>
    @if ($subtitle)
        <p class="mt-4 text-base leading-relaxed {{ $light ? 'text-white/70' : 'text-gray-600' }}">{{ $subtitle }}</p>
    @endif
</div>
