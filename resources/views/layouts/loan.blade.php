@extends('layouts.app')

@section('body-class', 'bg-loan-navy text-white min-h-screen')

@section('body')
    @include('components.loan.navbar')
    <main>@yield('content')</main>
    @include('components.loan.footer')
@endsection
