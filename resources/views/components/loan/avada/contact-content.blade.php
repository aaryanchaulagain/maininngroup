@php
    $cdn = site_uploads('loan');
    $loanEmail = config('domains.loan_contact_email');
@endphp

<section class="loan-contact fusion-fullwidth fullwidth-box nonhundred-percent-fullwidth loan-contact--has-bg"
    style="background-image: url('{{ $cdn }}/2020/08/home-content-background-scaled-1.jpg');">
    <div class="loan-contact__container">
        <div class="loan-contact__grid">
            <div class="loan-contact__form-col">
                <h2 class="loan-contact__title">Send Us A Message</h2>

                @if (session('success'))
                    <div class="loan-contact__alert loan-contact__alert--success" role="status">
                        <span class="loan-contact__alert-icon" aria-hidden="true">✓</span>
                        <span>Thank you for your message. It has been sent.</span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="loan-contact__alert loan-contact__alert--error" role="alert">
                        <span class="loan-contact__alert-icon" aria-hidden="true">!</span>
                        <span>There was an error trying to send your message. Please try again later.</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('loan.contact.store') }}" class="loan-contact__form fusion-form">
                    @csrf
                    <input type="hidden" name="source_domain" value="loan">
                    <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="loan-contact__honeypot" aria-hidden="true">

                    <div class="loan-contact__field fusion-form-field">
                        <label for="contact_name">Your name <abbr title="required">*</abbr></label>
                        <input type="text" id="contact_name" name="name" value="{{ old('name') }}" class="fusion-form-input" required maxlength="255">
                        @error('name')<span class="loan-contact__error">{{ $message }}</span>@enderror
                    </div>

                    <div class="loan-contact__field fusion-form-field">
                        <label for="contact_phone">Mobile Number <abbr title="required">*</abbr></label>
                        <div class="loan-contact__input-icon">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                            <input type="tel" id="contact_phone" name="phone" value="{{ old('phone') }}" class="fusion-form-input" required maxlength="30" pattern="[0-9()#&amp;+*\\-=.\\s]+" title="Only numbers and phone characters are accepted.">
                        </div>
                        @error('phone')<span class="loan-contact__error">{{ $message }}</span>@enderror
                    </div>

                    <div class="loan-contact__field fusion-form-field">
                        <label for="contact_email">Email address <abbr title="required">*</abbr></label>
                        <input type="email" id="contact_email" name="email" value="{{ old('email') }}" class="fusion-form-input" required maxlength="255">
                        @error('email')<span class="loan-contact__error">{{ $message }}</span>@enderror
                    </div>

                    <div class="loan-contact__field fusion-form-field">
                        <label for="contact_message">Message <abbr title="required">*</abbr></label>
                        <textarea id="contact_message" name="message" rows="4" class="fusion-form-input" required maxlength="5000">{{ old('message') }}</textarea>
                        @error('message')<span class="loan-contact__error">{{ $message }}</span>@enderror
                    </div>

                    <div class="loan-contact__submit">
                        <button type="submit" class="fusion-button button-flat button-large button-default">
                            <span class="fusion-button-text">Submit</span>
                        </button>
                    </div>
                </form>
            </div>

            <div class="loan-contact__info-col">
                <img src="{{ $cdn }}/2020/08/contact-warren-kate.png" alt="Contact Innovative Wealth team" class="loan-contact__photo" width="500" height="355" loading="lazy" decoding="async">
                <h2 class="loan-contact__title">Talk to Innovative's Team Today</h2>

                <a href="tel:0403054593" class="loan-contact__pill">
                    <i class="fas fa-phone" aria-hidden="true"></i>
                    <span><strong>CALL US:</strong> 0403 054 593</span>
                </a>

                <a href="mailto:{{ $loanEmail }}" class="loan-contact__pill">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    <span><strong>EMAIL US:</strong> {{ $loanEmail }}</span>
                </a>
            </div>
        </div>
    </div>
</section>

@include('components.loan.avada.testimonials-band', [
    'banner' => "We've helped thousands of people achieve peace of mind and financial freedom …",
])
