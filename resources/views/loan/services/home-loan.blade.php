@extends('layouts.loan-avada')

@section('title', 'Home Loans - Innovative Finance')

@section('content')
@include('components.loan.avada.header', ['active' => 'services-home-loan'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Home Loans'])

<main id="main" class="clearfix width-100 loan-svc-lp">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">

                {{-- Hero --}}
                <section class="loan-svc-lp-hero">
                    <div class="loan-svc-lp-hero__inner">
                        <p class="loan-svc-lp-kicker">Home Loans</p>
                        <h1 class="loan-svc-lp-hero__title">Find the Right Home Loan With Confidence</h1>
                        <div class="loan-svc-lp-prose">
                            <p>Buying a home is one of the most important financial decisions you will make — not just in terms of property, but in shaping your long-term financial stability, lifestyle, and wealth creation journey.</p>
                            <p>At Innovative Finance, we simplify the entire home lending process by helping you secure competitive, structured, and well-matched home loan solutions tailored to your financial goals, borrowing capacity, and future plans.</p>
                            <p>We understand that every borrower is different. Income structure, deposit size, credit profile, employment type, and long-term objectives all play a role in determining the right lending strategy. That’s why we take a personalised, strategic approach rather than a one-size-fits-all solution.</p>
                            <p>Whether you are purchasing your first home, upgrading to a new property, refinancing an existing loan, or investing in real estate, our finance specialists guide you through every stage of the journey — from planning and pre-approval through to settlement and beyond.</p>
                            <p>We work with a wide panel of trusted lenders, including major banks and specialist lenders, to ensure you have access to competitive options that align with your situation and long-term financial direction.</p>
                            <p>Our focus is not just on securing approval — but on structuring the right loan that supports your future financial flexibility and stability.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Speak with a home loan specialist</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Get pre-approved today</a>
                        </div>
                    </div>
                </section>

                {{-- Strategic guidance --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker">Our approach</p>
                        <h2 class="loan-svc-lp-h2">Strategic Home Loan Guidance for Smarter Borrowing</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                            <p>Home loans are not just about interest rates — they are about structure, flexibility, repayment strategy, and long-term financial impact.</p>
                            <p>A poorly structured loan can cost significantly more over time, limit refinancing options, and reduce financial flexibility. A well-structured loan, however, can support wealth creation, improve cash flow management, and create long-term financial advantage.</p>
                            <p>At Innovative Finance, we take a strategic approach to home lending by analysing your full financial position and aligning it with lending options that support both affordability and future financial goals.</p>
                            <p>We help you understand your borrowing capacity, evaluate repayment structures, compare lender options, and make confident, informed decisions at every stage.</p>
                        </div>
                    </div>
                </section>

                {{-- Services grid --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--alt">
                    <div class="loan-svc-lp-block__inner">
                        <header class="loan-svc-lp-head loan-svc-lp-head--center">
                            <p class="loan-svc-lp-kicker">What we do</p>
                            <h2 class="loan-svc-lp-h2">Our Home Loan Services Include</h2>
                        </header>
                        <div class="loan-svc-lp-cards">
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-house-user" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">First Home Buyer Guidance</h3>
                                <p class="loan-svc-lp-card__text">Step-by-step support for first-time buyers navigating the property market and lending process.</p>
                                <p class="loan-svc-lp-card__text">We help you understand eligibility, government schemes, deposit requirements, and loan structures so you can enter the market with confidence.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-home" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Owner-Occupier Home Loans</h3>
                                <p class="loan-svc-lp-card__text">Tailored home loan solutions for individuals and families purchasing their primary residence.</p>
                                <p class="loan-svc-lp-card__text">We focus on securing competitive rates and flexible structures suited to your lifestyle and financial goals.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-sliders" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Fixed and Variable Rate Loans</h3>
                                <p class="loan-svc-lp-card__text">Clear guidance on choosing between fixed, variable, or split loan structures based on your risk preference and financial strategy.</p>
                                <p class="loan-svc-lp-card__text">We help you understand how each structure impacts repayments, flexibility, and long-term cost.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-hard-hat" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Construction Loans</h3>
                                <p class="loan-svc-lp-card__text">Specialised lending solutions for building new homes or undertaking major property construction.</p>
                                <p class="loan-svc-lp-card__text">We assist with staged funding structures, lender requirements, and progress payment processes.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-file-signature" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Loan Pre-Approvals</h3>
                                <p class="loan-svc-lp-card__text">Strengthen your buying position with formal pre-approval before entering the property market.</p>
                                <p class="loan-svc-lp-card__text">We manage documentation, lender requirements, and application submission to improve your confidence when making offers.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-piggy-bank" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Deposit Strategy Advice</h3>
                                <p class="loan-svc-lp-card__text">Practical guidance on building, structuring, and optimising your deposit to improve borrowing capacity and reduce loan costs.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-scale-balanced" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">Loan Comparison and Lender Selection</h3>
                                <p class="loan-svc-lp-card__text">We compare multiple lending options across our panel of banks and financial institutions to identify the most suitable structure for your needs.</p>
                                <p class="loan-svc-lp-card__text">This ensures you are not limited to a single lender perspective.</p>
                            </article>
                            <article class="loan-svc-lp-card">
                                <span class="loan-svc-lp-card__icon"><i class="fas fa-handshake" aria-hidden="true"></i></span>
                                <h3 class="loan-svc-lp-card__title">End-to-End Application Support</h3>
                                <p class="loan-svc-lp-card__text">Full support throughout the entire loan process — from application preparation and submission through to approval and settlement coordination.</p>
                                <p class="loan-svc-lp-card__text">We handle communication with lenders, documentation requirements, and process management to reduce stress and delays.</p>
                            </article>
                        </div>
                    </div>
                </section>

                {{-- Why choose --}}
                <section class="loan-svc-lp-block">
                    <div class="loan-svc-lp-block__inner">
                        <div class="loan-svc-lp-split">
                            <div>
                                <p class="loan-svc-lp-kicker">Why choose us</p>
                                <h2 class="loan-svc-lp-h2">Why Choose Innovative Finance</h2>
                                <p class="loan-svc-lp-lead">Lending Solutions Designed Around Your Future</p>
                                <div class="loan-svc-lp-prose loan-svc-lp-prose--dark">
                                    <p>At Innovative Finance, we believe home loans should do more than enable property purchase — they should support long-term financial wellbeing and flexibility.</p>
                                    <p>Our approach is built around strategy, clarity, and long-term value.</p>
                                    <p>Clients choose us because we provide:</p>
                                </div>
                            </div>
                            <ul class="loan-svc-lp-why">
                                <li>
                                    <strong>Personalised Lending Strategy</strong>
                                    <span>Solutions tailored to your financial profile and goals.</span>
                                </li>
                                <li>
                                    <strong>Access to Multiple Lenders</strong>
                                    <span>A broad panel of banks and specialist lenders for better choice and flexibility.</span>
                                </li>
                                <li>
                                    <strong>Clear, Honest Guidance</strong>
                                    <span>Transparent advice that helps you understand every option.</span>
                                </li>
                                <li>
                                    <strong>End-to-End Support</strong>
                                    <span>From planning to approval and settlement, we manage the process for you.</span>
                                </li>
                                <li>
                                    <strong>Long-Term Financial Thinking</strong>
                                    <span>We focus on how your loan impacts your future, not just today’s purchase.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                {{-- Value band --}}
                <section class="loan-svc-lp-block loan-svc-lp-block--dark">
                    <div class="loan-svc-lp-block__inner loan-svc-lp-block__inner--narrow">
                        <p class="loan-svc-lp-kicker loan-svc-lp-kicker--light">Outcomes</p>
                        <h2 class="loan-svc-lp-h2 loan-svc-lp-h2--light">A Smarter Way to Secure Your Home Loan</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light">
                            <p>A home loan is one of the most significant financial commitments you will make.</p>
                            <p>The right structure can improve financial flexibility, reduce long-term cost, and support wealth creation. The wrong structure can limit your financial freedom for years.</p>
                            <p>Our role is to ensure you make informed decisions backed by expertise, market insight, and strategic financial understanding.</p>
                            <p>We help turn a complex lending process into a clear, structured, and confident journey.</p>
                        </div>
                    </div>
                </section>

                {{-- CTA --}}
                <section class="loan-svc-lp-cta">
                    <div class="loan-svc-lp-cta__box">
                        <h2 class="loan-svc-lp-cta__title">Secure the Right Loan for Your Next Home</h2>
                        <div class="loan-svc-lp-prose loan-svc-lp-prose--light loan-svc-lp-prose--center">
                            <p>Partner with finance specialists who understand lending strategy, not just loan approval.</p>
                            <p>Whether you are buying your first home, upgrading, or investing, we are here to help you structure the right solution.</p>
                        </div>
                        <div class="loan-svc-lp-hero__actions loan-svc-lp-hero__actions--center">
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn">Speak with a home loan specialist</a>
                            <a href="{{ route('loan.contact') }}" class="loan-svc-lp-btn loan-svc-lp-btn--outline">Get pre-approved today</a>
                        </div>
                    </div>
                </section>

            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
