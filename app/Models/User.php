<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Cog\Laravel\Optimus\Traits\OptimusEncodedRouteKey;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, OptimusEncodedRouteKey;

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

    public function journeys()
    {
        return $this->hasMany(Journey::class);
    }
}
