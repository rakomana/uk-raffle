<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * 
     * @return belongsTo
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
