@extends('layouts.advisory', ['active' => 'articles'])

@section('title', 'Articles — Business Advisory')

@section('content')
<section class="adv-page-hero">
    <div class="adv-page-hero__inner">
        <nav class="adv-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('advisory.home') }}">Home</a>
            <span>/</span>
            <span>Articles</span>
        </nav>
        <h1>Articles & insights</h1>
        <p class="adv-lead mt-4 max-w-2xl">Perspectives on strategy, risk, and building resilient businesses.</p>
    </div>
</section>

<section class="adv-section adv-section--alt">
    <div class="adv-container">
        <div class="adv-articles-grid">
            @forelse ($articles as $article)
                <x-advisory.article-card :article="$article" />
            @empty
                <p class="col-span-full text-center adv-lead">Articles will be published here soon.</p>
            @endforelse
        </div>

        @if ($articles->hasPages())
            <div class="mt-10 flex justify-center gap-2">
                @if ($articles->onFirstPage())
                    <span class="adv-btn adv-btn--outline opacity-40 pointer-events-none">Previous</span>
                @else
                    <a href="{{ $articles->previousPageUrl() }}" class="adv-btn adv-btn--outline">Previous</a>
                @endif
                @if ($articles->hasMorePages())
                    <a href="{{ $articles->nextPageUrl() }}" class="adv-btn adv-btn--outline">Next</a>
                @else
                    <span class="adv-btn adv-btn--outline opacity-40 pointer-events-none">Next</span>
                @endif
            </div>
        @endif
    </div>
</section>
@endsection
