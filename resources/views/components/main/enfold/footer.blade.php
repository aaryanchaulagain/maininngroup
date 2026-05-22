<div class="container_wrap footer-page-content footer_color inn-main-footer" id="footer-page">
    <div id="footer-template" class="avia-section footer_color avia-section-huge avia-no-shadow avia-bg-style-scroll container_wrap fullsize" style="background-color: #ffffff;">
        <div class="container">
            <main role="main" itemprop="mainContentOfPage" class="template-page content av-content-full alpha units">
                <div class="post-entry post-entry-type-page">
                    <div class="entry-content-wrapper clearfix inn-footer-block">

                        <div class="inn-footer-intro">
                            <div class="av-special-heading av-special-heading-h3 blockquote modern-quote modern-centered av-inherit-size">
                                <h3 class="av-special-heading-tag" itemprop="headline">Any more questions? Feel free to write us a mail!</h3>
                                <div class="special-heading-border"><div class="special-heading-inner-border"></div></div>
                            </div>
                            <p class="inn-footer-intro__sub">We'll respond your queries immediately.</p>
                        </div>

                        <div class="inn-footer-divider" aria-hidden="true">
                            <span class="inn-footer-divider__line"></span>
                            <span class="inn-footer-divider__icon">
                                <i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i>
                            </span>
                            <span class="inn-footer-divider__line"></span>
                        </div>

                        @include('components.main.enfold.footer-social')

                        <div class="inn-footer-legal">
                            <p class="inn-footer-legal__heading">CONTACTS</p>
                            <p class="inn-footer-legal__text">
                                Suite 101, Level 10, 420 Pitt Street, Sydney NSW 2222<br>
                                Phone: +61 02 8592 1165 | Mob: 0403 054 593 (Shamim), 0434 392 347 (Dila) | Email: <a href="mailto:info@inngroup.com.au">info@inngroup.com.au</a><br>
                                Web: www.inngroup.com.au | ABN: | Authorized Rep: |
                            </p>
                            <p class="inn-footer-legal__heading">DISCLAIMER</p>
                            <p class="inn-footer-legal__text inn-footer-legal__disclaimer">
                                The information contained in this website is for general information purposes only. The information is provided by Innovative associates and Innovative Wealth and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.
                            </p>
                        </div>

                        <div class="inn-footer-divider inn-footer-divider--small" aria-hidden="true">
                            <span class="inn-footer-divider__line"></span>
                            <span class="inn-footer-divider__icon inn-footer-divider__icon--small">
                                <i class="fa-solid fa-scale-balanced" aria-hidden="true"></i>
                            </span>
                            <span class="inn-footer-divider__line"></span>
                        </div>

                        <nav class="inn-footer-nav" aria-label="Footer">
                            <a href="#">About</a>
                            <span aria-hidden="true">|</span>
                            <a href="{{ route('main.contact') }}">Contact</a>
                            <span aria-hidden="true">|</span>
                            <a href="#">Terms</a>
                        </nav>
                        <p class="inn-footer-copy">© {{ date('Y') }} Innovative Associates | Innovative Wealth</p>

                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
