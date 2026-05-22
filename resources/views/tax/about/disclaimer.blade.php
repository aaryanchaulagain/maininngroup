@extends('layouts.tax-zimed')

@section('body-class', 'page-disclaimer wp-singular page page-id-1287 elementor-page elementor-page-1287')

@section('title', 'Disclaimer – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-1287.css?ver=1778595449">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.35.0">
@endpush

@section('content')
@include('components.tax.zimed.header', ['active' => 'disclaimer'])

<div class="full-width-page elementor elementor-1287">
    <x-tax.zimed.page-header
        title="Disclaimer"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'About Page', 'url' => route('tax.aboutus')],
            ['label' => 'Disclaimer', 'current' => true],
        ]"
    />

    <section class="tax-disclaimer-content elementor-section elementor-top-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <h2 class="elementor-heading-title elementor-size-default tax-disclaimer-content__heading">
                            Using this web site does not constitute advice.
                        </h2>
                        <div class="tax-disclaimer-content__text elementor-widget-text-editor">
                            <p>With us at Innovative Associates the submission of personal details is not advice. Data and information is taken for informational purposes only, and is not intended for any other commercial or non-commercial purposes. Neither us nor any of our data or content providers shall be liable for any errors or delays in the content, or for any actions taken in reliance thereon. By accessing our web site, a user agrees not to redistribute the information found therein. We do not endorse or recommend the services of any company. We shall not be liable for any damages or costs of any type arising out of or in any way connected with your use of our website information.</p>
                        </div>

                        <h2 class="elementor-heading-title elementor-size-default tax-disclaimer-content__heading">
                            Important Information
                        </h2>
                        <div class="tax-disclaimer-content__text elementor-widget-text-editor">
                            <p>This site is of general advice. General advice is prepared without taking into account of your objectives, financial situation or needs, and because of this, you should, before acting on the general advice, consider the appropriateness of the advice, having regard to your objectives, financial situation and needs and if the advice relates to obtaining a particular service for which engagement letter for our services is available, you should obtain the letter of engagement relating to the particular service and consider it before making any decision whether to go ahead.</p>
                            <p>To the extent this site contains personal advice or recommendations to you, we have relied on information you have provided to us regarding your relevant personal circumstances, including your personal and business tax matter, investment objectives, financial situation and particular needs. You acknowledge that if you have not provided this information to us, or the information that you have provided is inaccurate or incomplete, then any personal advice that may be provided may be based on incomplete or inaccurate information, and therefore you should consider the appropriateness of the advice, having regard to your relevant personal circumstances before acting on the advice.</p>
                            <p>Although the information is believed to be reliable, we do not guarantee its accuracy and it may be incomplete or condensed. All opinions and estimates constitute Innovative Associates perspective at the date of issue and are subject to change without notice. Unless stated otherwise, pricing information is indicative only, subject to change, and is not an offer to deal at any price quoted. Any reference to the terms of executed transactions is preliminary only and subject to written confirmation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
