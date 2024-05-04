<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoute extends Model
{
    protected $table = 'class_routes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'class_id',
        'class_route',
    ];

    public function myClass()
    {
        return $this->belongsTo(MyClass::class, 'class_id', 'id');
    }
}
