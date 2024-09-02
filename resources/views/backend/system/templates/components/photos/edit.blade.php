<div class="mb-3">
    <label>@lang('backend.photo')
        <span class="text-danger">*</span></label>
    <input name="photo" type="file"
           class="form-control">
    @if(file_exists($variable->photo))
        <img src="{{ asset($variable->photo) }}" class="mt-3 w-100">
    @endif
    {!! validation_response('backend.photo') !!}
</div>
