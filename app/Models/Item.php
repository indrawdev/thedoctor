<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }

    public function distributor()
    {
        return $this->belongsTo('App\Models\Distributor');
    }
}
