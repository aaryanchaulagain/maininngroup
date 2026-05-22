@extends('layouts.tax-zimed')

@section('body-class', 'page-mentoring wp-singular page page-id-53 elementor-page elementor-page-53')

@section('title', 'Mentoring – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-53.css?ver=1779417167">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.0.9">
@endpush

@section('content')
@include('components.tax.zimed.header', ['active' => 'mentoring'])

<div class="full-width-page elementor elementor-53">
    <x-tax.zimed.page-header
        title="Mentoring"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Mentoring', 'current' => true],
        ]"
    />

    <section class="tax-service-detail tax-mentoring elementor-section elementor-top-section">
        <div class="container">
            <h2 class="elementor-heading-title elementor-size-default tax-service-detail__heading">
                We understand the importance of mentoring
            </h2>

            <div class="elementor-text-editor tax-service-detail__intro tax-service-detail__body">
                <p>We at Innovative Associates understand the importance of mentoring and hence have compiled a program to help you through your mortgage broker journey.</p>

                <div class="tax-mentoring__pdf">
                    <iframe
                        src="https://www.dropbox.com/s/n8wgk15a2s4iu9j/Innovative%20MENTORING%20PROGRAM.pdf?raw=1"
                        title="Innovative Mentoring Program PDF"
                        width="100%"
                        height="500"
                        loading="lazy"
                    ></iframe>
                </div>

                <p>Mentoring that suits your needs :</p>
                <p>
                    Find a MFAA Accredited Mentor :
                    <a href="https://www.mfaa.com.au/sites/default/files/dila_kharel_2.pdf" target="_blank" rel="noopener noreferrer">
                        https://www.mfaa.com.au/sites/default/files/dila_kharel_2.pdf
                    </a>
                </p>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
