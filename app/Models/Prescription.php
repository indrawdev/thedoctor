<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function medicals()
    {
        return $this->belongsTo('App\Models\Medical');
    }
}
