<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nguyen Van A',
            'age' => 20,
            'school' => 'Đại học CNTT'
        ];

        return view('welcome', compact('data'));
        // Hoặc truyền thẳng: return view('welcome', $data);
    }
    public function multiplication($n)
{
    if (!is_numeric($n)) {
        $error = "Giá trị n không hợp lệ. Vui lòng nhập số.";
        return view('multiplication', compact('error'));
    }

    $n = (int)$n;
    return view('multiplication', compact('n'));
}
}
