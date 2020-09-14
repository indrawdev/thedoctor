<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    public function patients()
    {
        return $this->hasMany('App\Models\Patient');
    }
}
