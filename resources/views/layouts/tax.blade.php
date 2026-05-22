@extends('layouts.app')

@section('body-class', 'bg-tax-gradient min-h-screen')

@section('body')
    @hasSection('use-innovative-header')
        <x-tax.innovative-navbar />
    @else
        @include('components.tax.navbar')
    @endif
    <main>@yield('content')</main>
    @hasSection('hide-tax-footer')
    @else
        @include('components.tax.footer')
    @endif
@endsection
