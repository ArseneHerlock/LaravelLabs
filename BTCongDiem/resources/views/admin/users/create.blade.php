@extends('layouts.admin')

@section('content')
    <h3>Thêm người dùng</h3>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" class="form-control mb-2" placeholder="Họ tên" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Mật khẩu" required>
        <button class="btn btn-primary">Lưu</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection
