@extends('layouts.advisory', ['active' => 'contact'])

@section('title', 'Contact Us — Business Advisory')

@php
    $serviceOptions = [
        'business-advisory' => 'Business Advisory',
        'insurance' => 'Insurance',
        'risk-management' => 'Risk Management',
        'business-consulting' => 'Business Consulting',
        'strategic-planning' => 'Strategic Planning',
        'general-inquiry' => 'General enquiry',
    ];
@endphp

@section('content')
<section class="adv-page-hero">
    <div class="adv-page-hero__inner">
        <nav class="adv-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('advisory.home') }}">Home</a>
            <span>/</span>
            <span>Contact Us</span>
        </nav>
        <h1>Contact Us</h1>
        <p class="adv-lead adv-page-hero__lead">Tell us about your goals — our advisory team will respond promptly to arrange a consultation.</p>
    </div>
</section>

<section class="adv-section adv-section--alt adv-contact-page">
    <div class="adv-container adv-contact-page__grid">
        <aside class="adv-contact-info">
            <p class="adv-kicker">Get in touch</p>
            <h2 class="adv-h2">Speak with our advisory team</h2>
            <p class="adv-contact-info__lead">Whether you need strategic planning, risk review, or integrated business advisory, our consultants are ready to help.</p>

            <ul class="adv-contact-info__highlights">
                <li>
                    <span class="adv-contact-info__icon" aria-hidden="true"><i class="fa-solid fa-clock"></i></span>
                    <span><strong>Responsive support</strong> — we aim to reply within one business day.</span>
                </li>
                <li>
                    <span class="adv-contact-info__icon" aria-hidden="true"><i class="fa-solid fa-user-shield"></i></span>
                    <span><strong>Confidential</strong> — your details are handled securely and never shared.</span>
                </li>
                <li>
                    <span class="adv-contact-info__icon" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
                    <span><strong>No obligation</strong> — initial conversations are focused on understanding your needs.</span>
                </li>
            </ul>

            <p class="adv-contact-info__link">
                <a href="{{ domain_url('main') }}" class="adv-text-link" target="_blank" rel="noopener">Visit INN Group main site <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
            </p>
        </aside>

        <div class="adv-form-card">
            <header class="adv-form-card__header">
                <span class="adv-form-card__badge" aria-hidden="true"><i class="fa-solid fa-envelope-open-text"></i></span>
                <div>
                    <h2 class="adv-form-card__title">Send us a message</h2>
                    <p class="adv-form-card__subtitle">Fields marked with <span class="adv-form-required" aria-hidden="true">*</span> are required.</p>
                </div>
            </header>

            @if (session('success'))
                <div class="adv-alert adv-alert--success" role="status">
                    <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="adv-alert adv-alert--error" role="alert">
                    <i class="fa-solid fa-circle-exclamation" aria-hidden="true"></i>
                    <div>
                        <strong>Please correct the following:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('advisory.contact.store') }}" class="adv-form">
                @csrf
                <input type="hidden" name="source_domain" value="advisory">
                <input type="text" name="website" tabindex="-1" autocomplete="off" class="adv-form-honeypot" aria-hidden="true">

                <div class="adv-form-row">
                    <div class="adv-form-field {{ $errors->has('name') ? 'adv-form-field--invalid' : '' }}">
                        <label for="name">Full name <span class="adv-form-required" aria-hidden="true">*</span></label>
                        <div class="adv-form-input-wrap">
                            <i class="fa-solid fa-user adv-form-input-icon" aria-hidden="true"></i>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name"
                                maxlength="255"
                                placeholder="Your full name"
                                @error('name') aria-invalid="true" aria-describedby="name-error" @enderror
                            >
                        </div>
                        @error('name')
                            <p class="adv-form-error" id="name-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="adv-form-field {{ $errors->has('email') ? 'adv-form-field--invalid' : '' }}">
                        <label for="email">Email address <span class="adv-form-required" aria-hidden="true">*</span></label>
                        <div class="adv-form-input-wrap">
                            <i class="fa-solid fa-envelope adv-form-input-icon" aria-hidden="true"></i>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                maxlength="255"
                                placeholder="you@company.com"
                                @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                            >
                        </div>
                        @error('email')
                            <p class="adv-form-error" id="email-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="adv-form-row">
                    <div class="adv-form-field {{ $errors->has('phone') ? 'adv-form-field--invalid' : '' }}">
                        <label for="phone">Phone number <span class="adv-form-required" aria-hidden="true">*</span></label>
                        <div class="adv-form-input-wrap">
                            <i class="fa-solid fa-phone adv-form-input-icon" aria-hidden="true"></i>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                required
                                autocomplete="tel"
                                maxlength="30"
                                placeholder="04XX XXX XXX"
                                @error('phone') aria-invalid="true" aria-describedby="phone-error" @enderror
                            >
                        </div>
                        @error('phone')
                            <p class="adv-form-error" id="phone-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="adv-form-field {{ $errors->has('service_interest') ? 'adv-form-field--invalid' : '' }}">
                        <label for="service_interest">Area of interest <span class="adv-form-required" aria-hidden="true">*</span></label>
                        <div class="adv-form-input-wrap adv-form-input-wrap--select">
                            <i class="fa-solid fa-briefcase adv-form-input-icon" aria-hidden="true"></i>
                            <select
                                id="service_interest"
                                name="service_interest"
                                required
                                @error('service_interest') aria-invalid="true" aria-describedby="service_interest-error" @enderror
                            >
                                <option value="" disabled {{ old('service_interest') ? '' : 'selected' }}>Select a service</option>
                                @php
                                    $selectedService = old('service_interest', request('service'));
                                @endphp
                                @foreach ($serviceOptions as $value => $label)
                                    <option value="{{ $value }}" @selected($selectedService === $value)>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('service_interest')
                            <p class="adv-form-error" id="service_interest-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="adv-form-field {{ $errors->has('message') ? 'adv-form-field--invalid' : '' }}">
                    <label for="message">How can we help? <span class="adv-form-required" aria-hidden="true">*</span></label>
                    <div class="adv-form-input-wrap adv-form-input-wrap--textarea">
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            required
                            maxlength="5000"
                            placeholder="Briefly describe your business goals or the support you need…"
                            @error('message') aria-invalid="true" aria-describedby="message-error" @enderror
                        >{{ old('message') }}</textarea>
                    </div>
                    @error('message')
                        <p class="adv-form-error" id="message-error" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <div class="adv-form-actions">
                    <button type="submit" class="adv-btn adv-btn--primary adv-btn--lg adv-form-submit">
                        <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        Send message
                    </button>
                    <p class="adv-form-note">By submitting, you agree we may contact you about your enquiry. All fields are required.</p>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
