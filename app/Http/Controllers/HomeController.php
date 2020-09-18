<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\BlogCategory;
use App\Blog;

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
        $latest     = Blog::where(['status' => 1, 'post_status' => 4])->orderBy('blog_id', 'desc')->take(3)->get();
        // $categories = BlogCategory::where('status', 1)->orderBy('category_id', 'desc')->get();
        
        return view('pages.index', compact(['latest']));
    }
    public function verify()
    
    {
        return view('verify-otp.verify');
    }
}
