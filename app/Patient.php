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

    public function registers()
    {
        return $this->hasMany('App\Registration');
    }

    public function records()
    {
        return $this->hasMany('App\MedicalRecord');
    }
    
}
