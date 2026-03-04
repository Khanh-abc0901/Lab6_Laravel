<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Bảng cửu chương</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>Bảng cửu chương</h2>

    @isset($error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endisset

    @isset($n)
        <div class="card p-3">
            <h4>Bảng cửu chương {{ $n }}</h4>
            <ul class="mb-0">
                @for ($i = 1; $i <= 10; $i++)
                    <li>{{ $n }} x {{ $i }} = {{ $n * $i }}</li>
                @endfor
            </ul>
        </div>
    @endisset
</div>
</body>
</html>