@extends('layouts.loan-avada')

@section('title', $service['title'].' - Innovative Finance')

@section('content')
@include('components.loan.avada.header', ['active' => 'services-'.$slug])

@include('components.loan.avada.breadcrumbs', ['current' => $service['title']])

<main id="main" class="clearfix width-100 loan-service-detail-page">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">
                @include('components.loan.avada.service-detail', ['service' => $service])
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
