<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = "blog_categories";
    protected $primaryKey = "blog_category_id";
    protected $fillable = ['category_name'];

    public function blog(){
        return $this->hasOne('App\Blog');
    }
}
