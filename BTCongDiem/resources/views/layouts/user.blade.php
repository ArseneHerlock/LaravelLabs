<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'User')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary px-3">
        <a class="navbar-brand" href="{{ url('/user') }}">Trang User</a>
        <div>
            <a class="text-white text-decoration-none me-3" href="{{ url('/user') }}">Trang chủ</a>
            <a class="text-white text-decoration-none me-3" href="{{ url('/user') }}">Sản phẩm</a>
            <a class="btn btn-light btn-sm" href="{{ url('/admin') }}">Sang Admin</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
