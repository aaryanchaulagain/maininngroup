@php
    $cdn = 'https://innovativeassociates.com.au/wp-content/uploads';
    $loanEmail = config('domains.loan_contact_email');
    $loanPhone = '0403054593';
    $loanPhoneDisplay = '0403 054 593';
    $exploreLinks = [
        ['label' => 'Home', 'url' => route('loan.home'), 'external' => false],
        ['label' => 'Services', 'url' => route('loan.services.index'), 'external' => false],
        ['label' => 'Home Loan', 'url' => route('loan.services.show', 'home-loan'), 'external' => false],
        ['label' => 'Investment Loan', 'url' => route('loan.services.show', 'investment-loan'), 'external' => false],
        ['label' => 'Refinancing', 'url' => route('loan.services.show', 'refinancing'), 'external' => false],
        ['label' => 'Mortgage and Loan', 'url' => route('loan.services.show', 'mortgage-and-loan'), 'external' => false],
        ['label' => 'About Us', 'url' => route('loan.about'), 'external' => false],
        ['label' => 'Articles', 'url' => route('loan.articles'), 'external' => false],
        ['label' => 'FAQ', 'url' => route('loan.faq'), 'external' => false],
        ['label' => 'Contact Us', 'url' => route('loan.contact'), 'external' => false],
    ];
@endphp

<div data-elementor-type="wp-post" class="loan-inn-footer elementor elementor-831">
    <section class="elementor-section elementor-top-section elementor-section-boxed elementor-section-height-default">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section class="elementor-section elementor-inner-section elementor-section-boxed elementor-section-height-default">
                        <div class="elementor-container elementor-column-gap-default loan-inn-footer__columns">
                            <div class="elementor-column elementor-col-33 elementor-inner-column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-widget elementor-widget-image">
                                        <div class="elementor-widget-container">
                                            <x-loan.brand as="footer" />
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-widget elementor-widget-text-editor">
                                        <div class="elementor-widget-container">Innovative Finance is a proactive mortgage and finance firm offering home loans, investment lending, refinancing, asset finance, and commercial finance — with accounting and taxation support through the INN Group.</div>
                                    </div>
                                    <div class="elementor-element elementor-widget elementor-widget-button">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-md" href="tel:{{ $loanPhone }}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Call Us Today</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Explore</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                @foreach ($exploreLinks as $link)
                                                    <li class="elementor-icon-list-item">
                                                        <a href="{{ $link['url'] }}" @if ($link['external']) target="_blank" rel="noopener noreferrer" @endif>
                                                            <span class="elementor-icon-list-text">{{ $link['label'] }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Contact</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <a href="mailto:{{ $loanEmail }}">
                                                        <span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-envelope"></i></span>
                                                        <span class="elementor-icon-list-text">{{ $loanEmail }}</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="tel:{{ $loanPhone }}">
                                                        <span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-phone-square-alt"></i></span>
                                                        <span class="elementor-icon-list-text">{{ $loanPhoneDisplay }}</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-location-arrow"></i></span>
                                                    <span class="elementor-icon-list-text">Suite 101, Level 10 – 420-426 Pitt Street, Sydney, NSW – 2000</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elementor-element loan-inn-footer__badge elementor-widget elementor-widget-image">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" src="{{ $cdn }}/elementor/thumbs/1-qfo96upovlwg83j9jvacd69ke3zeg786imc0c3rvcw.png" title="MFAA" alt="MFAA" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="elementor-element loan-inn-footer__badge elementor-widget elementor-widget-image">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" src="{{ $cdn }}/elementor/thumbs/2-qfo96upovlwg83j9jvacd69ke3zeg786imc0c3rvi6.png" title="Institute of Public Accountants" alt="Institute of Public Accountants" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="loan-footer-bar" aria-label="Footer legal">
                        <div class="loan-footer-bar__rule" aria-hidden="true"></div>
                        <div class="loan-footer-bar__wrap">
                            <div class="loan-footer-bar__inner">
                                <p class="loan-footer-bar__copy">
                                    All rights reserved to <a href="{{ route('loan.home') }}">Innovative Finance</a>.
                                </p>
                                <p class="loan-footer-bar__credit">
                                    Site designed by <a href="https://ausnepit.com.au" target="_blank" rel="noopener noreferrer">AusNep IT Solutions</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
