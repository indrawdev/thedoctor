<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    
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
