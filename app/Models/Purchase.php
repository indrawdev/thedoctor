<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
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

    public function item()
    {
        return $this->belongsTo('App\Models\Item');
    }
}
