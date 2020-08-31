<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
