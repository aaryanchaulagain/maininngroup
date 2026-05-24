@props([
    'title',
    'heroSrc',
    'heroAlt',
    'tagline' => 'Your gateway to quality solutions.',
    'intro' => [],
    'heading' => null,
    'topics' => [],
    'body' => [],
    'pageId' => '900',
])

@php
    $cdn = 'https://innovativeassociates.com.au/wp-content/uploads';
    $intro = is_array($intro) ? $intro : [$intro];
    $body = is_array($body) ? $body : [$body];
@endphp

<div class="full-width-page elementor elementor-{{ $pageId }}">
    <x-tax.zimed.page-header
        :title="$title"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Services', 'url' => route('tax.services.index')],
            ['label' => $title, 'current' => true],
        ]"
    />

    <section class="tax-service-detail elementor-section elementor-top-section">
        <div class="container">
            <div class="tax-service-detail__hero-image">
                <img
                    src="{{ $heroSrc }}"
                    width="768"
                    height="512"
                    alt="{{ $heroAlt }}"
                    class="attachment-medium_large size-medium_large w-100"
                    loading="eager"
                >
            </div>

            <h4 class="elementor-heading-title elementor-size-default tax-service-detail__tagline">
                {{ $tagline }}
            </h4>

            @if ($intro !== [])
                <div class="elementor-text-editor tax-service-detail__intro">
                    @foreach ($intro as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            @endif

            @if ($heading)
                <h2 class="elementor-heading-title elementor-size-default tax-service-detail__heading">
                    {{ $heading }}
                </h2>
            @endif

            <div class="elementor-text-editor tax-service-detail__intro tax-service-detail__body">
                @if ($topics !== [])
                    <ul class="tax-service-detail__topics">
                        @foreach ($topics as $topic)
                            <li>{{ $topic }}</li>
                        @endforeach
                    </ul>
                @endif
                @foreach ($body as $paragraph)
                    <p>{!! $paragraph !!}</p>
                @endforeach
            </div>
        </div>
    </section>
</div>
