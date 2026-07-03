@props(['as' => 'header'])

@php
    $logoUrl = loan_logo_url();
    $rootClass = match ($as) {
        'footer' => 'fusion-logo-link loan-brand loan-brand--footer',
        default => 'fusion-logo-link loan-brand',
    };
    $imgClass = match ($as) {
        'footer' => 'loan-brand__img loan-brand__img--footer',
        default => 'loan-brand__img',
    };
    [$imgWidth, $imgHeight] = match ($as) {
        'footer' => [180, 48],
        default => [480, 100],
    };
@endphp

<a href="{{ route('loan.home') }}" {{ $attributes->merge(['class' => $rootClass]) }} aria-label="Innovatives Finance — Home">
    <img
        src="{{ $logoUrl }}"
        alt="Innovatives Finance"
        class="{{ $imgClass }}"
        width="{{ $imgWidth }}"
        height="{{ $imgHeight }}"
        decoding="async"
        @if ($as === 'header') fetchpriority="high" @endif
    >
</a>
