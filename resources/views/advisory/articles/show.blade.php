@extends('layouts.advisory', ['active' => 'articles-show'])

@section('title', $article->title.' — Business Advisory')

@section('content')
<section class="adv-page-hero">
    <div class="adv-page-hero__inner">
        <nav class="adv-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('advisory.home') }}">Home</a>
            <span>/</span>
            <a href="{{ route('advisory.articles.index') }}">Articles</a>
            <span>/</span>
            <span>{{ $article->title }}</span>
        </nav>
        <p class="text-sm text-blue-200/80">{{ $article->published_at?->format('F j, Y') }}</p>
        <h1>{{ $article->title }}</h1>
    </div>
</section>

<section class="adv-section adv-section--alt">
    <div class="adv-container">
        <div class="grid gap-12 lg:grid-cols-3">
            <article class="lg:col-span-2">
                @if ($article->imageUrl())
                    <figure class="adv-article-featured">
                        <img src="{{ $article->imageUrl() }}" alt="{{ $article->title }}" loading="eager" decoding="async">
                    </figure>
                @endif
                <div class="adv-prose">
                    {!! $article->body !!}
                </div>
            </article>
            @if ($recent->isNotEmpty())
                <aside>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6">
                        <h2 class="text-sm font-bold uppercase tracking-wider text-slate-500">Recent articles</h2>
                        <ul class="mt-4 space-y-4">
                            @foreach ($recent as $item)
                                <li>
                                    <a href="{{ route('advisory.articles.show', $item) }}" class="font-medium text-advisory-blue hover:underline">{{ $item->title }}</a>
                                    <p class="mt-1 text-xs text-slate-500">{{ $item->published_at?->format('d M Y') }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            @endif
        </div>
    </div>
</section>
@endsection
