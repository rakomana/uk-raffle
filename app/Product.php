<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
	*
	* Get user associated with the product
	* @return belongsToMany
	*
	*/
    public function users()
    {
    	return $this->belongsToMany(User::class, 'user_product')
                    ->withPivot('order_id', 'quantity', 'status')
    				->withTimestamps();
    }

    /**
    *
    * Get all competion of the product
    *
    */
    public function competition()
    {
    	return $this->hasMany(Competition::class);
    }

    /**
    * Get all questions for the product
    * @return hasMany
    *
    */
    public function questions()
    {
    	return $this->hasMany(Question::class);
    }
}
