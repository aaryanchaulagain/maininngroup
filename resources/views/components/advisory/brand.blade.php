@props(['as' => 'header'])

@php
    $logoUrl = advisory_logo_url();
    $rootClass = match ($as) {
        'footer' => 'adv-brand adv-brand--footer',
        default => 'adv-brand',
    };
    $imgClass = match ($as) {
        'footer' => 'adv-brand__img adv-brand__img--footer',
        default => 'adv-brand__img',
    };
    [$imgWidth, $imgHeight] = match ($as) {
        'footer' => [130, 56],
        default => [180, 110],
    };
@endphp

<a href="{{ route('advisory.home') }}" {{ $attributes->merge(['class' => $rootClass]) }} aria-label="Business Associates — Home">
    <img
        src="{{ $logoUrl }}"
        alt="Business Associates"
        class="{{ $imgClass }}"
        width="{{ $imgWidth }}"
        height="{{ $imgHeight }}"
        decoding="async"
        @if ($as === 'header') fetchpriority="high" @endif
    >
</a>
