<?php

namespace App;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use UUID;
    
    /**
     * 
     * @return belongsTo
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
