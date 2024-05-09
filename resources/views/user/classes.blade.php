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

@endsection