@extends('user.layouts.app')

@section('quizz')

<div class="content" style="overflow-y: hidden;">
    @if(session('success'))
    <div class="alert alert-success">
        <strong>{{ session('success') }}</strong>
    </div>
    @endif

    @if(isset($userScore))
    <div class="alert alert-success">
        <strong>Quiz selesai</strong> Skor Anda: {{ $userScore->score }}
    </div>
    @else

    <div class="wraper">
        @include('user.layouts.sidebar')
        <div style="width: 100%; max-width: 100%;  height: 78vh; overflow-y: auto; display: flex; flex-direction: column;  align-items: center;">
            <form method="post" action="{{ route('submit-quiz') }}">
                @csrf
                <input type="hidden" name="class_id" value="{{ $classId }}">
                <input type="hidden" name="user_quiz_id" value="{{ $userQuizId }}">
                @foreach($questions as $question)
                <p>{{ $question->question }}</p>
                <label>
                    <input type="radio" name="answer[{{ $question->id }}]" value="a"> {{ $question->option_a }}
                </label>
                <br>
                <label>
                    <input type="radio" name="answer[{{ $question->id }}]" value="b"> {{ $question->option_b }}
                </label>
                <br>
                <label>
                    <input type="radio" name="answer[{{ $question->id }}]" value="c"> {{ $question->option_c }}
                </label>
                <br>
                <label>
                    <input type="radio" name="answer[{{ $question->id }}]" value="d"> {{ $question->option_d }}
                </label>
                
                @endforeach
            </form>
            <!-- <button type="submit" class="btn btn-primary" style="margin-top: 1rem;">Submit</button> -->
        </div>
    </div>
    @endif
</div>
@endsection