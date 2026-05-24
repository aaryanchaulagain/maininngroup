@props([
    'testimonials' => collect(),
    'featured' => null,
    'title' => 'What our clients say',
])

@php
    $items = $testimonials->filter(fn ($t) => ! $featured || $t->id !== $featured->id);
@endphp

@if ($featured || $items->isNotEmpty())
<section class="adv-section adv-section--grey adv-testimonials">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Testimonials</p>
            <h2 class="adv-h2">{{ $title }}</h2>
        </header>

        @if ($featured)
            <blockquote class="adv-testimonial-featured">
                @if ($featured->imageUrl())
                    <img src="{{ $featured->imageUrl() }}" alt="{{ $featured->author }}" class="adv-testimonial-featured__photo" width="120" height="120" loading="lazy">
                @endif
                <div>
                    <p class="adv-testimonial-featured__label">{{ $featured->title }}</p>
                    <p class="adv-testimonial-featured__quote">“{{ $featured->quote }}”</p>
                    <cite class="adv-testimonial-featured__author">{{ $featured->author }}</cite>
                </div>
            </blockquote>
        @endif

        @if ($items->isNotEmpty())
            <div class="adv-testimonial-grid">
                @foreach ($items->take(3) as $item)
                    <article class="adv-testimonial-card">
                        @if ($item->imageUrl())
                            <img src="{{ $item->imageUrl() }}" alt="{{ $item->author }}" class="adv-testimonial-card__photo" loading="lazy">
                        @endif
                        <p class="adv-testimonial-card__label">{{ $item->title }}</p>
                        <p class="adv-testimonial-card__quote">“{{ $item->quote }}”</p>
                        <p class="adv-testimonial-card__author">{{ $item->author }}</p>
                    </article>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endif
