@extends('master.frontend')
@section('title',__('backend.project'))
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
                                    @lang('backend.projects')
                                </a>
                            </div>
                            <div class="title">
                                <a href="#">
                                   @lang('backend.projects')
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
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-single-one text-center">
                            <a href="{{ route('frontend.project',$project->slug) }}" class="thumbnail">
                                <div class="inner" style="height: 300px;">
                                    <img src="{{ asset($project->photo) }}" style="height: 100%"
                                         alt="{{ getLocaleTranslation($project,'alt') }}">
                                </div>
                            </a>
                            <div class="body text-start">
                                <a href="{{ route('frontend.selectedContent',$project->slug) }}">
                                    <h5 class="title">
                                        {{ getLocaleTranslation($project,'name') }}
                                    </h5>
                                </a>
                                <a href="{{ route('frontend.project',$project->slug) }}"
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
