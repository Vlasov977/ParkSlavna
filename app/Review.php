<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    public static function thubnails_reviews()
    {
        $reviews = Review::select('id', 'image', 'name' ,'review')->latest()->take(5)->get();
        return $reviews;
    }
}
