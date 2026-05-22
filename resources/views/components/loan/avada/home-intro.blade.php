@php
    $cdn = 'https://innovativewealth.com.au/wp-content/uploads';
    $featured = $featuredTestimonial ?? null;
    $photoSrc = $featured?->imageUrl() ?? $cdn.'/2020/12/dharma-adhikari-300x232.jpg';
    $headline = $featured?->title ?? 'Phenomenal';
    $quote = $featured?->quote ?? 'Buying my first home was tough – getting loan approved, dealing with agents, solicitors and going through property reports can become overwhelming. Innovative Wealth guided me through each steps with completely hassle free.';
    $author = $featured?->author ?? 'Dharma Adhikari';
@endphp

<div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-flex-container fusion-parallax-none hundred-percent-fullwidth non-hundred-percent-height-scrolling loan-home-intro"
     style="background-color:rgba(255,255,255,0);background-image:url('{{ $cdn }}/2020/08/home-content-background-scaled-1.jpg');background-position:center center;background-repeat:no-repeat;border-width:0;background-size:cover;">
    <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start loan-home-intro__row">
        <div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_2 1_2 fusion-flex-column">
            <div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">
                <div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start loan-home-intro__inner-row">
                    <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-0 fusion_builder_column_inner_1_1 1_1 fusion-flex-column">
                        <div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">
                            <div class="fusion-title title fusion-title-1 fusion-sep-none fusion-title-text fusion-title-size-two">
                                <h2 class="title-heading-left sm-text-align-center">Financial Freedom could be just one phonecall away …</h2>
                            </div>
                            <div class="sm-text-align-center loan-home-intro__separator">
                                <span class="fusion-imageframe imageframe-none hover-type-none">
                                    <img decoding="async" width="141" height="30" alt="slant-separator" title="Separator" src="{{ $cdn }}/2020/08/slant-separator.png" class="img-responsive wp-image-124">
                                </span>
                            </div>
                            <div class="fusion-text fusion-text-1 sm-text-align-center">
                                <p>As someone who takes pride in their achievements and is firmly committed to obtaining the best possible outcome for each client, Innovative Wealth leads by an example when it comes to serving the clients with personalized service. Honesty &amp; Integrity is biggest assets of Innovative Wealth.</p>
                                <p>Whether you are buying an investment property, refinancing, a first time buyer, cash out, line of credit, buy to let investor or you are simply curious about how mortgages work, we are right here for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_1_2 1_2 fusion-flex-column fusion-flex-align-self-center">
            <div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">
                <div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start loan-home-intro__media-row">
                    <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-1 fusion_builder_column_inner_1_2 1_2 fusion-flex-column fusion-flex-align-self-stretch">
                        <div class="fusion-column-wrapper loan-home-intro__photo-wrap">
                            <span class="fusion-imageframe imageframe-none hover-type-none">
                                <img fetchpriority="high" decoding="async" width="300" height="232" title="{{ $author }}" src="{{ $photoSrc }}" class="img-responsive wp-image-566" alt="{{ $author }}">
                            </span>
                        </div>
                    </div>
                    <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-2 fusion_builder_column_inner_1_2 1_2 fusion-flex-column fusion-flex-align-self-flex-end testimonial-home-block">
                        <div class="fusion-column-wrapper fusion-column-has-shadow loan-home-intro__testimonial">
                            <div class="fusion-title title fusion-title-2 fusion-sep-none fusion-title-text fusion-title-size-two">
                                <h2 class="title-heading-left sm-text-align-center">{{ $headline }}</h2>
                            </div>
                            <div class="fusion-text fusion-text-2 sm-text-align-center">
                                <p><em>{{ $quote }}</em></p>
                                <p><strong><em>~{{ $author }}</em></strong></p>
                            </div>
                            <div class="fusion-text fusion-text-3 sm-text-align-center loan-home-intro__testimonial-link">
                                <p><a href="{{ route('loan.about') }}"><strong>Read More Testimonials</strong></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
