<div class="inn-appointment">
    @if (session('success'))
        <div class="inn-contact-success inn-appointment__success" role="alert" aria-live="polite">
            <span class="inn-contact-success__icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 12.5L11 14.5L15.5 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                </svg>
            </span>
            <div class="inn-contact-success__body">
                <p class="inn-contact-success__title">Thank you</p>
                <p class="inn-contact-success__text">{{ session('success') }}</p>
            </div>
        </div>
    @else
        @if ($errors->any())
            <div class="inn-contact-errors inn-appointment__errors" role="alert">
                <p class="inn-appointment__errors-title"><i class="fa-solid fa-circle-exclamation" aria-hidden="true"></i> Please fix the following</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('main.contact.store') }}" class="inn-contact-form inn-appointment__form" aria-label="Make an appointment">
            @csrf
            <input type="hidden" name="source_domain" value="main">

            <div class="inn-appointment__fields">
                <div class="inn-appointment__row inn-appointment__row--half">
                    <div class="inn-appointment__field">
                        <label for="avia_1_1" class="inn-appointment__label">
                            <i class="fa-regular fa-user inn-appointment__label-icon" aria-hidden="true"></i>
                            Name <span class="inn-appointment__required" aria-hidden="true">*</span>
                        </label>
                        <input name="name" class="inn-appointment__input text_input" type="text" id="avia_1_1" value="{{ old('name') }}" placeholder="Your full name" required autocomplete="name">
                    </div>
                    <div class="inn-appointment__field">
                        <label for="avia_2_1" class="inn-appointment__label">
                            <i class="fa-regular fa-envelope inn-appointment__label-icon" aria-hidden="true"></i>
                            E-Mail <span class="inn-appointment__required" aria-hidden="true">*</span>
                        </label>
                        <input name="email" class="inn-appointment__input text_input" type="email" id="avia_2_1" value="{{ old('email') }}" placeholder="you@example.com" required autocomplete="email">
                    </div>
                </div>

                <div class="inn-appointment__row">
                    <div class="inn-appointment__field">
                        <label for="avia_3_1" class="inn-appointment__label">
                            <i class="fa-solid fa-building inn-appointment__label-icon" aria-hidden="true"></i>
                            Department <span class="inn-appointment__required" aria-hidden="true">*</span>
                        </label>
                        <div class="inn-appointment__select-wrap">
                            <select name="department" class="inn-appointment__input inn-appointment__select select" id="avia_3_1" required>
                                <option value="" @selected(old('department') === '') disabled>Select a department</option>
                                <option value="Accounting & Taxation" @selected(old('department') === 'Accounting & Taxation')>Accounting & Taxation</option>
                                <option value="Finance" @selected(old('department') === 'Finance')>Finance</option>
                                <option value="Insurance" @selected(old('department') === 'Insurance')>Insurance</option>
                                <option value="Remit" @selected(old('department') === 'Remit')>Remit</option>
                            </select>
                            <i class="fa-solid fa-chevron-down inn-appointment__select-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="inn-appointment__row">
                    <div class="inn-appointment__field">
                        <label for="avia_4_1" class="inn-appointment__label">
                            <i class="fa-regular fa-calendar inn-appointment__label-icon" aria-hidden="true"></i>
                            Desired time and date
                            <span class="inn-appointment__optional">(optional)</span>
                        </label>
                        <input name="desired_date" class="inn-appointment__input avia_datepicker text_input" type="text" id="avia_4_1" value="{{ old('desired_date') }}" placeholder="dd / mm / yyyy" autocomplete="off">
                    </div>
                </div>

                <div class="inn-appointment__row">
                    <div class="inn-appointment__field">
                        <label for="avia_5_1" class="inn-appointment__label">
                            <i class="fa-regular fa-comment-dots inn-appointment__label-icon" aria-hidden="true"></i>
                            Subject <span class="inn-appointment__required" aria-hidden="true">*</span>
                        </label>
                        <input name="subject" class="inn-appointment__input text_input" type="text" id="avia_5_1" value="{{ old('subject') }}" placeholder="Brief summary of your enquiry" required>
                    </div>
                </div>

                <div class="inn-appointment__row">
                    <div class="inn-appointment__field">
                        <label for="avia_6_1" class="inn-appointment__label">
                            <i class="fa-regular fa-message inn-appointment__label-icon" aria-hidden="true"></i>
                            Message <span class="inn-appointment__required" aria-hidden="true">*</span>
                        </label>
                        <textarea name="message" class="inn-appointment__input inn-appointment__textarea text_area" id="avia_6_1" rows="5" placeholder="Tell us how we can help…" required>{{ old('message') }}</textarea>
                    </div>
                </div>
            </div>

            <input type="text" name="website" class="inn-appointment__honeypot" value="" tabindex="-1" autocomplete="off" aria-hidden="true">

            <div class="inn-appointment__actions">
                <button type="submit" class="inn-appointment__submit">
                    <span>Submit appointment</span>
                    <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                </button>
                <p class="inn-appointment__hint">We typically respond within one business day.</p>
            </div>
        </form>
    @endif
</div>
