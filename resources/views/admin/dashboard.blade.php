@extends('admin.layouts.app')

@section('title', 'Dashboard | Zalearning')

@section('dashboard')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<style>
  .small-box {
    position: relative;
    display: block;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border-radius: 0.25rem;
    overflow: hidden;
    margin-bottom: 20px;
    color: #fff;
  }

  .small-box .inner {
    padding: 20px;
  }

  .small-box h3 {
    font-size: 2.5rem;
    font-weight: 700;
    margin: 0 0 10px 0;
    color: #fff;
  }

  .small-box p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 1rem;
    margin: 0;
  }

  .small-box .icon {
    position: absolute;
    top: 10px;
    right: 10px;
    bottom: 10px;
    left: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 5rem;
    opacity: 0.2;
    color: #fff;
  }

  .small-box-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.1);
    color: #fff;
    font-size: 1rem;
    cursor: pointer;
  }

  .small-box-footer:hover {
    cursor: pointer;
  }

  .bg-info {
    background-color: #17a2b8 !important;
  }

  .bg-success {
    background-color: #28a745 !important;
  }

  .bg-warning {
    background-color: #ffc107 !important;
  }

  .bg-danger {
    background-color: #dc3545 !important;
  }
</style>


<body>
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $totalUsers }}</h3>
              <p>User</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="/admin/users" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right ml-2"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $classTotals }}</h3>
              <p>Kelas</p>
            </div>
            <div class="icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <a href="/my-class" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right ml-2"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>2</h3>
              <p>Quis</p>
            </div>
            <div class="icon">
              <i class="fas fa-question-circle"></i>
            </div>
            <a href="/sertifikat" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right ml-2"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>4</h3>
              <p>Add kelas</p>
            </div>
            <div class="icon">
              <i class="fas fa-plus-circle"></i>
            </div>
            <a href="/admin/add-class" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right ml-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>



@endsection
