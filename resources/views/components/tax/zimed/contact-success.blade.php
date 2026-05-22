@props([
    'message' => 'Your form has been submitted. Our team will be in touch shortly.',
])

<div class="tax-contact-success" role="alert" aria-live="polite">
    <span class="tax-contact-success__icon" aria-hidden="true">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 12.5L11 14.5L15.5 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
        </svg>
    </span>
    <div class="tax-contact-success__body">
        <p class="tax-contact-success__title">Thank you</p>
        <p class="tax-contact-success__text">{{ $message }}</p>
    </div>
</div>
