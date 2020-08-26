<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contribute()
    {
        return view('pages.contribute');
    }
}
