<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="accordion" id="accordion" role="tablist">
                    @foreach($faqs as $faqKey => $faq)
                        <div class="card">
                            <div class="card-header" role="tab" id="heading{{$faqKey}}">
                                <a data-toggle="collapse" href="#collapse{{$faqKey}}" aria-expanded="true"
                                   aria-controls="collapse{{$faqKey}}">
                                    {{ $faq->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                </a>
                            </div>
                            <div id="collapse{{$faqKey}}" class="collapse {{ ($loop->first) ? 'show' : '' }}"
                                 role="tabpanel"
                                 aria-labelledby="heading{{$faqKey}}" data-parent="#accordion">
                                <div class="card-body">
                                    {!! $faq->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebox">
                    <i class="fas fa-question-circle"></i>
                    <h3>@lang('backend.zuhur')</h3>
                    <p>@lang('backend.faq')</p>
                </aside>
            </div>
        </div>
    </div>
</section>
