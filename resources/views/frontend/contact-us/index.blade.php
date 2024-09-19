@extends('master.frontend')
@section('title',__('backend.contact'))
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
                                    @lang('backend.contact')
                                </a>
                            </div>
                            <div class="title">
                                <a href="#">
                                    @lang('backend.contact')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-make-an-appoinemtn-area rts-section-gap" id="secSection">
        <div class="container">
            <div class="row align-items-center g-0 bg-appoinment">
                <div class="col-lg-5 pr--80 pr_md--0 pr_sm--0">
                    <div class="thumbnail appoinment-m-thumb">
                        <img src="{{asset('frontend/images/appoinment/01.jpg')}}" alt="appoinment-area">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="appoinment-inner-content-wrapper">
                        <h3 class="title animated fadeIn">
                            @lang('backend.get-appointment')
                        </h3>
                        <form action="{{ route('frontend.sendMessage') }}" method="POST" class="appoinment-form mt--40">
                            @csrf
                            <div class="input-half-wrapper">
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="@lang('backend.full-name')" required="">
                                </div>
                                <div class="single-input">
                                    <input placeholder="@lang('backend.select-date')" type="text" name="date"
                                           id="datepicker"
                                           value="" class="calendar">
                                </div>
                            </div>
                            <div class="input-half-wrapper mt--25 mb--30">
                                <div class="single-input">
                                    <input type="text" name="address" placeholder="@lang('backend.address')"
                                           required="">
                                </div>
                                <div class="single-input">
                                    <input placeholder="@lang('backend.zip-code')" type="text" name="zip"
                                           id="datepicker"
                                           value="" class="calendar">
                                </div>
                            </div>
                            <div class="input-half-wrapper mt--25 mb--30">
                                <div class="single-input">
                                    <input type="email" placeholder="@lang('backend.email')" name="email" required="">
                                </div>
                                <div class="single-input">
                                    <input type="text" placeholder="@lang('backend.phone')" name="phone" required="">
                                </div>
                            </div>
                            <select name="service">
                                <option data-display="Select">
                                    @lang('backend.service')
                                </option>
                                @foreach($allServices as $serv)
                                    <option value="{{ $serv->id }}">
                                        {{ getLocaleTranslation($serv,'name') }}
                                    </option>
                                @endforeach
                            </select>

                            <select name="type">
                                <option data-display="Select">
                                    @lang('backend.type')
                                </option>
                                <option value="1">
                                    @lang('backend.repair')
                                </option>
                                <option value="2">
                                    @lang('backend.check-up')
                                </option>
                            </select>

                            <div class="mt--25 mb--30">
                                <div class="single-input">
                                    <textarea placeholder="@lang('backend.description')" name="description"
                                              required=""></textarea>
                                </div>
                            </div>

                            <button type="submit" class="rts-btn btn-primary mt-4">
                                @lang('backend.send-message')
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
