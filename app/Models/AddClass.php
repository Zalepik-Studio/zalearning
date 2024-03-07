<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddClass extends Model
{
    protected $table = 'classes';
    protected $fillable = ['class_name', 'class_thumbnail', 'class_desc', 'class_price', 'class_route'];
}
