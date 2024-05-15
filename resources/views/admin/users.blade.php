@extends('admin.layouts.app')

@section('title', 'Users | Zalearning')

@section('users')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .table td, .table th {
      vertical-align: middle;
    }
    .status-active {
      color: #28a745;
    }
    .status-suspended {
      color: #dc3545;
    }
    .status-inactive {
      color: #ffc107;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>User </h2>
      <div>
        <button class="btn btn-primary"><i class="fas fa-file-excel"></i> Export to Excel</button>
        <button class="btn btn-success"><i class="fas fa-user-plus"></i> Add New User</button>
      </div>
    </div>
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Date Created</th>
          <th>Role</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>1</td>
          <td><img src="https://via.placeholder.com/30" class="rounded-circle mr-2" alt="User 1">{{ $user->name }}</td>
          <td>04/5/2024</td>
          <td>User</td>
          <td><span class="status-active"><i class="fas fa-circle"></i> Active</span></td>
          <td>
            <button class="btn btn-info btn-sm"><i class="fas fa-cog"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td><img src="https://via.placeholder.com/30" class="rounded-circle mr-2" alt="User 2">Zain</td>
          <td>05/01/2024</td>
          <td>Publisher</td>
          <td><span class="status-active"><i class="fas fa-circle"></i> Active</span></td>
          <td>
            <button class="btn btn-info btn-sm"><i class="fas fa-cog"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td><img src="https://via.placeholder.com/30" class="rounded-circle mr-2" alt="User 3">Amar</td>
          <td>11/05/2024</td>
          <td>User</td>
          <td><span class="status-inactive"><i class="fas fa-circle"></i> Inactive</span></td>
          <td>
            <button class="btn btn-info btn-sm"><i class="fas fa-cog"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>


  
@endsection
