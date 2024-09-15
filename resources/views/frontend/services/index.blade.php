@extends('master.frontend')
@section('title',__('backend.service'))
@section('front')
    <div class="rts-bread-crumb-area ptb--65 bg_image bg-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">
                            <div class="slug">
                                <a href="{{ route('frontend.index') }}">@lang('backend.home-page') /</a>
                                <a class="active" href="{{ route('frontend.index') }}">
                                    @lang('backend.service')
                                </a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    @lang('backend.service')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-blog-area">
        <div class="container pb--80">
            <div class="row g-24 mt--20">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-single-one text-center">
                            <a href="{{ route('frontend.service',$service->slug) }}" class="thumbnail">
                                <div class="inner" style="height: 300px">
                                    <img src="{{ asset($service->photo) }}" style="height: 100%"
                                         alt="{{ getLocaleTranslation($service,'alt') }}">
                                </div>
                            </a>
                            <div class="body text-start">
                                <a href="{{ route('frontend.service',$service->slug) }}">
                                    <h5 class="title">
                                        {{ getLocaleTranslation($service,'name') }}
                                    </h5>
                                </a>
                                <a href="{{ route('frontend.service',$service->slug) }}"
                                   class="rts-btn btn-border radious-0">
                                    @lang('backend.load-more')
                                    <i class="fa-regular fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
