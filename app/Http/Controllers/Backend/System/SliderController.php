<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Models\ContentTranslation;
use App\Models\Slider;
use App\Models\SliderTranslation;
use App\Utils\Helpers\CRUDHelper;
use App\Utils\Traits\GeneralTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    use GeneralTrait;

    public function index()
    {
        check_permission('slider index');
        $sliders = Slider::orderBy('order')->get();
        return view('backend.system.slider.index', get_defined_vars());
    }

    public function create()
    {
        check_permission('slider create');
        return view('backend.system.slider.create');
    }

    public function store(Request $request)
    {
        check_permission('slider create');
        try {
            if (empty(Slider::first())) {
                $sliderOrder = 1;
            } else {
                $sliderOrder = Slider::all()->last()->order + 1;
            }
            $slider = new Slider();
            $slider->photo = upload('slider', $request->file('photo'));
            $slider->order = $sliderOrder;
            $slider->save();

            $this->updateOrSaveSliderTranslations($slider, $request);

            alert()->success(__('messages.success'));
            return redirect(route('backend.slider.index'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('backend.slider.index'));
        }
    }

    public function update(Request $request, $id)
    {
        check_permission('slider edit');
        try {
            $slider = Slider::find($id);
            DB::transaction(function () use ($request, $slider) {
                $this->updateExistsPhoto($request, $slider, 'slider');
                $this->updateOrSaveSliderTranslations($slider, $request);
                $slider->save();
            });
            alert()->success(__('messages.success'));
            return redirect(route('backend.slider.index'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('backend.slider.index'));
        }
    }

    public function edit($id)
    {
        check_permission('slider edit');
        $slider = Slider::find($id);
        return view('backend.system.slider.edit', get_defined_vars());
    }

    private function updateOrSaveSliderTranslations(Slider $slider, Request $request)
    {
        foreach (active_langs() as $lang) {
            $translation = $slider->translate($lang->code);

            if (!$translation) {
                $translation = new SliderTranslation();
                $translation->locale = $lang->code;
                $translation->slider_id = $slider->id;
            }

            $translation->title = $request->title[$lang->code] ?? null;
            $translation->description = $request->description[$lang->code] ?? null;
            $translation->alt = $request->alt[$lang->code] ?? null;
            $translation->save();
        }
    }

    public function sliderOrder(Request $request, $id)
    {
        check_permission('slider edit');
        try {
            $slider = Slider::find($id);
            $orders = [];
            foreach (Slider::orderBy('order', 'asc')->get() as $sl) {
                $orders[] = $sl->order;
            }
            if ($request->direction == "up") {
                $prevKey = (array_search($slider->order, $orders)) - 1;
                Slider::where('order', $orders[$prevKey])->update([
                    'order' => $slider->order,
                ]);
                $slider->update(['order' => $orders[$prevKey]]);
            } else {
                if ($slider->order == end($orders)) {
                    Slider::where('order', $orders[count($orders) - 2])->update([
                        'order' => $slider->order
                    ]);
                    $slider->update(['order' => $orders[count($orders) - 2]]);
                } elseif ($slider->order == $orders[0]) {
                    Slider::where('order', $orders[1])->update([
                        'order' => $slider->order
                    ]);
                    $slider->update(['order' => $orders[1]]);
                } else {
                    $nextKey = (array_search($slider->order, $orders)) + 1;
                    Slider::where('order', $orders[$nextKey])->update([
                        'order' => $orders[$nextKey - 1],
                    ]);
                    $slider->update(['order' => $orders[$nextKey]]);
                }
            }
            alert()->success(__('messages.success'));
            return redirect(route('backend.slider.index'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('backend.slider.index'));
        }
    }

    public function delSlider($id)
    {
        check_permission('slider delete');
        return CRUDHelper::remove_item('\App\Models\Slider', $id);
    }

    public function sliderStatus($id)
    {
        check_permission('slider edit');
        return CRUDHelper::status('\App\Models\Slider', $id);
    }
}
