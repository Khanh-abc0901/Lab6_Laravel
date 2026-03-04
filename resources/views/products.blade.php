<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Danh sách sản phẩm</title>
    <style>
        table { border-collapse: collapse; width: 600px; }
        th, td { border: 1px solid #ccc; padding: 8px; }
    </style>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p['name'] }}</td>
                    <td>
                        @if ($p['price'] > 10000000)
                            <span style="color: red;">
                                {{ number_format($p['price']) }} (Vip)
                            </span>
                        @else
                            {{ number_format($p['price']) }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <h3>Ví dụ toán tử 3 ngôi (mỗi dòng 1 sản phẩm)</h3>
    <ul>
        @foreach ($products as $p)
            <li>
                {{ $p['name'] }} -
                {!! $p['price'] > 10000000
                    ? '<span style="color:red;">'.number_format($p['price']).' (Vip)</span>'
                    : number_format($p['price'])
                !!}
            </li>
        @endforeach
    </ul>
</body>
</html>