<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function items()
    {
        return  $this->belongsTo('App\Models\Item');
    }
}
