<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Officer extends Model
{
    use SoftDeletes;
    
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function registers()
    {
        return $this->hasMany('App\Registration');
    }
}
