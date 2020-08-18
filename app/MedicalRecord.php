<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalRecord extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function register()
    {
        return $this->belongsTo('App\Registration');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function fee()
    {
        return $this->belongsTo('App\Fee');
    }

    public function prescriptions()
    {
        return $this->hasMany('App\Prescription');
    }
}
