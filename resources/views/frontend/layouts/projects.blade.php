<div class="rts-projects-area home-1 rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title--between-wrapper">
                    <div class="title-area-left">
                        <p class="pre">
                            <span>Feel Free</span> To Contact Us
                        </p>
                        <h2 class="title">
                            Stunning Our Latest <br>
                            <span>Projects</span>
                        </h2>
                    </div>
                    <div class="button-area">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full mt--30">
        <div class="project-swiper-wrapper">
            <div class="swiper project-home-one swiper-container-horizontal">
                <div class="swiper-wrapper">
                    @foreach($allProjects as $index => $aP)
                        @php
                            // Dinamik olaraq sinifləri təyin edirik
                            $slideClass = '';
                            if($loop->first) {
                                $slideClass = 'swiper-slide-active';
                            } elseif($loop->index == 1) {
                                $slideClass = 'swiper-slide-next';
                            } elseif($loop->index == count($allProjects) - 1) {
                                $slideClass = 'swiper-slide-prev';
                            }
                        @endphp

                        <div class="swiper-slide {{ $slideClass }}" data-swiper-slide-index="{{ $index }}">
                            <div class="project-one-wrapper">
                                <div class="shape"><img src="{{ asset('assets/images/project/shape/01.png') }}" alt="shape"></div>
                                <a href="{{ route('frontend.project', $aP->id) }}" class="thumbnail">
                                    <img src="{{ asset('assets/images/project/' . $aP->image) }}" alt="{{ $aP->title }}">
                                </a>
                                <div class="content">
                                    <span class="pre">{{ $aP->category }}</span>
                                    <a href="{{ route('frontend.project', $aP->id) }}">
                                        <h5 class="title">{{ $aP->title }}</h5>
                                    </a>
                                    <a href="{{ route('frontend.project', $aP->id) }}"><img src="{{ asset('assets/images/project/shape/02.png') }}" alt="shape"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
