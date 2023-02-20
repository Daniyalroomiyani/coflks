<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\Config;
use App\Models\gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
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
//dd($item->pics);
        $pictures = gallery::all();
        $comments = comment::all();
        return view('front.mainPage' , compact('item' , 'pictures' , 'comments'));
    }
}
