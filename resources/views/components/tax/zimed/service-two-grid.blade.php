@props([
    'services' => [],
    'heading' => 'Our Services',
    'sectionClass' => 'service-two',
])

<section class="{{ $sectionClass }}">
    <div class="container">
        <div class="block-title text-center">
            <span class="block-title__bubbles"></span>
            <p></p>
            <h3>{{ $heading }}</h3>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-two__single icon-box-wrapper">
                        <div class="service-two__icon icon-box-with-bubble">
                            <i class="{{ $service['icon'] }}"></i>
                        </div>
                        <h3 class="service-two__title">
                            <a href="{{ $service['url'] }}">{{ $service['title'] }}</a>
                        </h3>
                        <p class="service-two__text">{{ $service['text'] }}</p>
                        <a href="{{ $service['url'] }}" class="service-two__btn"><span>Read More</span></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
