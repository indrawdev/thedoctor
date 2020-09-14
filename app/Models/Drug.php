<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drug extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function dosage()
    {
        return $this->belongsTo('App\Models\Dosage');
    }
}
