@props(['as' => 'header'])

@php
    $logoUrl = tax_logo_url();
    $rootClass = match ($as) {
        'footer' => 'tax-brand tax-brand--footer',
        'nav' => 'tax-brand tax-brand--nav',
        default => 'main-nav__logo tax-brand',
    };
    $imgClass = match ($as) {
        'footer' => 'tax-brand__img tax-brand__img--footer',
        'nav' => 'tax-brand__img tax-brand__img--nav',
        default => 'tax-brand__img',
    };
    [$imgWidth, $imgHeight] = match ($as) {
        'footer' => [320, 98],
        'nav' => [220, 68],
        default => [480, 100],
    };
@endphp

<a href="{{ route('tax.home') }}" {{ $attributes->merge(['class' => $rootClass]) }} aria-label="Innovative Tax — Home">
    <img
        src="{{ $logoUrl }}"
        alt="Innovative Tax"
        class="{{ $imgClass }}"
        width="{{ $imgWidth }}"
        height="{{ $imgHeight }}"
        decoding="async"
        @if ($as === 'header') fetchpriority="high" @endif
    >
</a>
