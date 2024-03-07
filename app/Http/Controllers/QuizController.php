<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizQuestions;
use App\Models\QuizAnswers;
use App\Models\QuizScore;
use App\Models\GetClass;
use App\Models\AddQuiz;

class QuizController extends Controller
{
    public function quiz()
    {
        $classId = GetClass::where('id', (int)1)->first()->id;
        $userQuizId = QuizAnswers::max('user_quiz_id') + (int)1;
        $questions = QuizQuestions::where('class_id', $classId)->get();
        return view('user/quiz', compact('questions', 'classId', 'userQuizId'));
    }

    public function addQuiz(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'class_id' => 'required|string',
                'question' => 'required|string',
                'option_a' => 'required|string',
                'option_b' => 'required|string',
                'option_c' => 'required|string',
                'option_d' => 'required|string',
                'correct_answer' => 'required|string',
            ]);

            AddQuiz::create([
                'class_id' => $request->class_id,
                'question' => $request->question,
                'option_a' => $request->option_a,
                'option_b' => $request->option_b,
                'option_c' => $request->option_c,
                'option_d' => $request->option_d,
                'correct_answer' => $request->correct_answer,
            ]);

            return redirect('admin/add-quiz')->with('success', 'Soal berhasil ditambahkan');
        }

        $classes = GetClass::all();
        return view('admin/add-quiz', compact('classes'));
    }

    public function submitQuiz(Request $request)
    {
        $request->validate([
            'class_id' => 'required|string',
            'user_quiz_id' => 'required|string',
            'answer.*' => 'required|in:a,b,c,d',
        ]);

        $classId = $request->input('class_id');
        $userQuizId = $request->input('user_quiz_id');

        foreach ($request->input('answer') as $questionId => $userAnswer) {
            $question = QuizQuestions::find($questionId);

            QuizAnswers::create([
                'user_id' => auth()->id(),
                'class_id' => $classId,
                'user_quiz_id' => $userQuizId,
                'question_id' => $question->id,
                'user_answer' => $userAnswer,
                'true_or_false' => ($userAnswer === $question->correct_answer),
            ]);
        }

        $score = QuizAnswers::where('user_id', auth()->id())
            ->where('class_id', $classId)
            ->where('user_quiz_id', $userQuizId)
            ->where('true_or_false', true)
            ->count();

        QuizScore::create([
            'user_id' => auth()->id(),
            'class_id' => $classId,
            'user_quiz_id' => $userQuizId,
            'score' => $score,
        ]);

        $userScore = QuizScore::where('user_id', auth()->id())
            ->where('class_id', $classId)
            ->where('user_quiz_id', $userQuizId)
            ->first();

        return view('user/quiz', compact('userScore'))->with('success', 'Quiz selesai');
    }
}
