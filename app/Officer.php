<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Officer extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function registers()
    {
        return $this->hasMany('App\Registration');
    }
}
