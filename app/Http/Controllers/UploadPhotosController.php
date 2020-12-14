<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadPhotos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class UploadPhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blogs.photos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            foreach ($request->items as $file) {
                $imagepath = Storage::disk('gallery')->put($request->album_name, $file);
                $originname = $file->getClientOriginalName();
                $baseUrl = URL::to('/')."/gallery/";
                $images[] = $baseUrl.$imagepath;
                
                $photos = UploadPhotos::create([
                    'image_path' => $baseUrl.$imagepath,
                    'album_id'   => $request->album,
                    'uploaded_by'=> auth()->id() 
                ]);

            }
                return response()->json([
                    'data' => $photos,
                    'IsSuccess' => true
                ]);
        } catch (\Throwable $th) {
            return response()->json(['data' => $th->getMessage(), 'IsSuccess' => false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $datas = UploadPhotos::where('album_id', $id)->orderBy('album_id', 'desc')->get();
        return view('blogs.photos.show', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
