@props([
    'heading',
    'text',
    'image',
    'imageAlt' => '',
    'first' => false,
])

<div class="flex_column av_one_third av-animated-generic left-to-right flex_column_div av-zero-column-padding {{ $first ? 'first' : '' }}" style="margin-top:0px; margin-bottom:0px; border-radius:3px;">

    {{-- Div 1: image --}}
    <div class="avia-image-container av-styling- avia-align-center inn-operate-card__image-wrap" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <div class="avia-image-container-inner">
            <div class="avia-image-overlay-wrap">
                <img
                    decoding="async"
                    class="avia_image inn-operate-card__img"
                    src="{{ str_starts_with($image, 'http') ? $image : asset($image) }}"
                    alt="{{ $imageAlt ?: $heading }}"
                    title="{{ $imageAlt ?: $heading }}"
                    width="120"
                    height="100"
                    itemprop="thumbnailUrl"
                >
            </div>
        </div>
    </div>

    {{-- Div 2: heading + text --}}
    <div class="inn-operate-card__text">
        <div style="padding-bottom:10px; margin-top:15px;" class="av-special-heading av-special-heading-h2 blockquote modern-quote modern-centered">
            <h2 class="av-special-heading-tag" itemprop="headline">{{ $heading }}</h2>
            <div class="special-heading-border">
                <div class="special-heading-inner-border"></div>
            </div>
        </div>
        <section class="av_textblock_section" itemscope itemtype="https://schema.org/CreativeWork">
            <div class="avia_textblock" itemprop="text">
                <p style="text-align: center;">{{ $text }}</p>
            </div>
        </section>
    </div>

</div>
