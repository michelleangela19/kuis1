<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
        $itemInfo = [
            ['image' => 'pisang.jpg', 'name' => 'pisang', 'desc' => 'buah warna kuning', 'status' => 'R', 'price' => '5000'],
            ['image' => 'pisang raja.jpg', 'name' => 'pisang raja', 'desc' => 'buah warna kuning tapi raja', 'status' => 'SR', 'price' => '50000'],
            ['image' => 'pisang tanduk.jpg', 'name' => 'pisang tanduk', 'desc' => 'buah warna kuning tapi tanduk', 'status' => 'SSR', 'price' => '500000'],
        ];
        return view('welcome', compact('itemInfo'));
    }
}
