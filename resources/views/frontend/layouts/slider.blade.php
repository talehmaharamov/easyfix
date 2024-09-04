<div class="banner-one-swiper--wrapper-area">
    <div class="swiper mySwiper-banner">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="banner-one-start rts-banner-one rts-section-gap bg_image" style="background-image:url('{{ asset($slider->photo) }}')">
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
                                    <div class="banner-main-wrapper-one pt--100 pb--100 pb_sm--40">
                                        <div class="pre-title">
                                            <p>Hospitality & Leisure</p>
                                        </div>

                                        <h1 class="title">
                                            Smart Plumber <br>
                                            Solutions for You <br>
                                            24/7 Hours
                                        </h1>
                                        <div class="button-area">
                                            <a href="appoinment.html" class="rts-btn btn-primary with-arrow">Request
                                                Quote <i class="fa-regular fa-arrow-up-right"></i></a>
                                            <a href="service.html" class="rts-btn btn-primary-white with-arrow">Our
                                                Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner area one end -->
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
