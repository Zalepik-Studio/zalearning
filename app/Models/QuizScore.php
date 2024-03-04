<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
        'user_quiz_id',
        'score',
    ];

    protected $table = 'quiz_scores';

    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}