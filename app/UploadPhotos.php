<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadPhotos extends Model
{
    protected $table = 'album_images';
    protected $primaryKey = 'album_images_id';
    protected $fillable = ['image_path', 'album_id', 'uploaded_by'];

    public function album()
    {
        return $this->belongsTo('App\Album', 'album_id');
    }
    public function upload_by()
    {
        return $this->belongsTo('App\User', 'uploaded_by');
    }
}
