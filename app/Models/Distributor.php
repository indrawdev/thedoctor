<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Distributor extends Model
{
    use SoftDeletes;

    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }
}
