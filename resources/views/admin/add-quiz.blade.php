@extends('admin.layouts.app')

@section('add-quiz')

<div>
    <div>
        <div>
            @if(session('success'))
            <div>{{ session('success') }}</div>
            @endif

            <form action="{{ route('add-quiz') }}" method="post">
                @csrf
                <div>
                    <label for="class_code">Pilih Kelas</label>
                    <select id="class_code" name="class_id">
                        @foreach($classes as $class)
                        <option value="{{ $class->class_id }}">{{ $class->class_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="question">Pertanyaan</label>
                    <input type="text" id="question" name="question">
                </div>
                <div>
                    <label for="option_a">Opsi A</label>
                    <input type="text" id="option_a" name="option_a" value="a.">
                </div>
                <div>
                    <label for="option_b">Opsi B</label>
                    <input type="text" id="option_b" name="option_b" value="b.">
                </div>
                <div>
                    <label for="option_c">Opsi C</label>
                    <input type="text" id="option_c" name="option_c" value="c.">
                </div>
                <div>
                    <label for="option_d">Opsi D</label>
                    <input type="text" id="option_d" name="option_d" value="d.">
                </div>
                <div>
                    <label for="correct_answer">Jawaban Benar</label>
                    <select id="correct_answer" name="correct_answer">
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection