<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function record()
    {
        return $this->belongsTo('App\MedicalRecord');
    }
}
