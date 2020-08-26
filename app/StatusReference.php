<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusReference extends Model
{
    protected $table = 'status_reference';
    protected $primaryKey = 'status_id';
    protected $fillable = ['status_code', 'status_name'];

    public function user()
    {
        return $this->belongsToMany('App\Users');
    }
    public function blog()
    {
        return $this->belongsToMany('App\Blog');
    }
    public function category()
    {
        return $this->belongsToMany('App\BlogCategory');
    }
}
