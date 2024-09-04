<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AutoGenerate\Service;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 1)->get();
        return view('frontend.services.index', get_defined_vars());
    }

    public function show($slug): View
    {
        $service = Service::where('slug', $slug)->first();
        return view('frontend.services.show', get_defined_vars());
    }

    public function projects()
    {
        $projects = Content::where('status', 1)->get();
        return view('frontend.content.index', get_defined_vars());
    }

    public function project($slug): View
    {
        $service = Content::where('slug', $slug)->first();
        return view('frontend.content.show', get_defined_vars());
    }
}
