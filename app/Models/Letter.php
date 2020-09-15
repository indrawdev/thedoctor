<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }
}
