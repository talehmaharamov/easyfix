<div class="element-slider-section section bg-gray  pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="row">
        <div class="col-12">
            <div class="service-gallery">
                @foreach($sliders as $slider)
                    <div class="item">
                        <img style="position: relative;
                        max-height: 500px;
                        object-fit:fill"
                             src="{{ asset($slider->photo) }}"
                             alt="{{ $slider->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
