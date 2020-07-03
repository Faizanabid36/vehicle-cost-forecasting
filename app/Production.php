<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    //
    public function scopeEBM($query)
    {
    	return $query->where('fac_name','English Biscuits Manufacturers');
    }
    public function scopeCFL($query)
    {
    	return $query->where('fac_name','Coronet Food Limited');
    }

    public function scopeCostEBM($query)
    {
    	return $query->where('fac_name','English Biscuits Manufacturers');
    }
    public function scopeCostCFL($query)
    {
    	return $query->where('fac_name','Coronet Food Limited');
    }
}
