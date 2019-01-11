<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Number extends Model
{
    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function photos()
    {
        return $this->hasMany(PhotoNumber::class);
    }

    public function reservations()
    {
        return $this->belongsTo(Reservation::class);
    }

    public static function reservation()
    {
        $numbers = Number::select('id', 'name')->latest()->take(5)->get();
        return $numbers;
    }
}
