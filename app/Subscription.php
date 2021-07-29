<?php

namespace App;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subscription extends Model
{
    use UUID, Notifiable;
}
