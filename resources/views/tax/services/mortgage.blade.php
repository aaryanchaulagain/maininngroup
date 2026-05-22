@extends('layouts.tax-zimed')

@section('body-class', 'page-mortgage wp-singular page page-id-886 elementor-page elementor-page-886')

@section('title', 'Mortgage and Finance Service – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-886.css?ver=1779431983">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.0.9">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.0.9">
@endpush

@section('content')
@php $cdn = 'https://innovativeassociates.com.au/wp-content/uploads'; @endphp

@include('components.tax.zimed.header', ['active' => 'services-mortgage'])

<div class="full-width-page elementor elementor-886">
    <x-tax.zimed.page-header
        title="Mortgage and Finance Service"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Services', 'url' => route('tax.services.index')],
            ['label' => 'Mortgage and Finance Service', 'current' => true],
        ]"
    />

    <section class="tax-service-detail elementor-section elementor-top-section">
        <div class="container">
            <div class="tax-service-detail__hero-image">
                <img
                    src="{{ $cdn }}/2021/03/saving-money-home-loan-mortgage-a-property-investm-SAY7TND-768x512.jpg"
                    width="768"
                    height="512"
                    alt="Mortgage and finance"
                    class="attachment-medium_large size-medium_large w-100"
                    loading="eager"
                >
            </div>

            <h2 class="elementor-heading-title elementor-size-default tax-service-detail__heading">
                What Mortgage is?
            </h2>

            <div class="elementor-text-editor tax-service-detail__intro tax-service-detail__body">
                <p>Mortgage in very simple terms is a contract in which property is used as a security for an acquirement of a loan. With the help of a mortgage individuals or businesses purchase residential or commercial real estate without the need to pay the full value immediately, that's how we serve the client exactly.</p>
                <p>This value is repaid in a period of years depending on the size of the loan and the prevailing practice and with an added interest. It was insurance companies that developed the idea of mortgages with hopes of acquiring ownership of the property if the borrower failed to make the payments.</p>
                <p>It is becoming simpler to buy houses and land by keeping older property as a security.</p>
                <p>Nowadays, it is not only insurance companies that do this but also banks and other financial institutions that have assumed the responsibility of mortgage. People all over the world are fast using the acquirement of loans in this manner.</p>
                <p>Banks, insurance companies and financial institutions all over the world differ on matters of mortgage but basically they are guided by the same principles of mortgage.</p>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
