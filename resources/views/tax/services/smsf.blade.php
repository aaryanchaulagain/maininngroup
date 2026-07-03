@extends('layouts.tax-zimed')

@section('body-class', 'page-smsf wp-singular page elementor-page')

@section('title', 'SMSF Services – Innovative associates')

@section('content')
@php
    $cdn = site_uploads('tax');
@endphp

@include('components.tax.zimed.header', ['active' => 'services-smsf'])

<div class="full-width-page tax-svc-landing tax-svc-landing--smsf">
    <x-tax.zimed.page-header
        title="SMSF Services"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Services', 'url' => route('tax.services.index')],
            ['label' => 'SMSF', 'current' => true],
        ]"
    />

    {{-- Hero --}}
    <section class="tax-svc-hero">
        <div class="container">
            <div class="tax-svc-hero__grid">
                <div class="tax-svc-hero__content">
                    <p class="tax-svc-kicker">SMSF Services</p>
                    <h1 class="tax-svc-hero__title">Strategic Superannuation Management With Confidence</h1>
                    <div class="tax-svc-prose">
                        <p>A Self-Managed Super Fund (SMSF) provides greater control, flexibility, and investment choice — giving trustees the ability to actively shape their long-term retirement strategy.</p>
                        <p>However, with that control comes significant responsibility.</p>
                        <p>SMSFs are subject to strict regulatory requirements, ongoing compliance obligations, detailed reporting standards, and trustee responsibilities that demand careful oversight and technical expertise.</p>
                        <p>At Innovative Tax, we provide specialist SMSF advisory and administration support designed to help trustees manage their obligations with clarity, confidence, and peace of mind.</p>
                        <p>We work closely with individual trustees, families, and professional advisors across Australia to ensure SMSFs remain compliant, structured effectively, and aligned with long-term financial objectives.</p>
                        <p>Our role is to simplify complexity, strengthen compliance confidence, and provide strategic support that allows trustees to make informed decisions with certainty.</p>
                    </div>
                    <div class="tax-svc-hero__actions">
                        <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn">Book an SMSF consultation</a>
                        <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn tax-svc-btn--outline">Speak with an advisor</a>
                    </div>
                </div>
                <div class="tax-svc-hero__media">
                    <img
                        src="{{ $cdn }}/2021/03/you-have-wonderful-ideas-PSVUBWM-768x512.jpg"
                        width="768"
                        height="512"
                        alt="SMSF advisory services"
                        loading="eager"
                    >
                </div>
            </div>
        </div>
    </section>

    {{-- Specialist support intro --}}
    <section class="tax-svc-block">
        <div class="container">
            <div class="tax-svc-intro-band">
                <p class="tax-svc-kicker">Expert oversight</p>
                <h2 class="tax-svc-h2">Specialist SMSF Support for Long-Term Financial Confidence</h2>
                <div class="tax-svc-prose">
                    <p>Managing an SMSF requires more than administration.</p>
                    <p>Trustees must navigate changing superannuation legislation, ensure investment decisions remain compliant, maintain accurate records, and satisfy annual reporting and audit requirements.</p>
                    <p>Without expert oversight, even minor errors can create compliance issues, penalties, or operational disruption.</p>
                    <p>Our SMSF specialists provide proactive support across every stage of fund management — from establishment and structuring through to annual compliance, reporting, and ongoing strategic administration.</p>
                    <p>We work to ensure your fund remains fully compliant while supporting better visibility, stronger governance, and informed financial decision-making.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="tax-svc-block tax-svc-block--alt">
        <div class="container">
            <header class="tax-svc-head tax-svc-head--center">
                <p class="tax-svc-kicker">What we do</p>
                <h2 class="tax-svc-h2">Our SMSF Services Include</h2>
            </header>
            <div class="tax-svc-cards tax-svc-cards--2">
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-building-columns" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">SMSF Establishment and Structuring</h3>
                    <p class="tax-svc-card__text">Establish your Self-Managed Super Fund with confidence.</p>
                    <p class="tax-svc-card__text">We assist with the full setup process, including trust deed structuring, trustee registration, ATO registration, and compliance framework establishment.</p>
                    <p class="tax-svc-card__text">Our team ensures your fund is structured correctly from the beginning to support long-term efficiency and regulatory alignment.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-file-lines" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Annual Financial Statement Preparation</h3>
                    <p class="tax-svc-card__text">Comprehensive preparation of annual SMSF financial statements with detailed accuracy and transparency.</p>
                    <p class="tax-svc-card__text">We ensure your fund records are properly reconciled and prepared for reporting and audit requirements.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-user-check" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Independent Audit Coordination</h3>
                    <p class="tax-svc-card__text">SMSFs are legally required to complete an independent annual audit.</p>
                    <p class="tax-svc-card__text">We coordinate directly with approved independent auditors, manage documentation requirements, and ensure the audit process is efficient and compliant.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Regulatory Compliance Monitoring</h3>
                    <p class="tax-svc-card__text">Ongoing oversight of regulatory requirements to ensure your fund remains aligned with current superannuation legislation.</p>
                    <p class="tax-svc-card__text">We proactively identify compliance risks and provide guidance to resolve issues before they escalate.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Tax Return Preparation and Lodgement</h3>
                    <p class="tax-svc-card__text">Preparation and lodgement of annual SMSF tax returns with complete accuracy and compliance confidence.</p>
                    <p class="tax-svc-card__text">We ensure reporting obligations are met correctly and on time.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-coins" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Pension and Contribution Reporting</h3>
                    <p class="tax-svc-card__text">Accurate reporting of pension payments, contributions, transfer balance caps, and related superannuation obligations.</p>
                    <p class="tax-svc-card__text">Our team ensures reporting aligns with legislative requirements while supporting trustee confidence.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Trustee Guidance and Education</h3>
                    <p class="tax-svc-card__text">SMSF trustees carry legal responsibility for fund management.</p>
                    <p class="tax-svc-card__text">We provide practical guidance to help trustees understand obligations, governance expectations, and best-practice decision-making.</p>
                    <p class="tax-svc-card__text">This empowers greater confidence and informed control.</p>
                </article>
                <article class="tax-svc-card">
                    <span class="tax-svc-card__icon"><i class="fa-solid fa-headset" aria-hidden="true"></i></span>
                    <h3 class="tax-svc-card__title">Ongoing Strategic Administration Support</h3>
                    <p class="tax-svc-card__text">Reliable year-round SMSF administration support tailored to your fund’s structure and goals.</p>
                    <p class="tax-svc-card__text">We provide ongoing oversight, compliance reminders, reporting assistance, and practical advice as circumstances evolve.</p>
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
                    <h2 class="tax-svc-h2">Why Trustees Choose Innovative Tax</h2>
                    <p class="tax-svc-lead">Trusted SMSF Expertise With Practical Support</p>
                    <div class="tax-svc-prose">
                        <p>Trustees partner with Innovative Tax because we combine deep technical SMSF knowledge with clear, practical guidance.</p>
                        <p>We understand that effective SMSF management requires more than compliance expertise — it requires trusted advisory support that simplifies complexity and supports confident long-term financial strategy.</p>
                        <p>Our clients value:</p>
                    </div>
                </div>
                <ul class="tax-svc-why">
                    <li>
                        <strong>Specialist SMSF Knowledge</strong>
                        <span>Expert guidance across evolving superannuation legislation.</span>
                    </li>
                    <li>
                        <strong>Compliance Confidence</strong>
                        <span>Structured processes that reduce risk and strengthen accuracy.</span>
                    </li>
                    <li>
                        <strong>Clear Practical Advice</strong>
                        <span>Straightforward support without unnecessary complexity.</span>
                    </li>
                    <li>
                        <strong>Responsive Ongoing Guidance</strong>
                        <span>Access to advisors who understand your fund and priorities.</span>
                    </li>
                    <li>
                        <strong>Strategic Long-Term Focus</strong>
                        <span>Support aligned with retirement outcomes and financial goals.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Trustee decision-making --}}
    <section class="tax-svc-block tax-svc-block--dark">
        <div class="container">
            <div class="tax-svc-highlight">
                <div>
                    <p class="tax-svc-kicker tax-svc-kicker--light">Outcomes</p>
                    <h2 class="tax-svc-h2 tax-svc-h2--light">Supporting Better Trustee Decision-Making</h2>
                    <div class="tax-svc-prose tax-svc-prose--light">
                        <p>An SMSF gives trustees direct control over their retirement strategy.</p>
                        <p>Our role is to ensure that control is supported by expert oversight, accurate reporting, and informed guidance.</p>
                        <p>We help trustees strengthen governance, improve visibility, and make strategic decisions confidently while maintaining full compliance with regulatory expectations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Who we work with --}}
    <section class="tax-svc-block tax-svc-block--alt">
        <div class="container">
            <header class="tax-svc-head tax-svc-head--center">
                <p class="tax-svc-kicker">Who we work with</p>
                <h2 class="tax-svc-h2">Trustees &amp; Funds We Support</h2>
                <p class="tax-svc-sub">We support:</p>
            </header>
            <ul class="tax-svc-tags">
                @foreach ([
                    'Individual SMSF Trustees',
                    'Family SMSFs',
                    'Business Owners Managing SMSFs',
                    'High-Net-Worth Trustees',
                    'Professional Service Clients',
                    'Trustees Transitioning to Retirement Phase',
                ] as $client)
                    <li>{{ $client }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="tax-svc-cta">
        <div class="container">
            <div class="tax-svc-cta__inner">
                <p class="tax-svc-kicker tax-svc-kicker--light">Get started</p>
                <h2 class="tax-svc-cta__title">Simplifying SMSF Complexity</h2>
                <div class="tax-svc-prose tax-svc-prose--light tax-svc-prose--center">
                    <p>SMSF administration should never feel uncertain or overwhelming.</p>
                    <p>With Innovative Tax as your SMSF partner, you gain experienced support that helps protect compliance, improve clarity, and support long-term superannuation success.</p>
                    <p>Whether you are establishing a new fund or require expert support for ongoing administration, our specialists are ready to help.</p>
                </div>
                <p class="tax-svc-cta__emphasis">Talk to Our SMSF Advisors Today</p>
                <p class="tax-svc-cta__sub">Partner with specialists who help trustees manage superannuation responsibilities with confidence, clarity, and strategic support.</p>
                <div class="tax-svc-cta__actions">
                    <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn">Book an SMSF consultation</a>
                    <a href="{{ route('tax.contact') }}" class="thm-btn tax-svc-btn tax-svc-btn--outline">Speak with an advisor</a>
                </div>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
