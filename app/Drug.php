<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
