@extends('layouts.tax-zimed')

@section('body-class', 'page-perspective wp-singular page page-id-47 elementor-page elementor-page-47')

@section('title', 'Perspective – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-47.css?ver=1779432497">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.0.9">
@endpush

@section('content')
@php $cdn = 'https://innovativeassociates.com.au/wp-content/uploads'; @endphp

@include('components.tax.zimed.header', ['active' => 'perspective'])

<div class="full-width-page elementor elementor-47">
    <x-tax.zimed.page-header
        title="Perspective"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Perspective', 'current' => true],
        ]"
    />

    <section class="tax-perspective elementor-section elementor-top-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6">
                    <div class="elementor-text-editor tax-service-detail__intro tax-perspective__content">
                        <p>We believe the typical business model for a financial service is inefficient and fails to meet the demands of today's competitive market. No matter how dedicated or hardworking a business is, there is a limit to how productive he or she can be when working alone.</p>
                        <p>Innovative Associates implies the same principles that successful business firms imply along with great management, efficient division of labour and total utilization of a collective group of resources.</p>
                        <p>At Innovative Associates, we are a one-stop-shop for all your business and financial needs.</p>
                        <p><strong>The goal is simple, Creating a Business with a new approach in doing business.</strong></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img
                        src="{{ $cdn }}/2021/03/multicultural-smiling-business-people-having-busin-Y8ZG4MW-scaled-e1620956407178.jpg"
                        width="600"
                        height="400"
                        alt="Business team perspective"
                        class="attachment-full size-full w-100"
                        loading="eager"
                    >
                </div>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
