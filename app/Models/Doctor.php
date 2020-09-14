<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }
    
    public function letters()
    {
        return $this->hasMany('App\Models\Letter');
    }
}
