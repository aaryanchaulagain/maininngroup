@extends('layouts.loan-avada')

@section('title', 'Calculator - Innovative Finance')

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/css/tax-zimed-clone.css') }}?v=37">
@endpush

@section('content')
@include('components.loan.avada.header', ['active' => 'calculator'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Calculator'])

<main id="main" class="clearfix width-100 loan-calculator-page">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content loan-calculator-sections">
                <x-tax.zimed.home-loan-calculator accent="1E63D8" navy="164aad" />
                <x-tax.zimed.lender-panel />
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
