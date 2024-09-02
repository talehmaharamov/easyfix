<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    @lang('backend.add-new-user'):
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.admins.store') }}" method="POST" class="needs-validation" novalidate=""
                      enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>
                            @lang('backend.name')
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name" class="form-control" required="" placeholder="Taleh Maharramov">
                        {!! validation_response('backend.name') !!}
                    </div>
                    <div class="mb-3">
                        <label>
                            @lang('backend.email')
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="email" class="form-control" required="" placeholder="support@foz.az">
                        {!! validation_response('backend.email') !!}
                    </div>
                    <div class="mb-3">
                        <label>
                            @lang('backend.password')
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group" id="datepicker1">
                            <input id="password" type="password" name="password" class="form-control"
                                   required placeholder="@lang('backend.password')">
                            <span id="copy_password" class="input-group-text">
                                <i class="mdi mdi-content-copy"></i>
                            </span>
                            <span id="show_password" class="input-group-text">
                                <i id="show_icon" class="fas fa-eye"></i>
                            </span>
                            <span id="generate_password" class="input-group-text">
                                <i class="fas fa-key"></i>
                            </span>
                        </div>
                        {!! validation_response('backend.new-password') !!}
                    </div>
                    <div class="mb-3">
                        <label>
                            @lang('backend.cnew-password')
                            <span class="text-danger">*</span>
                        </label>
                        <input type="password" name="password_confirmation" class="form-control" required=""
                               placeholder="@lang('backend.cnew-password')">
                        {!! validation_response('backend.cnew-password') !!}
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
