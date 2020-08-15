<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
    
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function officer()
    {
        return $this->belongsTo('App\Officer');
    }
}
