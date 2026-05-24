@extends('layouts.loan-avada')

@section('title', 'Refinancing - Innovative Finance')

@section('content')
@include('components.loan.avada.header', ['active' => 'services-refinancing'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Refinancing'])

<main id="main" class="clearfix width-100 loan-svc-lp">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">

                {{-- Hero --}}
                <section class="loan-svc-lp-hero">
                    <div class="loan-svc-lp-hero__inner">
                        <p class="loan-svc-lp-kicker">Refinancing</p>
                        <h1 class="loan-svc-lp-hero__title">Reduce Costs and Improve Financial Flexibility</h1>
                        <div class="loan-svc-lp-prose">
                            <p>Your current loan may no longer be the best fit for your financial circumstances.</p>
                            <p>Over time, interest rates change, income structures evolve, property values increase, and new lending products become available in the market. As a result, many borrowers end up paying more than necessary or holding loan structures that no longer support their financial goals.</p>
                            <p>At Innovative Finance, we take a strategic approach to refinancing by reviewing your existing lending arrangements in detail and identifying opportunities to improve financial efficiency, reduce costs, and enhance flexibility.</p>
                            <p>Refinancing is not just about switching lenders — when structured correctly, it can become a powerful financial strategy that supports cash flow improvement, debt optimisation, and long-term wealth positioning.</p>
                            <p>Our finance specialists assess your current loan structure, compare market options, and recommend tailored refinancing solutions that align with your goals and financial direction.</p>
                            <p>Whether your objective is to reduce repayments, access equity, consolidate debt, or improve loan structure flexibility, we ensure every refinancing decision is made with clarity and long-term benefit in mind.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Book a refinancing review</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Speak with a lending specialist</a>
                        </div>
                    </div>
                </section>

                {{-- Strategic guidance --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker">Our approach</p>
                        <h2 class="loan-svc-lp-h2">Strategic Refinancing for Smarter Financial Control</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>Refinancing should always be driven by strategy, not just interest rate comparison.</p>
                            <p>A well-structured refinance can significantly improve your financial position by lowering overall borrowing costs, improving repayment flexibility, and unlocking equity that can be used for investment or personal financial planning.</p>
                            <p>At Innovative Finance, we take a comprehensive view of your financial situation — not just your loan — to ensure refinancing decisions support your broader financial objectives.</p>
                            <p>We evaluate:</p>
                        </div>
                        <ul class="loan-svc-lp-checklist">
                            <li>Current interest rates and repayment structures</li>
                            <li>Loan features and flexibility options</li>
                            <li>Equity position and borrowing capacity</li>
                            <li>Debt consolidation opportunities</li>
                            <li>Long-term financial goals and cash flow requirements</li>
                        </ul>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>This allows us to design refinancing strategies that deliver both immediate benefits and long-term financial improvement.</p>
                        </div>
                    </div>
                </section>

                {{-- Services grid --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--alt">
                    <div class="loan-svc-lp-block__inner">
                        <header class="loan-svc-lp-head loan-svc-lp-head--center">
                            <p class="loan-svc-lp-kicker">What we do</p>
                            <h2 class="loan-svc-lp-h2">Our Refinancing Services Include</h2>
                        </header>
                        <div class="loan-svc-lp-cards">
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-percent" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Interest Rate Reduction Reviews</h3>
                                <p class="loan-svc-lp-card__text">We assess your current loan against market-leading lending options to identify opportunities to reduce interest costs and improve repayment efficiency.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-sliders" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Loan Restructuring</h3>
                                <p class="loan-svc-lp-card__text">Reorganising your loan structure to better align with your financial goals, including repayment terms, split loans, and feature optimisation.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-compress" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Debt Consolidation Refinancing</h3>
                                <p class="loan-svc-lp-card__text">Combine multiple debts into a single, more manageable repayment structure to improve cash flow and reduce financial pressure.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-unlock" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Equity Access Solutions</h3>
                                <p class="loan-svc-lp-card__text">Unlock available equity in your property for investment, renovations, business use, or financial planning purposes.</p>
                                <p class="loan-svc-lp-card__text">We structure equity access responsibly to maintain financial stability.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-arrows-rotate" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Fixed-to-Variable Loan Transitions</h3>
                                <p class="loan-svc-lp-card__text">Support transitioning between fixed and variable loan structures based on market conditions and financial strategy preferences.</p>
                                <p class="loan-svc-lp-card__text">We help you understand timing, risk, and flexibility implications.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-coins" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Cash Flow Improvement Strategies</h3>
                                <p class="loan-svc-lp-card__text">Refinancing solutions designed to improve monthly financial flexibility and reduce repayment stress.</p>
                                <p class="loan-svc-lp-card__text">We structure loans that support sustainable cash flow management.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-heart-pulse" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Mortgage Health Checks</h3>
                                <p class="loan-svc-lp-card__text">Comprehensive review of your existing mortgage to assess performance, cost efficiency, and long-term suitability.</p>
                                <p class="loan-svc-lp-card__text">This helps identify whether refinancing would provide measurable financial benefit.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-handshake" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Switching Lender Support</h3>
                                <p class="loan-svc-lp-card__text">Full assistance managing the transition between lenders, including application handling, documentation, and settlement coordination.</p>
                                <p class="loan-svc-lp-card__text">We ensure the switching process is smooth, efficient, and stress-free.</p>
                            </article>
                        </div>
                    </div>
                </section>

                {{-- How we help --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner">
                        <div class="loan-svc-lp-split">
                            <div>
                                <p class="loan-svc-lp-kicker">How we help</p>
                                <h2 class="loan-svc-lp-h2">End-to-End Refinancing Support You Can Rely On</h2>
                                <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                                    <p>At Innovative Finance, we manage the entire refinancing process from initial assessment through to settlement.</p>
                                    <p>We compare lending options across a wide panel of banks and financial institutions, negotiate competitive terms where possible, and coordinate all administrative requirements on your behalf.</p>
                                    <p>Our process is designed to remove complexity while ensuring you receive a refinancing solution that genuinely improves your financial position.</p>
                                    <p>We focus on:</p>
                                </div>
                            </div>
                            <ul class="loan-svc-lp-why">
                                <li>
                                    <strong>Clear financial analysis</strong>
                                    <span>Thorough review of your current position and refinancing options.</span>
                                </li>
                                <li>
                                    <strong>Transparent lender comparisons</strong>
                                    <span>Side-by-side evaluation so you can decide with confidence.</span>
                                </li>
                                <li>
                                    <strong>Strategic loan structuring</strong>
                                    <span>Structures aligned with your goals, not just the lowest rate.</span>
                                </li>
                                <li>
                                    <strong>Seamless application management</strong>
                                    <span>We handle paperwork and lender communication on your behalf.</span>
                                </li>
                                <li>
                                    <strong>Smooth settlement coordination</strong>
                                    <span>End-to-end support until your new loan is in place.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                {{-- Why choose us --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--alt">
                    <div class="loan-svc-lp-block__inner">
                        <div class="loan-svc-lp-split">
                            <div>
                                <p class="loan-svc-lp-kicker">Why choose us</p>
                                <h2 class="loan-svc-lp-h2">Smarter Refinancing, Better Financial Outcomes</h2>
                                <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                                    <p>Clients choose us because we combine market insight, lending expertise, and long-term financial thinking.</p>
                                    <p>We do not recommend refinancing unless it provides real, measurable benefit.</p>
                                    <p>Our approach ensures you gain:</p>
                                </div>
                            </div>
                            <ul class="loan-svc-lp-why">
                                <li>
                                    <strong>Lower Cost Structures</strong>
                                    <span>Potential reduction in interest and repayment obligations.</span>
                                </li>
                                <li>
                                    <strong>Improved Financial Flexibility</strong>
                                    <span>Loan structures that adapt to your changing needs.</span>
                                </li>
                                <li>
                                    <strong>Access to Equity Opportunities</strong>
                                    <span>Unlock financial value already within your property.</span>
                                </li>
                                <li>
                                    <strong>Simplified Loan Management</strong>
                                    <span>Consolidation and restructuring for easier financial control.</span>
                                </li>
                                <li>
                                    <strong>Strategic Lending Advice</strong>
                                    <span>Refinancing aligned with long-term financial planning, not short-term change.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                {{-- Value band --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--dark">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker loan-svc-lp-kicker--light">Outcomes</p>
                        <h2 class="loan-svc-lp-h2 loan-svc-lp-h2--light">Take Control of Your Financial Future</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light">
                            <p>Refinancing is one of the most effective tools for improving financial efficiency — but only when approached strategically.</p>
                            <p>The right structure can reduce costs, increase flexibility, and open opportunities for investment and growth. The wrong decision, however, can limit financial progress.</p>
                            <p>Our role is to ensure your refinancing decisions are informed, strategic, and aligned with your long-term financial goals.</p>
                        </div>
                    </div>
                </section>

                {{-- CTA --}}
                <section class="loan-svc-lp-cta">
                    <div class="loan-svc-lp-cta__box">
                        <h2 class="loan-svc-lp-cta__title">Take the Next Step With Confidence</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light loan-svc-lp-prose--center">
                            <p>Partner with finance specialists who help you make smarter refinancing decisions with clarity and confidence.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions loan-svc-lp-hero__actions--center">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Book a refinancing review</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Speak with a lending specialist</a>
                        </div>
                    </div>
                </section>

            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
