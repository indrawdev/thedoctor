<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function doctor()
    {
        return $this->belongsTo('App\Patient');
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
