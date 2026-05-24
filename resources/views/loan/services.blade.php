@extends('layouts.loan-avada')

@section('title', 'Services - Innovative Finance')

@section('content')
@include('components.loan.avada.header', ['active' => 'services-index'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Services'])

<main id="main" class="clearfix width-100 loan-services-page">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">
                <section class="loan-services-intro">
                    <div class="loan-services-intro__inner">
                        <h1 class="loan-services-intro__title">Our Finance Services</h1>
                        <p class="loan-services-intro__lead">From first home purchases to investment lending, refinancing, and SMSF structures — we provide tailored mortgage and finance solutions backed by personal service and market-wide access.</p>
                    </div>
                </section>

                <section class="loan-services-nav-cards">
                    <div class="loan-services-nav-cards__grid">
                        @foreach ($services as $svc)
                            <a href="{{ route('loan.services.show', $svc['slug']) }}" class="loan-services-nav-cards__card">
                                <span class="loan-services-nav-cards__title">{{ $svc['title'] }}</span>
                                <span class="loan-services-nav-cards__arrow" aria-hidden="true">→</span>
                            </a>
                        @endforeach
                    </div>
                </section>

                @include('components.loan.avada.home-expertise', ['showHeader' => false])
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
