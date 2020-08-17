<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drug extends Model
{
    use SoftDeletes;
    
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
