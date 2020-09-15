<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    public function officer()
    {
        return $this->belongsTo('App\Models\Officer');
    }
}
