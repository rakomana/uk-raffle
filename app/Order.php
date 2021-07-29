<?php

namespace App;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use UUID;
    
    public function userproduct()
    {
        return $this->hasMany(UserProduct::class);
    }
}
