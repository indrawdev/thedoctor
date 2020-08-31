<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function insurances()
    {
        return $this->hasMany('App\Insurance');
    }

    public function registers()
    {
        return $this->hasMany('App\Registration');
    }

    public function medicals()
    {
        return $this->hasMany('App\Medical');
    }
    
}
