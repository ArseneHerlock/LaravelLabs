@extends('layouts.user')

@section('title', 'Trang chủ')

@section('content')
    <h3>Trang chủ User</h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>#</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Hình Ảnh</th>
        </tr>
        @forelse($products as $sp)
        <tr>
            <td>{{ $sp->ma }}</td>
            <td>{{ $sp->ten }}</td>
            <td>{{ number_format($sp->gia) }} đ</td>
            <td>
                @if ($sp->hinh)
                    <img src="{{ asset('images/' . $sp->hinh) }}" alt="{{ $sp->ten }}" width="60">
                @else
                    Chưa có ảnh
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Chưa có sản phẩm</td>
        </tr>
        @endforelse
        
        
    </table>

@endsection
