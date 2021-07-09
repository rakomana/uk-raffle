<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function userproduct()
    {
        return $this->hasMany(UserProduct::class);
    }
}
