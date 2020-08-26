<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Blog;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function admin()
    {
        if (Auth::user()->is_verified == 6) {
            return redirect('verify');
        }
        $mediaapprove = Blog::where(['status' => 1, 'category_id' => 2, 'post_status' => 4])->count();
        $mediapending = Blog::where(['status' => 1, 'category_id' => 2, 'post_status' => 3])->count();

        $nmagazineapprove = Blog::where(['status' => 1, 'category_id' => 1, 'post_status' => 4])->count();
        $nmagazinepending = Blog::where(['status' => 1, 'category_id' => 1, 'post_status' => 3])->count();
        
        $reviewsapprove = Blog::where(['status' => 1, 'category_id' => 3, 'post_status' => 4])->count();
        $reviewspending = Blog::where(['status' => 1, 'category_id' => 3, 'post_status' => 3])->count();

        $writingapprove = Blog::where(['status' => 1, 'category_id' => 4, 'post_status' => 4])->count();
        $writingpending = Blog::where(['status' => 1, 'category_id' => 4, 'post_status' => 3])->count();

        $users = User::where(['status' => 1])->count();

        return view('admin.dashboard', compact(
            ['mediaapprove', 'mediapending', 'nmagazineapprove', 'nmagazinepending',
             'reviewsapprove', 'reviewspending', 'writingapprove', 'writingpending', 'users']));
    }
    public function adminusers()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.userslist', compact('users'));
    }
    public function update(Request $request, User $user)
    {
        $user->status = $request->status;
        $user->save();
        return back()->withErrors('Successfully updated');
    }
}
