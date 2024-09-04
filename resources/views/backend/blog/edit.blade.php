@extends('master.backend')
@section('title',__('backend.blog'))
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="{{ route('backend.blog.update',$id) }}" class="needs-validation" novalidate
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('backend.system.templates.components.card-col-12',['variable' => 'blog'])
                                    @include('backend.system.templates.components.multi-lan-tab')
                                    <div class="tab-content p-3 text-muted">
                                        @foreach(active_langs() as $lan)
                                            <div class="tab-pane @if($loop->first) active show @endif"
                                                 id="{{ $lan->code }}"
                                                 role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="mb-3">
                                                        <label>@lang('backend.name') <span class="text-danger">*</span></label>
                                                        <input name="name[{{ $lan->code }}]" type="text"
                                                               class="form-control"
                                                               required=""
                                                               value="{{ $blog->translate($lan->code)->name ?? '-' }}">
                                                        {!! validation_response('backend.name') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.description') <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="description[{{ $lan->code }}]" type="text"
                                                                  class="form-control" id="elm{{$lan->code}}1"
                                                                  required="">{!! $blog->translate($lan->code)->description ?? '-' !!}</textarea>
                                                        {!! validation_response('backend.description') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @include('backend.system.templates.components.photos.edit',['variable' => $blog])
                                        @include('backend.system.templates.components.photos.multiple',['model' => 'Blog','variable' => $blog])
                                    </div>
                                </div>
                                @include('backend.system.templates.components.buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('backend.system.templates.components.tiny')
    @include('backend.system.templates.components.preview-images')
@endsection
