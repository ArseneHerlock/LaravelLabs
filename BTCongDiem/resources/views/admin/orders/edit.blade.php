@extends('layouts.admin')

@section('content')
    <h3>Sửa đơn hàng</h3>
    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="ma_don" class="form-control mb-2" value="{{ $order->ma_don }}" required>
        <select name="user_id" class="form-select mb-2" required>
            @foreach ($users as $u)
                <option value="{{ $u->id }}" {{ $order->user_id == $u->id ? 'selected' : '' }}>
                    {{ $u->name }}
                </option>
            @endforeach
        </select>
        <input type="number" name="tong_tien" class="form-control mb-2" value="{{ $order->tong_tien }}" required>
        <input type="text" name="trang_thai" class="form-control mb-2" value="{{ $order->trang_thai }}">
        <button class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection
