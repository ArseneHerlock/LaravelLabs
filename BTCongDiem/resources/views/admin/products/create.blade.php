@extends('layouts.admin')

@section('content')
    <h3>Thêm sản phẩm</h3>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="ma" class="form-control mb-2" placeholder="Mã sản phẩm" required>
        <input type="text" name="ten" class="form-control mb-2" placeholder="Tên sản phẩm" required>
        <input type="number" name="gia" class="form-control mb-2" placeholder="Giá" required>
        <input type="file" name="hinh" class="form-control mb-2" accept="image/*">
        <button class="btn btn-primary">Lưu</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection
