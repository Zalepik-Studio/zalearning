@extends('user.layouts.app')

@section('class')
<div class="d-flex justify-content-evenly mb-4 mt-4">
    <a href="/classes" class="btn btn-primary">Semua Kelas</a>
    <a href="/my-class" class="btn btn-primary">Kelas Anda</a>
</div>

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<!-- Modal -->
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
        <div class="card h-100">
            <img src="{{ asset($class->class_thumbnail) }}" alt="Thumbnail" class="card-img-top class-thumbnail">
            <div class="card-body">
                <h5 class="card-title">{{ $class->class_name }}</h5>
                <p class="card-text">{{ $class->class_desc }}</p>
                <p class="card-text">Harga: Rp{{ number_format($class->class_price, 0, ',', '.') }}</p>
                <a href="{{ url('/class/' . $class->class_route) }}" class="btn btn-primary" onclick="showRegistrationSuccessModal('{{ $class->class_name }}')">Lihat Kelas</a>
                <a href=""><i class="fas fa-trash"></i> Hapus Kelas</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    function showRegistrationSuccessModal(className) {
        document.getElementById('classNamePlaceholder').innerText = className;
        var modal = new bootstrap.Modal(document.getElementById('registrationSuccessModal'));
        modal.show();
    }

    @if(session('registrationSuccess'))
        document.addEventListener('DOMContentLoaded', function() {
            showRegistrationSuccessModal('{{ $class->class_name }}');
        });
    @endif
</script>

<style>
    .class-thumbnail {
        max-width: 100%;
        height: auto;
    }
</style>
@endsection
