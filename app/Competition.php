<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    /**
    *
    * Get the product for competition
    * @return belongsTo
    *
    */
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
