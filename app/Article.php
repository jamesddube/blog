<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Intersect\Presenter\Presenter;
use Mews\Purifier\Facades\Purifier;

class Article extends Model
{
    use SluggableTrait;
    use Presenter;

    protected $presenter = 'App\Post';

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

    public function savePicture($file)
    {
        $filePath = __DIR__ . "/../public/assets/img/posts";

        $url_path = "assets/img/posts/";

        if($file->move($filePath , $file->getClientOriginalName()))
        {
            return $url_path.$file->getClientOriginalName();
        }

        return false;
    }

    public function PublishedAt()
    {
        $carbon = new Carbon($this->created_at);

        return $carbon->toFormattedDateString();
    }

    public function body()
    {
        $body = Purifier::clean($this->body);
        $body1 = str_replace('<p>','',$body);
        $body2 = str_replace('</p>','',$body1);

        return str_limit($body2,300,'...');

        return $body2;
    }


}
