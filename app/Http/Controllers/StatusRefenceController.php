<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusReference;

class StatusRefenceController extends Controller
{
    public function getStatus(Request $request) 
    {
        $status = StatusReference::where('status_groupname', $request->status)->orderBy('status_id', 'desc')->get();
        return response()->json([
            'data' => $status
        ]); 
    }
}
