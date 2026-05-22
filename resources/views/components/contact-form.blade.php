@props(['source' => 'main', 'action' => null, 'theme' => 'main'])

@php
    $action = $action ?? match($source) {
        'tax' => route('tax.contact.store'),
        'loan' => route('loan.contact.store'),
        default => route('main.contact.store'),
    };
    $btnClass = match($theme) {
        'tax' => 'bg-tax-teal hover:bg-tax-deep text-white',
        'loan' => 'bg-loan-gold hover:bg-amber-600 text-loan-navy',
        default => 'bg-inn-navy hover:bg-inn-slate text-white',
    };
@endphp

<form method="POST" action="{{ $action }}" class="space-y-5 {{ $attributes->get('class') }}">
    @csrf
    <input type="hidden" name="source_domain" value="{{ $source }}">

    <div class="grid gap-5 sm:grid-cols-2">
        <div>
            <label for="name" class="mb-1 block text-sm font-medium">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required maxlength="255"
                class="w-full rounded-xl border border-gray-200 bg-white/80 px-4 py-3 text-sm outline-none ring-tax-teal/30 transition focus:ring-2">
        </div>
        <div>
            <label for="email" class="mb-1 block text-sm font-medium">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                class="w-full rounded-xl border border-gray-200 bg-white/80 px-4 py-3 text-sm outline-none ring-tax-teal/30 transition focus:ring-2">
        </div>
    </div>

    <div>
        <label for="phone" class="mb-1 block text-sm font-medium">Phone</label>
            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" maxlength="20"
                class="w-full rounded-xl border border-gray-200 bg-white/80 px-4 py-3 text-sm outline-none ring-tax-teal/30 transition focus:ring-2">
    </div>

    <div>
        <label for="message" class="mb-1 block text-sm font-medium">Message</label>
        <textarea id="message" name="message" rows="5" required maxlength="5000"
            class="w-full rounded-xl border border-gray-200 bg-white/80 px-4 py-3 text-sm outline-none ring-tax-teal/30 transition focus:ring-2">{{ old('message') }}</textarea>
    </div>

    <button type="submit" class="btn-primary {{ $btnClass }}">
        Send message
    </button>
</form>
