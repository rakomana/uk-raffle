<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
    *
    * Get product for the question
    * @return belongsTo
    *
    */
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    /**
    *
    * Get all options for the question
    * @return hasMany
    *
    */
    public function options()
    {
    	return $this->hasMany(Option::class);
    }
}
