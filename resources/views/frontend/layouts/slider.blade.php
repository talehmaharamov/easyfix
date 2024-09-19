<div class="banner-one-swiper--wrapper-area mb--50">
    <div class="swiper mySwiper-banner">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="banner-one-start rts-banner-one rts-section-gap bg_image"
                         style="background-image:url('{{ asset($slider->photo) }}');">
                        <div class="banner-shape-area">
                            <img src="{{asset('frontend/images/banner/01.png')}}" alt="banner-shape"
                                 class="shape shape-1">
                            <img src="{{asset('frontend/images/banner/02.png')}}" alt="banner-shape"
                                 class="shape shape-2">
                            <img src="{{asset('frontend/images/banner/04.webp')}}" alt="banner-shape"
                                 class="shape shape-4">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner-main-wrapper-one1 pt--100 pb--100 pb_sm--40">
                                        <div class="pre-title1">
                                            <p style="color: #fff;font-weight: 700;font-size: 70px;line-height: 82px;margin-bottom: 30px;">
                                                {{ getLocaleTranslation($slider,'title') }}
                                            </p>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('frontend.contact-page') }}"
                                               class="rts-btn btn-primary with-arrow">
                                                @lang('backend.contact')
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next">
            <i class="fa-light fa-arrow-right"></i>
        </div>
        <div class="swiper-button-prev">
            <i class="fa-light fa-arrow-left"></i>
        </div>
    </div>
</div>


{{--<div class="banner-one-swiper--wrapper-area">--}}
{{--    <div class="swiper mySwiper-banner swiper-container-horizontal">--}}
{{--        <div class="swiper-wrapper" style="transform: translate3d(-3806px, 0px, 0px); transition-duration: 0ms;">--}}
{{--            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 1903px;">--}}
{{--                <!-- banner area one start -->--}}
{{--                <div class="banner-one-start rts-banner-one rts-section-gap bg_image--3 bg_image">--}}
{{--                    <div class="banner-shape-area">--}}
{{--                        <img src="assets/images/banner/01.png" alt="banner-shape" class="shape shape-1">--}}
{{--                        <img src="assets/images/banner/02.png" alt="banner-shape" class="shape shape-2">--}}
{{--                        <!-- <img src="assets/images/banner/03.png" alt="banner-shape" class="shape shape-3"> -->--}}
{{--                        <img src="assets/images/banner/04.webp" alt="banner-shape" class="shape shape-4">--}}
{{--                    </div>--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="banner-main-wrapper-one pt--100 pb--100 pb_sm--40">--}}
{{--                                    <div class="pre-title">--}}
{{--                                        <p>Hospitality &amp; Leisure</p>--}}
{{--                                    </div>--}}

{{--                                    <h1 class="title">--}}
{{--                                        Smart Plumber--}}
{{--                                        Solutions for You--}}
{{--                                        24/7 Hours--}}
{{--                                    </h1>--}}
{{--                                    <div class="button-area">--}}
{{--                                        <a href="appoinment.html" class="rts-btn btn-primary with-arrow">Request Quote <i class="fa-regular fa-arrow-up-right"></i></a>--}}
{{--                                        <a href="service.html" class="rts-btn btn-primary-white with-arrow">Our Services</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- banner area one end -->--}}
{{--            </div>--}}
{{--            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 1903px;">--}}
{{--                <!-- banner area one start -->--}}
{{--                <div class="banner-one-start rts-banner-one rts-section-gap bg_image--1 bg_image">--}}
{{--                    <div class="banner-shape-area">--}}
{{--                        <img src="assets/images/banner/01.png" alt="banner-shape" class="shape shape-1">--}}
{{--                        <img src="assets/images/banner/02.png" alt="banner-shape" class="shape shape-2">--}}
{{--                        <img src="assets/images/banner/04.webp" alt="banner-shape" class="shape shape-4">--}}
{{--                    </div>--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="banner-main-wrapper-one pt--100 pb--100 pb_sm--40">--}}
{{--                                    <div class="pre-title">--}}
{{--                                        <p>Hospitality &amp; Leisure</p>--}}
{{--                                    </div>--}}

{{--                                    <h1 class="title">--}}
{{--                                        Smart Plumber <br>--}}
{{--                                        Solutions for You <br>--}}
{{--                                        24/7 Hours--}}
{{--                                    </h1>--}}
{{--                                    <div class="button-area">--}}
{{--                                        <a href="appoinment.html" class="rts-btn btn-primary with-arrow">Request Quote <i class="fa-regular fa-arrow-up-right"></i></a>--}}
{{--                                        <a href="service.html" class="rts-btn btn-primary-white with-arrow">Our Services</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--              --}}
{{--            </div>--}}
{{--            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1903px;">--}}
{{--                <!-- banner area one start -->--}}
{{--                <div class="banner-one-start rts-banner-one rts-section-gap bg_image--2 bg_image">--}}
{{--                    <div class="banner-shape-area">--}}
{{--                        <img src="assets/images/banner/01.png" alt="banner-shape" class="shape shape-1">--}}
{{--                        <img src="assets/images/banner/02.png" alt="banner-shape" class="shape shape-2">--}}
{{--                        <!-- <img src="assets/images/banner/03.png" alt="banner-shape" class="shape shape-3"> -->--}}
{{--                        <img src="assets/images/banner/04.webp" alt="banner-shape" class="shape shape-4">--}}
{{--                    </div>--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="banner-main-wrapper-one pt--100 pb--100 pb_sm--40">--}}
{{--                                    <div class="pre-title">--}}
{{--                                        <p>Hospitality &amp; Leisure</p>--}}
{{--                                    </div>--}}

{{--                                    <h1 class="title">--}}
{{--                                        Smart Plumber--}}
{{--                                        Solutions for You--}}
{{--                                        24/7 Hours--}}
{{--                                    </h1>--}}

{{--                                    <div class="button-area">--}}
{{--                                        <a href="appoinment.html" class="rts-btn btn-primary with-arrow">Request Quote <i class="fa-regular fa-arrow-up-right"></i></a>--}}
{{--                                        <a href="service.html" class="rts-btn btn-primary-white with-arrow">Our Services</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- banner area one end -->--}}
{{--            </div>--}}
{{--            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 1903px;">--}}
{{--                <!-- banner area one start -->--}}
{{--                <div class="banner-one-start rts-banner-one rts-section-gap bg_image--3 bg_image">--}}
{{--                    <div class="banner-shape-area">--}}
{{--                        <img src="assets/images/banner/01.png" alt="banner-shape" class="shape shape-1">--}}
{{--                        <img src="assets/images/banner/02.png" alt="banner-shape" class="shape shape-2">--}}
{{--                        <!-- <img src="assets/images/banner/03.png" alt="banner-shape" class="shape shape-3"> -->--}}
{{--                        <img src="assets/images/banner/04.webp" alt="banner-shape" class="shape shape-4">--}}
{{--                    </div>--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="banner-main-wrapper-one pt--100 pb--100 pb_sm--40">--}}
{{--                                    <div class="pre-title">--}}
{{--                                        <p>Hospitality &amp; Leisure</p>--}}
{{--                                    </div>--}}

{{--                                    <h1 class="title">--}}
{{--                                        Smart Plumber--}}
{{--                                        Solutions for You--}}
{{--                                        24/7 Hours--}}
{{--                                    </h1>--}}
{{--                                    <div class="button-area">--}}
{{--                                        <a href="appoinment.html" class="rts-btn btn-primary with-arrow">Request Quote <i class="fa-regular fa-arrow-up-right"></i></a>--}}
{{--                                        <a href="service.html" class="rts-btn btn-primary-white with-arrow">Our Services</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- banner area one end -->--}}
{{--            </div>--}}
{{--            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 1903px;">--}}
{{--                <!-- banner area one start -->--}}
{{--                <div class="banner-one-start rts-banner-one rts-section-gap bg_image--1 bg_image">--}}
{{--                    <div class="banner-shape-area">--}}
{{--                        <img src="assets/images/banner/01.png" alt="banner-shape" class="shape shape-1">--}}
{{--                        <img src="assets/images/banner/02.png" alt="banner-shape" class="shape shape-2">--}}
{{--                        <!-- <img src="assets/images/banner/03.png" alt="banner-shape" class="shape shape-3"> -->--}}
{{--                        <img src="assets/images/banner/04.webp" alt="banner-shape" class="shape shape-4">--}}
{{--                    </div>--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="banner-main-wrapper-one pt--100 pb--100 pb_sm--40">--}}
{{--                                    <div class="pre-title">--}}
{{--                                        <p>Hospitality &amp; Leisure</p>--}}
{{--                                    </div>--}}

{{--                                    <h1 class="title">--}}
{{--                                        Smart Plumber <br>--}}
{{--                                        Solutions for You <br>--}}
{{--                                        24/7 Hours--}}
{{--                                    </h1>--}}
{{--                                    <div class="button-area">--}}
{{--                                        <a href="appoinment.html" class="rts-btn btn-primary with-arrow">Request Quote <i class="fa-regular fa-arrow-up-right"></i></a>--}}
{{--                                        <a href="service.html" class="rts-btn btn-primary-white with-arrow">Our Services</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- banner area one end -->--}}
{{--            </div></div>--}}
{{--        <div class="swiper-button-next"> <i class="fa-light fa-arrow-right"></i></div>--}}
{{--        <div class="swiper-button-prev"><i class="fa-light fa-arrow-left"></i></div>--}}
{{--    </div>--}}
{{--</div>--}}
