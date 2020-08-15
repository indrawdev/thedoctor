<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function items()
    {
        return  $this->belongsTo('App\Item');
    }
}
