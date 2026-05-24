@extends('layouts.advisory', ['active' => 'home'])

@section('title', 'Business Advisory — Innovative Group')

@section('content')
{{-- GT-style full-width hero with imagery --}}
<section class="adv-hero adv-hero--home">
    <div class="adv-hero__media adv-hero__media--office" aria-hidden="true"></div>
    <div class="adv-hero__overlay" aria-hidden="true"></div>
    <div class="adv-hero__content">
        <p class="adv-hero__label">Innovative Group · Business Advisory</p>
        <h1 class="adv-hero__title">Your business deserves remarkable support.</h1>
        <p class="adv-hero__lead">At Innovative Advisory, capability and care go hand in hand — because your experience matters as much as the outcome.</p>
        <div class="adv-hero__actions">
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Schedule consultation</a>
            <a href="{{ route('advisory.services.show', 'business-advisory') }}" class="adv-btn adv-btn--white-outline adv-btn--lg">Talk to an advisor</a>
        </div>
    </div>
</section>

{{-- GT-style centred intro strip --}}
<section class="adv-intro">
    <div class="adv-container adv-intro__inner">
        <p class="adv-intro__text">We partner with owners and leadership teams across Australia to navigate complexity, manage risk, and build organisations that perform today and endure tomorrow.</p>
    </div>
</section>

{{-- GT-style stats band --}}
<section class="adv-stats" aria-label="At a glance">
    <div class="adv-container">
        <ul class="adv-stats__grid">
            <li class="adv-stats__item">
                <span class="adv-stats__value">5+</span>
                <span class="adv-stats__label">Core advisory disciplines</span>
            </li>
            <li class="adv-stats__item">
                <span class="adv-stats__value">AU</span>
                <span class="adv-stats__label">Nationwide client support</span>
            </li>
            <li class="adv-stats__item">
                <span class="adv-stats__value">1</span>
                <span class="adv-stats__label">Integrated Innovative Group network</span>
            </li>
            <li class="adv-stats__item">
                <span class="adv-stats__value">100%</span>
                <span class="adv-stats__label">Client-first commitment</span>
            </li>
        </ul>
    </div>
</section>

{{-- Services — GT "Services" section pattern --}}
<section class="adv-section adv-section--grey">
    <div class="adv-container">
        <header class="adv-section__head">
            <p class="adv-kicker">Services</p>
            <h2 class="adv-h2">Advisory built for decision-makers</h2>
            <p class="adv-lead">Integrated expertise across strategy, risk, insurance, and execution — delivered with the rigour you expect from a premium consulting partner.</p>
        </header>
        <div class="adv-service-tiles">
            @foreach ($services as $service)
                <a href="{{ route('advisory.services.show', $service['slug']) }}" class="adv-service-tile">
                    <span class="adv-service-tile__icon"><i class="fa-solid {{ $service['icon'] }}" aria-hidden="true"></i></span>
                    <h3 class="adv-service-tile__title">{{ $service['title'] }}</h3>
                    <p class="adv-service-tile__text">{{ $service['excerpt'] }}</p>
                    <span class="adv-service-tile__link">Find out more <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- GT-style split feature panel --}}
<section class="adv-feature">
    <div class="adv-feature__media adv-feature__media--team" aria-hidden="true"></div>
    <div class="adv-feature__body">
        <p class="adv-kicker">Why Innovative Advisory</p>
        <h2 class="adv-h2">Trusted counsel when the stakes are high</h2>
        <p class="adv-lead">From family enterprises to growing mid-market firms, we bring disciplined analysis, practical recommendations, and hands-on support.</p>
        <ul class="adv-checklist">
            <li>Senior advisors with cross-industry experience</li>
            <li>Integrated view of finance, risk, and strategy</li>
            <li>Part of the wider Innovative Group network</li>
        </ul>
        <div class="adv-feature__links">
            <a href="{{ route('advisory.about') }}" class="adv-text-link">Discover our practice <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            <a href="{{ route('advisory.team.index') }}" class="adv-text-link">Meet our team <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
</section>

{{-- Second GT-style panel (reversed) --}}
<section class="adv-feature adv-feature--reverse">
    <div class="adv-feature__media adv-feature__media--consult" aria-hidden="true"></div>
    <div class="adv-feature__body adv-feature__body--dark">
        <p class="adv-kicker adv-kicker--light">Our commitment</p>
        <h2 class="adv-h2 adv-h2--light">We put your objectives first</h2>
        <p class="adv-lead adv-lead--light">Then we build the plan, the team, and the metrics to get there — with transparency at every step.</p>
        <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Book a consultation</a>
    </div>
</section>

@include('components.advisory.testimonials', [
    'testimonials' => $testimonials,
    'featured' => $featuredTestimonial,
])

@if ($articles->isNotEmpty())
<section class="adv-section">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--row">
            <div>
                <p class="adv-kicker">News centre</p>
                <h2 class="adv-h2">Latest articles</h2>
            </div>
            <a href="{{ route('advisory.articles.index') }}" class="adv-text-link">Read all articles <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </header>
        <div class="adv-articles-grid adv-articles-grid--home">
            @foreach ($articles as $article)
                <x-advisory.article-card :article="$article" />
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="adv-cta-band">
    <div class="adv-container adv-cta-band__inner">
        <h2 class="adv-cta-band__title">Ready to move forward with confidence?</h2>
        <p class="adv-cta-band__text">Tell us about your goals — our advisory team will respond promptly.</p>
        <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Contact us today</a>
    </div>
</section>
@endsection
