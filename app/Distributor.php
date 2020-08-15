<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
