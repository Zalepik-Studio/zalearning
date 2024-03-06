@extends('user.layouts.app')

@section('class')
    <h1>Daftar Kelas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Route Kelas</th>
                <th>Dibuat Pada</th>
                <th>Diupdate Pada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $class)
                <tr>
                    <td>{{ $class->class_name }}</td>
                    <td>{{ $class->class_route }}</td>
                    <td>{{ $class->created_at }}</td>
                    <td>{{ $class->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection