@extends('admin.layouts.app')

@section('add-class')

<div>
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
