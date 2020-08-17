<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
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
