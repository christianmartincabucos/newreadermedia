<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PressReleaseController extends Controller
{
    public function index()
    {
        return view('press-release.index');
    }
}
