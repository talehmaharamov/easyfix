@extends('master.frontend')
@section('title',$category->translate(app()->getLocale())->name ?? " ")
@section('meta')
    <meta name="description" content="{{ $category->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
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
                                    @lang('backend.category')
                                </a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    {{ getLocaleTranslation($category,'name') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-blog-area rts-section-gapTop">
        <div class="container pb--160">
            <div class="row g-24 mt--20">
                @foreach($category->content as $content)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-single-one text-center">
                            <a href="{{ route('frontend.selectedContent',$content->slug) }}" class="thumbnail">
                                <div class="inner">
                                    <img src="{{ asset($content->photo) }}"
                                         alt="{{ getLocaleTranslation($content,'alt') }}">
                                </div>
                            </a>
                            <div class="body text-start">
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}">
                                    <h5 class="title">
                                        {{ getLocaleTranslation($content,'name') }}
                                    </h5>
                                </a>
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}"
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
