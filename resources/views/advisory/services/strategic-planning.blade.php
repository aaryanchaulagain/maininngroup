@extends('layouts.advisory', ['active' => 'services-strategic-planning'])

@section('title', 'Strategic Planning — Innovative Group')

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
            <span>Strategic Planning</span>
        </nav>
        <p class="adv-ba-hero__label">Strategic Planning</p>
        <h1 class="adv-ba-hero__title">Strategic Planning for Sustainable Business Growth</h1>
        <p class="adv-ba-hero__lead">Helping businesses define clear direction, align priorities, and build actionable strategies that create long-term success.</p>
        <p class="adv-ba-hero__sub">INN Group partners with organisations to transform vision into measurable outcomes through strategic planning built for performance and resilience.</p>
        <div class="adv-ba-hero__actions">
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Book strategy consultation</a>
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--white-outline adv-btn--lg">Speak with an advisor</a>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="adv-ba-intro">
    <div class="adv-container adv-ba-intro__inner">
        <p class="adv-kicker">Introduction</p>
        <h2 class="adv-h2">Turning Vision Into Actionable Strategy</h2>
        <div class="adv-ba-intro__text">
            <p>Growth does not happen by chance. It requires clarity, alignment, and a well-defined strategic roadmap.</p>
            <p>At INN Group Strategic Advisory, we help businesses evaluate opportunities, navigate uncertainty, and build practical strategies that support confident decision-making and sustainable growth.</p>
            <p>Our planning frameworks are designed to align leadership, strengthen execution, and ensure every strategic initiative drives measurable business value.</p>
        </div>
    </div>
</section>

{{-- Strategic planning services grid --}}
<section class="adv-ba-block adv-ba-block--grey">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">What we do</p>
            <h2 class="adv-h2">Comprehensive Strategic Advisory Solutions</h2>
        </header>
        <div class="adv-ba-services adv-ba-services--8">
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-compass" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Business Vision &amp; Direction Planning</h3>
                <p class="adv-ba-service-card__text">Clarify long-term objectives and define a roadmap aligned with your business ambitions.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Growth Strategy Development</h3>
                <p class="adv-ba-service-card__text">Identify expansion opportunities and create practical frameworks for sustainable growth.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-chess" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Market Positioning Strategy</h3>
                <p class="adv-ba-service-card__text">Strengthen competitive advantage through strategic differentiation and market analysis.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-sitemap" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Operational Strategy Alignment</h3>
                <p class="adv-ba-service-card__text">Ensure operational capability supports strategic objectives and long-term execution.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-coins" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Financial Strategy Planning</h3>
                <p class="adv-ba-service-card__text">Build financial frameworks that support growth, resilience, and informed investment decisions.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-people-group" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Organisational Capability Planning</h3>
                <p class="adv-ba-service-card__text">Align people, systems, and resources with future business priorities.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Risk-Informed Strategic Planning</h3>
                <p class="adv-ba-service-card__text">Integrate risk analysis into decision-making for stronger strategic confidence.</p>
            </article>
            <article class="adv-ba-service-card">
                <span class="adv-ba-service-card__icon"><i class="fa-solid fa-flag-checkered" aria-hidden="true"></i></span>
                <h3 class="adv-ba-service-card__title">Strategic Execution Support</h3>
                <p class="adv-ba-service-card__text">Turn planning into measurable outcomes through implementation guidance and review.</p>
            </article>
        </div>
        @php
            $related = collect($allServices)->filter(fn ($s) => $s['slug'] !== 'strategic-planning');
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
                <h2 class="adv-h2">Planning Built for Real Business Outcomes</h2>
            </div>
            <ul class="adv-ba-why">
                <li>
                    <span class="adv-ba-why__title">Commercially Grounded Strategy</span>
                    <span class="adv-ba-why__text">Practical solutions aligned with market realities.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Tailored Strategic Frameworks</span>
                    <span class="adv-ba-why__text">Designed around your business goals and challenges.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Data-Driven Insight</span>
                    <span class="adv-ba-why__text">Strategic decisions backed by analysis and expertise.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Execution-Focused Advisory</span>
                    <span class="adv-ba-why__text">Support beyond planning into implementation.</span>
                </li>
                <li>
                    <span class="adv-ba-why__title">Long-Term Partnership Approach</span>
                    <span class="adv-ba-why__text">Advisory support that evolves with your growth.</span>
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
            <h2 class="adv-h2">How We Build Business Clarity</h2>
        </header>
        <ol class="adv-ba-process">
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">1</span>
                <h3 class="adv-ba-process__title">Discover</h3>
                <p class="adv-ba-process__text">Understand vision, objectives, and current challenges.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">2</span>
                <h3 class="adv-ba-process__title">Analyse</h3>
                <p class="adv-ba-process__text">Assess market position, capability, and opportunity.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">3</span>
                <h3 class="adv-ba-process__title">Design</h3>
                <p class="adv-ba-process__text">Develop clear strategic frameworks and priorities.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">4</span>
                <h3 class="adv-ba-process__title">Align</h3>
                <p class="adv-ba-process__text">Ensure organisational readiness and stakeholder clarity.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">5</span>
                <h3 class="adv-ba-process__title">Execute &amp; Review</h3>
                <p class="adv-ba-process__text">Support implementation and refine performance over time.</p>
            </li>
        </ol>
    </div>
</section>

{{-- Industries --}}
<section class="adv-ba-block">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Sectors</p>
            <h2 class="adv-h2">Strategic Expertise Across Key Sectors</h2>
        </header>
        <ul class="adv-ba-industries">
            @foreach ([
                'Professional Services',
                'Financial Services',
                'Technology & Innovation',
                'Healthcare',
                'Construction & Infrastructure',
                'Manufacturing',
                'Retail & Commercial Enterprises',
                'Growth-Stage Businesses',
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
                <h2 class="adv-h2 adv-h2--light">Building Strategy That Delivers Results</h2>
                <p class="adv-ba-results__lead">Our strategic planning helps businesses:</p>
            </div>
            <ul class="adv-ba-results__list">
                <li>Define clear growth direction</li>
                <li>Improve decision-making confidence</li>
                <li>Align leadership and operations</li>
                <li>Strengthen market competitiveness</li>
                <li>Achieve measurable long-term performance</li>
            </ul>
        </div>
    </div>
</section>

{{-- Final CTA --}}
<section class="adv-ba-cta">
    <div class="adv-container adv-ba-cta__inner">
        <p class="adv-kicker adv-kicker--light">Get started</p>
        <h2 class="adv-ba-cta__title">Build a Clearer Path to Business Success</h2>
        <p class="adv-ba-cta__text">Partner with advisors who turn strategic vision into practical action.</p>
        <p class="adv-ba-cta__emphasis">Connect With Our Strategic Planning Specialists Today</p>
        <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Schedule strategy session</a>
    </div>
</section>
@endsection
