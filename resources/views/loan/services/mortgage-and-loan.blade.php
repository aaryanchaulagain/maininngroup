@extends('layouts.loan-avada')

@section('title', 'Mortgage and Loan - Innovative Finance')

@section('content')
@include('components.loan.avada.header', ['active' => 'services-mortgage-and-loan'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Mortgage and Loan'])

<main id="main" class="clearfix width-100 loan-svc-lp">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">
                @include('components.loan.avada.mortgage-and-loan-content')
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
