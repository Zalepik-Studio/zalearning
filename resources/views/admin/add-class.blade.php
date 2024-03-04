@extends('admin.layouts.app')

@section('add-class')

<div>
    <div>
        <div>
            @if(session('success'))
                <div>{{ session('success') }}</div>
            @endif

            <form action="{{ route('add-class') }}" method="post">
                @csrf
                <div>
                    <label for="class_name">Nama Kelas</label>
                    <input type="text" id="class_name" name="class_name">
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

@endsection
