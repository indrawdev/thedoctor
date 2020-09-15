<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosage extends Model
{
    public function drugs()
    {
        return $this->hasMany('App\Models\Drug');
    }
}