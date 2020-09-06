<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }
    
    public function letters()
    {
        return $this->hasMany('App\Letter');
    }
}
