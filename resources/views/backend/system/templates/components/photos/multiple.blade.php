<div class="mb-3">
    <label>@lang('backend.photos')</label>
    <input type="file" class="form-control mb-2" id="photos" name="photos[]"
           multiple>
    <div id="image-preview-container" class="d-flex flex-wrap"></div>
    @if($variable->photos()->exists())
        <div class="d-flex"
             style="min-height: 150px; overflow: hidden; margin-bottom: 10px;border: 1px solid black; flex-wrap:wrap">
            @foreach($variable->photos()->get() as $photo)
                <div style="position:relative;" class="wraper  m-3">
                    <img src="{{ asset($photo->photo) }}"
                         style="height: 200px; width: 170px; object-fit: cover;">
                    <a style="position: absolute; right:5px; top:5px"
                       type="button" class="btn btn-danger"
                       href="{{ route('backend.deletePhoto',['model' => $model,'id' => $photo->id]) }}">X</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
