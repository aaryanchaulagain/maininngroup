@extends('layouts.tax-zimed')

@section('body-class', 'page-tax-lodgement wp-singular page page-id-2240 elementor-page elementor-page-2240')

@section('title', 'Tax Lodgement – Innovative associates')

@section('content')
@include('components.tax.zimed.header', ['active' => 'tax-lodgement'])

<div class="full-width-page elementor elementor-2240">
    <x-tax.zimed.page-header
        title="Tax Lodgement"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Tax Lodgement', 'current' => true],
        ]"
    />

    <section class="tax-lodgement elementor-section elementor-top-section">
        <div class="container">
            <div class="elementor-widget-container tax-lodgement__embed">
                <iframe
                    id="JotFormIFrame-251631766172862"
                    title="Innovative Tax  2024/25 5701"
                    onload="window.parent.scrollTo(0,0)"
                    allowtransparency="true"
                    allow="geolocation; microphone; camera; fullscreen; payment"
                    src="https://form.jotform.com/251631766172862"
                    frameborder="0"
                    scrolling="no"
                ></iframe>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection

@push('scripts')
<script src="https://cdn.jotfor.ms/s/umd/latest/for-form-embed-handler.js"></script>
<script>window.jotformEmbedHandler("iframe[id='JotFormIFrame-251631766172862']", "https://form.jotform.com/")</script>
@endpush
