@if (session('success'))
    <x-tax.zimed.contact-success :message="session('success')" />
@else
    @if ($errors->any())
        <div class="tax-contact-errors" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('tax.contact.store') }}" class="contact-one__form tax-contact-form" aria-label="Contact form">
        @csrf
        <input type="hidden" name="source_domain" value="tax">
        <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="d-none" aria-hidden="true">
        <div class="row">
            <div class="col-md-6">
                <p>
                    <input size="40" maxlength="255" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Name*" value="{{ old('name') }}" type="text" name="name" required aria-required="true">
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <input size="40" maxlength="255" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" placeholder="Email*" value="{{ old('email') }}" type="email" name="email" required aria-required="true">
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <input size="40" maxlength="30" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Phone*" value="{{ old('phone') }}" type="tel" name="phone" required aria-required="true">
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <input size="40" maxlength="255" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Subject*" value="{{ old('subject') }}" type="text" name="subject" required aria-required="true">
                </p>
            </div>
            <div class="col-md-12">
                <p>
                    <textarea cols="40" rows="10" maxlength="5000" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" placeholder="Message*" name="message" required aria-required="true">{{ old('message') }}</textarea>
                    <br>
                    <button type="submit" class="thm-btn contact-one__form-btn">Send Message</button>
                </p>
            </div>
        </div>
    </form>
@endif
