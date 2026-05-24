@extends('layouts.advisory', ['active' => 'services-'.$slug])

@section('title', $service['title'].' — Business Advisory')

@section('content')
<section class="adv-page-hero">
    <div class="adv-page-hero__inner">
        <nav class="adv-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('advisory.home') }}">Home</a>
            <span>/</span>
            <a href="{{ route('advisory.services.index') }}">Services</a>
            <span>/</span>
            <span>{{ $service['title'] }}</span>
        </nav>
        <p class="adv-kicker" style="color:rgba(255,255,255,0.75);">{{ $service['tagline'] }}</p>
        <h1>{{ $service['title'] }}</h1>
        <p class="adv-lead mt-4 max-w-2xl">{{ $service['excerpt'] }}</p>
    </div>
</section>

<section class="adv-section adv-section--grey">
    <div class="adv-container">
        <div class="grid gap-12 lg:grid-cols-3">
            <div class="lg:col-span-2 space-y-5 adv-lead">
                @foreach ($service['body'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
            <aside>
                <div class="adv-contact-form">
                    <p class="adv-kicker">Key capabilities</p>
                    <ul class="adv-checklist mt-4">
                        @foreach ($service['highlights'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route('advisory.contact') }}" class="adv-btn adv-btn--primary mt-6" style="width:100%;">Enquire now</a>
                </div>
                <div class="adv-contact-form mt-6">
                    <p class="adv-kicker">Other services</p>
                    <ul class="mt-3 space-y-2" style="list-style:none;padding:0;">
                        @foreach ($allServices as $s)
                            @if ($s['slug'] !== $slug)
                                <li><a href="{{ route('advisory.services.show', $s['slug']) }}" class="adv-text-link" style="font-size:0.9rem;">{{ $s['title'] }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
