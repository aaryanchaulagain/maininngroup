@php
    $cdn = 'https://innovativewealth.com.au';
    $footerSocial = [
        ['label' => 'Facebook', 'url' => 'https://www.facebook.com/', 'icon' => 'fa-facebook-f'],
        ['label' => 'Instagram', 'url' => 'https://www.instagram.com/', 'icon' => 'fa-instagram'],
        ['label' => 'Twitter', 'url' => 'https://twitter.com/', 'icon' => 'fa-x-twitter'],
    ];
@endphp

<div class="fusion-footer">
    <footer class="fusion-footer-widget-area fusion-widget-area">
        <div class="fusion-row">
            <div class="fusion-columns fusion-columns-5 fusion-widget-area">
                <div class="fusion-column col-lg-2 col-md-2 col-sm-2">
                    <section class="fusion-footer-widget-column widget widget_custom_html">
                        <h4 class="widget-title">Get in touch</h4>
                        <div class="textwidget custom-html-widget">Innovative Loan<br>
Suite 101, Level 10,<br>
420 Pitt St, Sydney 2000</div>
                    </section>
                </div>
                <div class="fusion-column col-lg-2 col-md-2 col-sm-2">
                    <section class="fusion-footer-widget-column widget widget_text">
                        <h4 class="widget-title">About</h4>
                        <div class="textwidget">
                            <p>We'll look after all your financials, accounting, taxation and property matters at one place.</p>
                        </div>
                    </section>
                </div>
                <div class="fusion-column col-lg-2 col-md-2 col-sm-2">
                    <section class="fusion-footer-widget-column widget avada_vertical_menu">
                        <nav class="fusion-vertical-menu-widget fusion-menu hover left no-border" aria-label="Footer Navigation">
                            <ul class="menu">
                                <li class="menu-item"><a href="{{ route('loan.home') }}"><span class="link-text">Home</span><span class="arrow"></span></a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="{{ route('loan.services.index') }}"><span class="link-text">Services</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('loan.services.show', 'home-loan') }}"><span class="link-text">Home Loan</span><span class="arrow"></span></a></li>
                                        <li class="menu-item"><a href="{{ route('loan.services.show', 'investment-loan') }}"><span class="link-text">Investment Loan</span><span class="arrow"></span></a></li>
                                        <li class="menu-item"><a href="{{ route('loan.services.show', 'refinancing') }}"><span class="link-text">Refinancing</span><span class="arrow"></span></a></li>
                                        <li class="menu-item"><a href="{{ route('loan.services.show', 'asset-finance') }}"><span class="link-text">Asset Finance</span><span class="arrow"></span></a></li>
                                        <li class="menu-item"><a href="{{ route('loan.services.show', 'commercial-finance') }}"><span class="link-text">Commercial Finance</span><span class="arrow"></span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="{{ route('loan.about') }}"><span class="link-text">About</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('loan.about') }}"><span class="link-text">About Us</span><span class="arrow"></span></a></li>
                                        <li class="menu-item"><a href="{{ route('loan.about.bank-vs') }}"><span class="link-text">Bank VS Innovative</span><span class="arrow"></span></a></li>
                                        <li class="menu-item"><a href="{{ route('loan.about.refer') }}"><span class="link-text">Refer and EARN</span><span class="arrow"></span></a></li>
                                        <li class="menu-item"><a href="{{ route('loan.about.team') }}"><span class="link-text">Team</span><span class="arrow"></span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="{{ route('loan.articles') }}"><span class="link-text">Articles</span><span class="arrow"></span></a></li>
                                <li class="menu-item"><a href="{{ route('loan.faq') }}"><span class="link-text">FAQ</span><span class="arrow"></span></a></li>
                                <li class="menu-item"><a href="{{ route('loan.contact') }}"><span class="link-text">Contact Us</span><span class="arrow"></span></a></li>
                            </ul>
                        </nav>
                    </section>
                </div>
                <div class="fusion-column col-lg-2 col-md-2 col-sm-2">
                    <section class="fusion-footer-widget-column widget widget_recent_entries">
                        <h4 class="widget-title">Recent Posts</h4>
                        <ul>
                            @forelse ($recentArticles ?? [] as $article)
                                <li><a href="{{ route('loan.articles') }}">{{ $article->title }}</a></li>
                            @empty
                                <li><a href="{{ route('loan.articles') }}">How To Buy A First Home With Big Price Growth Potential</a></li>
                                <li><a href="{{ route('loan.articles') }}">Six Steps To Finding Undervalued Properties</a></li>
                            @endforelse
                        </ul>
                    </section>
                </div>
                <div class="fusion-column fusion-column-last col-lg-2 col-md-2 col-sm-2">
                    <section class="fusion-footer-widget-column widget social_links">
                        <h4 class="widget-title">Get Social</h4>
                        <div class="fusion-social-networks loan-footer-social">
                            <div class="fusion-social-networks-wrapper loan-footer-social__icons">
                                @foreach ($footerSocial as $social)
                                    <a class="loan-footer-social-icon"
                                       href="{{ $social['url'] }}"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       title="{{ $social['label'] }}"
                                       aria-label="{{ $social['label'] }}">
                                        <i class="fa-brands {{ $social['icon'] }}" aria-hidden="true"></i>
                                        <span class="screen-reader-text">{{ $social['label'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div class="fusion-clearfix"></div>
            </div>
        </div>
    </footer>
    <footer id="footer" class="fusion-footer-copyright-area fusion-footer-copyright-center">
        <div class="fusion-row">
            <div class="fusion-copyright-content">
                <div class="fusion-copyright-notice">
                    <div>Copyright 2010 - {{ date('Y') }} | Innovative Loan | All Rights Reserved</div>
                </div>
            </div>
        </div>
    </footer>
</div>
