@extends('layouts.admin')

@section('content')
    <h3>Thêm đơn hàng</h3>
    <form action="{{ route('admin.orders.store') }}" method="POST">
        @csrf
        <input type="text" name="ma_don" class="form-control mb-2" placeholder="Mã đơn" required>
        <select name="user_id" class="form-select mb-2" required>
            @foreach ($users as $u)
                <option value="{{ $u->id }}">{{ $u->name }}</option>
            @endforeach
        </select>
        <input type="number" name="tong_tien" class="form-control mb-2" placeholder="Tổng tiền" required>
        <input type="text" name="trang_thai" class="form-control mb-2" value="Chờ xử lý">
        <button class="btn btn-primary">Lưu</button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection
