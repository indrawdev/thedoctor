<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function officer()
    {
        return $this->belongsTo('App\Officer');
    }
}
