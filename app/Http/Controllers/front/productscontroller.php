<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\category_for_products;
use App\Models\Config;
use Illuminate\Http\Request;

class productscontroller extends Controller
{
    public function index()
    {
        $config = Config::all();

        if ($config == null || count($config) == 0)
            $config = Config::create([
                'about' => '',
                'phone' => '',
                'Email' => '',
                'instagram' => '',
                'telegram' => '',
                'address' => '',
                'pics' => [
                    'up' => '',
                    'down' => '',
                    'backG' => '',
                    'icon' => '',
                    'step1' => '',
                    'step2' => '',
                    'step3' => '',
                    'step4' => ''
                ],
            ]);

        $item = $config[0];

        $cats = category_for_products::all();

//        dd($cats[0]->products()->get());
        return view('front.shop.productList' , compact('item' ,'cats'));
    }

    public function show_post(int $id)
    {
        return view('front.shop.item');
    }
}
