@php
    $serviceSlugs = [
        'business-advisory' => 'Business Advisory',
        'insurance' => 'Insurance',
        'risk-management' => 'Risk Management',
        'business-consulting' => 'Business Consulting',
        'strategic-planning' => 'Strategic Planning',
    ];
@endphp

<footer class="adv-footer">
    <div class="adv-footer__main">
        <div class="adv-footer__inner">
            <div class="adv-footer__brand">
                <p class="adv-footer__logo">Business Advisory</p>
                <p class="adv-footer__tagline">Strategic consulting and corporate advisory for ambitious Australian businesses — part of Innovative Group.</p>
                <a href="{{ domain_url('main') }}" class="adv-footer__inn" target="_blank" rel="noopener">Visit INN Group →</a>
            </div>
            <div class="adv-footer__col">
                <h3>Services</h3>
                <ul>
                    @foreach ($serviceSlugs as $slug => $label)
                        <li><a href="{{ route('advisory.services.show', $slug) }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="adv-footer__col">
                <h3>Company</h3>
                <ul>
                    <li><a href="{{ route('advisory.about') }}">About Us</a></li>
                    <li><a href="{{ route('advisory.team.index') }}">Meet Our Team</a></li>
                    <li><a href="{{ route('advisory.articles.index') }}">Articles</a></li>
                    <li><a href="{{ route('advisory.contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="adv-footer__col">
                <h3>Contact</h3>
                <ul class="adv-footer__contact-list">
                    <li><a href="{{ route('advisory.contact') }}">Enquire online</a></li>
                    <li><a href="mailto:info@inngroup.com.au">info@inngroup.com.au</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="adv-footer__bottom">
        <div class="adv-footer__bottom-inner">
            <p>© {{ date('Y') }} Innovative Group — Business Advisory. All rights reserved.</p>
        </div>
    </div>
</footer>
