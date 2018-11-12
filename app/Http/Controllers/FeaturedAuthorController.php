<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedAuthorController extends Controller
{
    public function index()
    {
        return redirect()->route('spotlight.kristy-kraft');
    }

    public function featured1()
    {
        return view('featured-author.steven-bentley');
    }

    public function featured2()
    {
        return view('featured-author.zachary-zeigler');
    }

    public function featured3()
    {
        return view('featured-author.kristy-kraft');
    }
}
