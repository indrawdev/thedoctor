<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drug extends Model
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

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function dosage()
    {
        return $this->belongsTo('App\Dosage');
    }
}
