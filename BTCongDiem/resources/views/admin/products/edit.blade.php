@extends('layouts.admin')

@section('content')
    <h3>Sửa sản phẩm</h3>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="ma" class="form-control mb-2" value="{{ $product->ma }}" required>
        <input type="text" name="ten" class="form-control mb-2" value="{{ $product->ten }}" required>
        <input type="number" name="gia" class="form-control mb-2" value="{{ $product->gia }}" required>

        @if ($product->hinh)
            <div class="mb-2">
                <img src="{{ asset('images/' . $product->hinh) }}" width="80" alt="{{ $product->ten }}">
            </div>
        @endif

        <input type="file" name="hinh" class="form-control mb-2" accept="image/*">
        <button class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection
