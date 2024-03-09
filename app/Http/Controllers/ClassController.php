<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddClass;
use App\Models\GetClass;
use App\Models\MyClass;
use App\Models\RegisterClass;
use App\Models\QuizQuestions;
use App\Models\QuizAnswers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function addClass(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'class_name' => 'required|string',
                'class_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'class_desc' => 'required|string',
                'class_route' => 'required|string',
            ]);

            $thumbnailPath = $request->file('class_thumbnail')->store('public/thumbnails');

            AddClass::create([
                'class_name' => $request->class_name,
                'class_thumbnail' => $thumbnailPath,
                'class_desc' => $request->class_desc,
                'class_price' => $request->class_price,
                'class_route' => $request->class_route,
            ]);

            return redirect('admin/add-class')->with('success', 'Kelas berhasil ditambahkan');
        }

        return view('admin/add-class');
    }

    public function classes()
    {
        $classes = GetClass::all();

        return view('user/classes', ['classes' => $classes]);
    }

    public function registerClass(Request $request)
    {
        $classId = $request->input('class_id');

        RegisterClass::create([
            'user_id' => auth()->user()->id,
            'class_id' => $classId,
        ]);

        $class = GetClass::where('id', $classId)->first();

        return redirect('my-class')->with('success', "Selamat Anda telah terdaftar di kelas $class->class_name");
    }

    public function class($fileName)
    {
        $userId = Auth::id();

        $class = GetClass::where('class_route', $fileName)->first();

        $userInClass = MyClass::where('user_id', $userId)
            ->where('class_id', $class->id)
            ->exists();

        $classId = $class->id;

        $userQuizId = QuizAnswers::max('user_quiz_id') + (int)1;
        $questions = QuizQuestions::where('class_id', $classId)->get();

        if ($userInClass && File::exists(resource_path("views/class/{$fileName}.blade.php"))) {
            return view("class.{$fileName}", compact('questions', 'classId', 'userQuizId'));
        } elseif (!$userInClass) {
            return abort(403, 'Anda belum terdaftar dikelas ini');
        } else {
            return abort(404, 'Kelas tidak ditemukan');
        }
    }

    public function myClass()
    {
        $userId = auth()->user()->id;

        $classes = GetClass::whereHas('myClasses', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        return view('user/my-class', ['classes' => $classes]);
    }
}
