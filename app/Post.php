<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public static function thubnails_posts()
    {
        $news = Post::select('id', 'title', 'image', 'body')->latest()->take(3)->get();
        return $news;
    }
}
