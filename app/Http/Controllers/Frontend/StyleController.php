<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index()
    {
        $styles = Style::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('frontend.style.index', get_defined_vars());
    }

    public function show($slug)
    {
        $style = Style::where('slug', $slug)
            ->where('status', 1)
            ->first();
        return view('frontend.style.show', get_defined_vars());
    }
}
