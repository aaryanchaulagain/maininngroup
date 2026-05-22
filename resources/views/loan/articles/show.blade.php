@extends('layouts.loan-avada')

@section('title', $article->title.' - Innovative Wealth - Mortgage Broker')

@section('content')
@include('components.loan.avada.header', ['active' => 'articles'])

@include('components.loan.avada.breadcrumbs', ['current' => $article->title])

<main id="main" class="clearfix width-100 loan-article-single">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <article class="post-content loan-article-single__container">
                @if ($article->imageUrl())
                    <div class="loan-article-single__thumb">
                        <img src="{{ $article->imageUrl() }}" alt="" loading="lazy" decoding="async">
                    </div>
                @endif
                <h1 class="loan-article-single__title">{{ $article->title }}</h1>
                @if ($article->published_at)
                    <p class="loan-article-single__meta">{{ $article->published_at->format('F j, Y') }}</p>
                @endif
                <hr class="loan-article-single__sep" aria-hidden="true">
                <div class="loan-article-single__body">
                    {!! nl2br(e($article->body ?? $article->excerpt)) !!}
                </div>
                <p class="loan-article-single__back">
                    <a href="{{ route('loan.articles') }}">&larr; Back to Articles</a>
                </p>
            </article>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
