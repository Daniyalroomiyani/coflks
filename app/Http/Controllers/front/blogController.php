<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\feed;
use App\utility\RenderData;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        $item = RenderData::getMainData();

        $feeds=feed::all();
        return view('front.blog.list' , compact('item' , 'feeds'));
    }
}
