@extends('master.frontend')
@section('title',__('backend.page-not-found'))
@section('front')
    <header class="page-header" data-background="images/slide01.jpg" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>404</h1>
            {{--            <p>The smaller male cones release pollen, which fertilizes the female</p>--}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active" aria-current="page">404</li>
            </ol>
        </div>
    </header>
    <section class="error404">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <figure><img src="{{asset('frontend/images/error404.png')}}" alt="404"></figure>
                    <h2>@lang('backend.page-not-found')</h2>
                    <a href="{{ route('frontend.index') }}">@lang('backend.back-to-home')</a>
                </div>
            </div>
        </div>
    </section>
@endsection
