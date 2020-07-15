<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedAuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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

    public function featured25()
    {
        return view('featured-author.gary-smit');
    }
    
    public function featured26()
    {
        return view('featured-author.jon-howard-hall');
    }
    
    public function featured27()
    {
        return view('featured-author.kay-pratt');
    }

    public function featured28()
    {
        return view('featured-author.kiera-donna-laike');
    }

    public function featured29()
    {
        return view('featured-author.ted-lau');
    }

    public function featured30()
    {
        return view('featured-author.walter-tunstall');
    }

    public function featured31()
    {
        return view('featured-author.cary-green');
    }

    public function featured32()
    {
        return view('featured-author.clifton-west');
    }

    public function featured33()
    {
        return view('featured-author.tyrone-holcomb');
    }

    public function featured34()
    {
        return view('featured-author.richard-jurgensen');
    }

    public function featured35()
    {
        return view('featured-author.malaika-horne');
    }

    public function featured36()
    {
        return view('featured-author.bill-sanford');
    }
}
