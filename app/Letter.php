<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
