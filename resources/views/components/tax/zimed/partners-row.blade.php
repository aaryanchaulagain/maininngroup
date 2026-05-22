@props([
    'logos' => [],
])

<section class="tax-partners-row section-pad-sm">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center tax-partners-row__grid">
            @foreach ($logos as $logo)
                <div class="col-6 col-md-4 col-lg tax-partners-row__item">
                    <img
                        decoding="async"
                        src="{{ $logo['src'] }}"
                        alt="{{ $logo['alt'] ?? '' }}"
                        class="tax-partners-row__logo"
                        loading="lazy"
                    >
                </div>
            @endforeach
        </div>
    </div>
</section>
