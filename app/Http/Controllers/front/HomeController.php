<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\Config;
use App\Models\gallery;
use App\Models\order;
use App\Models\product;
use App\utility\RenderData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
//        dd();
      $item = RenderData::getMainData();
//dd($item->pics);
        $pictures = gallery::all();
        $comments = comment::all();
        $products =product::all();
        return view('front.mainPage' , compact('item' , 'pictures' , 'comments' ,'products'));
    }
}
