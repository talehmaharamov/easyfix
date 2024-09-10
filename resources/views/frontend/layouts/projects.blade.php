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
                    @foreach($allProjects as $project)
                        <div class="swiper-slide
                        @if($loop->first) swiper-slide-prev swiper-slide-duplicate-prev @endif
                        @if($loop->last) swiper-slide-next swiper-slide-duplicate-next @endif
                        @if($loop->index == 2) swiper-slide-active swiper-slide-duplicate-active @endif
                        " data-swiper-slide-index="{{ $loop->index }}" style="width: 372.6px; margin-right: 10px;">
                            <div class="project-one-wrapper">
                                <div class="shape">
                                    <img src="{{ asset('assets/images/project/shape/01.png') }}" alt="shape">
                                </div>
                                <a href="{{ route('frontend.project', $project->id) }}" class="thumbnail">
                                    <img src="{{ asset('assets/images/project/' . $project->image) }}" alt="{{ $project->title }}">
                                </a>
                                <div class="content">
                                    <span class="pre">{{ $project->category }}</span>
                                    <a href="{{ route('frontend.project', $project->id) }}">
                                        <h5 class="title">{{ $project->title }}</h5>
                                    </a>
                                    <a href="{{ route('frontend.project', $project->id) }}">
                                        <img src="{{ asset('assets/images/project/shape/02.png') }}" alt="shape">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




</div>
