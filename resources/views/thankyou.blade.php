@extends('layout.master')
@section('body')
    <section id="thankyou" style="background-image: url('{{ asset('thankyoubanner.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="col">
            <img src="{{ asset('Thank You.png') }}" alt="">
            <h1 style="color: rgba(41, 54, 96, 1);">{{ __('lang.Thank You for Your Interest') }}</h1>
            <p style="color: rgba(109, 109, 109, 1);">{{ __('lang.Our team will be contact you within 5 working days') }}</p>
            <a href="{{ route('home') }}">{{ __('lang.BACK TO HOME PAGE') }}</a>
        </div>
    </section>
@endsection