<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAnswers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
        'user_quiz_id',
        'question_id',
        'user_answer',
        'true_or_false',
    ];

    protected $table = 'quiz_answers';

    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}