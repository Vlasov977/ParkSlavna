<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    public function reservation()
    {
        return $this->hasMany(Number::class);
    }
}
