@extends('layouts.admin')

@section('content')
    <h3>Quản lý sản phẩm</h3>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Thêm</a>

    <table class="table table-bordered">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Hình</th>
            <th>Func</th>
        </tr>
        @foreach ($products as $sp)
            <tr>
                <td>{{ $sp->ma }}</td>
                <td>{{ $sp->ten }}</td>
                <td>{{ number_format($sp->gia) }} đ</td>
                <td>
                    @if ($sp->hinh)
                        <img src="{{ asset('images/' . $sp->hinh) }}" width="60" alt="{{ $sp->ten }}">
                    @else
                        Chưa có ảnh
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.products.edit', $sp->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('admin.products.destroy', $sp->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection