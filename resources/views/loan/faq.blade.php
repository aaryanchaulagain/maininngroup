@extends('layouts.loan-avada')

@section('title', 'FAQ - Innovative Wealth - Mortgage Broker')

@section('content')
@include('components.loan.avada.header', ['active' => 'faq'])

@include('components.loan.avada.breadcrumbs', ['current' => 'FAQ'])

<main id="main" class="clearfix width-100 loan-faq-page">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">
                @include('components.loan.avada.faq-content', ['faqs' => $faqs])
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
