<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    /**
    * Get the question for options
    *
    * @return belongsTo
    *
    */
    public function question()
    {
    	return $this->belongsTo(Question::class);
    }

    /**
    *
    * Get users associated with the options
    * @return belongsToMany
    *
    */
    public function users()
    {
    	return $this->belongsToMany(User::class, 'user_option')->withTimestamps();
    }
}
