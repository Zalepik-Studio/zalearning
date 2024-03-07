<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterClass extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'class_id'];

    protected $table = 'user_classes';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
