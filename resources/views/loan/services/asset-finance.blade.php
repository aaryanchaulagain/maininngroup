@extends('layouts.loan-avada')

@section('title', 'Asset Finance - Innovative Finance')

@section('content')
@include('components.loan.avada.header', ['active' => 'services-asset-finance'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Asset Finance'])

<main id="main" class="clearfix width-100 loan-svc-lp">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">

                {{-- Hero --}}
                <section class="loan-svc-lp-hero">
                    <div class="loan-svc-lp-hero__inner">
                        <p class="loan-svc-lp-kicker">Asset Finance</p>
                        <h1 class="loan-svc-lp-hero__title">Finance the Assets That Power Your Business</h1>
                        <div class="loan-svc-lp-prose">
                            <p>Access to the right equipment, vehicles, machinery, and technology is essential for maintaining productivity, improving operational efficiency, and enabling long-term business growth.</p>
                            <p>However, purchasing business-critical assets outright can place significant pressure on cash flow and limit financial flexibility.</p>
                            <p>At Innovative Finance, we provide tailored asset finance solutions that allow businesses to acquire the assets they need while maintaining healthy working capital and operational stability.</p>
                            <p>Our approach focuses on structuring finance in a way that supports growth without restricting liquidity — ensuring your business can continue investing in opportunities, managing day-to-day operations, and scaling with confidence.</p>
                            <p>Whether you are upgrading equipment, expanding your fleet, or investing in new technology, we help design finance solutions that align with your operational requirements and long-term business strategy.</p>
                            <p>We work with a wide network of lenders and financial institutions to secure competitive funding structures suited to your industry, asset type, and cash flow position.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Speak with an asset finance specialist</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Get a tailored finance solution</a>
                        </div>
                    </div>
                </section>

                {{-- Strategic guidance --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker">Our approach</p>
                        <h2 class="loan-svc-lp-h2">Strategic Asset Financing for Business Growth</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>Asset finance is more than just a funding solution — it is a strategic tool that allows businesses to grow without compromising financial stability.</p>
                            <p>When structured correctly, asset finance enables organisations to preserve capital, manage cash flow effectively, and align repayment structures with revenue generation.</p>
                            <p>At Innovative Finance, we take a commercial approach to asset funding by understanding how each asset contributes to your business operations and revenue cycle.</p>
                            <p>We then design financing solutions that:</p>
                        </div>
                        <ul class="loan-svc-lp-checklist">
                            <li>Reduce upfront capital pressure</li>
                            <li>Maintain working capital availability</li>
                            <li>Align repayments with asset usage</li>
                            <li>Improve operational scalability</li>
                            <li>Support long-term business expansion</li>
                        </ul>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>Our focus is on ensuring your assets generate value while your finance structure remains efficient, flexible, and sustainable.</p>
                        </div>
                    </div>
                </section>

                {{-- Services grid --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--alt">
                    <div class="loan-svc-lp-block__inner">
                        <header class="loan-svc-lp-head loan-svc-lp-head--center">
                            <p class="loan-svc-lp-kicker">What we do</p>
                            <h2 class="loan-svc-lp-h2">Our Asset Finance Solutions Include</h2>
                        </header>
                        <div class="loan-svc-lp-cards">
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-truck" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Vehicle and Fleet Finance</h3>
                                <p class="loan-svc-lp-card__text">Tailored financing solutions for business vehicles, fleet expansion, and commercial transport requirements.</p>
                                <p class="loan-svc-lp-card__text">We structure repayments to align with operational usage and business cash flow cycles.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-gears" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Equipment and Machinery Finance</h3>
                                <p class="loan-svc-lp-card__text">Funding solutions for essential equipment and machinery across construction, manufacturing, logistics, and trade industries.</p>
                                <p class="loan-svc-lp-card__text">We ensure asset acquisition supports productivity without straining capital resources.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-laptop" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Technology and Software Funding</h3>
                                <p class="loan-svc-lp-card__text">Finance solutions for digital infrastructure, business systems, software platforms, and technology upgrades.</p>
                                <p class="loan-svc-lp-card__text">We help businesses stay competitive by enabling access to modern tools without large upfront costs.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-file-contract" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Commercial Asset Leasing</h3>
                                <p class="loan-svc-lp-card__text">Flexible leasing arrangements that allow businesses to use essential assets without full ownership commitments.</p>
                                <p class="loan-svc-lp-card__text">Ideal for businesses prioritising flexibility and short-to-medium term asset usage.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-calendar-check" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Hire Purchase Solutions</h3>
                                <p class="loan-svc-lp-card__text">Structured payment plans that allow gradual ownership of assets over time while maintaining operational use from day one.</p>
                                <p class="loan-svc-lp-card__text">We ensure repayment structures are aligned with business affordability.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-landmark" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Chattel Mortgage Finance</h3>
                                <p class="loan-svc-lp-card__text">Traditional secured asset finance solutions offering ownership benefits with structured repayment terms.</p>
                                <p class="loan-svc-lp-card__text">We help optimise loan structure for tax efficiency and cash flow management.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-arrows-rotate" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Asset Refinancing</h3>
                                <p class="loan-svc-lp-card__text">Unlock value from existing assets through refinancing strategies designed to improve liquidity and support further investment.</p>
                                <p class="loan-svc-lp-card__text">We assess current asset positions and identify opportunities for financial optimisation.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-chart-line" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Flexible Repayment Structuring</h3>
                                <p class="loan-svc-lp-card__text">Custom repayment schedules designed to align with seasonal income, project cycles, and business cash flow patterns.</p>
                                <p class="loan-svc-lp-card__text">We ensure financial commitments remain manageable and predictable.</p>
                            </article>
                        </div>
                    </div>
                </section>

                {{-- Why choose us --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner">
                        <div class="loan-svc-lp-split">
                            <div>
                                <p class="loan-svc-lp-kicker">Why choose us</p>
                                <h2 class="loan-svc-lp-h2">Why Businesses Choose Innovative Finance</h2>
                                <p class="loan-svc-lp-lead">Finance Built Around Operational Success</p>
                                <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                                    <p>Businesses choose Innovative Finance because we understand that asset acquisition is not just a purchase decision — it is an operational and financial strategy.</p>
                                    <p>Our solutions are designed to support both immediate business needs and long-term financial sustainability.</p>
                                    <p>Clients benefit from:</p>
                                </div>
                            </div>
                            <ul class="loan-svc-lp-why">
                                <li>
                                    <strong>Cash Flow Protection</strong>
                                    <span>Preserve working capital while acquiring essential assets.</span>
                                </li>
                                <li>
                                    <strong>Tailored Funding Structures</strong>
                                    <span>Finance solutions aligned with industry and operational requirements.</span>
                                </li>
                                <li>
                                    <strong>Access to Multiple Lenders</strong>
                                    <span>Competitive options across a broad lending network.</span>
                                </li>
                                <li>
                                    <strong>Flexible Repayment Options</strong>
                                    <span>Structures that adapt to business cycles and revenue patterns.</span>
                                </li>
                                <li>
                                    <strong>Strategic Financial Insight</strong>
                                    <span>Advice that connects asset finance to overall business growth strategy.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                {{-- Value band --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--dark">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker loan-svc-lp-kicker--light">Outcomes</p>
                        <h2 class="loan-svc-lp-h2 loan-svc-lp-h2--light">Equip Your Business for Growth</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light">
                            <p>The right assets can significantly improve efficiency, productivity, and profitability — but only when supported by the right financial structure.</p>
                            <p>At Innovative Finance, we ensure your asset acquisition decisions are supported by funding solutions that strengthen, rather than strain, your business.</p>
                            <p>Our goal is to help you grow confidently, operate efficiently, and maintain financial flexibility at every stage of your business journey.</p>
                        </div>
                    </div>
                </section>

                {{-- CTA --}}
                <section class="loan-svc-lp-cta">
                    <div class="loan-svc-lp-cta__box">
                        <h2 class="loan-svc-lp-cta__title">Build Your Business With the Right Finance Partner</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light loan-svc-lp-prose--center">
                            <p>Partner with finance specialists who understand both business operations and strategic funding structures.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions loan-svc-lp-hero__actions--center">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Speak with an asset finance specialist</a>
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
