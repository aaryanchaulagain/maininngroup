@extends('layouts.loan-avada')

@section('title', 'Refer and EARN - Innovative Wealth - Mortgage Broker')

@section('content')
@include('components.loan.avada.header', ['active' => 'refer'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Refer and EARN'])

<main id="main" class="clearfix loan-refer-page">
    <div class="fusion-row loan-refer-page__row">
        <section id="content" class="loan-refer-page__content">
            <div class="post-content">
                @include('components.loan.avada.refer-content')
            </div>
        </section>
        <aside id="sidebar" class="loan-refer-sidebar fusion-widget-area" aria-label="Page navigation">
            <ul class="side-nav">
                <li class="current_page_item">
                    <a href="{{ route('loan.about.refer') }}" aria-current="page">Refer and EARN</a>
                </li>
            </ul>
        </aside>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
