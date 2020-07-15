<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorInterviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('author-interview.index');
    }
}
