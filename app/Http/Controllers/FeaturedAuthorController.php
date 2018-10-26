<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedAuthorController extends Controller
{
    public function index()
    {
        return view('featured-author.index');
    }

    public function featured1()
    {
        return view('featured-author.steven-bentley');
    }
}
