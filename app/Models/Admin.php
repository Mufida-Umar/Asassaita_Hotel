<?php

// namespace App\Models;

// use Illuminate\Auth\Events\Authenticated;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// class Admin extends authenticatable

// {
//     use HasFactory, Notifiable;
// }
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'photo', 'token',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
