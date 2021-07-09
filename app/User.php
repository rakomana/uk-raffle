<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider_id', 'provider',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
    * Get the billing address of the useer
    *
    * @return belongsTo
    *
    */

    public function billing()
    {
        return $this->belongsTo(Shipping::class);
    }

    /**
    * products associated with the user
    * @return belongsToMany
    *
    */
    public function product()
    {
        return $this->belongsToMany(Product::class, 'user_product')
                    ->withPivot('order_id', 'quantity', 'status')
                    ->withTimestamps();
    }

    /**
     * account associated with user
     * @return hasMany
    */
    public function account()
    {
        return $this->hasMany(Account::class);
    }
}
