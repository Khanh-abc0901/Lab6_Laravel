<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra Ngày Tháng</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .header h1 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .header p {
            color: rgba(255,255,255,0.8);
            font-size: 1.1rem;
        }
        
        .card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        
        .date-info {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .date-display {
            font-size: 2.5rem;
            color: #667eea;
            margin: 20px 0;
            font-weight: bold;
        }
        
        .result {
            padding: 25px;
            border-radius: 15px;
            margin: 20px 0;
            font-size: 1.2rem;
            text-align: center;
        }
        
        .valid {
            background: #d4edda;
            color: #155724;
            border: 2px solid #c3e6cb;
        }
        
        .invalid {
            background: #f8d7da;
            color: #721c24;
            border: 2px solid #f5c6cb;
        }
        
        .examples {
            margin-top: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
        }
        
        .examples h3 {
            color: #495057;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .example-links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        
        .example-link {
            display: inline-block;
            padding: 8px 16px;
            background: white;
            border: 2px solid #667eea;
            color: #667eea;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: 500;
        }
        
        .example-link:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }
        
        .navigation {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn:hover {
            background: #5a67d8;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .btn-admin {
            background: #f56565;
        }
        
        .btn-admin:hover {
            background: #e53e3e;
        }
        
        .input-form {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            margin-top: 30px;
        }
        
        .form-group {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .form-control {
            flex: 1;
            min-width: 150px;
        }
        
        .form-control label {
            display: block;
            margin-bottom: 8px;
            color: #495057;
            font-weight: 500;
        }
        
        .form-control input {
            width: 100%;
            padding: 12px;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            font-size: 1.1rem;
            transition: border 0.3s;
        }
        
        .form-control input:focus {
            outline: none;
            border-color: #667eea;
        }
        
        .submit-btn {
            width: 100%;
            padding: 15px;
            font-size: 1.1rem;
        }
        
        .error-list {
            list-style: none;
            text-align: left;
        }
        
        .error-list li {
            padding: 10px;
            margin: 5px 0;
            background: #f8d7da;
            color: #721c24;
            border-radius: 5px;
            border-left: 4px solid #e53e3e;
        }
        
        @media (max-width: 768px) {
            .card {
                padding: 25px;
            }
            
            .date-display {
                font-size: 1.8rem;
            }
            
            .form-group {
                flex-direction: column;
            }
            
            .form-control {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📅 Kiểm Tra Ngày Tháng</h1>
            <p>Nhập ngày tháng năm để kiểm tra tính hợp lệ</p>
        </div>
        
        <div class="card">
            <div class="date-info">
                @isset($day)
                    <h2>Kết quả kiểm tra:</h2>
                    <div class="date-display">{{ $day }}/{{ $month }}/{{ $year }}</div>
                @endisset
            </div>
            
            @isset($errors)
                @if(count($errors) > 0)
                    <div class="result invalid">
                        <h3>❌ Ngày không hợp lệ!</h3>
                        <ul class="error-list">
                            @foreach($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <div class="result valid">
                        <h3>✅ Ngày hợp lệ!</h3>
                        <p>{{ $result }}</p>
                        @isset($isLeapYear)
                            @if($isLeapYear)
                                <p>🎉 Năm {{ $year }} là năm nhuận</p>
                            @endif
                        @endisset
                    </div>
                @endif
            @endisset
            
            <!-- Form nhập liệu -->
            <div class="input-form">
                <h3 style="text-align: center; margin-bottom: 20px;">Hoặc nhập ngày thủ công:</h3>
                <form action="/check-date" method="GET" onsubmit="return validateAndRedirect()">
                    <div class="form-group">
                        <div class="form-control">
                            <label for="day">Ngày (1-31):</label>
                            <input type="number" id="day" name="day" min="1" max="31" value="{{ $day ?? '15' }}" required>
                        </div>
                        <div class="form-control">
                            <label for="month">Tháng (1-12):</label>
                            <input type="number" id="month" name="month" min="1" max="12" value="{{ $month ?? '8' }}" required>
                        </div>
                        <div class="form-control">
                            <label for="year">Năm (4 chữ số):</label>
                            <input type="number" id="year" name="year" min="1000" max="9999" value="{{ $year ?? '2024' }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn submit-btn">🔍 Kiểm Tra Ngay</button>
                </form>
            </div>
            
            <!-- Ví dụ -->
            <div class="examples">
                <h3>Ví dụ kiểm tra:</h3>
                <div class="example-links">
                    <a href="/check-date/29/2/2024" class="example-link">29/2/2024 (nhuận)</a>
                    <a href="/check-date/31/4/2023" class="example-link">31/4/2023 (lỗi)</a>
                    <a href="/check-date/15/8/2024" class="example-link">15/8/2024 (hợp lệ)</a>
                    <a href="/check-date/32/1/2023" class="example-link">32/1/2023 (lỗi)</a>
                    <a href="/check-date/29/2/2023" class="example-link">29/2/2023 (lỗi)</a>
                </div>
            </div>
            
            <!-- Navigation -->
            <div class="navigation">
                <a href="/" class="btn">🏠 Trang chủ</a>
                <a href="/admin/dashboard" class="btn btn-admin">👑 Admin Dashboard</a>
                <a href="/admin/users" class="btn btn-admin">👥 Quản lý Users</a>
                <a href="/tong/10/20" class="btn">🧮 Tính tổng</a>
            </div>
        </div>
    </div>
    
    <script>
        function validateAndRedirect() {
            const day = document.getElementById('day').value;
            const month = document.getElementById('month').value;
            const year = document.getElementById('year').value;
            
            // Chuyển hướng đến route với params
            window.location.href = `/check-date/${day}/${month}/${year}`;
            return false; // Ngăn form submit mặc định
        }
        
        // Focus vào input đầu tiên
        document.addEventListener('DOMContentLoaded', function() {
            const dayInput = document.getElementById('day');
            if (dayInput) {
                dayInput.focus();
            }
        });
    </script>
</body>
</html>