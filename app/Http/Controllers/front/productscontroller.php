<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\category_for_products;
use App\Models\Config;
use App\Models\product;
use App\utility\RenderData;
use Illuminate\Http\Request;

class productscontroller extends Controller
{
    public function index()
    {
        $item = RenderData::getMainData();
        ;

        $cats = category_for_products::all();

//        dd($cats[0]->products()->get());
        return view('front.shop.productList', compact('item', 'cats'));
    }

    public function show_post(int $id)
    {
//       dd( request()->cookie());
        if (!isset($id) & $id == null) {
            return redirect()->back();
        }
        $product = product::find($id);
        $simProducts = $product->Category()->get()[0]->products()->get();
//        dd($simProducts);
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

//dd($product);
        return view('front.shop.item', compact('item', 'cats' , 'simProducts' ,'product'));
    }
}
