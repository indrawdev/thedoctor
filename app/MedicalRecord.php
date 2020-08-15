<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
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
