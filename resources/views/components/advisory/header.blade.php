@php
    $serviceSlugs = [
        'business-advisory' => 'Business Advisory',
        'insurance' => 'Insurance',
        'risk-management' => 'Risk Management',
        'business-consulting' => 'Business Consulting',
        'strategic-planning' => 'Strategic Planning',
    ];
    $servicesActive = str_starts_with($active, 'services');
@endphp

<div class="adv-topbar" aria-label="Utility">
    <div class="adv-topbar__inner">
        <span class="adv-topbar__tag">Audit · Tax · Advisory — Innovative Group</span>
        <a href="{{ domain_url('main') }}" class="adv-topbar__link" target="_blank" rel="noopener">INN Group website ↗</a>
    </div>
</div>

<header class="adv-header" x-data="{ mobile: false, services: false }">
    <div class="adv-header__inner">
        <a href="{{ route('advisory.home') }}" class="adv-brand">
            <span class="adv-brand__bar" aria-hidden="true"></span>
            <span class="adv-brand__text">
                <span class="adv-brand__title">Business Advisory</span>
                <span class="adv-brand__sub">Innovative Group</span>
            </span>
        </a>

        <nav class="adv-nav" aria-label="Main">
            <a href="{{ route('advisory.home') }}" class="adv-nav__link {{ $active === 'home' ? 'adv-nav__link--active' : '' }}">Home</a>

            <div class="adv-nav__dropdown" @mouseenter="services = true" @mouseleave="services = false">
                <button type="button" class="adv-nav__link adv-nav__link--btn {{ $servicesActive ? 'adv-nav__link--active' : '' }}" @click="services = !services" :aria-expanded="services">
                    Services <i class="fa-solid fa-chevron-down adv-nav__chev" aria-hidden="true"></i>
                </button>
                <div class="adv-nav__dropdown-panel" x-show="services" x-transition @click.outside="services = false">
                    <div class="adv-nav__dropdown-menu">
                        @foreach ($serviceSlugs as $slug => $label)
                            <a href="{{ route('advisory.services.show', $slug) }}" class="adv-nav__dropdown-item {{ $active === 'services-'.$slug ? 'adv-nav__dropdown-item--active' : '' }}">{{ $label }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <a href="{{ route('advisory.team.index') }}" class="adv-nav__link {{ $active === 'team' ? 'adv-nav__link--active' : '' }}">Meet Our Team</a>
            <a href="{{ route('advisory.about') }}" class="adv-nav__link {{ $active === 'about' ? 'adv-nav__link--active' : '' }}">About Us</a>
            <a href="{{ route('advisory.articles.index') }}" class="adv-nav__link {{ str_starts_with($active, 'articles') ? 'adv-nav__link--active' : '' }}">Articles</a>
            <a href="{{ route('advisory.contact') }}" class="adv-nav__link {{ $active === 'contact' ? 'adv-nav__link--active' : '' }}">Contact Us</a>
        </nav>

        <div class="adv-header__cta">
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary">Get in touch</a>
        </div>

        <button type="button" class="adv-mobile-toggle" @click="mobile = !mobile" :aria-expanded="mobile" aria-label="Open menu">
            <i class="fa-solid" :class="mobile ? 'fa-xmark' : 'fa-bars'" aria-hidden="true"></i>
        </button>
    </div>

    <div class="adv-mobile-nav" x-show="mobile" x-transition x-cloak>
        <a href="{{ route('advisory.home') }}">Home</a>
        <p class="adv-mobile-nav__label">Services</p>
        @foreach ($serviceSlugs as $slug => $label)
            <a href="{{ route('advisory.services.show', $slug) }}">{{ $label }}</a>
        @endforeach
        <a href="{{ route('advisory.team.index') }}">Meet Our Team</a>
        <a href="{{ route('advisory.about') }}">About Us</a>
        <a href="{{ route('advisory.articles.index') }}">Articles</a>
        <a href="{{ route('advisory.contact') }}">Contact Us</a>
        <a href="{{ domain_url('main') }}" class="adv-mobile-nav__inn" target="_blank" rel="noopener">INN Group ↗</a>
    </div>
</header>
