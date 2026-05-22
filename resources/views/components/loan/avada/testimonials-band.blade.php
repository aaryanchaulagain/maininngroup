@props([
    'banner' => "We've helped thousands of people achieve dream home, accounting, taxation and insurances!",
    'testimonials' => null,
    'domain' => 'loan',
])

@php
    $items = $testimonials ?? \App\Models\Testimonial::query()
        ->active()
        ->forDomain($domain)
        ->orderBy('sort_order')
        ->orderBy('id')
        ->get();
@endphp

@if ($items->isNotEmpty())
    <section class="loan-testimonials-band">
        <div class="loan-testimonials-band__container">
            <div class="loan-testimonials-band__banner">
                <h2>{{ $banner }}</h2>
            </div>
            <div class="loan-testimonials-band__cards loan-testimonials-band__cards--count-{{ min($items->count(), 3) }}">
                @foreach ($items as $item)
                    <article class="loan-testimonials-band__card">
                        @if ($item->imageUrl())
                            <img src="{{ $item->imageUrl() }}" alt="{{ $item->author }}" class="loan-testimonials-band__photo" width="130" height="130" loading="lazy" decoding="async">
                        @endif
                        <p class="loan-testimonials-band__label">{{ $item->title }}</p>
                        <p class="loan-testimonials-band__quote"><em>{{ $item->quote }}</em></p>
                        <p class="loan-testimonials-band__author"><strong>{{ $item->author }}</strong></p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endif
