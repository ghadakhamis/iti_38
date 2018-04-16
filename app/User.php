<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Get the user's created_at.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateFormAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('l jS \\of F Y h:i:s A');
    }
}
