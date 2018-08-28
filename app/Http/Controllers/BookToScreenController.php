<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookToScreenController extends Controller
{
    public function index()
    {
        return view('book-to-screen.index');
    }
}
