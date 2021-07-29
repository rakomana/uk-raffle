<?php

namespace App;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    use UUID;
    
    protected $table = 'user_product';

    /**
     * 
    */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
