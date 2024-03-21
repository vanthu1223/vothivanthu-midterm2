<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $title = "Shop bán hàng";
        $items = [
            [
                'name' => 'Nordic Chair',
                'price' => '$50.00',
                'img' => 'https://themewagon.github.io/furni/images/product-3.png'
            ],
            [
                'name' => 'Nordic Chair',
                'price' => '$50.00',
                'img' => 'https://themewagon.github.io/furni/images/product-1.png'
            ],
            [
                'name' => 'Nordic Chair',
                'price' => '$50.00',
                'img' => 'https://themewagon.github.io/furni/images/product-2.png'
            ],
            [
                'name' => 'Nordic Chair',
                'price' => '$50.00',
                'img' => 'https://themewagon.github.io/furni/images/product-3.png'
            ],
        ];
        return view('layouts.shop',['items' => $items],compact('title'));
    }
}
