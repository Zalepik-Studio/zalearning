@extends('admin.layouts.app')

@section('add-class')

{{-- <div>
    <div>
        <div>
            @if(session('success'))
                <div>{{ session('success') }}</div>
            @endif

            <form action="{{ route('add-class') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="class_name">Nama Kelas</label>
                    <input type="text" id="class_name" name="class_name">
                </div>
                <div>
                    <label for="class_thumbnail">Thumbnail</label>
                    <input type="file" id="class_thumbnail" name="class_thumbnail" onchange="previewImage(this)">
                    <img src="#" id="preview_image" style="display: none; max-width: 100px; margin-top: 10px;">
                </div>
                <div>
                    <label for="class_desc">Deskripsi</label>
                    <textarea id="class_desc" name="class_desc"></textarea>
                </div>
                <div>
                    <label for="class_price">Harga</label>
                    <input type="text" id="class_price" name="class_price">
                </div>
                <div>
                    <label for="class_route">Rute Kelas</label>
                    <input type="text" id="class_route" name="class_route">
                </div>
                <div>
                    <button type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}


<div class="card">
    <div class="card-header">  
      <h3 class="card-title">Tambah Kelas</h3>
    </div>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
  
    <form action="{{ route('add-class') }}" method="post" enctype="multipart/form-data">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="class_name">Nama Kelas</label>
              <input type="text" id="class_name" name="class_name" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="class_price">Harga</label>
              <input type="text" id="class_price" name="class_price" class="form-control">
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="class_desc">Deskripsi</label>
          <textarea id="class_desc" name="class_desc" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="class_route">Rute Kelas</label>
          <input type="text" id="class_route" name="class_route" class="form-control">
        </div>
        <div class="form-group">
          <label for="class_thumbnail">Thumbnail</label>
          <input type="file" id="class_thumbnail" name="class_thumbnail" class="form-control" onchange="previewImage(this)">
          <img src="#" id="preview_image" style="display: none; max-width: 200px; margin-top: 10px;">
        </div>
        
            <div class="">
              <button type="submit" class="btn btn-success w-100">Simpan</button>
            </div>
      </div>
    </form>
  </div>

<script>
    function previewImage(input) {
        var preview = document.getElementById('preview_image');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            preview.style.display = 'block';
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
</script>

@endsection
