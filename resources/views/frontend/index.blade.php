@extends('master.frontend')
@section('title',__('backend.index'))
@section('front')
    @include('frontend.layouts.slider')
    @include('frontend.layouts.projects')
    @include('frontend.layouts.solutions')
@endsection
