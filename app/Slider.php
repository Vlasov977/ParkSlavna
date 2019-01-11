<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    public static function thubnails_slider()
    {
        $sliders = Slider::select('id', 'image')->latest()->take(5)->get();

        return $sliders;
    }
}
