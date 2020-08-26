<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BlogCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()){
            if (Auth::user()->is_verified == 6) {
                return redirect('verify');
            }
        }
        $categories = BlogCategory::where('status', 1)->orderBy('category_id', 'desc')->get();
        
        return view('pages.index', compact('categories'));
    }
    public function verify()
    
    {
        return view('verify-otp.verify');
    }
}
