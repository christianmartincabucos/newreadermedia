<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $primaryKey  = 'category_id';
    protected $fillable = ['category_name'];

    public function blog(){
        return $this->hasMany('App\Blog');
    }
}
