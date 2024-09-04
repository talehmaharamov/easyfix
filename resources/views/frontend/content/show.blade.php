@extends('master.frontend')
@section('title',( getLocaleTranslation($content,'name') ?? ''))
@section('meta')
    <meta name="description" content="{{ $content->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <div class="rts-bread-crumb-area ptb--65 bg_image bg-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">
                            <div class="slug">
                                <a href="{{ route('frontend.index') }}">
                                    @lang('backend.home-page') /
                                </a>
                                <a class="active" href="{{ route('frontend.index') }}">
                                    @lang('backend.service')
                                </a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    {{ getLocaleTranslation($content,'name')  }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{ asset($content->photo) }}" alt="{{ getLocaleTranslation($content,'alt') }}">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>
                                        {{ getLocaleTranslation($content->category,'name') }}
                                    </span>
                                </div>
                            </div>
                            <h3 class="title animated fadeIn">
                                {{ getLocaleTranslation($content,'name') }}
                            </h3>
                            <p class="disc para-1">
                                {!! getLocaleTranslation($content,'content') !!}
                            </p>

                            <div class="row g-24">
                                @foreach($content->photos as $photo)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thumbnail details">
                                            <img src="{{ asset($photo->photo) }}"
                                                 alt="{{ getLocaleTranslation($content,'alt') }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
