<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookTrailerController extends Controller
{
    public function index()
    {
        return view('book-trailer.index');
    }
}
