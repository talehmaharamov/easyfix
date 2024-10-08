<?php

namespace App\Providers;

use App\Models\AutoGenerate\Service;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Meta;
use App\Models\Partner;
use App\Models\Slider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(): void
    {
        $generalCategories = Category::where('status', 1)->get();
        $mainCategories = Category::where('parent_id', null)->with('subcategories.subcategories')->get();
        $faqs = Faq::where('status', 1)->get();
        $faqSchemas = Faq::where('status', 1)->with('translation')->get()->pluck('translation.schema')->toArray();
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();
        $partners = Partner::all();
        $metas = Meta::whereIn('id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('metas')
                ->where('status', 1)
                ->groupBy('page');
        })->get()->groupBy('page');
        view()->share([
            'allServices' => Service::where('status', 1)->get(),
            'partners' => $partners,
            'generalCategories' => $generalCategories,
            'mainCategories' => $mainCategories,
            'faqs' => $faqs,
            'faqSchemas' => $faqSchemas,
            'sliders' => $sliders,
            'metas' => $metas,
        ]);
    }
}
