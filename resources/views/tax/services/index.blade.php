@extends('layouts.tax-zimed')

@section('body-class', 'page-services wp-singular page page-id-1312 elementor-page elementor-page-1312')

@section('title', 'Services – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-1312.css?ver=1779405246">
@endpush

@section('content')
@include('components.tax.zimed.header', ['active' => 'services'])

<div class="full-width-page elementor elementor-1312">
    <x-tax.zimed.page-header
        title="Services"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Services', 'current' => true],
        ]"
    />

    <section class="service-page elementor-section elementor-top-section">
        <x-tax.zimed.service-two-grid :services="$services" section-class="service-two service-page__grid" />
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
