@extends('layouts.admin')

@section('content')
    <h3>Sửa người dùng</h3>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" class="form-control mb-2" value="{{ $user->name }}" required>
        <input type="email" name="email" class="form-control mb-2" value="{{ $user->email }}" required>
        <button class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection
