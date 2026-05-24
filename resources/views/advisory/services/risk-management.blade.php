@extends('layouts.advisory', ['active' => 'services-risk-management'])

@section('title', 'Risk Management — Innovative Group')

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
            <span>Risk Management</span>
        </nav>
        <p class="adv-ba-hero__label">Risk Management</p>
        <h1 class="adv-ba-hero__title">Proactive Risk Management for Business Resilience</h1>
        <p class="adv-ba-hero__lead">Helping businesses identify, assess, and mitigate risk through strategic frameworks that protect performance, strengthen resilience, and support sustainable growth.</p>
        <p class="adv-ba-hero__sub">INN Group delivers tailored risk management solutions that help organisations navigate uncertainty with confidence.</p>
        <div class="adv-ba-hero__actions">
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Speak to a risk advisor</a>
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--white-outline adv-btn--lg">Request risk assessment</a>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="adv-ba-intro">
    <div class="adv-container adv-ba-intro__inner">
        <p class="adv-kicker">Introduction</p>
        <h2 class="adv-h2">Strategic Risk Management That Protects Growth</h2>
        <div class="adv-ba-intro__text">
            <p>Every business faces uncertainty — operational disruption, financial exposure, compliance challenges, cyber threats, and market volatility.</p>
            <p>At INN Group Risk Advisory, we help organisations anticipate risk before it becomes disruption. Through practical analysis and tailored frameworks, we strengthen resilience and create strategies that support informed decision-making and long-term business confidence.</p>
            <p>Our approach is proactive, measurable, and aligned with your commercial objectives.</p>
        </div>
    </div>
</section>

{{-- Risk services grid --}}
<section class="adv-ba-block adv-ba-block--grey">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">What we do</p>
            <h2 class="adv-h2">Comprehensive Risk Advisory Solutions</h2>
        </header>
        <div class="adv-ba-services adv-ba-services--8">
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Enterprise Risk Assessment</h3>
                <p class="adv-ba-service-card__text">Identify and evaluate internal and external risks impacting performance and continuity.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-sitemap" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Risk Framework Development</h3>
                <p class="adv-ba-service-card__text">Build structured risk management systems tailored to your business operations and objectives.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-gears" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Operational Risk Management</h3>
                <p class="adv-ba-service-card__text">Strengthen internal controls, processes, and workflows to reduce operational vulnerabilities.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-gavel" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Compliance &amp; Regulatory Risk</h3>
                <p class="adv-ba-service-card__text">Ensure governance structures align with industry standards and evolving regulatory requirements.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-coins" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Financial Risk Advisory</h3>
                <p class="adv-ba-service-card__text">Protect business performance through financial exposure analysis and strategic mitigation planning.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Cyber &amp; Digital Risk Protection</h3>
                <p class="adv-ba-service-card__text">Assess digital vulnerabilities and strengthen preparedness against cyber-related threats.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-arrows-rotate" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Business Continuity Planning</h3>
                <p class="adv-ba-service-card__text">Prepare your organisation for disruption with resilient response and recovery strategies.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-chart-pie" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Strategic Decision Risk Analysis</h3>
                <p class="adv-ba-service-card__text">Evaluate business decisions through risk-based analysis for greater confidence and control.</p>
            </article>
        </div>
        @php
            $related = collect($allServices)->filter(fn ($s) => $s['slug'] !== 'risk-management');
        @endphp
        @if ($related->isNotEmpty())
            <p class="adv-ba-related">
                Explore related services:
                @foreach ($related as $s)
                    <a href="{{ route('advisory.services.show', $s['slug']) }}">{{ $s['title'] }}</a>@if (! $loop->last), @endif
                @endforeach
            </p>
        @endif
    </div>
</section>

{{-- Why choose us --}}
<section class="adv-ba-block">
    <div class="adv-container">
        <div class="adv-ba-split">
            <div class="adv-ba-split__head">
                <p class="adv-kicker">Why choose us</p>
                <h2 class="adv-h2">Confidence Through Clarity and Control</h2>
            </div>
            <ul class="adv-ba-why">
                <li>
                    <span class="adv-ba-why__title">Strategic Commercial Insight</span>
                    <span class="adv-ba-why__text">Risk advice aligned with business performance goals.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Tailored Frameworks</span>
                    <span class="adv-ba-why__text">Solutions built around your operations and industry realities.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Proactive Protection</span>
                    <span class="adv-ba-why__text">Identify vulnerabilities before they become costly issues.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Cross-Industry Expertise</span>
                    <span class="adv-ba-why__text">Risk experience across complex business environments.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Long-Term Advisory Partnership</span>
                    <span class="adv-ba-why__text">Ongoing support as risks evolve.</span>
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
            <h2 class="adv-h2">Our Risk Management Approach</h2>
        </header>
        <ol class="adv-ba-process">
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">1</span>
                <h3 class="adv-ba-process__title">Identify</h3>
                <p class="adv-ba-process__text">Assess current exposures and business vulnerabilities.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">2</span>
                <h3 class="adv-ba-process__title">Analyse</h3>
                <p class="adv-ba-process__text">Measure impact, likelihood, and operational consequences.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">3</span>
                <h3 class="adv-ba-process__title">Design</h3>
                <p class="adv-ba-process__text">Build strategic controls and mitigation frameworks.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">4</span>
                <h3 class="adv-ba-process__title">Implement</h3>
                <p class="adv-ba-process__text">Integrate practical risk solutions into operations.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">5</span>
                <h3 class="adv-ba-process__title">Monitor</h3>
                <p class="adv-ba-process__text">Continuously review and adapt as your business grows.</p>
            </li>
        </ol>
    </div>
</section>

{{-- Industries --}}
<section class="adv-ba-block">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Sectors</p>
            <h2 class="adv-h2">Risk Expertise Across Critical Sectors</h2>
        </header>
        <ul class="adv-ba-industries">
            @foreach ([
                'Professional Services',
                'Financial Institutions',
                'Technology & Digital Businesses',
                'Construction & Infrastructure',
                'Healthcare Organisations',
                'Manufacturing & Logistics',
                'Retail & Commercial Operations',
                'Corporate Enterprises',
            ] as $industry)
                <li>{{ $industry }}</li>
            @endforeach
        </ul>
    </div>
</section>

{{-- Value proposition --}}
<section class="adv-ba-block adv-ba-block--dark">
    <div class="adv-container">
        <div class="adv-ba-results">
            <div class="adv-ba-results__head">
                <p class="adv-kicker adv-kicker--light">Outcomes</p>
                <h2 class="adv-h2 adv-h2--light">Building Resilience Through Strategic Risk Management</h2>
                <p class="adv-ba-results__lead">Our advisory helps businesses:</p>
            </div>
            <ul class="adv-ba-results__list">
                <li>Minimise operational disruption</li>
                <li>Strengthen governance and compliance</li>
                <li>Improve strategic decision-making</li>
                <li>Reduce financial exposure</li>
                <li>Build resilience for sustainable growth</li>
            </ul>
        </div>
    </div>
</section>

{{-- Final CTA --}}
<section class="adv-ba-cta">
    <div class="adv-container adv-ba-cta__inner">
        <p class="adv-kicker adv-kicker--light">Get started</p>
        <h2 class="adv-ba-cta__title">Build a Stronger, More Resilient Business</h2>
        <p class="adv-ba-cta__text">Partner with risk advisors who help you prepare for uncertainty and protect long-term performance.</p>
        <p class="adv-ba-cta__emphasis">Connect With Our Risk Specialists Today</p>
        <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Schedule risk consultation</a>
    </div>
</section>
@endsection
