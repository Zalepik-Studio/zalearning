@extends('user.layouts.app')

@section('class')

<div class="w-full d-flex justify-content-end text-center align-items-center h-full  py-2 ">
    <p class="m-0 me-2">Tampilkan: </p>
    <div class="dropdown ">
        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Semua Kelas
            <i class="fas fa-caret-down"></i>
        </button>
        <ul class="dropdown-menu">
            <li></li>
            <li><a class="dropdown-item" href="/classes">Semua Kelas</a></li>
            <li><a class="dropdown-item" href="/my-class">Kelas Anda</a></li>
        </ul>
    </div>
</div>

@if(session('status'))
<div class="alert alert-danger">
    {{ session('status') }}
</div>
@endif

<div class="class-cards row">
    @foreach($classes as $class)
    <div class="class-card col-md-4">
        <div class="card">
            <img src="{{ asset('assets/images/thumbnail-1.png') }}" alt="" class="card-img-top class-thumbnail">
            <div class="card-body" style="display: grid; grid-template-rows: 1fr auto; position:relative;">
                <div class="">
                    <h5 class="card-title">{{ $class->class_name }}</h5>
                    <p class="card-desc m-0" style="height: 60px; overflow: hidden;">{{ $class->class_desc }}</p>
                    <p class="m-0 text-end">50%</p>
                    <div class="progress m-0" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between">
                    <a href="{{ url('/class/' . $classRoutes[$class->id]) }}" class="btn btn-primary btn-sm d-flex align-items-center">Lihat Kelas</a>
                    <a href="" class="btn"> <i class="fas fa-trash " style="color: gray; font-size: 20px;"></i> </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection