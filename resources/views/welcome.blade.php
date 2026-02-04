<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #3490dc;
        }
        .contact-info {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background: #2779bd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📞 Trang Liên Hệ</h1>
        <p>Đây là trang liên hệ được tạo bằng Laravel Blade Template</p>
        
        <div class="contact-info">
            <h3>Thông tin liên hệ:</h3>
            <p><strong>Email:</strong> contact@example.com</p>
            <p><strong>SĐT:</strong> 0123 456 789</p>
            <p><strong>Địa chỉ:</strong> 123 Đường ABC, Quận 1, TP.HCM</p>
        </div>
        
        <h3>Gửi tin nhắn cho chúng tôi:</h3>
        <form>
            <div style="margin-bottom: 10px;">
                <label for="name">Họ tên:</label><br>
                <input type="text" id="name" style="width: 100%; padding: 8px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="email">Email:</label><br>
                <input type="email" id="email" style="width: 100%; padding: 8px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="message">Nội dung:</label><br>
                <textarea id="message" rows="4" style="width: 100%; padding: 8px;"></textarea>
            </div>
            <button type="submit" class="btn">Gửi tin nhắn</button>
        </form>
        
        <a href="/home" class="btn">← Về trang chủ</a>
        <a href="/about" class="btn">Về trang giới thiệu</a>
    </div>
</body>
</html>