<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddQuiz extends Model
{
    protected $table = 'quiz_questions';
    protected $fillable = ['class_id', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'correct_answer'];
}