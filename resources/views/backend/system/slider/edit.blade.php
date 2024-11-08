@extends('master.backend')
@section('title',__('backend.slider'))
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="{{ route('backend.slider.update',$id) }}" class="needs-validation" novalidate
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('backend.system.templates.components.card-col-12',['variable' => 'slider'])
                                    @include('backend.system.templates.components.multi-lan-tab')
                                    <div class="tab-content p-3 text-muted">
                                        @foreach(active_langs() as $lan)
                                            <div class="tab-pane @if($loop->first) active show @endif"
                                                 id="{{ $lan->code }}"
                                                 role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="mb-3">
                                                        <label>@lang('backend.title') <span class="text-danger">*</span></label>
                                                        <input name="title[{{ $lan->code }}]" type="text"
                                                               class="form-control"
                                                               required=""
                                                               value="{{ getLangTranslation($slider,'title',$lan) }}">
                                                        {!! validation_response('backend.title') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>
                                                            @lang('backend.description')
                                                        </label>
                                                        <textarea name="description[{{ $lan->code }}]" type="text"
                                                                  class="form-control"
                                                                  id="elm{{$lan->code}}1">{!! getLangTranslation($slider,'description',$lan) !!}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.alt')</label>
                                                        <textarea class="form-control" rows="7"
                                                                  name="alt[{{$lan->code}}]">{{ getLangTranslation($slider,'alt',$lan) }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="mb-3">
                                            <label>@lang('backend.photo') <span class="text-danger">*</span></label>
                                            <input type="file" name="photo" class="form-control mb-3"
                                                   id="validationCustom" accept="image/*">
                                            @if(file_exists($slider->photo))
                                                <img width="100%" src="{{ asset($slider->photo) }}">
                                            @endif
                                        </div>
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
@endsection
