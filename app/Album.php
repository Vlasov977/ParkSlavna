<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    public static function thubnails_albums()
    {
        $photos = Album::select('id', 'image', 'name' ,'description')->latest()->take(5)->get();

        return $photos;
    }
}
