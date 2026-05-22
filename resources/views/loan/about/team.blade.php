@extends('layouts.loan-avada')

@section('title', 'Team - Innovative Wealth - Mortgage Broker')

@section('content')
@include('components.loan.avada.header', ['active' => 'team'])

@include('components.loan.avada.breadcrumbs', ['current' => 'Team'])

<main id="main" class="clearfix width-100 loan-team-page">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div class="post-content">
                @include('components.loan.avada.team-content')
            </div>
        </section>
    </div>
</main>

@include('components.loan.avada.footer')
@endsection
