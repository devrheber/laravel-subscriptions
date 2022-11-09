<?php

namespace Devrheber\LaravelSubscriptions\Tests\Entities;

use Illuminate\Foundation\Auth\User as Authenticable;
use Devrheber\LaravelSubscriptions\Traits\HasSubscriptions;

class User extends Authenticable
{
    use HasSubscriptions;

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
}
