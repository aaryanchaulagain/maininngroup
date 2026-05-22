@extends('layouts.tax-zimed')

@section('body-class', 'page-contact wp-singular page page-id-45 elementor-page elementor-page-45')

@section('title', 'Contact – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-45.css?ver=1779432971">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.0.9">
    <style>
        .elementor-45 .elementor-element.elementor-element-6fbd63e .elementor-widget-container,
        .elementor-45 .elementor-element.elementor-element-899018a .elementor-widget-container {
            text-align: center;
        }

        .elementor-45 .elementor-element.elementor-element-6fbd63e iframe,
        .elementor-45 .elementor-element.elementor-element-899018a iframe {
            display: block;
            width: 100%;
            max-width: 430px;
            height: 430px;
            margin-left: auto;
            margin-right: auto;
            border: 0;
        }
    </style>
@endpush

@section('content')
@include('components.tax.zimed.header', ['active' => 'contact'])

<div class="full-width-page elementor elementor-45">
    <x-tax.zimed.page-header
        title="Contact"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Contact', 'current' => true],
        ]"
    />

    <section class="elementor-section elementor-top-section elementor-section-full_width contact-page">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section class="contact-one">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-one__content">
                                        <div class="contact-one__infos">
                                            <div class="contact-one__infos-single icon-box-wrapper">
                                                <div class="contact-one__infos-icon icon-box-with-bubble">
                                                    <i class="zimed-icon-placeholder"></i>
                                                </div>
                                                <div class="contact-one__infos-content">
                                                    <h3>Address</h3>
                                                    <p>NSW City Office:<br><br>Sydney CBD<br>Suite 101, Level 10<br><br>420 - 426 Pitt Street<br><br>Sydney, NSW - 2000.</p>
                                                </div>
                                            </div>
                                            <div class="contact-one__infos-single icon-box-wrapper">
                                                <div class="contact-one__infos-icon icon-box-with-bubble">
                                                    <i class="zimed-icon-phone-call"></i>
                                                </div>
                                                <div class="contact-one__infos-content">
                                                    <h3>Phone</h3>
                                                    <p><a href="tel:0434392347">0434 392 347</a></p>
                                                </div>
                                            </div>
                                            <div class="contact-one__infos-single icon-box-wrapper">
                                                <div class="contact-one__infos-icon icon-box-with-bubble">
                                                    <i class="zimed-icon-message"></i>
                                                </div>
                                                <div class="contact-one__infos-content">
                                                    <h3>Email</h3>
                                                    <p><a href="mailto:info@innovativeassociates.com.au">info@innovativeassociates.com.au</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-one__form-wrap">
                                        <div class="block-title color-5">
                                            <span class="block-title__bubbles"></span>
                                            <h3>Write a Message</h3>
                                        </div>
                                        <x-tax.zimed.contact-form />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-aff0cb4 elementor-section-boxed elementor-section-height-default" data-id="aff0cb4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8af736f" data-id="8af736f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-413c05e elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Registered Office</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5f1f8a1 elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">🏠 122A Beaconsfield Street Revesby, NSW - 2212.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ef57dd4 elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default"><a href="tel:0434392347">✆ 0434 392 347</a></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-73d4f38 elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default"><a href="mailto:info@innovativeassociates.com.au">📧 info@innovativeassociates.com.au</a></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6fbd63e elementor-widget elementor-widget-text-editor">
                                        <div class="elementor-widget-container">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.945983769863!2d150.99984691484858!3d-33.94251738063585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bef5c1d9df6f%3A0x2de2ef70e8dd61e5!2s122A%20Beaconsfield%20St%2C%20Revesby%20NSW%202212!5e0!3m2!1sen!2sau!4v1621993168245!5m2!1sen!2sau"
                                                allowfullscreen
                                                loading="lazy"
                                                title="Registered Office – Revesby"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d9636a4" data-id="d9636a4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-cd7e225 elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Sydney NSW Office</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ff5e18d elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">🏠 Suite 101, Level 10, 420 - 426 Pitt Street Sydney, NSW - 2000.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e538828 elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default"><a href="tel:0434392347">✆ 0434 392 347</a></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3d7ba84 elementor-widget elementor-widget-heading">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default"><a href="mailto:info@innovativeassociates.com.au">📧 info@innovativeassociates.com.au</a></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-899018a elementor-widget elementor-widget-text-editor">
                                        <div class="elementor-widget-container">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.40793610357!2d151.20528551521065!3d-33.87914628065333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae22d79af659%3A0xe8e3e855542493a0!2s420-426%20Pitt%20St%2C%20Haymarket%20NSW%202000!5e0!3m2!1sen!2sau!4v1621992974324!5m2!1sen!2sau"
                                                allowfullscreen
                                                loading="lazy"
                                                title="Sydney NSW Office"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
