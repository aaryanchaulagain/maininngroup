@extends('layouts.loan-avada')

@section('title', 'Articles - Innovative Wealth - Mortgage Broker')

@section('content')
@include('components.loan.avada.header', ['active' => 'articles'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Articles'])

<main id="main" class="clearfix width-100 loan-articles-page">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">
                @include('components.loan.avada.articles-content', ['articles' => $articles])
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
