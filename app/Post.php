<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SluggableTrait;

    protected $fillable = [
        'title',
        'image_header_url',
        'body',
        'slug'
    ];

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
