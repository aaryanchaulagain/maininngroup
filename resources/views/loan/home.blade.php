@extends('layouts.loan-avada')

@section('title', 'Home - Innovative Wealth - Mortgage Broker')

@section('content')

@include('components.loan.avada.header', ['active' => 'home'])

@include('components.loan.hero')

<main id="main" class="clearfix width-100">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div id="post-8" class="post-8 page type-page status-publish hentry">
                <div class="post-content">

                    @include('components.loan.avada.home-intro', ['featuredTestimonial' => $featuredTestimonial ?? null])
                    @include('components.loan.avada.home-expertise')

                </div>
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer', ['recentArticles' => $recentArticles ?? collect()])
@endsection
