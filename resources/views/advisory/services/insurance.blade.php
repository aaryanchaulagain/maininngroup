@extends('layouts.advisory', ['active' => 'services-insurance'])

@section('title', 'Insurance — Innovative Group')

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
            <span>Insurance</span>
        </nav>
        <p class="adv-ba-hero__label">Insurance</p>
        <h1 class="adv-ba-hero__title">Insurance Solutions That Protect Business Confidence</h1>
        <p class="adv-ba-hero__lead">Protecting your business with strategic insurance advice, tailored coverage solutions, and risk protection designed for long-term resilience.</p>
        <p class="adv-ba-hero__sub">At INN Group, we help businesses identify exposure, reduce uncertainty, and secure insurance strategies that support stability and growth.</p>
        <div class="adv-ba-hero__actions">
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Get expert advice</a>
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--white-outline adv-btn--lg">Request insurance review</a>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="adv-ba-intro">
    <div class="adv-container adv-ba-intro__inner">
        <p class="adv-kicker">Introduction</p>
        <h2 class="adv-h2">Strategic Insurance Advisory for Modern Businesses</h2>
        <div class="adv-ba-intro__text">
            <p>Insurance is more than compliance and coverage — it is a critical part of business continuity, operational resilience, and financial protection.</p>
            <p>At INN Group Insurance Advisory, we work closely with businesses to assess risk exposure, optimise coverage structures, and deliver tailored insurance strategies aligned with operational goals and commercial realities.</p>
            <p>Our focus is to ensure your business is protected against evolving risks while maximising value from your insurance investment.</p>
        </div>
    </div>
</section>

{{-- Insurance services grid --}}
<section class="adv-ba-block adv-ba-block--grey">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">What we do</p>
            <h2 class="adv-h2">Comprehensive Business Insurance Solutions</h2>
        </header>
        <div class="adv-ba-services adv-ba-services--8">
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-clipboard-check" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Business Risk Assessment</h3>
                <p class="adv-ba-service-card__text">Identify operational, financial, and industry-specific risks that may impact continuity and growth.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-layer-group" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Insurance Program Design</h3>
                <p class="adv-ba-service-card__text">Develop customised insurance structures aligned with your business profile and risk exposure.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-file-contract" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Policy Review &amp; Optimisation</h3>
                <p class="adv-ba-service-card__text">Evaluate current policies to eliminate gaps, improve efficiency, and strengthen protection.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-handshake" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Claims Advisory Support</h3>
                <p class="adv-ba-service-card__text">Expert assistance through claims preparation, management, and resolution processes.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-scale-balanced" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Liability Protection</h3>
                <p class="adv-ba-service-card__text">Coverage solutions for public liability, professional indemnity, cyber risk, and management liability.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-building" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Asset &amp; Property Protection</h3>
                <p class="adv-ba-service-card__text">Protect physical assets, infrastructure, equipment, and operational resources against unexpected loss.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-shield-virus" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Cyber &amp; Digital Risk Insurance</h3>
                <p class="adv-ba-service-card__text">Protect against modern cyber threats, data breaches, system disruptions, and digital liability exposure.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-chart-line" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Business Continuity Protection</h3>
                <p class="adv-ba-service-card__text">Safeguard revenue stability through interruption and contingency planning coverage.</p>
            </article>
        </div>
        @php
            $related = collect($allServices)->filter(fn ($s) => $s['slug'] !== 'insurance');
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
                <h2 class="adv-h2">Trusted Protection Built Around Business Strategy</h2>
            </div>
            <ul class="adv-ba-why">
                <li>
                    <span class="adv-ba-why__title">Independent Strategic Advice</span>
                    <span class="adv-ba-why__text">Recommendations focused on your business needs.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Tailored Coverage Structures</span>
                    <span class="adv-ba-why__text">Protection designed for operational realities.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Deep Risk Expertise</span>
                    <span class="adv-ba-why__text">Insight across complex commercial environments.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Claims Advocacy Support</span>
                    <span class="adv-ba-why__text">Expert guidance when you need it most.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Long-Term Risk Partnership</span>
                    <span class="adv-ba-why__text">Ongoing review as your business evolves.</span>
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
            <h2 class="adv-h2">How We Protect Your Business</h2>
        </header>
        <ol class="adv-ba-process">
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">1</span>
                <h3 class="adv-ba-process__title">Assess</h3>
                <p class="adv-ba-process__text">Review your operations, exposures, and existing protection.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">2</span>
                <h3 class="adv-ba-process__title">Analyse</h3>
                <p class="adv-ba-process__text">Identify risks, inefficiencies, and coverage gaps.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">3</span>
                <h3 class="adv-ba-process__title">Design</h3>
                <p class="adv-ba-process__text">Create tailored insurance solutions aligned to your needs.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">4</span>
                <h3 class="adv-ba-process__title">Implement</h3>
                <p class="adv-ba-process__text">Secure and structure effective protection strategies.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">5</span>
                <h3 class="adv-ba-process__title">Review</h3>
                <p class="adv-ba-process__text">Continuously optimise coverage as your business grows.</p>
            </li>
        </ol>
    </div>
</section>

{{-- Industries --}}
<section class="adv-ba-block">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Sectors</p>
            <h2 class="adv-h2">Insurance Expertise Across Key Sectors</h2>
        </header>
        <ul class="adv-ba-industries">
            @foreach ([
                'Professional Services',
                'Construction & Engineering',
                'Technology & Cyber Businesses',
                'Healthcare Providers',
                'Manufacturing & Industrial',
                'Retail & Consumer Businesses',
                'Financial Services',
                'Property & Real Estate',
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
                <p class="adv-kicker adv-kicker--light">Value</p>
                <h2 class="adv-h2 adv-h2--light">Insurance That Supports Business Growth</h2>
                <p class="adv-ba-results__lead">Our insurance advisory helps businesses:</p>
            </div>
            <ul class="adv-ba-results__list">
                <li>Reduce financial exposure</li>
                <li>Strengthen operational resilience</li>
                <li>Improve coverage efficiency</li>
                <li>Navigate claims with confidence</li>
                <li>Protect long-term enterprise value</li>
            </ul>
        </div>
    </div>
</section>

{{-- Final CTA --}}
<section class="adv-ba-cta">
    <div class="adv-container adv-ba-cta__inner">
        <p class="adv-kicker adv-kicker--light">Get started</p>
        <h2 class="adv-ba-cta__title">Secure Smarter Protection for Your Business</h2>
        <p class="adv-ba-cta__text">Partner with advisors who understand risk, resilience, and strategic insurance planning.</p>
        <p class="adv-ba-cta__emphasis">Speak With Our Insurance Specialists Today</p>
        <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Request consultation</a>
    </div>
</section>
@endsection
