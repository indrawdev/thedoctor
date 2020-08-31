<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosage extends Model
{
    public function drugs()
    {
        return $this->hasMany('App\Drug');
    }
}