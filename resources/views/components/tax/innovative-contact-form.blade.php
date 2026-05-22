<form method="POST" action="{{ route('tax.contact.store') }}" class="tax-inn-contact-form">
    @csrf
    <input type="hidden" name="source_domain" value="tax">
    <h3>Contact Us Now</h3>

    @include('components.alert')

    <div class="field">
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required maxlength="255">
    </div>
    <div class="field">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
    </div>
    <div class="field">
        <input type="tel" name="phone" placeholder="Phone" value="{{ old('phone') }}" maxlength="20">
    </div>
    <div class="field">
        <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" maxlength="255">
    </div>
    <div class="field">
        <textarea name="message" rows="5" placeholder="Message" required maxlength="5000">{{ old('message') }}</textarea>
    </div>
    <button type="submit">Send Message</button>
</form>
