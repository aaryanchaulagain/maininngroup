@extends('layouts.advisory', ['active' => 'services-business-advisory'])

@section('title', 'Business Advisory — Innovative Group')

@section('content')
{{-- Hero --}}
<section class="adv-ba-hero">
    <div class="adv-ba-hero__bg" aria-hidden="true"></div>
    <div class="adv-ba-hero__overlay" aria-hidden="true"></div>
    <div class="adv-container adv-ba-hero__inner">
        <nav class="adv-breadcrumb adv-ba-hero__breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('advisory.home') }}">Home</a>
            <span>/</span>
            <a href="{{ route('advisory.services.index') }}">Services</a>
            <span>/</span>
            <span>Business Advisory</span>
        </nav>
        <p class="adv-ba-hero__label">Business Advisory</p>
        <h1 class="adv-ba-hero__title">Business Advisory That Drives Sustainable Growth</h1>
        <p class="adv-ba-hero__lead">Helping businesses navigate complexity, unlock opportunities, and build long-term value through strategic planning, financial insight, and expert advisory solutions.</p>
        <p class="adv-ba-hero__sub">We partner with ambitious businesses to strengthen operations, improve performance, manage risk, and create pathways for measurable success.</p>
        <div class="adv-ba-hero__actions">
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Schedule consultation</a>
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--white-outline adv-btn--lg">Talk to an advisor</a>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="adv-ba-intro">
    <div class="adv-container adv-ba-intro__inner">
        <p class="adv-kicker">Introduction</p>
        <h2 class="adv-h2">Strategic Advice for Modern Businesses</h2>
        <div class="adv-ba-intro__text">
            <p>In today’s evolving market, businesses need more than traditional consulting. They need practical, forward-thinking advisory support that delivers clarity, resilience, and growth.</p>
            <p>At INN Group Business Advisory, we work closely with organisations to solve operational challenges, identify growth opportunities, and implement strategies that improve financial and business performance.</p>
            <p>Our advisory approach is built around measurable outcomes, industry insight, and tailored solutions designed for your business goals.</p>
        </div>
    </div>
</section>

{{-- Advisory services grid --}}
<section class="adv-ba-block adv-ba-block--grey">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">What we do</p>
            <h2 class="adv-h2">Our Advisory Services</h2>
        </header>
        <div class="adv-ba-services">
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-chart-line" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Business Strategy &amp; Growth Planning</h3>
                <p class="adv-ba-service-card__text">Develop clear, actionable growth strategies aligned with your vision, market opportunities, and operational capacity.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-coins" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Financial Performance Advisory</h3>
                <p class="adv-ba-service-card__text">Improve profitability through financial analysis, forecasting, cashflow planning, and performance optimisation.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Risk Management &amp; Governance</h3>
                <p class="adv-ba-service-card__text">Identify vulnerabilities, strengthen controls, and implement frameworks that protect long-term business value.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-gears" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Operational Efficiency</h3>
                <p class="adv-ba-service-card__text">Assess systems, workflows, and business processes to improve productivity and reduce operational friction.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-arrows-rotate" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Business Transformation</h3>
                <p class="adv-ba-service-card__text">Support digital adoption, restructuring initiatives, and change management for scalable business growth.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-user-tie" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Leadership &amp; Decision Support</h3>
                <p class="adv-ba-service-card__text">Provide strategic guidance to executives and leadership teams for confident, data-driven decision making.</p>
            </article>
        </div>
        <p class="adv-ba-related">
            Explore related services:
            @foreach ($allServices as $s)
                @if ($s['slug'] !== 'business-advisory')
                    <a href="{{ route('advisory.services.show', $s['slug']) }}">{{ $s['title'] }}</a>@if (! $loop->last), @endif
                @endif
            @endforeach
        </p>
    </div>
</section>

{{-- Why choose us --}}
<section class="adv-ba-block">
    <div class="adv-container">
        <div class="adv-ba-split">
            <div class="adv-ba-split__head">
                <p class="adv-kicker">Why choose us</p>
                <h2 class="adv-h2">Why Businesses Partner With INN Group</h2>
            </div>
            <ul class="adv-ba-why">
                <li>
                    <span class="adv-ba-why__title">Commercially Focused Advice</span>
                    <span class="adv-ba-why__text">Solutions grounded in practical business realities.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Experienced Advisory Specialists</span>
                    <span class="adv-ba-why__text">Industry knowledge across diverse sectors.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Tailored Strategic Solutions</span>
                    <span class="adv-ba-why__text">No generic recommendations — every strategy is customised.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Long-Term Partnership Approach</span>
                    <span class="adv-ba-why__text">We grow alongside your business.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Results That Matter</span>
                    <span class="adv-ba-why__text">Focused on measurable business improvement.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

{{-- Process --}}
<section class="adv-ba-block adv-ba-block--ice">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">How we work</p>
            <h2 class="adv-h2">Our Advisory Process</h2>
        </header>
        <ol class="adv-ba-process">
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">1</span>
                <h3 class="adv-ba-process__title">Discover</h3>
                <p class="adv-ba-process__text">Understanding your business, goals, and challenges.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">2</span>
                <h3 class="adv-ba-process__title">Analyse</h3>
                <p class="adv-ba-process__text">Assessing performance, opportunities, and risks.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">3</span>
                <h3 class="adv-ba-process__title">Strategise</h3>
                <p class="adv-ba-process__text">Designing practical, data-backed solutions.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">4</span>
                <h3 class="adv-ba-process__title">Implement</h3>
                <p class="adv-ba-process__text">Supporting execution with expert guidance.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">5</span>
                <h3 class="adv-ba-process__title">Optimise</h3>
                <p class="adv-ba-process__text">Continuous review for sustainable performance improvement.</p>
            </li>
        </ol>
    </div>
</section>

{{-- Industries --}}
<section class="adv-ba-block">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Sectors</p>
            <h2 class="adv-h2">Industries We Support</h2>
        </header>
        <ul class="adv-ba-industries">
            @foreach ([
                'Professional Services',
                'Financial Services',
                'Construction & Infrastructure',
                'Healthcare',
                'Technology & SaaS',
                'Manufacturing',
                'Retail & Consumer Business',
                'Family-Owned Enterprises',
            ] as $industry)
                <li>{{ $industry }}</li>
            @endforeach
        </ul>
    </div>
</section>

{{-- Results --}}
<section class="adv-ba-block adv-ba-block--dark">
    <div class="adv-container">
        <div class="adv-ba-results">
            <div class="adv-ba-results__head">
                <p class="adv-kicker adv-kicker--light">Outcomes</p>
                <h2 class="adv-h2 adv-h2--light">Turning Insight Into Action</h2>
                <p class="adv-ba-results__lead">We help businesses:</p>
            </div>
            <ul class="adv-ba-results__list">
                <li>Improve profitability and efficiency</li>
                <li>Build stronger financial resilience</li>
                <li>Reduce operational risk</li>
                <li>Make confident strategic decisions</li>
                <li>Position for sustainable long-term growth</li>
            </ul>
        </div>
    </div>
</section>

{{-- Final CTA --}}
<section class="adv-ba-cta">
    <div class="adv-container adv-ba-cta__inner">
        <p class="adv-kicker adv-kicker--light">Get started</p>
        <h2 class="adv-ba-cta__title">Ready to Strengthen Your Business Strategy?</h2>
        <p class="adv-ba-cta__text">Partner with advisors who understand business performance, growth, and long-term success.</p>
        <p class="adv-ba-cta__emphasis">Book a Strategic Consultation Today</p>
        <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Contact our advisory team</a>
    </div>
</section>
@endsection
