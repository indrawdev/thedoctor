<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function doctors()
    {
        return $this->hasMany('App\Doctor');
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

    public function costs()
    {
        return $this->hasMany('App\Cost');
    }

    public function counters()
    {
        return $this->hasMany('App\Counter');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
