<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Models\SiteLanguage;
use App\Utils\Helpers\CRUDHelper;
use App\Utils\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SiteLanguageController extends Controller
{
    use GeneralTrait;

    public function index()
    {
        check_permission('languages index');
        $siteLanguages = SiteLanguage::all();
        return view('backend.system.site-languages.index', get_defined_vars());
    }

    public function create()
    {
        check_permission('languages create');
        return view('backend.system.site-languages.create');
    }

    public function edit($id)
    {
        check_permission('languages edit');
        $language = SiteLanguage::find($id);
        return view('backend.system.site-languages.edit', get_defined_vars());
    }

    public function store(Request $request)
    {
        check_permission('languages create');
        try {

            $siteLanguage = new SiteLanguage();
            $siteLanguage->name = $request->name;
            $siteLanguage->code = $request->code;
            $siteLanguage->icon = upload('flags', $request->file('icon'));;
            $siteLanguage->status = 1;
            $siteLanguage->save();

            $newLanguageFolder = resource_path('lang/' . $siteLanguage->code);
            if (!File::exists($newLanguageFolder)) {
                File::makeDirectory($newLanguageFolder);
            }

            // Copy locale files from the default language folder
            $defaultLanguageFolder = resource_path('lang/' . config('app.locale'));
            $files = File::files($defaultLanguageFolder);
            foreach ($files as $file) {
                $fileName = pathinfo($file, PATHINFO_FILENAME);
                $extension = pathinfo($file, PATHINFO_EXTENSION);
                $newFileName = $newLanguageFolder . '/' . $fileName . '.' . $extension;
                File::copy($file, $newFileName);
            }

            alert()->success(__('messages.add-success'));
            return redirect()->route('backend.site-languages.index');
        } catch (\Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->route('backend.site-languages.index');
        }
    }

    public function update(Request $request, SiteLanguage $language)
    {
        check_permission('languages edit');
        try {
            DB::transaction(function () use ($request, $language) {
                if ($request->hasFile('icon')) {
                    if (file_exists($language->photo)) {
                        unlink(public_path($language->photo));
                    }
                    $language->photo = upload('flags', $request->file('icon'));
                }
                $language->name = $request->name;
                $language->code = $request->code;
                $language->save();
            });
            alert()->success(__('messages.success'));
            return redirect()->route('backend.site-languages.index');
        } catch (\Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->route('backend.site-languages.index');
        }
    }

    public function siteLanStatus($id)
    {
        check_permission('languages edit');
        return CRUDHelper::status('\App\Models\SiteLanguage', $id);
    }

    public function delSiteLang($id)
    {
        check_permission('languages delete');
        return CRUDHelper::remove_item('\App\Models\SiteLanguage', $id);
    }
}
