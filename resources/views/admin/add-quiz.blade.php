@extends('admin.layouts.app')

@section('add-quiz')

{{-- <div class="card">
    <div class="card-header">  
        <h3 class="card-title">Tambah Quiz</h3>
      </div>
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
                <div class="card-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
            </form>
        </div>
</div> --}}


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tambah Quiz</h3>
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
            <input type="text" id="option_a" name="option_a" value="a." class="form-control">
          </div>
        </div>
  
        <div class="form-group row">
          <label for="option_b" class="col-sm-2 col-form-label">Opsi B</label>
          <div class="col-sm-10">
            <input type="text" id="option_b" name="option_b" value="b." class="form-control">
          </div>
        </div>
  
        <div class="form-group row">
          <label for="option_c" class="col-sm-2 col-form-label">Opsi C</label>
          <div class="col-sm-10">
            <input type="text" id="option_c" name="option_c" value="c." class="form-control">
          </div>
        </div>
  
        <div class="form-group row">
          <label for="option_d" class="col-sm-2 col-form-label">Opsi D</label>
          <div class="col-sm-10">
            <input type="text" id="option_d" name="option_d" value="d." class="form-control">
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
  
        <div class="">
          <button type="submit" class="btn btn-success w-100">Simpan</button>
        </div>
      </form>
    </div>
  </div>

@endsection


