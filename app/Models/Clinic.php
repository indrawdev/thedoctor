<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Laravel\Cashier\Billable;

class Clinic extends Model
{
    use Billable, SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment');
    }

    public function registrations()
    {
        return $this->hasMany('App\Models\Registration');
    }

    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor');
    }

    public function officers()
    {
        return $this->hasMany('App\Models\Officer');
    }

    public function patients()
    {
        return $this->hasMany('App\Models\Patient');
    }

    public function fees()
    {
        return $this->hasMany('App\Models\Fee');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function medicals()
    {
        return $this->hasMany('App\Models\Medical');
    }

    public function costs()
    {
        return $this->hasMany('App\Models\Cost');
    }

    public function letters()
    {
        return $this->hasMany('App\Models\Letter');
    }

    public function suppliers()
    {
        return $this->hasMany('App\Models\Supplier');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
