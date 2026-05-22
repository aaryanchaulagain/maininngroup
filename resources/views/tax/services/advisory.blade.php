@extends('layouts.tax-zimed')

@section('body-class', 'page-advisory wp-singular page page-id-882 elementor-page elementor-page-882')

@section('title', 'Business advisory Service – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-882.css?ver=1779432123">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.0.9">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.0.9">
@endpush

@section('content')
@php $cdn = 'https://innovativeassociates.com.au/wp-content/uploads'; @endphp

@include('components.tax.zimed.header', ['active' => 'services-advisory'])

<div class="full-width-page elementor elementor-882">
    <x-tax.zimed.page-header
        title="Business advisory Service"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Services', 'url' => route('tax.services.index')],
            ['label' => 'Business advisory Service', 'current' => true],
        ]"
    />

    <section class="tax-service-detail elementor-section elementor-top-section">
        <div class="container">
            <div class="tax-service-detail__hero-image">
                <img
                    src="{{ $cdn }}/2021/03/you-have-wonderful-ideas-PSVUBWM-768x512.jpg"
                    width="768"
                    height="512"
                    alt="Business advisory"
                    class="attachment-medium_large size-medium_large w-100"
                    loading="eager"
                >
            </div>

            <div class="elementor-text-editor tax-service-detail__intro">
                <p>We're part of AFG – the group that offers more than 800 financial products from Australia's leading lenders. Tens of thousands of Australians look to one of AFG's 2,200 brokers for help with their home or business finance each month.</p>
            </div>

            <h2 class="elementor-heading-title elementor-size-default tax-service-detail__heading">
                Please speak with us about:
            </h2>

            <div class="elementor-text-editor tax-service-detail__intro tax-service-detail__body">
                <ul class="tax-service-detail__topics">
                    <li>HOME LOANS</li>
                    <li>COMMERCIAL FINANCE</li>
                    <li>PROPERTY</li>
                    <li>INSURANCE</li>
                </ul>
                <p>Whether you want to invest or refinance, buy your first home or ensure your current home loan is still the right one for you, we can help.</p>
                <p>Check out your loan options with our clever loan option tool, see how your neighbourhood rates with our suburb profile report, or sign-up to our quarterly Haven newsletter for home, lifestyle and finance tips.</p>
                <p>If you get stuck or can't find the information you need, <a href="{{ route('tax.contact') }}">CONTACT US</a>, or simply fill in the box to the right anytime to <a href="{{ route('tax.contact') }}">SEND US A QUESTION</a>.</p>
                <p>We're part of AFG – the group that offers more than 800 financial products from Australia's leading lenders. Tens of thousands of Australians look to one of AFG's 2,200 brokers for help with their home or business finance each month.</p>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
