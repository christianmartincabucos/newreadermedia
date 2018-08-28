<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorInterviewController extends Controller
{
    public function index()
    {
        return view('author-interview.index');
    }
}
