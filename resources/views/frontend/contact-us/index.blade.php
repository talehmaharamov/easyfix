@extends('master.frontend')
@section('title',__('title.contact'))
@section('front')
    <div class="rts-bread-crumb-area ptb--65 bg_image bg-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">
                            <div class="slug">
                                <a href="{{ route('frontend.index') }}">HOME /</a>
                                <a class="active" href="{{ route('frontend.index') }}">Contact</a>
                            </div>
                            <div class="title">
                                <a href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-make-an-appoinemtn-area rts-section-gap ">
        <div class="container">
            <div class="row align-items-center g-0 bg-appoinment">
                <div class="col-lg-5 pr--80 pr_md--0 pr_sm--0">
                    <!-- appoinment thumbnail area start -->
                    <div class="thumbnail appoinment-m-thumb">
                        <img src="{{asset('frontend/images/appoinment/01.jpg')}}" alt="appoinment-area">
                        <div class="inner-wrapper">
                            <h6>25</h6>
                            <span>Years <br>
                                Experience</span>
                        </div>
                    </div>
                    <!-- appoinment thumbnail area end -->
                </div>
                <div class="col-lg-7">
                    <!-- appoinment inner content area start -->
                    <div class="appoinment-inner-content-wrapper">
                        <h3 class="title animated fadeIn">
                            Make An Appointment
                        </h3>
                        <form action="#" class="appoinment-form mt--40">
                            <div class="input-half-wrapper">
                                <div class="single-input">
                                    <input type="text" placeholder="Your Name" required="">
                                </div>
                                <div class="single-input">
                                    <input type="email" placeholder="Email Address" required="">
                                </div>
                            </div>
                            <select>
                                <option data-display="Select">Select an option</option>
                                <option value="1">Some option</option>
                                <option value="2">Another option</option>
                                <option value="3" disabled="">A disabled option</option>
                                <option value="4">Potato</option>
                            </select>
                            <div class="input-half-wrapper mt--25 mb--30">
                                <div class="single-input">
                                    <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" value="" class="calendar">
                                </div>
                                <div class="single-input">
                                    <input type="text" id="timepicker" placeholder="Select Time" class="ui-timepicker-input" autocomplete="off">
                                </div>
                            </div>
                            <button type="submit" class="rts-btn btn-primary">SUBMIT MESSAGE</button>
                        </form>
                    </div>
                    <!-- appoinment inner content area end -->
                </div>
            </div>
        </div>
    </div>

@endsection
