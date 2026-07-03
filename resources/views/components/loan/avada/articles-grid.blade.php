@php
    $cdn = site_uploads('loan');
    $fallback = [
        (object) [
            'slug' => 'how-to-buy-a-first-home-with-big-price-growth-potential',
            'title' => 'How To Buy A First Home With Big Price Growth Potential',
            'excerpt' => "When new home-buyers seek out their first abode, it's not often high on their priority list to seek out a ...",
            'image' => $cdn.'/2020/12/property_growth.png',
            'published_at' => \Illuminate\Support\Carbon::parse('2020-12-11'),
        ],
        (object) [
            'slug' => 'six-steps-to-finding-undervalued-properties',
            'title' => 'Six Steps To Finding Undervalued Properties',
            'excerpt' => 'Most investors would want to score an undervalued property in a highly challenging market. This task requires loads of research ...',
            'image' => $cdn.'/2020/12/bargain-e1607652918574.jpg',
            'published_at' => \Illuminate\Support\Carbon::parse('2020-12-11'),
        ],
    ];
    $posts = $articles->count() > 0 ? $articles : collect($fallback);
@endphp

<section class="loan-articles-grid fusion-blog-layout-grid-wrapper">
    <div class="loan-articles-grid__container">
        <div class="loan-articles-grid__posts">
            @foreach ($posts as $article)
                @php
                    $url = route('loan.articles.show', $article->slug);
                    $image = $article->imageUrl() ?? $cdn.'/2020/08/financial-advisor-logo.png';
                    $date = $article->published_at
                        ? $article->published_at->format('F j, Y')
                        : null;
                @endphp
                <article class="loan-articles-grid__post fusion-post-grid">
                    <div class="loan-articles-grid__post-inner">
                        <a href="{{ $url }}" class="loan-articles-grid__thumb" aria-label="{{ $article->title }}">
                            <img src="{{ $image }}" alt="" width="638" height="317" loading="lazy" decoding="async">
                        </a>
                        <div class="loan-articles-grid__body">
                            <h2 class="loan-articles-grid__title entry-title">
                                <a href="{{ $url }}">{{ $article->title }}</a>
                            </h2>
                            @if ($date)
                                <p class="loan-articles-grid__meta">
                                    <span>{{ $date }}</span>
                                    <span class="loan-articles-grid__meta-sep">|</span>
                                </p>
                            @endif
                            <hr class="loan-articles-grid__sep" aria-hidden="true">
                            @if ($article->excerpt)
                                <p class="loan-articles-grid__excerpt">{{ $article->excerpt }}</p>
                            @endif
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        @if (method_exists($articles, 'links') && $articles->hasPages())
            <div class="loan-articles-grid__pagination">
                {{ $articles->links() }}
            </div>
        @endif
    </div>
</section>
