<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedBooksController extends Controller
{
    public function index()
    {
        return view('featured-books.index');
    }
}
