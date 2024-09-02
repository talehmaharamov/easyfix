@extends('master.backend')
@section('title',__('backend.dashboard'))
@section('content')
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <i class="ri-loader-line spin-icon"></i>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    @foreach($counts as $keyCount => $count)
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">@lang('backend.'.$keyCount)</p>
                                            <h4 class="mb-2">{{ $count }}</h4>
                                        </div>
                                        <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class=" fas fa-info-circle font-size-24"></i>
                                                </span>
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
@endsection
