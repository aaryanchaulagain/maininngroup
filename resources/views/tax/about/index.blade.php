@extends('layouts.tax-zimed')

@section('body-class', 'page-about wp-singular page page-id-37 elementor-page elementor-page-37')

@section('title', 'About Page – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-37.css?ver=1778603281">
@endpush

@section('content')
@php
    $cdn = 'https://innovativeassociates.com.au/wp-content/uploads';

    $ethicsBoxes = [
        ['icon' => 'zimed-new-icon-idea', 'text' => 'We always believe on integrity, fairness and equality.'],
        ['icon' => 'zimed-icon-app-development', 'text' => 'We provide a high standard of professional services with consistency.'],
        ['icon' => 'zimed-icon-app-development', 'text' => 'Our Peoples were always attentive on continual Improvement of our Knowledge, skill and expertise.'],
        ['icon' => 'zimed-icon-app-development', 'text' => 'Easy and Simple Communication and Support to all of our clients and colleagues.'],
    ];

    $partnerLogos = [
        ['src' => $cdn . '/2021/05/ASIC-1-150x150.jpg', 'alt' => 'ASIC'],
        ['src' => $cdn . '/2021/05/tax-practitioners-board-150x150.jpg', 'alt' => 'Tax practitioners board'],
        ['src' => $cdn . '/2021/05/MFAA-1-150x150.jpg', 'alt' => 'MFAA'],
        ['src' => $cdn . '/2021/05/MFAA-1-1-150x150.jpg', 'alt' => 'MFAA'],
        ['src' => $cdn . '/2021/05/institue-ofpublic-accountans-150x150.jpg', 'alt' => 'Institute of Public Accountants'],
    ];
@endphp

@include('components.tax.zimed.header', ['active' => 'about'])

<div class="full-width-page elementor elementor-37">
    <x-tax.zimed.page-header
        title="About Page"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'About Page', 'current' => true],
        ]"
    />

    <x-tax.zimed.cta-four
        section-class="cta-four__about"
        :image="$cdn . '/2021/04/innovative-01.jpg'"
        image-alt="Innovative Associates"
        heading="Our"
        heading-accent="Principle"
        :paragraphs="[
            'In an increasingly competitive business world, Innovative Associates and Its People works with individuals, small &amp; large businesses, the Government, and the not-for-profit organization and community to help each entity’s need and grow better financially.<br><br>Innovative Associates delivers quality in Book Keeping, Payroll, Taxation, Business Advisory, and associated compliance services to its all clients Australia-wide.',
        ]"
        :checklist="['Find solutions', 'Build Trust', 'Financial success']"
        button-text="Meet our team"
        :button-url="route('tax.about.team')"
    />

    <x-tax.zimed.cta-two-ethics
        :boxes="$ethicsBoxes"
        vision="Our vision is “leading you or your business for financial succession at every level by providing effective business solutions through a trusted and supportive team”"
    />

    <x-tax.zimed.cta-four
        section-class="cta-four__about"
        :image="$cdn . '/2021/04/15.jpg'"
        image-alt="Mission"
        heading=""
        heading-accent="Mission Statement"
        :paragraphs="[
            'To achieve our goal and objective we were serving and research beyond number crunching and it involves effort a lot. We integrate our diverse range of qualifications, skills, experience, technology and resources, to provide for each individual business and people’s needs.<br>We were determined and we were sure that our utmost enthusiasm for our work is to provide you a simple and best solution with a friendly team of professionals who are eager to use their expertise to help you succeed.',
        ]"
        :checklist="[
            'Providing Consistent and trustworthy business support and guidance.',
            'Create increased wealth and financial succession for our clients.',
            'Build up a dynamic and motivated team where all members work together towards a common objective – to make you success and your business to be succeeded.',
        ]"
        button-text="Contact Us"
        :button-url="route('tax.contact')"
    />

    <x-tax.zimed.partners-row :logos="$partnerLogos" />
</div>

@include('components.tax.zimed.footer')
@endsection
