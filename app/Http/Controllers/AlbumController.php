<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    
    public function store(Request $request)
    {
        $album = new Album;
        $album->album_name = $request->albumname;
        $album->created_by = auth()->id();
        $album->save();

        if ($request->expectsJson()) {
            return response()->json([
                'data' => $album,
            ]);
        }

    }
    public function getAlbums()
    {
        $albums = Album::all();
        return response()->json([
            'albums' => $albums
        ]); 
    }
}
