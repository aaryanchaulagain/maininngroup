@extends('layouts.advisory', ['active' => 'team'])

@section('title', $member->name.' — Meet Our Team')

@section('content')
<section class="adv-page-hero adv-page-hero--compact">
    <div class="adv-page-hero__inner">
        <nav class="adv-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('advisory.home') }}">Home</a>
            <span>/</span>
            <a href="{{ route('advisory.team.index') }}">Meet Our Team</a>
            <span>/</span>
            <span>{{ $member->name }}</span>
        </nav>
    </div>
</section>

<section class="adv-team-profile">
    <div class="adv-container">
        <div class="adv-team-profile__inner">
            @if ($member->title_label)
                <p class="adv-team-profile__eyebrow">{{ $member->title_label }}</p>
            @endif

            @if ($member->role)
                <p class="adv-team-profile__position">{{ $member->role }}</p>
            @endif

            <h1 class="adv-team-profile__name">{{ $member->name }}</h1>

            @if ($member->photoUrl())
                <div class="adv-team-profile__photo">
                    <img
                        src="{{ $member->photoUrl() }}"
                        alt="{{ $member->name }}"
                        loading="eager"
                        decoding="async"
                    >
                </div>
            @endif

            <div class="adv-team-profile__bio">
                @forelse ($member->bioParagraphs() as $paragraph)
                    <p>{{ $paragraph }}</p>
                @empty
                    <p class="adv-team-profile__empty">A full profile for this team member will be published soon.</p>
                @endforelse
            </div>

            <div class="adv-team-profile__contact-zone">
                <x-tax.zimed.contact-icon-row
                    class="adv-team-profile__contact"
                    :phone="$member->callPhone()"
                    :email="$member->email"
                    :mobile="$member->mobilePhone()"
                />
            </div>

            <p class="adv-team-profile__back">
                <a href="{{ route('advisory.team.index') }}" class="adv-btn adv-btn--outline">← Back to team</a>
            </p>
        </div>
    </div>
</section>
@endsection
