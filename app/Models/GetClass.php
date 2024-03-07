<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GetClass extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';

    public function myClasses()
    {
        return $this->hasMany(MyClass::class, 'class_id', 'id');
    }
}