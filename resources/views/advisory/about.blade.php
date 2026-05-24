@extends('layouts.advisory', ['active' => 'about'])

@section('title', 'About Us — Business Advisory')

@section('content')
<section class="adv-page-hero">
    <div class="adv-page-hero__inner">
        <nav class="adv-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('advisory.home') }}">Home</a>
            <span aria-hidden="true">/</span>
            <span>About Us</span>
        </nav>
        <h1>About Us</h1>
        <p class="adv-lead adv-page-hero__lead">A dedicated advisory practice within Innovative Group — helping Australian businesses plan, protect, and perform.</p>
    </div>
</section>

{{-- Our story --}}
<section class="adv-section adv-section--alt">
    <div class="adv-container adv-about-story">
        <p class="adv-kicker">Our story</p>
        <h2 class="adv-h2">Advisory with depth and accountability</h2>
        <div class="adv-about-story__body">
            <p>Innovative Advisory sits within the Innovative Group family of businesses, bringing together specialists in strategy, risk, insurance, and business consulting under one trusted brand.</p>
            <p>We work with owners, boards, and executive teams who need more than generic advice — they need partners who understand their industry, their constraints, and their ambitions.</p>
            <p>Our approach blends rigorous analysis with practical implementation support. We measure success by the decisions you make confidently and the outcomes you achieve sustainably.</p>
        </div>
    </div>
</section>

{{-- Why clients choose us --}}
<section class="adv-ba-block">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Why choose us</p>
            <h2 class="adv-h2">Why Businesses Partner With Innovative Advisory</h2>
            <p class="adv-section__sub">Integrated expertise and practical advice designed to convert insight into confident action.</p>
        </header>
        <ul class="adv-about-why">
            <li class="adv-about-why__item">
                <span class="adv-about-why__icon" aria-hidden="true"><i class="fa-solid fa-diagram-project"></i></span>
                <h3 class="adv-about-why__title">Integrated Expertise</h3>
                <p class="adv-about-why__text">Business strategy, insurance, and risk advisory under one connected framework.</p>
            </li>
            <li class="adv-about-why__item">
                <span class="adv-about-why__icon" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
                <h3 class="adv-about-why__title">Commercially Practical Advice</h3>
                <p class="adv-about-why__text">Solutions designed for implementation, not theory.</p>
            </li>
            <li class="adv-about-why__item">
                <span class="adv-about-why__icon" aria-hidden="true"><i class="fa-solid fa-scale-balanced"></i></span>
                <h3 class="adv-about-why__title">Independent Perspective</h3>
                <p class="adv-about-why__text">Objective advice aligned to your business goals.</p>
            </li>
            <li class="adv-about-why__item">
                <span class="adv-about-why__icon" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
                <h3 class="adv-about-why__title">Long-Term Partnership</h3>
                <p class="adv-about-why__text">We support growth beyond immediate projects.</p>
            </li>
            <li class="adv-about-why__item">
                <span class="adv-about-why__icon" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
                <h3 class="adv-about-why__title">Outcome Focused</h3>
                <p class="adv-about-why__text">Measured success through sustainable results.</p>
            </li>
        </ul>
    </div>
</section>

{{-- Industries --}}
<section class="adv-ba-block adv-ba-block--grey">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Sectors</p>
            <h2 class="adv-h2">Sector Experience</h2>
            <p class="adv-section__sub">We advise organisations across:</p>
        </header>
        <ul class="adv-ba-industries">
            @foreach ([
                'Professional Services',
                'Construction & Infrastructure',
                'Healthcare',
                'Financial Services',
                'Technology & SaaS',
                'Property & Real Estate',
                'Manufacturing',
                'Family Enterprises',
            ] as $industry)
                <li>{{ $industry }}</li>
            @endforeach
        </ul>
    </div>
</section>

{{-- Advisory process --}}
<section class="adv-ba-block adv-ba-block--ice">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">How we work</p>
            <h2 class="adv-h2">How We Work</h2>
        </header>
        <ol class="adv-ba-process">
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">1</span>
                <h3 class="adv-ba-process__title">Discover</h3>
                <p class="adv-ba-process__text">Understanding your business landscape.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">2</span>
                <h3 class="adv-ba-process__title">Analyse</h3>
                <p class="adv-ba-process__text">Assessing risk, performance, and opportunity.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">3</span>
                <h3 class="adv-ba-process__title">Strategise</h3>
                <p class="adv-ba-process__text">Building tailored advisory solutions.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">4</span>
                <h3 class="adv-ba-process__title">Implement</h3>
                <p class="adv-ba-process__text">Supporting execution and change.</p>
            </li>
            <li class="adv-ba-process__step">
                <span class="adv-ba-process__num">5</span>
                <h3 class="adv-ba-process__title">Review</h3>
                <p class="adv-ba-process__text">Ensuring sustainable outcomes.</p>
            </li>
        </ol>
    </div>
</section>

{{-- Metrics --}}
<section class="adv-section adv-about-metrics">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Results</p>
            <h2 class="adv-h2">Delivering Measurable Results</h2>
            <p class="adv-section__sub adv-about-metrics__note">Representative indicators — contact us for current firm statistics.</p>
        </header>
        <div class="adv-about-metrics__grid">
            <article class="adv-about-metric">
                <span class="adv-about-metric__value">150+</span>
                <p class="adv-about-metric__label">Strategic engagements delivered</p>
            </article>
            <article class="adv-about-metric">
                <span class="adv-about-metric__value">98%</span>
                <p class="adv-about-metric__label">Client retention</p>
            </article>
            <article class="adv-about-metric">
                <span class="adv-about-metric__value">$XXM</span>
                <p class="adv-about-metric__label">Protected through risk advisory</p>
            </article>
            <article class="adv-about-metric">
                <span class="adv-about-metric__value"><i class="fa-solid fa-building-columns" aria-hidden="true"></i></span>
                <p class="adv-about-metric__label">Trusted across multiple industries</p>
            </article>
        </div>
    </div>
</section>

{{-- Testimonials --}}
@php
    $hasTestimonials = $featuredTestimonial || $testimonials->isNotEmpty();
@endphp

@if ($hasTestimonials)
    @include('components.advisory.testimonials', [
        'testimonials' => $testimonials,
        'featured' => $featuredTestimonial,
        'title' => 'What our clients say',
    ])
@else
    <section class="adv-section adv-section--grey adv-testimonials">
        <div class="adv-container">
            <header class="adv-section__head adv-section__head--center">
                <p class="adv-kicker">Testimonials</p>
                <h2 class="adv-h2">What our clients say</h2>
            </header>
            <div class="adv-testimonial-grid">
                <article class="adv-testimonial-card">
                    <p class="adv-testimonial-card__label">Growth-stage business</p>
                    <p class="adv-testimonial-card__quote">“Innovative Advisory delivered clarity and confidence at a critical growth stage.”</p>
                    <p class="adv-testimonial-card__author">Advisory client</p>
                </article>
                <article class="adv-testimonial-card">
                    <p class="adv-testimonial-card__label">Executive leadership</p>
                    <p class="adv-testimonial-card__quote">“Their commercial insight transformed our strategic decision-making.”</p>
                    <p class="adv-testimonial-card__author">Advisory client</p>
                </article>
            </div>
        </div>
    </section>
@endif

{{-- Mission & vision --}}
<section class="adv-section">
    <div class="adv-container">
        <header class="adv-section__head adv-section__head--center">
            <p class="adv-kicker">Purpose</p>
            <h2 class="adv-h2">Mission &amp; vision</h2>
        </header>
        <div class="adv-about-mv">
            <article class="adv-about-mv__card">
                <span class="adv-about-mv__icon" aria-hidden="true"><i class="fa-solid fa-eye"></i></span>
                <h3 class="adv-about-mv__title">Our vision</h3>
                <p class="adv-about-mv__text">To become Australia’s most trusted advisory partner for ambitious businesses.</p>
            </article>
            <article class="adv-about-mv__card adv-about-mv__card--accent">
                <span class="adv-about-mv__icon" aria-hidden="true"><i class="fa-solid fa-compass"></i></span>
                <h3 class="adv-about-mv__title">Our mission</h3>
                <p class="adv-about-mv__text">To help organisations plan smarter, manage risk effectively, and achieve sustainable growth through practical expert advice.</p>
            </article>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="adv-about-cta">
    <div class="adv-container adv-about-cta__inner">
        <p class="adv-kicker adv-kicker--light">Get started</p>
        <h2 class="adv-about-cta__title">Let’s Build Business Confidence Together</h2>
        <p class="adv-about-cta__text">Whether you’re planning growth, managing risk, or strengthening business resilience, our advisors are ready to help.</p>
        <div class="adv-about-cta__actions">
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary adv-btn--lg">Book consultation</a>
            <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--white-outline adv-btn--lg">Speak with our team</a>
        </div>
    </div>
</section>
@endsection
