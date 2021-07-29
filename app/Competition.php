<?php

namespace App;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use UUID;
    
    protected $table = 'user_product';
}