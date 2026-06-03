@extends('layouts.tax-zimed')

@section('title', 'Innovative associates – Business For Your Business')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-28.css?ver=1778579727">
@endpush

@section('content')
@php
    $cdn = 'https://innovativeassociates.com.au/wp-content/uploads';
    $theme = 'https://innovativeassociates.com.au/wp-content/themes/zimed/assets/images';

    $coreValues = [
        ['icon' => 'zimed-new-icon-trophy', 'title' => 'Highest standard of Service', 'text' => 'Our Professional holds memberships with various professional bodies that demonstrate our commitment to the highest standard of Services.'],
        ['icon' => 'zimed-new-icon-start-up', 'title' => 'Business for your business', 'text' => 'We always want you or your business to grow with required fulfillment of the legal and corporate account-abilities.'],
        ['icon' => 'zimed-new-icon-idea', 'title' => 'Business ideas and Innovation', 'text' => 'We were delighted with our professionals in having the wide range of knowledge from the business perspective and professional perspective.'],
    ];

    $testimonialIcons = [
        $cdn . '/2021/05/Bedge-1.png',
        $cdn . '/2021/05/Most.png',
        $cdn . '/2021/05/Buble-like.png',
        $cdn . '/2021/05/Stars.png',
        $cdn . '/2021/05/Loyalty.png',
    ];

    $testimonials = [
        ['text' => 'I have been recommended by my employer for my Individual Tax to lodge with Innovative Associates. I found them very good and the best accountant in Sydney CBD.', 'author' => 'ANTANY PIRAPAKAR ANTANY JEYARASA'],
        ['text' => '"I am very pleased to recommend Innovative Associates for the following reasons:We are always treated with respect. • We feel a sense of integrity infuses the company. Innovative Associates, Dila, and his team have helped with appropriate tax and business strategies"', 'author' => "GRANNY'S HERBS & SPICES PTY LTD"],
        ['text' => '"Let\'s agree that sincere and qualified accountants get quality results, really happy with the performance at Dila\'s office and his accountants and bookkeeper."', 'author' => 'Rajman Thakali'],
        ['text' => "I own a Grocery wholesale, I went to Dila's Office at sydney CBD ( Innovative Associates) for Accounting and Taxation. <br>I am satisfied and recommend anyone with personal Tax, Business Tax and Wealth Creation strategy, Please visit Innovative Accountants and Home loan Advisers.", 'author' => 'Shyam S Khatri'],
        ['text' => 'Your help has been extremely valuable and we have enjoyed working with you and your team at Innovative Associates." - I simply Recommend Dila & Innovative associates for Commercial Loans , Home Loan, Car loan and Personal Loan.', 'author' => 'George Drew Revesby, Sydney'],
    ];
@endphp

@include('components.tax.zimed.header')

<div class="full-width-page">
    {{-- Hero: banner-one --}}
    <section class="banner-one" style="background-image: url({{ $cdn }}/2021/05/slider-1-2.jpg);">
        <div class="container">
            <img decoding="async" src="" alt="" class="banner-one__shape-moc-1">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner-one__content">
                        <p class="banner-one__tag-line">Business For Your business</p>
                        <h3>Innovative Tax</h3>
                        <p>We are committed to providing our customers with exceptional <br>service while offering our employees the best training.</p>
                        <div class="banner-one__btn-wrap">
                            <a href="{{ route('tax.aboutus') }}" class="thm-btn banner-one__btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <x-tax.zimed.hero-moc />
        </div>
    </section>

    <x-tax.zimed.service-two-grid :services="$services" />

    {{-- Our Core Values: cta-three --}}
    <div class="cta-three">
        <div class="container">
            <img decoding="async" src="" alt="" class="cta-three__shape-1">
            <img decoding="async" src="{{ $cdn }}/2021/05/core-values.jpg" alt="" class="cta-three__moc">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="cta-three__content">
                        <div class="block-title text-left color-2">
                            <span class="block-title__bubbles"></span>
                            <p></p>
                            <h3>Our Core Values</h3>
                        </div>
                        <div class="cta-three__box-wrap">
                            @foreach ($coreValues as $value)
                                <div class="cta-three__box icon-box-wrapper">
                                    <div class="cta-three__box-icon icon-box-with-bubble">
                                        <i class="{{ $value['icon'] }}"></i>
                                    </div>
                                    <div class="cta-three__box-content">
                                        <h3>{{ $value['title'] }}</h3>
                                        <p>{{ $value['text'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Client Testimonial --}}
    <section class="testimonials__one">
        <img decoding="async" src="{{ $cdn }}/2020/11/testimonials-map-1-1.png" alt="Awesome Image" class="map-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <div class="my-auto wow fadeInUp" data-wow-duration="1500ms">
                        <div id="testimonials-slider-pager">
                            <div class="testimonials-slider-pager-one">
                                @foreach ($testimonialIcons as $i => $icon)
                                    <a href="#" class="pager-item {{ $i === 0 ? 'active' : '' }}" data-slide-index="{{ $i + 1 }}">
                                        <img decoding="async" src="{{ $icon }}" alt="Awesome Image">
                                    </a>
                                @endforeach
                            </div>
                            <div class="testimonials-slider-pager-two">
                                @foreach ($testimonialIcons as $i => $icon)
                                    <a href="#" class="pager-item {{ $i === 0 ? 'active' : '' }}" data-slide-index="{{ $i + 1 }}">
                                        <img decoding="async" src="{{ $icon }}" alt="Awesome Image">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="block-title text-left color-3">
                        <span class="block-title__bubbles"></span>
                        <p></p>
                        <h3>Client Testimonial</h3>
                    </div>
                    <ul class="slider testimonials-slider">
                        @foreach ($testimonials as $item)
                            <li class="slide-item">
                                <div class="testimonials__one__single">
                                    <p>{!! $item['text'] !!}</p>
                                    <h3></h3>
                                    <span>{{ $item['author'] }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section class="contact-one">
        <img decoding="async" src="http://layerdrops.com/zimedwp/wp-content/uploads/2020/11/contact-shape-1-2.png" class="contact-one__shape-1" alt="">
        <img decoding="async" src="http://layerdrops.com/zimedwp/wp-content/uploads/2020/10/contact-shape-2.png" class="contact-one__shape-2" alt="">
        <img decoding="async" src="http://layerdrops.com/zimedwp/wp-content/uploads/2020/11/contact-shape-1-1.png" class="contact-one__shape-3" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-one__content">
                        <div class="contact-one__images">
                            <img decoding="async" src="{{ $cdn }}/2021/05/contact-us-now-1.jpg" class="wow fadeInUp" data-wow-duration="1500ms" alt="">
                            <img decoding="async" src="{{ $cdn }}/2021/05/contact-us-now-2.jpg" class="wow fadeInUp" data-wow-duration="1500ms" alt="">
                        </div>
                        <div class="contact-one__infos">
                            <div class="contact-one__infos-single icon-box-wrapper">
                                <div class="contact-one__infos-icon icon-box-with-bubble">
                                    <i class="zimed-new-icon-map-pin"></i>
                                </div>
                                <div class="contact-one__infos-content">
                                    <h3>Address</h3>
                                    <p>NSW City Office: Sydney CBD Suite 101, Level 10 420 - 426 Pitt Street Sydney, NSW - 2000.</p>
                                </div>
                            </div>
                            <div class="contact-one__infos-single icon-box-wrapper">
                                <div class="contact-one__infos-icon icon-box-with-bubble">
                                    <i class="zimed-new-icon-telephone"></i>
                                </div>
                                <div class="contact-one__infos-content">
                                    <h3>Phone</h3>
                                    <p><a href="tel:0434392347">0434 392 347</a></p>
                                </div>
                            </div>
                            <div class="contact-one__infos-single icon-box-wrapper">
                                <div class="contact-one__infos-icon icon-box-with-bubble">
                                    <i class="zimed-new-icon-email"></i>
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
                            <p></p>
                            <h3>Contact Us <span>Now</span></h3>
                        </div>
                        @include('components.tax.zimed.contact-form')
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Footer (elementor 831) --}}
@include('components.tax.zimed.footer')

@endsection
