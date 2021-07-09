<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    protected $table = 'user_product';

    /**
     * 
    */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
