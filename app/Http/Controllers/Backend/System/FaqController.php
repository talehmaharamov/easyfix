<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqPhotos;
use App\Models\FaqTranslation;
use App\Utils\Helpers\CRUDHelper;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        check_permission('faq index');
        $faqs = Faq::all();
        return view('backend.faq.index', get_defined_vars());
    }

    public function create()
    {
        check_permission('faq create');
        return view('backend.faq.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        check_permission('faq create');
        try {
            $faq = new Faq();
            $faq->save();
            $this->updateOrSaveFaqTranslations($faq,$request);
            alert()->success(__('messages.success'));
            return redirect(route('backend.faq.index'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('backend.faq.index'));
        }
    }

    public function edit(string $id)
    {
        check_permission('faq edit');
        $faq = Faq::find($id);
        return view('backend.faq.edit', get_defined_vars());
    }

    public function update(Request $request, string $id)
    {
        check_permission('faq edit');
        try {
            $faq = Faq::find($id);
            DB::transaction(function () use ($request, $faq) {
                $this->updateOrSaveFaqTranslations($faq,$request);
                $faq->save();
            });
            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    private function updateOrSaveFaqTranslations(Faq $faq, Request $request)
    {
        foreach (active_langs() as $lang) {
            $translation = $faq->translate($lang->code);

            if (!$translation) {
                $translation = new FaqTranslation();
                $translation->locale = $lang->code;
                $translation->faq_id  = $faq->id;
            }

            $translation->name = $request->name[$lang->code] ?? null;
            $translation->description = $request->description[$lang->code] ?? null;
            $translation->save();
        }
    }

    public function status(string $id)
    {
        check_permission('faq edit');
        return CRUDHelper::status('\App\Models\Faq', $id);
    }

    public function delete(string $id)
    {
        check_permission('faq delete');
        return CRUDHelper::remove_item('\App\Models\Faq', $id);
    }
}
