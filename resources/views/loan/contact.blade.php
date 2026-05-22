@extends('layouts.loan-avada')



@section('title', 'Contact Us - Innovative Wealth - Mortgage Broker')



@section('content')

@include('components.loan.avada.header', ['active' => 'contact'])



@include('components.loan.avada.breadcrumbs', ['current' => 'Contact Us'])



<main id="main" class="clearfix width-100 loan-contact-page">

    <div class="fusion-row" style="max-width:100%;">

        <section id="content" class="full-width">

            <div class="post-content">

                @include('components.loan.avada.contact-content')

            </div>

        </section>

    </div>

</main>



@include('components.loan.avada.footer')

@endsection

