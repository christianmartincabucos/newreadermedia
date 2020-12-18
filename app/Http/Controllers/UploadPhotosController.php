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
                // $imagepath = move_uploaded_file($file,public_path('gallery') ); /* Storage::disk('gallery')->put($request->album_name, $file); */
                // $originname = $file->getClientOriginalName();
                /* 
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $path = $request->category == 1 ? 'nmagazine': ($request->category == 2 ? 'media': ($request->category == 3 ? 'reviews': 'newsletter'));
                $request->image->move(public_path('storage/blogs/'. $path), $path.$imageName); */
                $imageName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('gallery/'. $request->album_name.'/'), $imageName);
                
                $baseUrl = URL::to('/').'/public//gallery/'.$request->album_name.'/';
                $images[] = $baseUrl.$imageName;    
                
                $photos = UploadPhotos::create([
                    'image_path' => $baseUrl.$imageName,
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
