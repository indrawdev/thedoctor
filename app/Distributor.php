<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Distributor extends Model
{
    use SoftDeletes;

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
