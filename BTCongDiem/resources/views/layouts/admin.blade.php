<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Admin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="{{ url('/admin') }}">Trang Admin</a>
        <div>
            <a class="btn btn-outline-light btn-sm me-2" href="{{ url('/user') }}">Sang User</a>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-danger btn-sm">Đăng xuất</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="{{ route('admin.dashboard') }}" class="list-group-item">Dashboard</a>
                    <a href="{{ route('admin.products.index') }}" class="list-group-item">Quản lý sản phẩm</a>
                    <a href="{{ route('admin.users.index') }}" class="list-group-item">Quản lý người dùng</a>
                    <a href="{{ route('admin.orders.index') }}" class="list-group-item">Quản lý đơn hàng</a>
                </div>
            </div>
            <div class="col-9">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>