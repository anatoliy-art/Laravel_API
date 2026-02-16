<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Window;

class SiteWindowController extends Controller
{
    public function index()
    {
        $windows = Window::paginate(6);
        return view('site.window.index', compact('windows'));
    }

    public function show($slug)
    {
        $window = Window::where('slug', $slug)->first();
        return view('site.window.show', compact('window'));
    }

}
