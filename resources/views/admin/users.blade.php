@extends('admin.layouts.app')

@section('title', 'Users | Zalearning')

@section('users')
    <div class="container">
        <h1>Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td></td> 
                        <td>icon edit | icon hapus</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
