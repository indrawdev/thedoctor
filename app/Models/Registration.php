<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use SoftDeletes;
    
    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }
    
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    public function officer()
    {
        return $this->belongsTo('App\Models\Officer');
    }
}
