@extends('layouts.tax-zimed')

@section('body-class', 'page-team wp-singular page page-id-1292 elementor-page elementor-page-1292')

@section('title', 'Meet The Team – Innovative associates')

@section('content')
@include('components.tax.zimed.header', ['active' => 'team'])

<div class="full-width-page elementor elementor-1292">
    <x-tax.zimed.page-header
        title="Meet The Team"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'About Page', 'url' => route('tax.aboutus')],
            ['label' => 'Meet The Team', 'current' => true],
        ]"
    />

    <section class="tax-team-office-heading">
        <div class="container">
            <h1 class="tax-team-office-heading__title">Sydney Office team</h1>
        </div>
    </section>

    <section class="tax-team-grid">
        <div class="container">
            <div class="tax-team-grid__row tax-team-grid__row--cards">
                @forelse ($team as $member)
                    <x-tax.zimed.team-member-card
                        :name="$member->name"
                        :role="$member->role ?? ''"
                        :image="$member->photoUrl()"
                        :phone="$member->callPhone()"
                        :email="$member->email"
                        :mobile="$member->mobilePhone()"
                        :profile-url="route('tax.about.team.show', $member->slug)"
                    />
                @empty
                    <p class="tax-team-grid__empty">Team profiles will be published here soon.</p>
                @endforelse
            </div>
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection
