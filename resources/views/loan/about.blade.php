@extends('layouts.loan-avada')

@section('title', 'About - Innovative Wealth - Mortgage Broker')

@section('content')
@include('components.loan.avada.header', ['active' => 'about'])

@include('components.loan.avada.breadcrumbs', ['current' => 'About'])

<main id="main" class="clearfix width-100 loan-about-page">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">
                @include('components.loan.avada.about-content')
                @include('components.loan.avada.about-testimonials', ['testimonials' => $testimonials ?? null])
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
