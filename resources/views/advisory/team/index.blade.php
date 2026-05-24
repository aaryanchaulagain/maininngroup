@extends('layouts.advisory', ['active' => 'team'])

@section('title', 'Meet Our Team — Business Advisory')

@section('content')
<section class="adv-page-hero">
    <div class="adv-page-hero__inner">
        <nav class="adv-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('advisory.home') }}">Home</a>
            <span>/</span>
            <span>Meet Our Team</span>
        </nav>
        <h1>Meet Our Team</h1>
        <p class="adv-lead mt-4 max-w-2xl">Senior advisors and specialists dedicated to your growth, protection, and peace of mind.</p>
    </div>
</section>

<section class="adv-section adv-section--alt adv-team-section">
    <div class="adv-container">
        <div class="adv-team-grid">
            @forelse ($team as $member)
                <x-advisory.team-member-card :member="$member" />
            @empty
                <p class="adv-team-grid__empty">Team profiles will be published here soon.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
