<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fee extends Model
{
    use SoftDeletes;
    
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function records()
    {
        return $this->hasMany('App\MedicalRecord');
    }
}
