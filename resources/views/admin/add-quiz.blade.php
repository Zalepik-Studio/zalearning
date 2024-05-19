@extends('admin.layouts.app')

@section('add-quiz')

<div class="card mt-2">
    <div class="card-header">
      <h3 class="card-title">Tambah Soal Kuis</h3>
    </div>
    <div class="card-body">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      <form action="{{ route('add-quiz') }}" method="post">
        @csrf
        <div class="form-group row">
          <label for="class_code" class="col-sm-2 col-form-label">Pilih Kelas</label>
          <div class="col-sm-10">
            <select id="class_code" name="class_id" class="form-select">
              @foreach($classes as $class)
                <option value="{{ $class->class_id }}">{{ $class->class_name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="question" class="col-sm-2 col-form-label">Pertanyaan</label>
          <div class="col-sm-10">
            <input type="text" id="question" name="question" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="option_a" class="col-sm-2 col-form-label">Opsi A</label>
          <div class="col-sm-10">
            <input type="text" id="option_a" name="option_a" value="a. " class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="option_b" class="col-sm-2 col-form-label">Opsi B</label>
          <div class="col-sm-10">
            <input type="text" id="option_b" name="option_b" value="b. " class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="option_c" class="col-sm-2 col-form-label">Opsi C</label>
          <div class="col-sm-10">
            <input type="text" id="option_c" name="option_c" value="c. " class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="option_d" class="col-sm-2 col-form-label">Opsi D</label>
          <div class="col-sm-10">
            <input type="text" id="option_d" name="option_d" value="d. " class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="correct_answer" class="col-sm-2 col-form-label">Jawaban Benar</label>
          <div class="col-sm-10">
            <select id="correct_answer" name="correct_answer" class="form-select">
              <option value="a">A</option>
              <option value="b">B</option>
              <option value="c">C</option>
              <option value="d">D</option>
            </select>
          </div>
        </div>
        <div>
          <button type="submit" class="btn btn-success w-100">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const inputs = [
        { id: 'option_a', prefix: 'a. ' },
        { id: 'option_b', prefix: 'b. ' },
        { id: 'option_c', prefix: 'c. ' },
        { id: 'option_d', prefix: 'd. ' },
      ];

      inputs.forEach(input => {
        const elem = document.getElementById(input.id);
        
        elem.addEventListener('input', function (e) {
          if (!e.target.value.startsWith(input.prefix)) {
            e.target.value = input.prefix;
          }
        });

        elem.addEventListener('keydown', function (e) {
          const cursorPos = elem.selectionStart;
          if (cursorPos <= input.prefix.length && 
              (e.key === 'Backspace' || e.key === 'Delete' || e.key === 'ArrowLeft')) {
            e.preventDefault();
          }
        });
      });
    });
  </script>

@endsection
