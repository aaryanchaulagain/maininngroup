@extends('layouts.tax-zimed')

@section('body-class', 'page-calculator wp-singular page')

@section('title', 'Calculator – Innovative associates')

@section('content')
@include('components.tax.zimed.header', ['active' => 'calculator'])

<div class="full-width-page">
    <x-tax.zimed.page-header
        title="Calculator"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Calculator', 'current' => true],
        ]"
    />

    <x-tax.zimed.home-loan-calculator />

    <x-tax.zimed.lender-panel />
</div>

@include('components.tax.zimed.footer')
@endsection
