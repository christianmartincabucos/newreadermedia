<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookTrailerController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        return redirect()->route('sneak-peek');
    }

    public function sneakpeek()
    {
        return view('book-trailer.index');
    }

    public function list()
    {
        return view('book-trailer.list');
    }
}
