<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medical extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }

    public function register()
    {
        return $this->belongsTo('App\Models\Registration');
    }

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    public function fee()
    {
        return $this->belongsTo('App\Models\Fee');
    }

    public function prescriptions()
    {
        return $this->hasMany('App\Models\Prescription');
    }
}
