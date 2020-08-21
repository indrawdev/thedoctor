<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }
}
