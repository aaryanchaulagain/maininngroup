@extends('layouts.tax-zimed')

@section('body-class', 'page-bas-gst wp-singular page elementor-page')

@section('title', 'BAS / GST Services – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.0.9">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.0.9">
@endpush

@section('content')
@php
    $cdn = 'https://innovativeassociates.com.au/wp-content/uploads';
@endphp

@include('components.tax.zimed.header', ['active' => 'services-bas-gst'])

<div class="full-width-page tax-svc-landing tax-svc-landing--bas-gst">
    <x-tax.zimed.page-header
        title="BAS / GST Services"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Services', 'url' => route('tax.services.index')],
            ['label' => 'BAS / GST', 'current' => true],
        ]"
    />

    {{-- Hero intro --}}
    <section class="tax-svc-hero">
        <div class="container">
            <div class="tax-svc-hero__grid">
                <div class="tax-svc-hero__content">
                    <p class="tax-svc-kicker">BAS &amp; GST</p>
                    <h1 class="tax-svc-hero__title">Strategic BAS &amp; GST Support for Growing Businesses</h1>
                    <div class="tax-svc-prose">
                        <p>BAS and GST reporting should never feel like a last-minute administrative burden.</p>
                        <p>When managed properly, these reporting obligations can provide valuable insight into business performance, cash flow position, and operational efficiency.</p>
                        <p>Our team takes a proactive approach to BAS and GST management, helping businesses maintain accurate reporting processes, resolve discrepancies early, and strengthen financial systems that support long-term compliance.</p>
                        <p>We work with businesses of all sizes — from emerging enterprises to established organisations — providing tailored support aligned with your structure, reporting requirements, and industry-specific obligations.</p>
                    </div>
                    <div class="tax-svc-hero__actions">
                        <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn">Book a consultation</a>
                        <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn tax-svc-btn--outline">Speak with our team</a>
                    </div>
                </div>
                <div class="tax-svc-hero__media">
                    <img
                        src="{{ $cdn }}/2021/03/accounting-and-taxation-services.jpg"
                        width="500"
                        height="344"
                        alt="BAS and GST advisory"
                        loading="eager"
                    >
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="tax-svc-block tax-svc-block--alt">
        <div class="container">
            <header class="tax-svc-head tax-svc-head--center">
                <p class="tax-svc-kicker">What we do</p>
                <h2 class="tax-svc-h2">Our BAS &amp; GST Services Include</h2>
            </header>
            <div class="tax-svc-cards tax-svc-cards--2">
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-file-invoice" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">BAS Preparation and Lodgement</h3>
                    <p class="tax-svc-card__text">Accurate preparation and on-time submission of Business Activity Statements to ensure complete compliance with ATO requirements.</p>
                    <p class="tax-svc-card__text">We review financial records carefully, reconcile reporting data, and ensure all lodgements are completed efficiently and correctly.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-clipboard-check" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">GST Registration and Setup</h3>
                    <p class="tax-svc-card__text">Expert assistance registering your business for GST and establishing compliant reporting systems from the outset.</p>
                    <p class="tax-svc-card__text">We help ensure your financial processes are correctly structured to support future reporting obligations.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">GST Reporting Reviews</h3>
                    <p class="tax-svc-card__text">Independent reviews of GST reporting accuracy to identify inconsistencies, errors, or missed obligations before they create compliance risks.</p>
                    <p class="tax-svc-card__text">Our reviews provide assurance that your reporting framework remains aligned with current tax requirements.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-arrows-rotate" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">GST Reconciliation and Corrections</h3>
                    <p class="tax-svc-card__text">Identification and correction of historical GST discrepancies, reporting errors, and reconciliation issues.</p>
                    <p class="tax-svc-card__text">We work to resolve reporting inconsistencies quickly while minimising disruption to your operations.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">ATO Correspondence Management</h3>
                    <p class="tax-svc-card__text">Professional support managing ATO enquiries, notices, adjustments, and reporting-related communication.</p>
                    <p class="tax-svc-card__text">We act on your behalf to provide clarity, resolve issues efficiently, and ensure obligations are addressed properly.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-scale-balanced" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">GST Compliance Advisory</h3>
                    <p class="tax-svc-card__text">Practical guidance on GST obligations, treatment of transactions, reporting requirements, and regulatory changes affecting your business.</p>
                    <p class="tax-svc-card__text">Our advice helps reduce uncertainty and improve decision-making confidence.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-calendar-check" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Instalment Activity Statements</h3>
                    <p class="tax-svc-card__text">Preparation, review, and lodgement support for instalment activity statements, ensuring timely and accurate reporting.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-headset" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Ongoing Reporting Support</h3>
                    <p class="tax-svc-card__text">Reliable year-round assistance for businesses requiring ongoing BAS and GST oversight.</p>
                    <p class="tax-svc-card__text">We provide structured support to maintain consistency, improve reporting processes, and reduce compliance pressure.</p>
                </article>
            </div>
        </div>
    </section>

    {{-- Why choose --}}
    <section class="tax-svc-block">
        <div class="container">
            <div class="tax-svc-split">
                <div class="tax-svc-split__intro">
                    <p class="tax-svc-kicker">Why choose us</p>
                    <h2 class="tax-svc-h2">Why Businesses Choose Innovative Tax</h2>
                    <p class="tax-svc-lead">Trusted Expertise. Practical Support. Measurable Confidence.</p>
                    <div class="tax-svc-prose">
                        <p>Businesses partner with Innovative Tax because we combine technical tax knowledge with commercial understanding.</p>
                        <p>We understand that BAS and GST compliance is not simply about lodging forms — it is about protecting your business, improving visibility, and ensuring confidence in your financial reporting systems.</p>
                        <p>Our clients value our ability to deliver:</p>
                    </div>
                </div>
                <ul class="tax-svc-why">
                    <li>
                        <strong>Accuracy You Can Trust</strong>
                        <span>Meticulous preparation and detailed review processes that reduce reporting risk.</span>
                    </li>
                    <li>
                        <strong>Timely Lodgements</strong>
                        <span>Reliable reporting schedules that ensure obligations are met without unnecessary pressure.</span>
                    </li>
                    <li>
                        <strong>Commercially Practical Advice</strong>
                        <span>Clear guidance that supports operational efficiency and business decision-making.</span>
                    </li>
                    <li>
                        <strong>Proactive Compliance Management</strong>
                        <span>Early identification of issues before they become larger problems.</span>
                    </li>
                    <li>
                        <strong>Responsive Ongoing Support</strong>
                        <span>Access to specialists who understand your business and provide dependable advice when needed.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Visibility --}}
    <section class="tax-svc-block tax-svc-block--dark">
        <div class="container">
            <div class="tax-svc-highlight">
                <div>
                    <p class="tax-svc-kicker tax-svc-kicker--light">Outcomes</p>
                    <h2 class="tax-svc-h2 tax-svc-h2--light">Supporting Better Financial Visibility</h2>
                    <div class="tax-svc-prose tax-svc-prose--light">
                        <p>Strong BAS and GST processes contribute to more than compliance.</p>
                        <p>They provide business owners with greater financial visibility, improved forecasting confidence, and stronger operational control.</p>
                        <p>By ensuring your reporting systems are accurate and aligned, we help create a stronger financial foundation that supports sustainable growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industries --}}
    <section class="tax-svc-block tax-svc-block--alt">
        <div class="container">
            <header class="tax-svc-head tax-svc-head--center">
                <p class="tax-svc-kicker">Who we work with</p>
                <h2 class="tax-svc-h2">Industries We Support</h2>
                <p class="tax-svc-sub">We support businesses across a wide range of industries, including:</p>
            </header>
            <ul class="tax-svc-tags">
                @foreach ([
                    'Professional Services',
                    'Construction & Trade Businesses',
                    'Healthcare Providers',
                    'Retail & Hospitality',
                    'Technology Companies',
                    'Property & Real Estate',
                    'Manufacturing',
                    'Growing Small and Medium Enterprises',
                ] as $industry)
                    <li>{{ $industry }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="tax-svc-cta">
        <div class="container">
            <div class="tax-svc-cta__inner">
                <p class="tax-svc-kicker tax-svc-kicker--light">Get started</p>
                <h2 class="tax-svc-cta__title">Work With BAS Specialists You Can Trust</h2>
                <div class="tax-svc-prose tax-svc-prose--light tax-svc-prose--center">
                    <p>Compliance should never feel uncertain.</p>
                    <p>With Innovative Tax managing your BAS and GST obligations, your business gains the confidence of knowing your reporting is accurate, timely, and supported by experienced professionals.</p>
                    <p>Whether you need ongoing BAS management, GST advisory support, or assistance resolving reporting issues, our team is here to help.</p>
                </div>
                <p class="tax-svc-cta__emphasis">Speak With Our BAS Specialists Today</p>
                <p class="tax-svc-cta__sub">Partner with experts who help your business stay compliant, reduce risk, and maintain financial clarity with confidence.</p>
                <div class="tax-svc-cta__actions">
                    <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn">Book a consultation</a>
                    <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn tax-svc-btn--outline">Speak with our team</a>
                </div>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
