<div class="rts-blog-area mt--50">
    <div class="container">
        <div class="title-area-center">
            <h2 class="title">
                <span>
                    @lang('backend.services')
                </span>
            </h2>
        </div>
        <div class="row g-24 mt--20">
            @foreach($allServices as $service)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-single-one text-center">
                        <a href="{{ route('frontend.service',$service->slug) }}" class="thumbnail">
                            <div class="inner" style="height: 300px;">
                                <img src="{{ asset($service->photo) }}" style="height: 100%"
                                     alt="{{ getLocaleTranslation($service,'alt') }}">
                            </div>
                        </a>
                        <div class="body text-start">
                            <a href="{{ route('frontend.service',$service->slug) }}" >
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
