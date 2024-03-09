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
        <div class="modal fade" id="quizScoreModal" tabindex="-1" aria-labelledby="quizScoreModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="quizScoreModalLabel">Kuis Selesai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Jumlah soal</p>
                        <p>Jawaban benar <span id="quiz_score"></span></p>
                        <p>Nilai</p>
                    </div>
                </div>
            </div>
        </div>
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
    </div>
    <script>
        function showQuizScoreModal(quizScore) {
            if (quizScore !== null) {
                document.getElementById('quiz_score').innerText = quizScore.score;
                var modal = new bootstrap.Modal(document.getElementById('quizScoreModal'));
                modal.show();
            }
        }

        @if(session('quizScore'))
        document.addEventListener('DOMContentLoaded', function() {
            showQuizScoreModal(@json(session('quizScore')));
        });
        @endif
    </script>
</body>

</html>
@endsection
