@extends('layouts.loan-avada')

@section('title', 'Bank VS Innovative - Innovative Wealth - Mortgage Broker')

@section('content')
@include('components.loan.avada.header', ['active' => 'bank-vs'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Bank VS Innovative'])

<main id="main" class="clearfix width-100 loan-bank-vs-page">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">
                @include('components.loan.avada.bank-vs-content')
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
