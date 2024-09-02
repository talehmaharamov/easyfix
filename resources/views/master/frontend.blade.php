<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.includes.meta')
    @include('frontend.includes.styles')
</head>
<body data-plugin-page-transition>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTS968RL"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<div class="body">
    @include('frontend.includes.header')
    @yield('front')
    @include('frontend.includes.footer')
    @include('sweetalert::alert')
    @include('frontend.includes.scripts')
</div>
@yield('scripts')
<script>
    $(document).ready(function(){
        $('.slick-slider').slick({
            slidesToShow: 6, // Display 6 slides by default
            slidesToScroll: 1,
            // autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1200, // Adjust settings for screens with a maximum width of 1200px
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768, // Adjust settings for screens with a maximum width of 768px
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                 {
                    breakpoint: 576, // Adjust settings for screens with a maximum width of 768px
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });
    });
</script>

</body>
</html>
