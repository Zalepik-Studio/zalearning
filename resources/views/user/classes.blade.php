@extends('user.layouts.app')

@section('class')
    <div class="d-flex justify-content-evenly mb-4 mt-4">
        <a href="/classes" class="btn btn-primary">Semua Kelas</a>
        <a href="/my-class" class="btn btn-primary">Kelas Anda</a>
    </div>

    <div class="class-cards row">
        @foreach($classes as $class)
            <div class="class-card col-md-4">
                <form method="post" action="{{ route('register-class') }}">
                    @csrf
                    <input type="hidden" name="class_id" value="{{ $class->id }}">
                    <div class="card h-100">
                        <img src="{{ asset($class->class_thumbnail) }}" alt="Thumbnail" class="card-img-top class-thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">{{ $class->class_name }}</h5>
                            <p class="card-text">{{ $class->class_desc }}</p>
                            <p class="card-text">Harga: {{ $class->class_price }}</p>
                            <button type="submit" class="btn btn-success">Daftar Kelas</button>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
    </div>

    <style>
        .class-thumbnail {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
