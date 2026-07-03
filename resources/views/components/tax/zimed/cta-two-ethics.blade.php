@props([
    'image' => site_image('tax', '2020/12/cta-2-3-1-1.png'),
    'boxes' => [],
    'vision' => '',
])

<section class="cta-two__style-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cta-two__style-three-content">
                    <div class="block-title text-left color-2">
                        <span class="block-title__bubbles"></span>
                        <p></p>
                        <h3>Our <span>Ethics</span></h3>
                    </div>
                    <div class="cta-two__style-three__box-wrap">
                        @foreach ($boxes as $box)
                            <div class="cta-two__style-three__box icon-box-wrapper">
                                <div class="cta-two__style-three__box-icon icon-box-with-bubble">
                                    <i class="{{ $box['icon'] }}"></i>
                                </div>
                                <div class="cta-two__style-three__box-content">
                                    <p>{{ $box['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if ($vision)
                        <div class="cta-two__style-three-summery">
                            <p>{{ $vision }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 clearfix">
                <img decoding="async" src="{{ $image }}" alt="Our ethics" class="cta-two__style-three-moc">
            </div>
        </div>
    </div>
</section>
