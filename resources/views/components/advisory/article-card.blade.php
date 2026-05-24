@props(['article'])

<a href="{{ route('advisory.articles.show', $article) }}" class="adv-article-card">
    <span class="adv-article-card__media">
        @if ($article->imageUrl())
            <img src="{{ $article->imageUrl() }}" alt="" loading="lazy" decoding="async">
        @else
            <span class="adv-article-card__placeholder" aria-hidden="true"><i class="fa-solid fa-newspaper"></i></span>
        @endif
    </span>
    <span class="adv-article-card__body">
        @if ($article->published_at)
            <time class="adv-article-card__date" datetime="{{ $article->published_at->toDateString() }}">{{ $article->published_at->format('d M Y') }}</time>
        @endif
        <span class="adv-article-card__title">{{ $article->title }}</span>
        <span class="adv-article-card__excerpt">{{ $article->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($article->body), 120) }}</span>
        <span class="adv-article-card__more">Read article <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span>
    </span>
</a>
