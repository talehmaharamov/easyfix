@extends('master.frontend')
@section('title',__('title.index'))
@section('front')
    <div class="rts-bread-crumb-area ptb--65 bg_image bg-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">
                            <div class="slug">
                                <a href="{{ route('frontend.index') }}">HOME /</a>
                                <a class="active">
                                    @lang('backend.faq')
                                </a>
                            </div>
                            <div class="title">
                                <a>
                                    @lang('backend.faq')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-faq-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faq-area-start-one">
                        <div class="accordion" id="accordionExample">
                            @foreach($faqs as $faqKey => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $faqKey }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $faqKey }}" aria-expanded="true"
                                                aria-controls="collapse{{ $faqKey }}">
                                            {{ getLocaleTranslation($faq,'name') }}
                                            <i class="fa-light fa-chevron-down"></i>
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $faqKey }}"
                                         class="accordion-collapse collapse @if($loop->first) show @endif "
                                         aria-labelledby="heading{{ $faqKey }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="inner">
                                                <div class="content">
                                                    <p class="disc">
                                                        {!! getLocaleTranslation($faq,'description') !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
