@props(['member'])

<article class="adv-team-grid__col">
    <div class="adv-team-card">
        <div class="adv-team-card__panel">
            <div class="adv-team-card__photo">
                <a href="{{ route('advisory.team.show', $member->slug) }}" class="adv-team-card__photo-link">
                    @if ($member->photoUrl())
                        <img src="{{ $member->photoUrl() }}" alt="{{ $member->name }}" loading="lazy" decoding="async">
                    @else
                        <span class="adv-team-card__placeholder" aria-hidden="true"><i class="fa-solid fa-user"></i></span>
                    @endif
                </a>
            </div>

            <h2 class="adv-team-card__name">
                <a href="{{ route('advisory.team.show', $member->slug) }}">{{ $member->name }}</a>
            </h2>

            @if ($member->role)
                <p class="adv-team-card__role">{{ $member->role }}</p>
            @endif

            @if ($member->callPhone() || $member->email || $member->mobilePhone())
                <div class="adv-team-card__contact-zone">
                    <x-tax.zimed.contact-icon-row
                        class="adv-team-card__contact"
                        :phone="$member->callPhone()"
                        :email="$member->email"
                        :mobile="$member->mobilePhone()"
                    />
                </div>
            @endif

            <a href="{{ route('advisory.team.show', $member->slug) }}" class="adv-team-card__profile-link">View profile</a>
        </div>
    </div>
</article>
