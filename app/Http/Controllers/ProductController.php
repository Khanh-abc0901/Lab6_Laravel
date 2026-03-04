<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = [
            ['name' => 'iPhone 15', 'price' => 25000000],
            ['name' => 'Tai nghe', 'price' => 500000],
            ['name' => 'Laptop Gaming', 'price' => 32000000],
            ['name' => 'Bàn phím', 'price' => 900000],
        ];

        return view('products', compact('products'));
    }
}