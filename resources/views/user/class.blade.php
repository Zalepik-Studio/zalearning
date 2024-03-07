@extends('user.layouts.app')

@section('class')
    <h1>Daftar Kelas</h1>

    <div class="class-cards">
        @foreach($classes as $class)
            <div class="class-card">
                <img src="{{ asset($class->class_thumbnail) }}" alt="Thumbnail" class="class-thumbnail">
                <h2>{{ $class->class_name }}</h2>
                <p>{{ $class->class_desc }}</p>
                <p>Harga: {{ $class->class_price }}</p>
                <button>Daftar Kelas</button>
            </div>
        @endforeach
    </div>

    <style>
        .class-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .class-card {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            width: 300px;
        }

        .class-thumbnail {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
