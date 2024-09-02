@extends('master.backend')
@section('title',__('backend.admins'))
@section('styles')
    <link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('backend/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('backend/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
          rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">@lang('backend.admins'):</h4>
                                @can('admins create')
                                    <a data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"
                                       class="btn btn-primary">
                                        <i class="fas fa-plus"></i>
                                        &nbsp;@lang('backend.add-new')
                                    </a>
                                @endcan
                            </div>
                        </div>
                        <table id="datatable-buttons"
                               class="table table-striped table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>@lang('backend.name'):</th>
                                <th>@lang('backend.email'):</th>
                                <th>@lang('backend.time')</th>
                                @can('admins delete')
                                    <th>@lang('backend.actions'):</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="text-center">{{ $user->id }}</td>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <td class="text-center">{{ $user->email }}</td>
                                    <td>{{ date('d.m.Y H:i:s',strtotime($user->created_at))}}</td>
                                    @can('admins delete')
                                        <td class="text-center">
                                            {{--                                            <a class="btn btn-primary" title="@lang('backend.delete')"--}}
                                            {{--                                               href="{{ route('backend.giveUserPermission',['user'=>$user->id]) }}">--}}
                                            {{--                                                <i class="fas fa-key"></i>--}}
                                            {{--                                            </a>--}}
                                            <a class="btn btn-primary" title="@lang('backend.delete')"
                                               data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                                                <i class="fas fa-key"></i>
                                            </a>
                                            @if($user->id != auth()->user()->id)
                                                <a class="btn btn-danger" title="@lang('backend.delete')"
                                                   href="{{ route('backend.delAdmin',['id'=>$user->id]) }}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            @else
                                                <a class="btn btn-secondary"
                                                   title="@lang('backend.dont-delete-own-profile')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            @endif
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @include('backend.system.permissions.give-user')
                        @include('backend.system.admins.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('backend.system.templates.components.dt-scripts')
    <script src="{{ asset('backend/js/auth.js') }}"></script>
@endsection
