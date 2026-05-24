@extends('layouts.advisory', ['active' => 'services-business-consulting'])

@section('title', 'Business Consulting — Innovative Group')

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
            <span>Business Consulting</span>
        </nav>
        <p class="adv-ba-hero__label">Business Consulting</p>
        <h1 class="adv-ba-hero__title">Business Consulting That Accelerates Performance</h1>
        <p class="adv-ba-hero__lead">Helping businesses solve challenges, improve efficiency, and unlock growth through strategic consulting built around measurable outcomes.</p>
        <p class="adv-ba-hero__sub">INN Group delivers practical business consulting solutions that strengthen operations, sharpen decision-making, and create sustainable competitive advantage.</p>
        <div class="adv-ba-hero__actions">
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Speak to a consultant</a>
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--white-outline adv-btn--lg">Book a consultation</a>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="adv-ba-intro">
    <div class="adv-container adv-ba-intro__inner">
        <p class="adv-kicker">Introduction</p>
        <h2 class="adv-h2">Practical Consulting for Smarter Business Growth</h2>
        <div class="adv-ba-intro__text">
            <p>Modern businesses face constant change — evolving markets, operational pressures, technology disruption, and increasing competition.</p>
            <p>At INN Group Business Consulting, we work alongside organisations to solve complex challenges, improve performance, and implement practical strategies that create long-term value.</p>
            <p>Our consulting approach combines commercial insight, operational expertise, and tailored execution plans that turn strategy into measurable results.</p>
        </div>
    </div>
</section>

{{-- Consulting services grid --}}
<section class="adv-ba-block adv-ba-block--grey">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">What we do</p>
            <h2 class="adv-h2">Strategic Business Consulting Solutions</h2>
        </header>
        <div class="adv-ba-services adv-ba-services--8">
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-gauge-high" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Business Performance Improvement</h3>
                <p class="adv-ba-service-card__text">Identify inefficiencies, improve workflows, and strengthen overall operational performance.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-bullseye" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Strategic Planning &amp; Execution</h3>
                <p class="adv-ba-service-card__text">Develop actionable strategies aligned with your vision, market opportunities, and growth goals.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-people-group" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Organisational Transformation</h3>
                <p class="adv-ba-service-card__text">Support change initiatives, restructuring programs, and scalable operational redesign.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-chart-line" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Financial &amp; Commercial Advisory</h3>
                <p class="adv-ba-service-card__text">Improve decision-making through performance analysis, forecasting, and commercial insight.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-gears" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Process Optimisation</h3>
                <p class="adv-ba-service-card__text">Enhance systems and workflows to increase productivity and reduce operational friction.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-user-tie" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Leadership Advisory</h3>
                <p class="adv-ba-service-card__text">Provide executive-level strategic support for business-critical decisions and organisational direction.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Market Growth Strategy</h3>
                <p class="adv-ba-service-card__text">Identify expansion opportunities, strengthen positioning, and support sustainable market growth.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-microchip" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Digital Business Advisory</h3>
                <p class="adv-ba-service-card__text">Guide technology adoption, digital transformation, and innovation initiatives.</p>
            </article>
        </div>
        @php
            $related = collect($allServices)->filter(fn ($s) => $s['slug'] !== 'business-consulting');
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
                <h2 class="adv-h2">Expertise That Delivers Business Results</h2>
            </div>
            <ul class="adv-ba-why">
                <li>
                    <span class="adv-ba-why__title">Commercially Driven Advice</span>
                    <span class="adv-ba-why__text">Solutions focused on practical business outcomes.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Tailored Consulting Strategies</span>
                    <span class="adv-ba-why__text">Every recommendation aligned to your business context.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Experienced Advisory Specialists</span>
                    <span class="adv-ba-why__text">Deep expertise across industries and operational challenges.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Implementation-Focused Approach</span>
                    <span class="adv-ba-why__text">We help execute, not just advise.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Long-Term Growth Partnership</span>
                    <span class="adv-ba-why__text">Supporting your success beyond immediate projects.</span>
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
            <h2 class="adv-h2">How We Deliver Value</h2>
        </header>
        <ol class="adv-ba-process">
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">1</span>
                <h3 class="adv-ba-process__title">Discover</h3>
                <p class="adv-ba-process__text">Understand your business objectives and challenges.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">2</span>
                <h3 class="adv-ba-process__title">Assess</h3>
                <p class="adv-ba-process__text">Evaluate operations, opportunities, and performance gaps.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">3</span>
                <h3 class="adv-ba-process__title">Strategise</h3>
                <p class="adv-ba-process__text">Develop tailored consulting solutions.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">4</span>
                <h3 class="adv-ba-process__title">Execute</h3>
                <p class="adv-ba-process__text">Support implementation with expert guidance.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">5</span>
                <h3 class="adv-ba-process__title">Optimise</h3>
                <p class="adv-ba-process__text">Refine outcomes for sustainable performance improvement.</p>
            </li>
        </ol>
    </div>
</section>

{{-- Industries --}}
<section class="adv-ba-block">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Sectors</p>
            <h2 class="adv-h2">Consulting Expertise Across Diverse Sectors</h2>
        </header>
        <ul class="adv-ba-industries">
            @foreach ([
                'Professional Services',
                'Financial Services',
                'Technology & SaaS',
                'Healthcare',
                'Construction & Infrastructure',
                'Retail & Consumer Business',
                'Manufacturing & Industrial',
                'Emerging Enterprises',
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
                <h2 class="adv-h2 adv-h2--light">Turning Challenges Into Competitive Advantage</h2>
                <p class="adv-ba-results__lead">Our consulting services help businesses:</p>
            </div>
            <ul class="adv-ba-results__list">
                <li>Improve operational efficiency</li>
                <li>Strengthen strategic decision-making</li>
                <li>Accelerate business growth</li>
                <li>Enhance leadership capability</li>
                <li>Build scalable business foundations</li>
            </ul>
        </div>
    </div>
</section>

{{-- Final CTA --}}
<section class="adv-ba-cta">
    <div class="adv-container adv-ba-cta__inner">
        <p class="adv-kicker adv-kicker--light">Get started</p>
        <h2 class="adv-ba-cta__title">Ready to Transform Business Performance?</h2>
        <p class="adv-ba-cta__text">Partner with consultants who deliver practical strategies for measurable business success.</p>
        <p class="adv-ba-cta__emphasis">Connect With Our Business Consulting Team Today</p>
        <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Schedule consultation</a>
    </div>
</section>
@endsection
