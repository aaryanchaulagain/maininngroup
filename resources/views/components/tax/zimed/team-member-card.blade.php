@props([
    'name',
    'role',
    'image',
    'phone' => null,
    'email' => null,
    'mobile' => null,
    'profileUrl' => null,
])

<div class="tax-team-grid__col">
    <article class="tax-team-card text-center">
        <div class="tax-team-card__panel">
            @if ($image)
                <div class="tax-team-card__photo">
                    @if ($profileUrl)
                        <a href="{{ $profileUrl }}" class="tax-team-card__photo-link">
                            <img decoding="async" src="{{ $image }}" alt="{{ $name }}" loading="lazy">
                        </a>
                    @else
                        <img decoding="async" src="{{ $image }}" alt="{{ $name }}" loading="lazy">
                    @endif
                </div>
            @endif

            <h2 class="tax-team-card__name">
                @if ($profileUrl)
                    <a href="{{ $profileUrl }}">{{ $name }}</a>
                @else
                    {{ $name }}
                @endif
            </h2>

            @if ($role)
                <p class="tax-team-card__role">{{ $role }}</p>
            @endif

            <div class="tax-team-card__contact-zone">
                <x-tax.zimed.contact-icon-row
                    class="tax-team-card__contact tax-contact-icons--center"
                    :phone="$phone"
                    :email="$email"
                    :mobile="$mobile"
                />
            </div>
        </div>
    </article>
</div>
