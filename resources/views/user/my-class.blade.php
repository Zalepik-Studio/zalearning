@extends('user.layouts.app')

@section('class')
@include('user.layouts.navigationclas')

@if(session('status'))
<div class="alert alert-danger">
    {{ session('status') }}
</div>
@endif

<div class="modal fade" id="registrationSuccessModal" tabindex="-1" aria-labelledby="registrationSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrationSuccessModalLabel">Pendaftaran Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Selamat, Anda telah terdaftar di kelas <span id="classNamePlaceholder"></span></p>
            </div>
        </div>
    </div>
</div>

<div class="class-cards row">
    @foreach($classes as $class)
    <div class="class-card col-md-4">
        <div class="card">
            <img src="{{ asset('assets/images/thumb1.png') }}" alt="Thumbnail" class="card-img-top class-thumbnail">
            <div class="card-body" style="display: grid; grid-template-rows: 1fr auto; position:relative;">
                <div class="">
                    <h5 class="card-title">{{ $class->class_name }}</h5>
                    <p class="card-des m-0" style="height: 60px; overflow: hidden;">{{ $class->class_desc }}</p>
                    <p class="m-0 text-end">50%</p>
                    <div class="progress m-0" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between">
                    <a href="{{ url('/class/' . $class->class_route) }}" onclick="showRegistrationSuccessModal('{{ $class->class_name }}')" class="btn btn-primary btn-sm d-flex align-items-center ">Lihat Kelas</a>
                    <a href="" class="btn"> <i class="fas fa-trash " style="color: gray; font-size: 20px;"></i> </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection