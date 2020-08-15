<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
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
