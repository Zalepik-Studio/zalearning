<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    protected $table = 'user_classes';
    protected $primaryKey = 'id';

    public function getClass()
    {
        return $this->belongsTo(GetClass::class, 'class_id', 'id');
    }
}