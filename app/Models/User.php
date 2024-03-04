<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $fillable = [
        'name',
        'gender',
        'date_of_birth',
        'email',
        'phone_number',
        'role',
        'password',
        'token',
        'token_expired_at', 
    ];

    protected $hidden = [
        'password',
    ];
}

