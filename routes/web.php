<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Bài 2 - Yêu cầu 1: Route /home
Route::get('/home', function () {
    return 'Chào mừng đến với Laravel';
});

// Bài 2 - Yêu cầu 2: Route /about
Route::get('/about', function () {
    return 'Họ tên: Nguyễn Văn A<br>Lớp: CTXXX<br>MSSV: 12345678';
});

// Bài 2 - Yêu cầu 3: Route /contact
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('welcome');
});

// Bài 2 - Đã làm
Route::get('/home', function () {
    return 'Chào mừng đến với Laravel';
});

Route::get('/about', function () {
    return 'Họ tên: Nguyễn Văn A<br>Lớp: CTXXX<br>MSSV: 12345678';
});

Route::get('/contact', function () {
    return view('contact');
});

// Bài 3 - Yêu cầu 1: Route tính tổng
Route::get('/tong/{a}/{b}', function ($a, $b) {
    $tong = $a + $b;
    return view('tong', [
        'a' => $a,
        'b' => $b,
        'tong' => $tong
    ]);
});

Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return view('sinhvien', [
        'name' => $name,
        'age' => $age
    ]);
});
// =========== BÀI 4 ===========

// Bài 4 - Yêu cầu 1: Route Group Admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Chào mừng Admin';
    });
    
    Route::get('/users', function () {
        return 'Danh sách người dùng';
    });
});

// Bài 4 - Yêu cầu 2: Route kiểm tra ngày tháng với validation
Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    // Kiểm tra validation
    $errors = [];
    $isValid = true;
    
    // Kiểm tra ngày (1-31)
    if ($day < 1 || $day > 31) {
        $errors[] = "Ngày phải từ 1 đến 31";
        $isValid = false;
    }
    
    // Kiểm tra tháng (1-12)
    if ($month < 1 || $month > 12) {
        $errors[] = "Tháng phải từ 1 đến 12";
        $isValid = false;
    }
    
    // Kiểm tra năm (4 chữ số)
    if (!preg_match('/^\d{4}$/', $year)) {
        $errors[] = "Năm phải có 4 chữ số";
        $isValid = false;
    }
    
    // Nếu các tham số cơ bản hợp lệ, kiểm tra tiếp
    if ($isValid) {
        // Kiểm tra ngày hợp lệ theo tháng
        $daysInMonth = [
            1 => 31, 2 => 29, 3 => 31, 4 => 30, 5 => 31, 6 => 30,
            7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31
        ];
        
        // Kiểm tra năm nhuận
        $isLeapYear = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
        $maxDaysInFebruary = $isLeapYear ? 29 : 28;
        $daysInMonth[2] = $maxDaysInFebruary;
        
        if ($day > $daysInMonth[$month]) {
            $errors[] = "Tháng $month/$year chỉ có tối đa {$daysInMonth[$month]} ngày";
            $isValid = false;
        }
    }
    
    // Chuẩn bị dữ liệu cho view
    $data = [
        'day' => $day,
        'month' => $month,
        'year' => $year,
        'errors' => $errors,
        'isValid' => $isValid,
        'isLeapYear' => $isLeapYear ?? false
    ];
    
    // Nếu hợp lệ, thêm thông tin ngày trong tuần
    if ($isValid && empty($errors)) {
        try {
            $date = DateTime::createFromFormat('d/m/Y', "$day/$month/$year");
            $dayOfWeek = $date->format('l');
            
            $dayNames = [
                'Monday' => 'Thứ Hai',
                'Tuesday' => 'Thứ Ba',
                'Wednesday' => 'Thứ Tư',
                'Thursday' => 'Thứ Năm',
                'Friday' => 'Thứ Sáu',
                'Saturday' => 'Thứ Bảy',
                'Sunday' => 'Chủ Nhật'
            ];
            
            $dayInVietnamese = $dayNames[$dayOfWeek] ?? $dayOfWeek;
            $data['result'] = "Đây là: $dayInVietnamese";
            $data['dayOfWeek'] = $dayInVietnamese;
        } catch (Exception $e) {
            $data['errors'][] = "Lỗi khi xử lý ngày tháng: " . $e->getMessage();
            $data['isValid'] = false;
        }
    }
    
    return view('checkdate', $data);
})->where([
    'day' => '[0-9]+',
    'month' => '[0-9]+',
    'year' => '[0-9]{4}'
]);