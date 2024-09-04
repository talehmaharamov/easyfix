<div class="rts-footer-one footer-bg-one mt--160 pb--85">
    <div class="container">
        <div class="row g-0 bg-cta-footer-one">
            <div class="col-lg-12">
                <div class="bg-cta-footer-one wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <a href="#" class="logo-area-footer">
                                <img src="{{ asset('images/logo-t.png') }}" style="width: 50%;" alt="logo">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-cta-area">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <p>
                                        @lang('backend.phone')
                                    </p>
                                    <a href="tel:{{ settings('phone') }}">
                                        {{ settings('phone') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-cta-area">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <p>
                                        @lang('backend.email')
                                    </p>
                                    <a href="mailto:{{ settings('email') }}">
                                        {{ settings('email') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row pt--90">
            <div class="col-lg-12">
                <div class="single-footer-one-wrapper">
                    {{--                    <div class="single-footer-component first">--}}
                    {{--                        <div class="title-area">--}}
                    {{--                            <h5 class="title">About Company</h5>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="body">--}}
                    {{--                            <p class="disc">--}}
                    {{--                                Centric aplications productize before front end vortals visualize front end is results--}}
                    {{--                                and value added--}}
                    {{--                            </p>--}}
                    {{--                            <div class="rts-social-style-one">--}}
                    {{--                                <ul>--}}
                    {{--                                    <li>--}}
                    {{--                                        <a href="#">--}}
                    {{--                                            <i class="fa-brands fa-facebook-f"></i>--}}
                    {{--                                        </a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <a href="#">--}}
                    {{--                                            <i class="fa-brands fa-twitter"></i>--}}
                    {{--                                        </a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <a href="#">--}}
                    {{--                                            <i class="fa-brands fa-youtube"></i>--}}
                    {{--                                        </a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <a href="#">--}}
                    {{--                                            <i class="fa-brands fa-linkedin-in"></i>--}}
                    {{--                                        </a>--}}
                    {{--                                    </li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="single-footer-component">
                        <div class="title-area">
                            <h5 class="title">
                                @lang('backend.useful-links')
                            </h5>
                        </div>
                        <div class="body">
                            <div class="pages-footer">
                                <ul>
                                    <li>
                                        <a href="{{ route('frontend.index') }}">
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <p>
                                                @lang('backend.home-page')
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.faq') }}">
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <p>
                                                @lang('backend.faq')
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.contact-page') }}">
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <p>
                                                @lang('backend.contact')
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-footer-component">
                        <div class="title-area">
                            <h5 class="title">
                                @lang('backend.what-we-do')
                            </h5>
                        </div>
                        <div class="body">
                            <div class="pages-footer">
                                <ul>
                                    @foreach($generalCategories as $genCat3)
                                        <li>
                                            <a href="{{ route('frontend.selectedCategory',$genCat3->slug) }}">
                                                <i class="fa-solid fa-arrow-right"></i>
                                                <p>
                                                    {{ getLocaleTranslation($genCat3,'name') }}
                                                </p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-footer-component last">
                        <div class="title-area">
                            <h5 class="title">
                                @lang('backend.photos')
                            </h5>
                        </div>
                        <div class="body">
                            <div class="gallery-footer">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/footer/gallery/01.png')}}"
                                                 alt="easyfix">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/footer/gallery/02.png')}}"
                                                 alt="easyfix">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/footer/gallery/03.png')}}"
                                                 alt="easyfix">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/footer/gallery/04.png')}}"
                                                 alt="easyfix">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/footer/gallery/05.png')}}"
                                                 alt="easyfix">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/footer/gallery/06.png')}}"
                                                 alt="easyfix">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright-footer-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper">
                    <p>
                        @lang('backend.copyright')
                        {{ now()->year }}.
                        <a href="https://foz.az" style="color:#0a92d3">FOZ</a>
                        @lang('backend.all-right-reserved').
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
