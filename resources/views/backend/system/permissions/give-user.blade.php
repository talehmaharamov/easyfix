
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    {{ $user->name }} - @lang('backend.give-permission'):
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.givePermissionUserUpdate') }}" method="POST"
                      class="custom-validation" novalidate="" enctype="multipart/form-data">
                    @csrf
                    <input hidden name="id" value="{{ $user->id }}">
                    <div class="mb-3">
                        <div>
                            <div>
                                <label class="checkbox">
                                    <input type="checkbox" class="is-invalid" id="check-all">
                                    <span></span>
                                    @lang('backend.check-uncheck')
                                </label>
                            </div>
                        </div>
                        <label>@lang('backend.permissions'):</label>
                        <div>
                            @foreach($permissions as $permission)
                                <div>
                                    <label class="checkbox">
                                        <input type="checkbox" class="is-invalid" id="perms"
                                               name="permissions[]"
                                               @if($user->hasPermissionTo($permission->id)) checked
                                               @endif value="{{ $permission->name }}">
                                        <span></span>
                                        @if($permission->name == 'report delete')
                                            <span
                                                title="Bu icazəyə sahib istifadəçi bütün hesabatları silə bilər!"
                                                style="color: red"> {{ $permission->name }}</span>
                                        @else
                                            {{ $permission->name }}
                                        @endif
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-0 text-center">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                @lang('backend.submit')
                            </button>
                            <a href="{{url()->previous()}}" type="button"
                               class="btn btn-secondary waves-effect">
                                @lang('backend.cancel')
                            </a>
                        </div>
                    </div>
                </form>
            </div>
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>--}}
{{--            </div>--}}
        </div>
    </div>
</div>





{{--@extends('master.backend')--}}
{{--@section('title',__('backend.give-permission'))--}}
{{--@section('content')--}}
{{--    <div class="main-content">--}}
{{--        <div class="page-content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-xl-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">--}}
{{--                                        <h4 class="mb-sm-0">{{ $user->name }} - @lang('backend.give-permission'):</h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <form action="{{ route('backend.givePermissionUserUpdate') }}" method="POST"--}}
{{--                                      class="custom-validation" novalidate="" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <input hidden name="id" value="{{ $user->id }}">--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <div>--}}
{{--                                            <div>--}}
{{--                                                <label class="checkbox">--}}
{{--                                                    <input type="checkbox" class="is-invalid" id="check-all">--}}
{{--                                                    <span></span>--}}
{{--                                                    @lang('backend.check-uncheck')--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <label>@lang('backend.permissions'):</label>--}}
{{--                                        <div>--}}
{{--                                            @foreach($permissions as $permission)--}}
{{--                                                <div>--}}
{{--                                                    <label class="checkbox">--}}
{{--                                                        <input type="checkbox" class="is-invalid" id="perms"--}}
{{--                                                               name="permissions[]"--}}
{{--                                                               @if($user->hasPermissionTo($permission->id)) checked--}}
{{--                                                               @endif value="{{ $permission->name }}">--}}
{{--                                                        <span></span>--}}
{{--                                                        @if($permission->name == 'report delete')--}}
{{--                                                            <span--}}
{{--                                                                title="Bu icazəyə sahib istifadəçi bütün hesabatları silə bilər!"--}}
{{--                                                                style="color: red"> {{ $permission->name }}</span>--}}
{{--                                                        @else--}}
{{--                                                            {{ $permission->name }}--}}
{{--                                                        @endif--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            @endforeach--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="mb-0 text-center">--}}
{{--                                        <div>--}}
{{--                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">--}}
{{--                                                @lang('backend.submit')--}}
{{--                                            </button>--}}
{{--                                            <a href="{{url()->previous()}}" type="button"--}}
{{--                                               class="btn btn-secondary waves-effect">--}}
{{--                                                @lang('backend.cancel')--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
