@props([
    'image',
    'imageAlt' => '',
    'heading' => '',
    'headingAccent' => null,
    'paragraphs' => [],
    'checklist' => [],
    'buttonText' => null,
    'buttonUrl' => null,
    'sectionClass' => '',
])

<section class="cta-four {{ $sectionClass }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img decoding="async" class="cta-four__image" src="{{ $image }}" alt="{{ $imageAlt ?: strip_tags($heading . ' ' . ($headingAccent ?? '')) }}">
            </div>
            <div class="col-lg-6">
                <div class="cta-four__content">
                    <div class="block-title text-left color-1">
                        <span class="block-title__bubbles"></span>
                        <p></p>
                        <h3>
                            @if ($headingAccent && $heading)
                                {{ $heading }} <span>{{ $headingAccent }}</span>
                            @elseif ($headingAccent)
                                <span>{{ $headingAccent }}</span>
                            @else
                                {{ $heading }}
                            @endif
                        </h3>
                    </div>
                    @foreach ($paragraphs as $paragraph)
                        <p>{!! $paragraph !!}</p>
                    @endforeach
                    @if (count($checklist))
                        <ul class="list-unstyled">
                            @foreach ($checklist as $item)
                                <li><i class="fa fa-check"></i> {{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if ($buttonText && $buttonUrl)
                        <a href="{{ $buttonUrl }}" class="thm-btn cta-four__btn">{{ $buttonText }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
