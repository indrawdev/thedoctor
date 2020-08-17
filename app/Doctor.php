<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function officers()
    {
        return $this->hasMany('App\Officer');
    }

    public function patients()
    {
        return $this->hasMany('App\Patient');
    }

    public function fees()
    {
        return $this->hasMany('App\Fee');
    }

    public function items()
    {
        return $this->hasMany('App\Item');
    }

    public function records()
    {
        return $this->hasMany('App\MedicalRecord');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
