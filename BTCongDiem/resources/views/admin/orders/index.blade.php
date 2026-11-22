@extends('layouts.admin')

@section('content')
    <h3>Quản lý đơn hàng</h3>
    <a href="{{ route('admin.orders.create') }}" class="btn btn-primary mb-3">Thêm</a>

    <table class="table table-bordered">
        <tr>
            <th>Mã đơn</th>
            <th>Khách hàng</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Func</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->ma_don }}</td>
                <td>{{ $order->user->name ?? '' }}</td>
                <td>{{ number_format($order->tong_tien) }} đ</td>
                <td>{{ $order->trang_thai }}</td>
                <td>
                    <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
