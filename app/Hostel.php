<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    public function rooms() {
        return $this->hasMany('App\Room');
    }
}
