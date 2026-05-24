@extends('layouts.loan-avada')

@section('title', 'Commercial Finance - Innovative Finance')

@section('content')
@include('components.loan.avada.header', ['active' => 'services-commercial-finance'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Commercial Finance'])

<main id="main" class="clearfix width-100 loan-svc-lp">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">

                {{-- Hero --}}
                <section class="loan-svc-lp-hero">
                    <div class="loan-svc-lp-hero__inner">
                        <p class="loan-svc-lp-kicker">Commercial Finance</p>
                        <h1 class="loan-svc-lp-hero__title">Strategic Funding for Business Growth</h1>
                        <div class="loan-svc-lp-prose">
                            <p>Business growth is never accidental — it is built on timing, strategy, and access to the right capital. At Innovative Finance, we provide structured commercial funding solutions that empower businesses to scale, invest, and operate with confidence in competitive markets.</p>
                            <p>Whether you are expanding operations, acquiring a new business, purchasing commercial property, or managing cash flow fluctuations, we help you secure finance that aligns with your long-term business strategy — not just short-term needs.</p>
                            <p>We act as your finance partner, working closely with a wide panel of lenders to structure solutions that are flexible, sustainable, and commercially intelligent.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Speak with a commercial finance specialist</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Get a tailored finance solution</a>
                        </div>
                    </div>
                </section>

                {{-- Tailored funding --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker">Our approach</p>
                        <h2 class="loan-svc-lp-h2">Tailored Funding for Every Stage of Growth</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>Every business operates differently. That’s why we design funding solutions based on your industry, cash flow cycle, growth stage, and risk profile.</p>
                            <p>We don’t just match you with a lender — we structure finance that supports performance, stability, and expansion.</p>
                        </div>
                    </div>
                </section>

                {{-- Services overview + deep dives --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--alt">
                    <div class="loan-svc-lp-block__inner">
                        <header class="loan-svc-lp-head loan-svc-lp-head--center">
                            <p class="loan-svc-lp-kicker">What we do</p>
                            <h2 class="loan-svc-lp-h2">Our Commercial Finance Services Include</h2>
                        </header>
                        <div class="loan-svc-lp-block__inner--narrow" style="margin: 0 auto 2rem;">
                            <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                                <p>We provide a full suite of business lending solutions, including:</p>
                            </div>
                            <ul class="loan-svc-lp-checklist">
                                <li>Business acquisition finance for purchasing or merging businesses</li>
                                <li>Commercial property loans for offices, warehouses, and retail spaces</li>
                                <li>Development finance for construction and property development projects</li>
                                <li>Working capital solutions to support daily operations and growth</li>
                                <li>Cash flow funding to manage seasonal or operational gaps</li>
                                <li>Equipment and asset expansion finance for scaling operations</li>
                                <li>Trade finance and debtor finance to improve liquidity cycles</li>
                                <li>Custom structured lending solutions tailored to complex requirements</li>
                            </ul>
                        </div>
                        <div class="loan-svc-lp-cards">
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-handshake" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Business Acquisition Finance</h3>
                                <p class="loan-svc-lp-card__text">Acquiring an existing business is one of the fastest ways to scale. We help structure acquisition funding that ensures smooth transitions, manageable repayment terms, and long-term profitability.</p>
                                <p class="loan-svc-lp-card__text">From due diligence support to lender negotiation, we assist through the entire process.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-building" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Commercial Property &amp; Development Finance</h3>
                                <p class="loan-svc-lp-card__text">We support businesses and investors in securing finance for commercial office buildings, retail and hospitality spaces, industrial warehouses, and property development projects.</p>
                                <p class="loan-svc-lp-card__text">Our team structures funding to align with construction timelines, projected cash flow, and project milestones.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-coins" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Working Capital &amp; Cash Flow Solutions</h3>
                                <p class="loan-svc-lp-card__text">Cash flow is the lifeline of every business. We help businesses maintain operational stability through flexible funding options that smooth out income fluctuations and seasonal cycles.</p>
                                <p class="loan-svc-lp-card__text">This ensures you can continue operations, pay suppliers, and invest in growth without disruption.</p>
                            </article>
                        </div>
                    </div>
                </section>

                {{-- Commercial expertise --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner">
                        <div class="loan-svc-lp-split">
                            <div>
                                <p class="loan-svc-lp-kicker">Our expertise</p>
                                <h2 class="loan-svc-lp-h2">Our Commercial Expertise</h2>
                                <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                                    <p>At Innovative Finance, we combine financial strategy with lender relationships to unlock better outcomes for our clients.</p>
                                    <p>We understand that commercial lending is complex — involving documentation, risk profiling, and lender-specific requirements. Our role is to simplify this process while improving your approval chances and financing terms.</p>
                                    <p>We focus on:</p>
                                </div>
                            </div>
                            <ul class="loan-svc-lp-why">
                                <li>
                                    <strong>Structuring deals for maximum lender approval strength</strong>
                                    <span>Presentations and structures built for commercial credit criteria.</span>
                                </li>
                                <li>
                                    <strong>Negotiating competitive interest rates and terms</strong>
                                    <span>Access to a wide panel with room to compare and negotiate.</span>
                                </li>
                                <li>
                                    <strong>Aligning finance with business cash flow cycles</strong>
                                    <span>Repayments matched to how your business earns revenue.</span>
                                </li>
                                <li>
                                    <strong>Reducing financial pressure during expansion phases</strong>
                                    <span>Funding that supports growth without overextending liquidity.</span>
                                </li>
                                <li>
                                    <strong>Creating scalable funding strategies for long-term growth</strong>
                                    <span>Finance designed to evolve as your business scales.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                {{-- Why choose us --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--alt">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker">Why choose us</p>
                        <h2 class="loan-svc-lp-h2">Why Businesses Work With Us</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>Businesses choose Innovative Finance because we go beyond standard broking. We provide strategic advisory-backed lending solutions designed to support real business outcomes.</p>
                            <p>We act as a bridge between your vision and the capital required to achieve it.</p>
                        </div>
                    </div>
                </section>

                {{-- Value band --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--dark">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker loan-svc-lp-kicker--light">Outcomes</p>
                        <h2 class="loan-svc-lp-h2 loan-svc-lp-h2--light">Unlock Business Potential</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light">
                            <p>The right finance structure can transform how your business grows, scales, and competes.</p>
                            <p>At Innovative Finance, we help you access funding that is not only available — but strategically designed for your success.</p>
                            <p>Unlock business potential with structured commercial finance solutions built for growth.</p>
                        </div>
                    </div>
                </section>

                {{-- CTA --}}
                <section class="loan-svc-lp-cta">
                    <div class="loan-svc-lp-cta__box">
                        <h2 class="loan-svc-lp-cta__title">Partner With Specialists in Commercial Lending</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light loan-svc-lp-prose--center">
                            <p>Structured commercial finance solutions built for growth — from acquisition and property to working capital and beyond.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions loan-svc-lp-hero__actions--center">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Speak with a commercial finance specialist</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Get a tailored finance solution</a>
                        </div>
                    </div>
                </section>

            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
