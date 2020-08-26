<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'blog_id';
    protected $fillable=['image','category_id', 'title', 'meta_desc','body', 'author', 'posted_by' ];

    public function setTitleAttribute($value)
    {

        $this->attributes['title']  = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\BlogCategory');
    }
    public function getUrlAttribute()
    {

        return route('blog-shownewsletters', $this->slug);
    }
    public function getUrlMediaAttribute()
    {

        return route('blog-media-show', $this->slug);
    }
    /* public function getBodyHtmlAttribute()
    {

        return clean(@parsedown($this->body));
    } */
}
