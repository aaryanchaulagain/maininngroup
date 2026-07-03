@php
    $contactUrl = route('loan.contact');
    $taxUrl = domain_url('tax', '/');
    $slides = [
        [
            'image' => site_image('loan', 'layerslider/Summer-Collection/brown3.jpg'),
            'align' => 'left',
            'eyebrow' => 'FROM PRE APPROVAL TO PROPERTY',
            'title' => 'INNOVATIVE',
            'titleLine2' => 'WEALTH',
            'text' => 'Solutions to your wealth creation!',
            'primary' => ['label' => 'Read more', 'url' => $contactUrl],
        ],
        [
            'image' => site_image('loan', 'layerslider/Summer-Collection/brownv2.jpg'),
            'align' => 'right',
            'eyebrow' => null,
            'title' => 'ACCOUNTING &',
            'titleLine2' => 'TAXATION',
            'text' => 'All at one place. No hassles at all!',
            'primary' => ['label' => 'Read more', 'url' => $taxUrl],
        ],
        [
            'image' => site_image('loan', 'layerslider/Summer-Collection/brown2.jpg'),
            'align' => 'left',
            'eyebrow' => null,
            'title' => 'ALL TYPES OF',
            'titleLine2' => 'INSURANCE',
            'text' => 'Let us get you the best deal!',
            'primary' => ['label' => 'Read more', 'url' => $contactUrl],
            'secondary' => ['label' => 'Get a quote', 'url' => $contactUrl],
        ],
    ];
@endphp

<section id="sliders-container" class="loan-hero loan-hero--animated" data-loan-hero aria-label="Hero slider">
    <div class="loan-hero__viewport">
        @foreach ($slides as $i => $slide)
            <article
                class="loan-hero__slide {{ $i === 0 ? 'is-active' : '' }}"
                data-loan-hero-slide
                data-align="{{ $slide['align'] }}"
                aria-hidden="{{ $i === 0 ? 'false' : 'true' }}"
            >
                <div class="loan-hero__media" aria-hidden="true">
                    <img
                        class="loan-hero__bg"
                        src="{{ $slide['image'] }}"
                        alt=""
                        width="1800"
                        height="600"
                        @if ($i === 0) fetchpriority="high" @endif
                        decoding="async"
                    >
                </div>
                <div class="loan-hero__scrim" aria-hidden="true"></div>
                <div class="loan-hero__content">
                    @if (! empty($slide['eyebrow']))
                        <p class="loan-hero__eyebrow">{{ $slide['eyebrow'] }}</p>
                    @endif
                    <h1 class="loan-hero__title">
                        <span class="loan-hero__title-line">{{ $slide['title'] }}</span>
                        @if (! empty($slide['titleLine2']))
                            <span class="loan-hero__title-line">{{ $slide['titleLine2'] }}</span>
                        @endif
                    </h1>
                    <p class="loan-hero__text">{{ $slide['text'] }}</p>
                    <div class="loan-hero__actions">
                        <a href="{{ $slide['primary']['url'] }}" class="loan-hero__btn loan-hero__btn--primary">{{ $slide['primary']['label'] }}</a>
                        @if (! empty($slide['secondary']))
                            <a href="{{ $slide['secondary']['url'] }}" class="loan-hero__btn loan-hero__btn--outline">{{ $slide['secondary']['label'] }}</a>
                        @endif
                    </div>
                </div>
            </article>
        @endforeach
    </div>

    <div class="loan-hero__controls">
        <button type="button" class="loan-hero__arrow loan-hero__arrow--prev" data-loan-hero-prev aria-label="Previous slide">
            <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
        </button>
        <div class="loan-hero__dots" role="tablist" aria-label="Hero slides">
            @foreach ($slides as $i => $slide)
                <button
                    type="button"
                    class="loan-hero__dot {{ $i === 0 ? 'is-active' : '' }}"
                    data-loan-hero-dot
                    role="tab"
                    aria-label="Slide {{ $i + 1 }}"
                    aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                ></button>
            @endforeach
        </div>
        <button type="button" class="loan-hero__arrow loan-hero__arrow--next" data-loan-hero-next aria-label="Next slide">
            <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
        </button>
    </div>
</section>
