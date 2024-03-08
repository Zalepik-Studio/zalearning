@extends('user.layouts.app')

@section('quizz')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form-quiz.css') }}">
</head>

<body>
    <div class="content" style="overflow-y: hidden;">
        @if(isset($userScore))
        <div class="alert alert-success">
            <strong>Quiz selesai</strong> Skor Anda: {{ $userScore->score }}
        </div>
        @else

        <div class="wraper">
            @include('user.layouts.sidebar')
            <div style="width: 100%; max-width: 100%;  height: 78vh; overflow-y: auto; display: flex; flex-direction: column;  ">
                <form method="post" action="{{ route('submit-quiz') }}" id="quizForm">
                    @csrf
                    <input type="hidden" name="class_id" value="{{ $classId }}">
                    <input type="hidden" name="user_quiz_id" value="{{ $userQuizId }}">
                    @foreach($questions as $question)
                    <div class="mb-3">
                        <p class="question">{{ $question->question }}</p>
                        <label>
                            <input type="radio" name="answer[{{ $question->id }}]" value="a">
                            <span class="radio-label">A</span> {{ $question->option_a }}
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="answer[{{ $question->id }}]" value="b">
                            <span class="radio-label">B</span> {{ $question->option_b }}
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="answer[{{ $question->id }}]" value="c">
                            <span class="radio-label">C</span> {{ $question->option_c }}
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="answer[{{ $question->id }}]" value="d">
                            <span class="radio-label">D</span> {{ $question->option_d }}
                        </label>
                    </div>
                    @endforeach

                    <button type="submit" class="btn btn-primary w-100" style="margin-top: 1rem;">
                        Submit
                    </button>
                </form>
            </div>
        </div>
        @endif
    </div>
</body>

</html>
@endsection
