@extends('admin.layouts.app')

@section('classes')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="w-full d-flex justify-content-end text-center align-items-center h-full py-2 mt-3">
        <div>
            <a href="/admin/add-class">
                <button class="btn btn-success"><i class="fas fa-chalkboard-teacher"></i> Tambah Kelas</button>
            </a>
        </div>
    </div>
    <div class="class-cards row">
        @foreach($classes as $class)
        <div class="class-card col-md-4">
            <form method="post" action="{{ route('register-class') }}">
                @csrf
                <input type="hidden" name="class_id" value="{{ $class->id }}">
                <div class="card">
                    <img src="{{ $class->class_thumbnail }}" alt="" class="card-img-top class-thumbnail">
                    <div class="card-body" style="position: relative;">
                        <h5 class="card-title">{{ $class->class_name }}</h5>
                        <p class="card-desc" style="height: 60px; overflow: hidden;"> {{ $class->class_desc }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text m-0">Rp {{ number_format($class->class_price, 0, ',', '.') }}</p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-star text-warning m-1 my-0"></i>
                                <p class="m-0 vote">4,86</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-join btn-sm ">Gabung Kelas</button>
                    </div>
                </div>
            </form>
        </div>
        @endforeach
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection