<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedAuthorController extends Controller
{
    public function index()
    {
        return redirect()->route('spotlight.lindy-kerr');
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

    public function featured4()
    {
        return view('featured-author.lindy-kerr');
    }

    public function featured5()
    {
        return view('featured-author.charles-campise');
    }

    public function featured6()
    {
        return view('featured-author.cora-darrah');
    }

    public function featured7()
    {
        return view('featured-author.les-klinefelter');
    }

    public function featured8()
    {
        return view('featured-author.mike-mccluskey');
    }

    public function featured9()
    {
        return view('featured-author.skyelar-nelson');
    }

    public function featured10()
    {
        return view('featured-author.sharon-brown-keith');
    }
}
