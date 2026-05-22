<section class="loan-refer fusion-fullwidth fullwidth-box nonhundred-percent-fullwidth">
    <div class="loan-refer__container">
        <div class="fusion-reading-box-container reading-box-container-1">
            <div class="reading-box loan-refer__reading-box">
                <div class="fusion-reading-box-flex">
                    <h2>Refer and EARN $350</h2>
                </div>
            </div>
        </div>

        <div class="fusion-text loan-refer__intro">
            <p>We need your help because your referrals are the lifeblood of our business. Only through YOUR assistance can we keep building the business and consistently provide the level of service that ensures our clients are always completely satisfied. We sincerely hope you will tell your friends, family, peers and co-workers about our services. You'll be doing them and us a favor.</p>
            <p>Please get consent from the potential clients' permission for us to contact them and email their contact details to us or fill up the form online. We will contact them for an appointment to discuss the loan needs. On successful settlement of their home loan, we will pay you the referral fees of $350. To say THANK YOU for your continued support.</p>
        </div>

        @if (session('success'))
            <div class="loan-refer__alert loan-refer__alert--success" role="status">
                <span class="loan-refer__alert-icon" aria-hidden="true">✓</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="loan-refer__alert loan-refer__alert--error" role="alert">
                <span class="loan-refer__alert-icon" aria-hidden="true">!</span>
                <span>There was an error trying to send your message. Please try again later.</span>
            </div>
        @endif

        <form method="POST" action="{{ route('loan.about.refer.store') }}" class="loan-refer__form fusion-form">
            @csrf
            <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="loan-refer__honeypot" aria-hidden="true">

            <div class="loan-refer__field">
                <label for="your_name">Your Name <abbr title="required">*</abbr></label>
                <input type="text" id="your_name" name="your_name" value="{{ old('your_name') }}" class="fusion-form-input" required maxlength="255">
                @error('your_name')<span class="loan-refer__error">{{ $message }}</span>@enderror
            </div>

            <div class="loan-refer__field">
                <label for="your_number">Your number <abbr title="required">*</abbr></label>
                <input type="text" id="your_number" name="your_number" value="{{ old('your_number') }}" class="fusion-form-input" required maxlength="30">
                @error('your_number')<span class="loan-refer__error">{{ $message }}</span>@enderror
            </div>

            <div class="loan-refer__field">
                <label for="their_name">Their name <abbr title="required">*</abbr></label>
                <input type="text" id="their_name" name="their_name" value="{{ old('their_name') }}" class="fusion-form-input" required maxlength="255">
                @error('their_name')<span class="loan-refer__error">{{ $message }}</span>@enderror
            </div>

            <div class="loan-refer__field">
                <label for="their_number">Their number <abbr title="required">*</abbr></label>
                <input type="text" id="their_number" name="their_number" value="{{ old('their_number') }}" class="fusion-form-input" required maxlength="30">
                @error('their_number')<span class="loan-refer__error">{{ $message }}</span>@enderror
            </div>

            <div class="loan-refer__field">
                <label for="message">Message <abbr title="required">*</abbr></label>
                <textarea id="message" name="message" rows="4" class="fusion-form-input" required maxlength="5000">{{ old('message') }}</textarea>
                @error('message')<span class="loan-refer__error">{{ $message }}</span>@enderror
            </div>

            <div class="loan-refer__submit">
                <button type="submit" class="fusion-button button-flat button-large button-default">
                    <span class="fusion-button-text">Submit</span>
                </button>
            </div>
        </form>
    </div>
</section>
