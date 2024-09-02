<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        $this->middleware('backendLanguage');
        app()->setLocale($lang);
        session()->put('blang', $lang);
        return redirect()->back();
    }

    public function frontLanguage($dil)
    {
        app()->setLocale($dil);
        session()->put('dil', $dil);
        return redirect()->back();
    }
}
