<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function records()
    {
        return $this->hasMany('App\MedicalRecord');
    }

}
