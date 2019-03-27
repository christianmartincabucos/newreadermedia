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

    public function featured11()
    {
        return view('featured-author.abid-shakir');
    }

    public function featured12()
    {
        return view('featured-author.burt-kempner');
    }

    public function featured13()
    {
        return view('featured-author.calvin-moir');
    }

    public function featured14()
    {
        return view('featured-author.charles-arnold');
    }

    public function featured15()
    {
        return view('featured-author.lawrence-stentzel');
    }

    public function featured16()
    {
        return view('featured-author.philip-persinger');
    }

    public function featured17()
    {
        return view('featured-author.tom-peavler');
    }

    public function featured18()
    {
        return view('featured-author.yvon-bell');
    }

    public function featured19()
    {
        return view('featured-author.wendy-sellers');
    }

    public function featured20()
    {
        return view('featured-author.manuel-pelaez');
    }

    // march 2019
    public function featured21()
    {
        return view('featured-author.alex-salaiz');
    }

    public function featured22()
    {
        return view('featured-author.bernadette-butler');
    }
    
    public function featured23()
    {
        return view('featured-author.billy-turlington');
    }
    
    public function featured24()
    {
        return view('featured-author.charles-glenn');
    }
}
