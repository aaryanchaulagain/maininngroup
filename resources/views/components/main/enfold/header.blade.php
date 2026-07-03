@props([
    'active' => 'home',
    'entryId' => '102',
])

<header id="header" class="all_colors header_color light_bg_color av_header_top av_logo_left av_main_nav_header av_menu_right av_custom av_header_sticky av_header_shrinking av_header_stretch_disabled av_mobile_menu_phone av_header_searchicon av_header_unstick_top av_seperator_small_border av_bottom_nav_disabled" role="banner" itemscope itemtype="https://schema.org/WPHeader">
    <div id="header_meta" class="container_wrap container_wrap_meta av_icon_active_right av_extra_header_active av_secondary_left av_phone_active_right av_entry_id_{{ $entryId }}">
        <div class="container">
            <ul class="noLightbox social_bookmarks icon_count_3">
                <li class="social_bookmarks_facebook av-social-link-facebook social_icon_1">
                    <a aria-label="Link to Facebook" href="#" title="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i><span class="avia_hidden_link_text">Facebook</span></a>
                </li>
                <li class="social_bookmarks_twitter av-social-link-twitter social_icon_2">
                    <a target="_blank" rel="noopener" aria-label="Link to Twitter" href="https://twitter.com/#/" title="Twitter"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i><span class="avia_hidden_link_text">Twitter</span></a>
                </li>
                <li class="social_bookmarks_instagram av-social-link-instagram social_icon_3">
                    <a aria-label="Link to Instagram" href="#" title="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i><span class="avia_hidden_link_text">Instagram</span></a>
                </li>
            </ul>
            <nav class="sub_menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <ul id="avia2-menu" class="menu">
                    <li class="menu-item"><a href="{{ route('login') }}">Admin Login</a></li>
                </ul>
            </nav>
            <div class="phone-info with_nav">
                <span>Call us now: 02 8592 1165 | 0434 392 347</span>
            </div>
        </div>
    </div>
    <div id="header_main" class="container_wrap container_wrap_logo">
        <div class="container av-logo-container">
            <div class="inner-container">
                <span class="logo">
                    <a href="{{ route('main.home') }}" class="inn-main-brand">
                        <img height="100" width="300" src="{{ main_logo_url() }}" alt="Innovative Group" title="" onerror="this.style.display='none';this.nextElementSibling.style.display='inline-block';">
                        <span class="inn-main-wordmark" style="display:none;">INN Group</span>
                    </a>
                </span>
                <nav class="main_menu" data-selectname="Select a page" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <div class="avia-menu av-main-nav-wrap">
                        <ul id="avia-menu" class="menu av-main-nav">
                            <li class="menu-item menu-item-top-level {{ $active === 'home' ? 'current-menu-item current_page_item menu-item-home' : '' }}">
                                <a href="{{ route('main.home') }}" itemprop="url" @if($active === 'home') aria-current="page" @endif>
                                    <span class="avia-bullet"></span>
                                    <span class="avia-menu-text">Home</span>
                                    <span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-top-level menu-item-mega-parent {{ $active === 'contact' ? 'current-menu-item page_item page-item-954 current_page_item' : '' }}">
                                <a href="{{ route('main.contact') }}" itemprop="url" @if($active === 'contact') aria-current="page" @endif>
                                    <span class="avia-bullet"></span>
                                    <span class="avia-menu-text">Contact</span>
                                    <span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-top-level menu-item-subsite">
                                <a href="{{ domain_url('tax', '/') }}" itemprop="url">
                                    <span class="avia-menu-text">Tax</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-top-level menu-item-subsite">
                                <a href="{{ domain_url('loan', '/') }}" itemprop="url">
                                    <span class="avia-menu-text">Finance</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-top-level menu-item-subsite">
                                <a href="{{ domain_url('advisory', '/') }}" itemprop="url">
                                    <span class="avia-menu-text">Advisory</span>
                                </a>
                            </li>
                            <li id="menu-item-search" class="noMobile menu-item menu-item-search-dropdown menu-item-avia-special">
                                <a aria-label="Search" href="?s=" rel="nofollow" data-av_icon="" data-av_iconfont="entypo-fontello"><span class="avia_hidden_link_text">Search</span></a>
                            </li>
                            <li class="av-burger-menu-main menu-item-avia-special av-small-burger-icon">
                                <a href="#" aria-label="Menu" aria-hidden="false">
                                    <span class="av-hamburger av-hamburger--spin av-js-hamburger">
                                        <span class="av-hamburger-box">
                                            <span class="av-hamburger-inner"></span>
                                            <strong>Menu</strong>
                                        </span>
                                    </span>
                                    <span class="avia_hidden_link_text">Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="header_bg"></div>
</header>
