<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorsPicksController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        return view('blogs.editors-picks.index');
    }

    // Free As My Hair
    public function blog1()
    {
        return view('blogs.editors-picks.free-as-my-hair');
    }
}
