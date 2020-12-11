<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $primaryKey = 'album_id';
    protected $fillable = ['album_name'];

    public function photos()
    {
        return $this->hasMany('App\UploadPhotos');
    }
    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
}
