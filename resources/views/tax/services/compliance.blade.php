@extends('layouts.tax-zimed')

@section('body-class', 'page-compliance wp-singular page elementor-page')

@section('title', 'Compliance Services – Innovative associates')

@section('content')
@php
    $cdn = site_uploads('tax');
@endphp

@include('components.tax.zimed.header', ['active' => 'services-compliance'])

<div class="full-width-page tax-svc-landing tax-svc-landing--compliance">
    <x-tax.zimed.page-header
        title="Compliance Services"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Services', 'url' => route('tax.services.index')],
            ['label' => 'Compliance', 'current' => true],
        ]"
    />

    {{-- Hero --}}
    <section class="tax-svc-hero">
        <div class="container">
            <div class="tax-svc-hero__grid">
                <div class="tax-svc-hero__content">
                    <p class="tax-svc-kicker">Compliance Services</p>
                    <h1 class="tax-svc-hero__title">Protect Your Business Through Proactive Compliance</h1>
                    <div class="tax-svc-prose">
                        <p>Regulatory compliance is not simply about meeting obligations — it is a critical part of protecting business continuity, reducing operational risk, and supporting long-term business success.</p>
                        <p>As legislation evolves and reporting expectations become increasingly complex, businesses must maintain accurate systems, clear governance processes, and proactive oversight to remain compliant and resilient.</p>
                        <p>At Innovative Tax, we help businesses across Australia meet their financial, taxation, and regulatory obligations with confidence, precision, and consistency.</p>
                        <p>Our compliance solutions are designed to strengthen reporting accuracy, reduce exposure to risk, and ensure your business remains aligned with changing legislative requirements.</p>
                        <p>We work as a proactive compliance partner — helping businesses identify vulnerabilities early, improve internal processes, and maintain the confidence that comes from strong regulatory alignment.</p>
                    </div>
                    <div class="tax-svc-hero__actions">
                        <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn">Book a compliance consultation</a>
                        <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn tax-svc-btn--outline">Speak with our specialists</a>
                    </div>
                </div>
                <div class="tax-svc-hero__media">
                    <img
                        src="{{ $cdn }}/2021/03/accounting-and-taxation-services.jpg"
                        width="500"
                        height="344"
                        alt="Business compliance services"
                        loading="eager"
                    >
                </div>
            </div>
        </div>
    </section>

    {{-- Strategic compliance intro --}}
    <section class="tax-svc-block">
        <div class="container">
            <div class="tax-svc-intro-band">
                <p class="tax-svc-kicker">Our approach</p>
                <h2 class="tax-svc-h2">Strategic Compliance Support for Modern Businesses</h2>
                <div class="tax-svc-prose">
                    <p>Compliance is most effective when it is embedded into the way your business operates.</p>
                    <p>Reactive compliance often creates unnecessary pressure, exposes businesses to avoidable risk, and limits visibility over reporting obligations.</p>
                    <p>Our approach focuses on creating practical compliance frameworks that support operational efficiency while ensuring your financial and regulatory responsibilities are consistently met.</p>
                    <p>By combining technical expertise with commercial understanding, we help businesses simplify complexity and establish systems that support sustainable growth.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="tax-svc-block tax-svc-block--alt">
        <div class="container">
            <header class="tax-svc-head tax-svc-head--center">
                <p class="tax-svc-kicker">What we do</p>
                <h2 class="tax-svc-h2">Our Compliance Services Include</h2>
            </header>
            <div class="tax-svc-cards tax-svc-cards--2">
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-magnifying-glass-dollar" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Tax Compliance Reviews</h3>
                    <p class="tax-svc-card__text">Detailed assessments of tax reporting obligations to identify inaccuracies, risks, or areas requiring correction.</p>
                    <p class="tax-svc-card__text">Our reviews ensure your tax framework remains aligned with current ATO requirements and evolving legislation.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-chart-line" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Financial Reporting Compliance</h3>
                    <p class="tax-svc-card__text">Support for maintaining accurate financial reporting processes that satisfy legal, operational, and governance obligations.</p>
                    <p class="tax-svc-card__text">We help ensure reporting systems remain reliable, transparent, and audit-ready.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-building" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">ASIC and Regulatory Reporting</h3>
                    <p class="tax-svc-card__text">Preparation, review, and support for statutory reporting obligations, including ASIC-related compliance requirements.</p>
                    <p class="tax-svc-card__text">We help businesses maintain consistency and accuracy across regulatory submissions.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-folder-open" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Record-Keeping Framework Support</h3>
                    <p class="tax-svc-card__text">Strong record-keeping systems are essential for compliance confidence.</p>
                    <p class="tax-svc-card__text">We review and strengthen documentation frameworks to support reporting accuracy, audit readiness, and regulatory transparency.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Risk and Governance Assessments</h3>
                    <p class="tax-svc-card__text">Evaluation of governance controls and compliance risk exposure across business operations.</p>
                    <p class="tax-svc-card__text">Our assessments identify gaps and provide practical recommendations for stronger oversight.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-gears" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Internal Compliance Process Reviews</h3>
                    <p class="tax-svc-card__text">Comprehensive review of internal reporting workflows and compliance procedures.</p>
                    <p class="tax-svc-card__text">We help improve operational efficiency while reducing the likelihood of reporting errors and process failures.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">ATO Response and Remediation Support</h3>
                    <p class="tax-svc-card__text">Professional support managing ATO enquiries, notices, disputes, reviews, and remediation processes.</p>
                    <p class="tax-svc-card__text">We provide practical guidance and clear resolution pathways that reduce stress and strengthen confidence.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-bell" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Ongoing Legislative Monitoring</h3>
                    <p class="tax-svc-card__text">Regulatory environments continue to evolve.</p>
                    <p class="tax-svc-card__text">We monitor legislative changes and provide proactive guidance to ensure your business remains aligned with current obligations.</p>
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
                    <p class="tax-svc-lead">Trusted Compliance Expertise With Commercial Understanding</p>
                    <div class="tax-svc-prose">
                        <p>Businesses choose Innovative Tax because we combine technical regulatory expertise with practical business insight.</p>
                        <p>We understand that effective compliance support must not only satisfy legal requirements — it must also strengthen operational performance and reduce unnecessary administrative burden.</p>
                        <p>Our clients value:</p>
                    </div>
                </div>
                <ul class="tax-svc-why">
                    <li>
                        <strong>Technical Accuracy</strong>
                        <span>Detailed oversight that reduces compliance risk.</span>
                    </li>
                    <li>
                        <strong>Proactive Monitoring</strong>
                        <span>Early identification of issues before they escalate.</span>
                    </li>
                    <li>
                        <strong>Commercially Practical Advice</strong>
                        <span>Recommendations designed for real business environments.</span>
                    </li>
                    <li>
                        <strong>Clear Communication</strong>
                        <span>Straightforward guidance without unnecessary complexity.</span>
                    </li>
                    <li>
                        <strong>Long-Term Partnership Support</strong>
                        <span>Ongoing compliance confidence as your business evolves.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Business confidence --}}
    <section class="tax-svc-block tax-svc-block--dark">
        <div class="container">
            <div class="tax-svc-highlight">
                <div>
                    <p class="tax-svc-kicker tax-svc-kicker--light">Outcomes</p>
                    <h2 class="tax-svc-h2 tax-svc-h2--light">Strengthening Business Confidence Through Better Compliance</h2>
                    <div class="tax-svc-prose tax-svc-prose--light">
                        <p>Strong compliance systems provide more than protection.</p>
                        <p>They improve reporting reliability, strengthen internal decision-making, enhance governance standards, and create greater confidence for business owners, stakeholders, and external regulators.</p>
                        <p>By building proactive compliance frameworks, we help businesses create stronger foundations for sustainable performance.</p>
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
                    'Financial Services',
                    'Healthcare Providers',
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
                <h2 class="tax-svc-cta__title">A Proactive Compliance Partner</h2>
                <div class="tax-svc-prose tax-svc-prose--light tax-svc-prose--center">
                    <p>Compliance should never feel uncertain or reactive.</p>
                    <p>With Innovative Tax as your compliance partner, your business gains expert oversight, stronger internal systems, and the confidence that every obligation is being managed properly.</p>
                    <p>Whether you need a compliance review, remediation support, or ongoing advisory oversight, our specialists are here to help.</p>
                </div>
                <p class="tax-svc-cta__emphasis">Strengthen Your Compliance Framework Today</p>
                <p class="tax-svc-cta__sub">Partner with experienced advisors who help protect your business through proactive compliance management and trusted regulatory expertise.</p>
                <div class="tax-svc-cta__actions">
                    <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn">Book a compliance consultation</a>
                    <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn tax-svc-btn--outline">Speak with our specialists</a>
                </div>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
