<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function registers()
    {
        return $this->hasMany('App\Registration');
    }
}
