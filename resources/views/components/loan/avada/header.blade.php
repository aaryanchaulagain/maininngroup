@props(['active' => 'home'])

@php
    $cdn = 'https://innovativewealth.com.au';
    $loanEmail = config('domains.loan_contact_email');
    $inngroupUrl = domain_url('main');
    $serviceMenu = [
        'home-loan' => 'Home Loan',
        'investment-loan' => 'Investment Loan',
        'refinancing' => 'Refinancing',
        'asset-finance' => 'Asset Finance',
        'commercial-finance' => 'Commercial Finance',
        'mortgage-and-loan' => 'Mortgage and Loan',
    ];
    $servicesActive = $active === 'services-index' || str_starts_with($active, 'services-');
    $socialLinks = [
        ['label' => 'Facebook', 'url' => 'https://www.facebook.com/', 'icon' => 'fa-facebook-f'],
        ['label' => 'Twitter', 'url' => 'https://twitter.com/', 'icon' => 'fa-x-twitter'],
        ['label' => 'Instagram', 'url' => 'https://www.instagram.com/', 'icon' => 'fa-instagram'],
        ['label' => 'Pinterest', 'url' => 'https://www.pinterest.com/', 'icon' => 'fa-pinterest-p'],
    ];
@endphp

<header class="fusion-header-wrapper">
    <div class="fusion-header-v3 fusion-logo-alignment fusion-logo-left fusion-mobile-menu-design-classic">
        <div class="fusion-secondary-header">
            <div class="fusion-row">
                <div class="fusion-alignleft">
                    <div class="fusion-social-links-header loan-header-social">
                        <div class="fusion-social-networks">
                            <div class="fusion-social-networks-wrapper loan-social-networks">
                                @foreach ($socialLinks as $social)
                                    <a class="fusion-social-network-icon loan-social-icon"
                                       href="{{ $social['url'] }}"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       title="{{ $social['label'] }}"
                                       aria-label="{{ $social['label'] }}"
                                       data-social-label="{{ $social['label'] }}">
                                        <i class="fa-brands {{ $social['icon'] }}" aria-hidden="true"></i>
                                        <span class="screen-reader-text">{{ $social['label'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fusion-alignright">
                    <div class="fusion-contact-info">
                        <span class="fusion-contact-info-phone-number">Call Us Today! 0403 054 593</span>
                        <span class="fusion-header-separator">|</span>
                        <span class="fusion-contact-info-email-address">
                            <a href="mailto:{{ $loanEmail }}">{{ $loanEmail }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="fusion-header-sticky-height"></div>
        <div class="fusion-header">
            <div class="fusion-row">
                <div class="fusion-logo loan-brand-wrap" data-margin-top="31px" data-margin-bottom="31px">
                    <a class="fusion-logo-link loan-brand" href="{{ route('loan.home') }}" aria-label="Innovative Finance — Home">
                        <span class="loan-brand__mark" aria-hidden="true"></span>
                        <span class="loan-brand__text">
                            <span class="loan-brand__title">Innovative Finance</span>
                            <span class="loan-brand__sub">INN Group</span>
                        </span>
                    </a>
                </div>
                <nav class="fusion-main-menu" aria-label="Main Menu">
                    <ul id="menu-financial-advisor-main-menu" class="fusion-menu">
                        <li class="menu-item menu-item-home {{ $active === 'home' ? 'current-menu-item current_page_item' : '' }}">
                            <a href="{{ route('loan.home') }}" class="fusion-bar-highlight"><span class="menu-text">Home</span></a>
                        </li>
                        <li class="menu-item menu-item-has-children fusion-dropdown-menu {{ in_array($active, ['about', 'bank-vs', 'refer', 'team'], true) ? 'current-menu-ancestor current-menu-parent' : '' }}">
                            <a href="{{ route('loan.about') }}" class="fusion-bar-highlight"><span class="menu-text">About</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item {{ $active === 'about' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('loan.about') }}" class="fusion-bar-highlight"><span>About Us</span></a>
                                </li>
                                <li class="menu-item {{ $active === 'bank-vs' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('loan.about.bank-vs') }}" class="fusion-bar-highlight"><span>Bank VS Innovative</span></a>
                                </li>
                                <li class="menu-item {{ $active === 'refer' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('loan.about.refer') }}" class="fusion-bar-highlight"><span>Refer and EARN</span></a>
                                </li>
                                <li class="menu-item {{ $active === 'team' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('loan.about.team') }}" class="fusion-bar-highlight"><span>Team</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children fusion-dropdown-menu {{ $servicesActive ? 'current-menu-ancestor current-menu-parent' : '' }}">
                            <a href="{{ route('loan.services.index') }}" class="fusion-bar-highlight"><span class="menu-text">Services</span></a>
                            <ul class="sub-menu">
                                @foreach ($serviceMenu as $slug => $label)
                                    <li class="menu-item {{ $active === 'services-'.$slug ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('loan.services.show', $slug) }}" class="fusion-bar-highlight"><span>{{ $label }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item {{ $active === 'articles' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('loan.articles') }}" class="fusion-bar-highlight"><span class="menu-text">Articles</span></a>
                        </li>
                        <li class="menu-item {{ $active === 'faq' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('loan.faq') }}" class="fusion-bar-highlight"><span class="menu-text">FAQ</span></a>
                        </li>
                        <li class="menu-item {{ $active === 'calculator' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('loan.calculator') }}" class="fusion-bar-highlight"><span class="menu-text">Calculator</span></a>
                        </li>
                        <li class="menu-item {{ $active === 'contact' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('loan.contact') }}" class="fusion-bar-highlight"><span class="menu-text">Contact Us</span></a>
                        </li>
                        <li class="menu-item menu-item-inngroup">
                            <a href="{{ $inngroupUrl }}" class="loan-inngroup-nav-btn"><span class="menu-text">INN Group</span></a>
                        </li>
                    </ul>
                </nav>
                <nav class="fusion-mobile-nav-holder fusion-mobile-menu-text-align-left" aria-label="Main Menu Mobile"></nav>
                <div class="fusion-clearfix"></div>
            </div>
        </div>
    </div>
    <div class="fusion-clearfix"></div>
</header>
