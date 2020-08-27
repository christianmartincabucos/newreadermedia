<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusReference;

class StatusRefenceController extends Controller
{
    public function getStatus(Request $request) 
    {
        if($request->status != null){
            $status = StatusReference::where(['status_groupname' => $request->status])->orderBy('status_id', 'desc')->get();
        }
        if($request->status == null){
            $status = StatusReference::all();
        }
        return response()->json([
            'data' => $status
        ]); 
    }
    public function index()
    {   
        $status = StatusReference::all();
        return view('admin.status-reference', compact('status'));
    }
    public function store(Request $request)
    {
        $data = StatusReference::create([
            'status_groupname' => $request->input('status_groupname'),
            'status_shortacodename' => $request->input('status_short'),
            'status_longcodename' => $request->input('status_long'),
            'created_by'  => auth()->id(),
        ]);
        if ($request->expectsJson()) {
            return response()->json([
                'data' => $data,
                'message' => "Your status has been submitted."
            ]);
        }
        return redirect('/');
    }
    public function update(Request $request, StatusReference $status)
    {
        $status->status_groupname = $request->status_groupname;
        $status->status_shortacodename = $request->status_short;
        $status->status_longcodename = $request->status_long;
        $status->table_status = $request->status;
        $status->save();

        if ($request->expectsJson()) {
            return response()->json([
                'data' => $status,
                'message' => "status have been updated."
            ]);
        }
        return redirect()->route('admin.status.reference');
    }
}
