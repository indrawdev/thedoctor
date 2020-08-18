<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }

    public function distributor()
    {
        return $this->belongsTo('App\Distributor');
    }
}
