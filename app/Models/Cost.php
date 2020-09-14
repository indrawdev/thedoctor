<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }
}
