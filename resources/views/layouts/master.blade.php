<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- Bootstrap CDN (đơn giản để dùng alert, menu đẹp) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="fw-bold">My Laravel</div>
            <nav>
                <a class="text-white me-3 text-decoration-none" href="/home">Home</a>
                <a class="text-white text-decoration-none" href="/contact">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container my-4">
        @yield('content')
    </main>

    <footer class="bg-light p-3">
        <div class="container text-center">
            © {{ date('Y') }} Bản quyền thuộc về bạn
        </div>
    </footer>
</body>
</html>