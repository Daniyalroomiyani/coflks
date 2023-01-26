<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productscontroller extends Controller
{
    public function index()
    {
        return view('front.shop.productList');
    }

    public function show_post(int $id)
    {
        return view('front.shop.item');
    }
}
