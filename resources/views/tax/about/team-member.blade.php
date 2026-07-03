@extends('layouts.tax-zimed')

@section('body-class', 'page-team-member wp-singular page elementor-page')

@section('title', $member->name.' – Meet The Team – Innovative associates')

@section('content')
@include('components.tax.zimed.header', ['active' => 'team'])

<div class="full-width-page">
    <x-tax.zimed.page-header
        :title="$member->name"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'About Page', 'url' => route('tax.aboutus')],
            ['label' => 'Meet The Team', 'url' => route('tax.about.team')],
            ['label' => $member->name, 'current' => true],
        ]"
    />

    <section class="tax-team-profile">
        <div class="container">
            <div class="tax-team-profile__inner">
                @if ($member->title_label)
                    <p class="tax-team-profile__eyebrow">{{ $member->title_label }}</p>
                @endif

                @if ($member->role)
                    <p class="tax-team-profile__position">{{ $member->role }}</p>
                @endif

                <h1 class="tax-team-profile__name">{{ $member->name }}</h1>

                @if ($member->photoUrl())
                    <div class="tax-team-profile__photo">
                        <img
                            fetchpriority="high"
                            decoding="async"
                            src="{{ $member->photoUrl() }}"
                            alt="{{ $member->name }}"
                            loading="eager"
                        >
                    </div>
                @endif

                <div class="tax-team-profile__bio">
                    @forelse ($member->bioParagraphs() as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @empty
                        <p class="tax-team-profile__empty">A full profile for this team member will be published soon.</p>
                    @endforelse
                </div>

                <div class="tax-team-profile__contact-zone">
                    <x-tax.zimed.contact-icon-row
                        class="tax-team-profile__contact tax-contact-icons--center"
                        :phone="$member->callPhone()"
                        :email="$member->email"
                        :mobile="$member->mobilePhone()"
                    />
                </div>
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
