@props(['active' => 'home'])

@php
    $cdn = 'https://innovativeassociates.com.au/wp-content/uploads';
    $inngroupUrl = domain_url('main');
@endphp

<header class="main-nav__header-one">
    <nav class="header-navigation stricky">
        <div class="container">
            <div class="main-nav__logo-box">
                <a href="{{ route('tax.home') }}" class="main-nav__logo">
                    <img src="{{ $cdn }}/2021/03/cropped-Untitled-1-2.png" width="105" alt="Innovative associates">
                </a>
                <a href="#" class="side-menu__toggler">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <div class="main-nav__main-navigation">
                <div class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="main-nav__navigation-box">
                        <li class="menu-item {{ $active === 'home' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('tax.home') }}" @if($active === 'home') aria-current="page" @endif>Home</a>
                        </li>
                        <li class="menu-item menu-item-has-children {{ in_array($active, ['about', 'team', 'disclaimer'], true) ? 'current-menu-ancestor current-menu-parent' : '' }}">
                            <a href="{{ route('tax.aboutus') }}" @if($active === 'about') aria-current="page" @endif>About</a>
                            <ul class="sub-menu">
                                <li class="menu-item {{ $active === 'team' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('tax.about.team') }}" @if($active === 'team') aria-current="page" @endif>Meet The Team</a>
                                </li>
                                <li class="menu-item {{ $active === 'disclaimer' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('tax.about.disclaimer') }}" @if($active === 'disclaimer') aria-current="page" @endif>Disclaimer</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children {{ in_array($active, ['services', 'services-accounting', 'services-mortgage', 'services-advisory'], true) ? 'current-menu-ancestor current-menu-parent' : '' }}">
                            <a href="{{ route('tax.services.index') }}" @if($active === 'services') aria-current="page" @endif>Services</a>
                            <ul class="sub-menu">
                                <li class="menu-item {{ $active === 'services-accounting' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('tax.services.accounting') }}" @if($active === 'services-accounting') aria-current="page" @endif>Accounting and Taxation Services</a>
                                </li>
                                <li class="menu-item {{ $active === 'services-mortgage' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('tax.services.mortgage') }}" @if($active === 'services-mortgage') aria-current="page" @endif>Mortgage and Finance Service</a>
                                </li>
                                <li class="menu-item {{ $active === 'services-advisory' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('tax.services.advisory') }}" @if($active === 'services-advisory') aria-current="page" @endif>Business advisory Service</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item {{ $active === 'mentoring' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('tax.mentoring') }}" @if($active === 'mentoring') aria-current="page" @endif>Mentoring</a>
                        </li>
                        <li class="menu-item {{ $active === 'perspective' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('tax.perspective') }}" @if($active === 'perspective') aria-current="page" @endif>Perspective</a>
                        </li>
                        <li class="menu-item {{ $active === 'calculator' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('tax.calculator') }}" @if($active === 'calculator') aria-current="page" @endif>Calculator</a>
                        </li>
                        <li class="menu-item {{ $active === 'tax-lodgement' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('tax.tax') }}" @if($active === 'tax-lodgement') aria-current="page" @endif>Tax Lodgement</a>
                        </li>
                        <li class="menu-item {{ $active === 'contact' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('tax.contact') }}" @if($active === 'contact') aria-current="page" @endif>Contact</a>
                        </li>
                        <li class="menu-item menu-item-inngroup">
                            <a href="{{ $inngroupUrl }}" class="thm-btn main-nav__inngroup-btn">Inngroup</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header-one__right">
                <a href="#" class="thm-btn header__btn">Download</a>
            </div>
        </div>
    </nav>
</header>

<div class="side-menu__block">
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <div class="side-menu__block-inner">
        <div class="side-menu__top justify-content-between align-items-center">
            <a href="{{ route('tax.home') }}" class="main-nav__logo">
                <img src="{{ $cdn }}/2021/03/cropped-Untitled-1-2.png" width="105" alt="Innovative associates">
            </a>
            <a href="#" class="side-menu__toggler side-menu__close-btn">
                <i class="fa fa-times"></i>
            </a>
        </div>
        <nav class="mobile-nav__container"></nav>
        <div class="side-menu__sep"></div>
        <div class="side-menu__content"></div>
    </div>
</div>
