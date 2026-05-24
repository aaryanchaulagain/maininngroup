@extends('layouts.loan-avada')

@section('title', 'Investment Loans - Innovative Finance')

@section('content')
@include('components.loan.avada.header', ['active' => 'services-investment-loan'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Investment Loans'])

<main id="main" class="clearfix width-100 loan-svc-lp">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">

                {{-- Hero --}}
                <section class="loan-svc-lp-hero">
                    <div class="loan-svc-lp-hero__inner">
                        <p class="loan-svc-lp-kicker">Investment Loans</p>
                        <h1 class="loan-svc-lp-hero__title">Build Wealth Through Smart Property Finance</h1>
                        <div class="loan-svc-lp-prose">
                            <p>Property investment is one of the most effective long-term wealth creation strategies when it is supported by the right lending structure, disciplined financial planning, and a clear understanding of cash flow, risk, and equity growth.</p>
                            <p>At Innovative Finance, we help investors secure tailored lending solutions designed not just to fund property purchases, but to strategically support portfolio growth, optimise borrowing capacity, and improve long-term financial performance.</p>
                            <p>We understand that investment lending is not simply about accessing capital — it is about structuring finance in a way that enhances scalability, protects liquidity, and supports sustainable wealth accumulation over time.</p>
                            <p>Whether you are acquiring your first investment property or expanding an established portfolio, our finance specialists work with you to design lending strategies aligned with your investment objectives, risk appetite, and future financial direction.</p>
                            <p>We work closely with a broad panel of lenders to ensure you have access to flexible, competitive lending options that support both immediate acquisition and long-term portfolio expansion.</p>
                            <p>Our approach focuses on structure first — because in property investment, the right financial structure often matters more than the property itself.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Speak with an investment specialist</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Start your investment loan strategy</a>
                        </div>
                    </div>
                </section>

                {{-- Strategic guidance --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker">Our approach</p>
                        <h2 class="loan-svc-lp-h2">Strategic Property Finance for Investors</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>Successful property investment is built on more than property selection — it is built on how intelligently your finance is structured.</p>
                            <p>The right lending approach can significantly improve borrowing capacity, enhance tax efficiency, improve cash flow management, and accelerate portfolio growth.</p>
                            <p>At Innovative Finance, we take a strategic view of investment lending by assessing your full financial position, existing assets, income structure, and long-term goals.</p>
                            <p>We then design lending strategies that help you:</p>
                        </div>
                        <ul class="loan-svc-lp-checklist">
                            <li>Maximise borrowing efficiency</li>
                            <li>Maintain healthy cash flow positions</li>
                            <li>Leverage equity effectively</li>
                            <li>Diversify investment exposure</li>
                            <li>Build scalable property portfolios over time</li>
                        </ul>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>Our goal is to ensure your finance works as a tool for wealth creation — not a limitation on future growth.</p>
                        </div>
                    </div>
                </section>

                {{-- Services grid --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--alt">
                    <div class="loan-svc-lp-block__inner">
                        <header class="loan-svc-lp-head loan-svc-lp-head--center">
                            <p class="loan-svc-lp-kicker">What we do</p>
                            <h2 class="loan-svc-lp-h2">Our Investment Loan Services Include</h2>
                        </header>
                        <div class="loan-svc-lp-cards">
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-building" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Investment Property Finance</h3>
                                <p class="loan-svc-lp-card__text">Tailored lending solutions for residential and commercial investment properties designed to support acquisition and long-term holding strategies.</p>
                                <p class="loan-svc-lp-card__text">We help structure loans that align with rental income expectations, repayment capacity, and investment objectives.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-chart-line" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Interest-Only Lending Options</h3>
                                <p class="loan-svc-lp-card__text">Strategic interest-only loan structures designed to improve cash flow flexibility and support portfolio expansion strategies.</p>
                                <p class="loan-svc-lp-card__text">We help investors understand when and how to use interest-only lending effectively within a broader financial plan.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-layer-group" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Portfolio Lending Strategies</h3>
                                <p class="loan-svc-lp-card__text">Advanced lending structures designed for investors managing multiple properties.</p>
                                <p class="loan-svc-lp-card__text">We help optimise cross-collateralisation, borrowing capacity, and lender positioning to support scalable portfolio growth.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-unlock" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Equity Release Solutions</h3>
                                <p class="loan-svc-lp-card__text">Unlock usable equity from existing properties to fund additional investment opportunities without disrupting your financial stability.</p>
                                <p class="loan-svc-lp-card__text">We structure equity release strategies that support expansion while maintaining risk balance.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-coins" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Cash Flow Structuring</h3>
                                <p class="loan-svc-lp-card__text">Lending strategies designed to improve monthly cash flow management and long-term financial sustainability.</p>
                                <p class="loan-svc-lp-card__text">We help align repayments with income cycles and investment returns.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-scale-balanced" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Loan Comparison and Lender Analysis</h3>
                                <p class="loan-svc-lp-card__text">Comprehensive evaluation of lending options across multiple banks and financial institutions to identify the most suitable investment lending structure.</p>
                                <p class="loan-svc-lp-card__text">This ensures better flexibility, pricing, and long-term suitability.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Tax-Effective Lending Guidance</h3>
                                <p class="loan-svc-lp-card__text">Strategic guidance on structuring loans in a way that supports tax efficiency in coordination with broader financial planning.</p>
                                <p class="loan-svc-lp-card__text">We help ensure your lending decisions align with long-term wealth strategy considerations.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-arrow-trend-up" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Investment Growth Planning</h3>
                                <p class="loan-svc-lp-card__text">Integrated financial planning support to align lending decisions with broader property investment and wealth-building goals.</p>
                                <p class="loan-svc-lp-card__text">We help investors make informed decisions that support long-term portfolio expansion.</p>
                            </article>
                        </div>
                    </div>
                </section>

                {{-- Strategic advantage --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner">
                        <div class="loan-svc-lp-split">
                            <div>
                                <p class="loan-svc-lp-kicker">Why choose us</p>
                                <h2 class="loan-svc-lp-h2">Our Strategic Advantage</h2>
                                <p class="loan-svc-lp-lead">Lending Structured for Long-Term Wealth Creation</p>
                                <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                                    <p>At Innovative Finance, we do not treat investment loans as standalone transactions.</p>
                                    <p>We view them as part of a larger wealth-building system that requires structure, foresight, and ongoing optimisation.</p>
                                    <p>Our advantage lies in our ability to align lending decisions with your broader investment strategy — ensuring your finance actively supports portfolio expansion rather than restricting it.</p>
                                    <p>We provide:</p>
                                </div>
                            </div>
                            <ul class="loan-svc-lp-why">
                                <li>
                                    <strong>Strategic Lending Design</strong>
                                    <span>Loan structures built around long-term investment goals.</span>
                                </li>
                                <li>
                                    <strong>Portfolio-Level Thinking</strong>
                                    <span>Beyond single-property financing into scalable investment planning.</span>
                                </li>
                                <li>
                                    <strong>Access to Multiple Lenders</strong>
                                    <span>Flexible options across major and specialist lending institutions.</span>
                                </li>
                                <li>
                                    <strong>Cash Flow Optimisation Focus</strong>
                                    <span>Structures designed to support financial sustainability.</span>
                                </li>
                                <li>
                                    <strong>Long-Term Advisory Approach</strong>
                                    <span>Ongoing support as your portfolio evolves.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                {{-- Value band --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--dark">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker loan-svc-lp-kicker--light">Outcomes</p>
                        <h2 class="loan-svc-lp-h2 loan-svc-lp-h2--light">Build a Smarter Investment Strategy</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light">
                            <p>Successful investors understand that wealth creation is not only about property selection — it is about financial structure, timing, and disciplined strategy.</p>
                            <p>The right lending approach can accelerate growth, improve flexibility, and unlock opportunities that would otherwise remain inaccessible.</p>
                            <p>Our role is to ensure your investment finance is structured intelligently, aligned with your goals, and designed for long-term success.</p>
                        </div>
                    </div>
                </section>

                {{-- CTA --}}
                <section class="loan-svc-lp-cta">
                    <div class="loan-svc-lp-cta__box">
                        <h2 class="loan-svc-lp-cta__title">Grow Your Property Portfolio With Confidence and Clarity</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light loan-svc-lp-prose--center">
                            <p>Partner with finance specialists who understand investment strategy, portfolio lending, and long-term wealth creation.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions loan-svc-lp-hero__actions--center">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Speak with an investment specialist</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Start your investment loan strategy</a>
                        </div>
                    </div>
                </section>

            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
