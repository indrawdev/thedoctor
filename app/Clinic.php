<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Laravel\Cashier\Billable;

class Clinic extends Model
{
    use Billable, SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function registrations()
    {
        return $this->hasMany('App\Registration');
    }

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

    public function medicals()
    {
        return $this->hasMany('App\Medical');
    }

    public function costs()
    {
        return $this->hasMany('App\Cost');
    }

    public function letters()
    {
        return $this->hasMany('App\Letter');
    }

    public function suppliers()
    {
        return $this->hasMany('App\Supplier');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
