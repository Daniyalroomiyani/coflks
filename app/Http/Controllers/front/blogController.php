<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\feed;
use Illuminate\Http\Request;

class blogController extends Controller
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
        $feeds=feed::all();
        return view('front.blog.list' , compact('item' , 'feeds'));
    }
}
