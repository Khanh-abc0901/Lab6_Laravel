<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .calculator {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        .result {
            font-size: 24px;
            color: #667eea;
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
        }
        .numbers {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }
        .number-box {
            width: 100px;
            height: 100px;
            background: #667eea;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
            border-radius: 10px;
        }
        .operator {
            font-size: 48px;
            color: #333;
            display: flex;
            align-items: center;
        }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 20px;
            font-weight: bold;
            transition: transform 0.3s;
        }
        .btn:hover {
            transform: translateY(-3px);
            background: #5a67d8;
        }
        .example {
            margin-top: 30px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>🧮 Máy Tính Tổng</h1>
        
        @isset($a)
        <div class="numbers">
            <div class="number-box">{{ $a }}</div>
            <div class="operator">+</div>
            <div class="number-box">{{ $b }}</div>
        </div>
        
        <div class="result">
            Tổng của {{ $a }} và {{ $b }} là: <strong>{{ $tong }}</strong>
        </div>
        @else
        <div class="result">
            Vui lòng nhập 2 số vào URL: /tong/số1/số2
        </div>
        @endisset
        
        <div class="example">
            <p><strong>Ví dụ:</strong> 
            <a href="/tong/5/10">/tong/5/10</a> | 
            <a href="/tong/15/25">/tong/15/25</a> | 
            <a href="/tong/100/200">/tong/100/200</a>
            </p>
        </div>
        
        <a href="/" class="btn">🏠 Về trang chủ</a>
        <a href="/sinh-vien/Nguyen Van A" class="btn">👨‍🎓 Xem sinh viên</a>
    </div>
</body>
</html>