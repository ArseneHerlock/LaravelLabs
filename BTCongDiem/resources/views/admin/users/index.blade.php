@extends('layouts.admin')

@section('content')
    <h3>Quản lý người dùng</h3>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">Thêm</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Func</th>
        </tr>
        @foreach ($users as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $u->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('admin.users.destroy', $u->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
