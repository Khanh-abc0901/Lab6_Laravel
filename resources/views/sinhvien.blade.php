<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Sinh Viên</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .student-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            width: 100%;
            text-align: center;
        }
        .avatar {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border-radius: 50%;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            color: white;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        .info {
            text-align: left;
            margin: 30px 0;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
        }
        .info-item {
            margin: 15px 0;
            font-size: 18px;
        }
        .label {
            font-weight: bold;
            color: #f5576c;
            display: inline-block;
            width: 120px;
        }
        .warning {
            background: #fff3cd;
            color: #856404;
            padding: 10px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 14px;
        }
        .btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }
        .btn {
            padding: 12px 30px;
            background: #f5576c;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s;
        }
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .btn-secondary {
            background: #6c757d;
        }
        .examples {
            margin-top: 30px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="student-card">
        <div class="avatar">👨‍🎓</div>
        
        @isset($name)
        <h1>{{ $name }}</h1>
        
        <div class="info">
            <div class="info-item">
                <span class="label">Tên:</span> {{ $name }}
            </div>
            <div class="info-item">
                <span class="label">Tuổi:</span> {{ $age }} tuổi
            </div>
            <div class="info-item">
                <span class="label">Trạng thái:</span>
                @if($age < 18)
                    <span style="color: #dc3545;">Vị thành niên</span>
                @elseif($age >= 18 && $age <= 25)
                    <span style="color: #28a745;">Sinh viên</span>
                @else
                    <span style="color: #007bff;">Đã tốt nghiệp</span>
                @endif
            </div>
            <div class="info-item">
                <span class="label">Năm sinh:</span> {{ date('Y') - $age }}
            </div>
        </div>
        
        @if(!request()->has('age'))
        <div class="warning">
            ⓘ Tuổi mặc định là 20. Để thay đổi, hãy thêm tuổi vào URL: /sinh-vien/{{ $name }}/tuổi
        </div>
        @endif
        @else
        <div class="warning">
            ⓘ Vui lòng nhập tên sinh viên vào URL: /sinh-vien/tên-của-bạn
        </div>
        @endisset
        
        <div class="examples">
            <p><strong>Ví dụ:</strong> 
            <a href="/sinh-vien/Nguyen Van A">/sinh-vien/Nguyen Van A</a> | 
            <a href="/sinh-vien/Tran Thi B/22">/sinh-vien/Tran Thi B/22</a> | 
            <a href="/sinh-vien/Le Van C/19">/sinh-vien/Le Van C/19</a>
            </p>
        </div>
        
        <div class="btn-group">
            <a href="/" class="btn">🏠 Trang chủ</a>
            <a href="/tong/10/20" class="btn btn-secondary">🧮 Tính tổng</a>
        </div>
    </div>
</body>
</html>