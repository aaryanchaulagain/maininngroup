@extends('layouts.tax-zimed')

@section('body-class', 'page-accounting wp-singular page page-id-49 elementor-page elementor-page-49')

@section('title', 'Accounting and Taxation Services – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-49.css?ver=1779431804">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.0.9">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.0.9">
@endpush

@section('content')
@php
    $cdn = 'https://innovativeassociates.com.au/wp-content/uploads';

    $servicesInclude = [
        'All types of Tax Returns',
        'Account receivables',
        'Account Payable',
        'Payroll scheduling',
        'Bank Reconciliation',
        'Business Activity Statements (BAS)',
        'Preparing and maintaining Asset',
        'Profit & Loss and balance sheet preparation',
        'Maintaining inventory records and stocktaking',
    ];

    $areasCol1 = [
        'Commercial & industrial',
        'Retail',
        'Hospitality',
        'Solicitors',
        'Travel Agents',
    ];

    $areasCol2 = [
        'Real estate Agents',
        'Money Transfer',
        'Education & Migration',
        'IT & Marketing',
    ];

    $softwareCol1 = ['Reckon Elite', 'Handisoft', 'MYOB'];
    $softwareCol2 = ['Quick Books', 'Cash Manager', 'Flex'];
@endphp

@include('components.tax.zimed.header', ['active' => 'services-accounting'])

<div class="full-width-page elementor elementor-49">
    <x-tax.zimed.page-header
        title="Accounting and Taxation Services"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Services', 'url' => route('tax.services.index')],
            ['label' => 'Accounting and Taxation Services', 'current' => true],
        ]"
    />

    <section class="tax-service-detail elementor-section elementor-top-section">
        <div class="container">
            <div class="tax-service-detail__hero-image text-center">
                <img
                    src="{{ $cdn }}/2021/03/accounting-and-taxation-services.jpg"
                    width="500"
                    height="344"
                    alt="Accounting and Taxation Services"
                    class="attachment-large size-large"
                    loading="eager"
                >
            </div>
        </div>
    </section>

    <section class="tax-service-detail elementor-section elementor-top-section">
        <div class="container">
            <h4 class="elementor-heading-title elementor-size-default tax-service-detail__tagline">
                Your gateway to quality solutions.
            </h4>
            <div class="elementor-text-editor tax-service-detail__intro">
                <p>Innovative Associates is a team of accounting and finance professionals dedicated to providing quality, professional accounting solutions to small and medium businesses throughout Australia.</p>
            </div>
            <h2 class="elementor-heading-title elementor-size-default tax-service-detail__heading">
                We provide a wide range of Book Keeping, Accounting and Taxation Services including:
            </h2>
            <div class="elementor-text-editor tax-service-detail__intro">
                <p>Innovative Associates is a team of accounting and finance professionals dedicated to providing quality, professional accounting solutions to small and medium businesses throughout Australia.</p>
            </div>
        </div>
    </section>

    <section class="tax-service-detail elementor-section elementor-top-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6">
                    <div class="elementor-widget-icon-list">
                        <x-tax.zimed.icon-list :items="$servicesInclude" icon="fas fa-check-square" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <img
                        src="{{ $cdn }}/2021/03/accounting-work-at-office-4ZEEM8Z-1024x683.jpg"
                        width="770"
                        height="514"
                        alt=""
                        class="attachment-large size-large w-100"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="tax-service-detail elementor-section elementor-top-section">
        <div class="container">
            <h2 class="elementor-heading-title elementor-size-default tax-service-detail__heading">Some of the areas we work on</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="elementor-widget-icon-list icon__list-style-two">
                        <x-tax.zimed.icon-list :items="$areasCol1" icon="fas fa-check" class="icon__list-style-two" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="elementor-widget-icon-list icon__list-style-two">
                        <x-tax.zimed.icon-list :items="$areasCol2" icon="fas fa-check" class="icon__list-style-two" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tax-service-detail elementor-section elementor-top-section">
        <div class="container">
            <h2 class="elementor-heading-title elementor-size-default tax-service-detail__heading">Some of the softwares we utilize</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="elementor-widget-icon-list icon__list-style-two">
                        <x-tax.zimed.icon-list :items="$softwareCol1" icon="fas fa-check" class="icon__list-style-two" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="elementor-widget-icon-list icon__list-style-two">
                        <x-tax.zimed.icon-list :items="$softwareCol2" icon="fas fa-check" class="icon__list-style-two" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tax-service-detail elementor-section elementor-top-section tax-service-detail__closing">
        <div class="container">
            <div class="elementor-text-editor">
                <p>All our services have been designed to meet and exceed the expectations of all our accounting clients.</p>
                <p><strong>Do you wish for Business, Do you desire proceeds, you need Innovative Associates.</strong></p>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
