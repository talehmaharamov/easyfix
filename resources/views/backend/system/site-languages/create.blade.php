<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    @lang('backend.languages') : @lang('backend.add-new')
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.site-languages.store') }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>@lang('backend.name')
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name" class="form-control" required=""  placeholder="Azərbaycan,English,Русский">
                        {!! validation_response('backend.name') !!}
                    </div>
                    <div class="mb-3">
                        <label>
                            @lang('backend.code')
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="code" class="form-control" required=""  placeholder="az,en,ru">
                        {!! validation_response('backend.code') !!}
                    </div>
                    <div class="mb-3">
                        <label>@lang('backend.icon') <span class="text-danger">*</span></label>
                        <input type="file" name="icon" class="form-control" required="">
                        {!! validation_response('backend.icon') !!}
                    </div>
                    <div class="mb-0 text-center">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                @lang('backend.submit')
                            </button>
                            <a href="{{url()->previous()}}" type="button" class="btn btn-secondary waves-effect">
                                @lang('backend.cancel')
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
