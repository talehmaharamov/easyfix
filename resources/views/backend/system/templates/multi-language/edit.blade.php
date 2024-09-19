@extends('master.backend')
@section('title',__('backend.selection'))
@section('styles')

@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="{{ route('backend.selection.update',$id) }}" class="needs-validation"
                                  novalidate
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @include('backend.system.templates.components.card-col-12',['variable' => 'selection'])
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
                                                               id="name{{ $lan->code }}"
                                                               class="form-control"
                                                               required=""
                                                               value="{{ $selection->translate($lan->code)->name ?? __('backend.translation-not-found') }}">
                                                        {!! validation_response('backend.name') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>
                                                            @lang('backend.description')
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <textarea name="description[{{ $lan->code }}]"
                                                                  id="elm{{$lan->code}}1"
                                                                  class="form-control"
                                                                  required=""
                                                                  placeholder="@lang('backend.description')">{!! $selection->translate($lan->code)->description ?? __('backend.translation-not-found') !!}</textarea>
                                                        {!! validation_response('backend.description') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>
                                                            @lang('backend.short-description')
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <textarea name="short_description[{{ $lan->code }}]"
                                                                  id="elm{{$lan->code}}2"
                                                                  class="form-control"
                                                                  required=""
                                                                  placeholder="@lang('backend.short-description')">{!! $selection->translate($lan->code)->short_description ?? __('backend.translation-not-found') !!}</textarea>
                                                        {!! validation_response('backend.short-description') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.title')(Meta)</label>
                                                        <input name="meta_title[{{ $lan->code }}]" type="text"
                                                               class="form-control"
                                                               value="{{ $selection->translate($lan->code)->meta_title ?? '' }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>
                                                            @lang('backend.description')(Meta)
                                                        </label>
                                                        <textarea name="meta_description[{{ $lan->code }}]" type="text"
                                                                  class="form-control" id="elm{{$lan->code}}2"
                                                                  rows="5">{{ $selection->translate($lan->code)->meta_description ?? '' }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.alt')</label>
                                                        <textarea name="alt[{{ $lan->code }}]" type="text"
                                                                  class="form-control"
                                                                  rows="5">{{ $selection->translate($lan->code)->alt ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="mb-3">
                                            <label>@lang('backend.slug') <span class="text-danger">*</span></label>
                                            <input name="slug" type="text" id="slug" class="form-control" required
                                                   value="{{ $selection->slug }}">
                                            {!! validation_response('backend.slug') !!}
                                        </div>
                                        <div class="mb-3">
                                            <label>
                                                @lang('backend.photo')
                                            </label>
                                            <input type="file" name="photo" class="form-control mb-3"
                                                   id="validationCustom" accept="image/*">
                                            @if(file_exists($selection->photo))
                                                <img style="width: 100%;max-height: 500px;"
                                                     src="{{ asset($selection->photo) }}" alt="FOZ">
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label>@lang('backend.photos')</label>
                                            <input type="file" class="form-control mb-2" id="photos" name="photos[]"
                                                   multiple>
                                            <div id="image-preview-container" class="d-flex flex-wrap"></div>
                                            @if($selection->photos()->exists())
                                                <div class="d-flex"
                                                     style="min-height: 150px; overflow: hidden; margin-bottom: 10px;border: 1px solid black; flex-wrap:wrap">
                                                    @foreach($selection->photos as $photo)
                                                        <div style="position:relative;" class="wraper  m-3">
                                                            <img src="{{ asset($photo->photo) }}"
                                                                 style="height: 200px; width: 170px; object-fit: cover;">
                                                            <a style="position: absolute; right:5px; top:5px"
                                                               type="button" class="btn btn-danger"
                                                               href="{{ route('backend.deletePhoto',['model' =>  \Illuminate\Support\Str::ucfirst('selection'),'id' => $photo->id]) }}">X</a>
                                                        </div>
                                                    @endforeach
                                                </div>
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
    @include('backend.system.templates.components.preview-images')
@endsection
