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
        $articles     = Blog::where('status' , 1)->where('post_status', 4)->where('category_id' ,'!=', '3' )->orderBy('blog_id', 'desc')->take(3)->get();
        $reviews      = Blog::where('status', 1)->where('post_status', 4)->where('category_id', '=', '3')->orderBy('blog_id', 'desc')->take(2)->get();
        // $categories = BlogCategory::where('status', 1)->orderBy('category_id', 'desc')->get();
        
        return view('pages.index', compact(['articles','reviews']));
    }
    public function verify()
    
    {
        return view('verify-otp.verify');
    }
}
