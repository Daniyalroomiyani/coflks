<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $orders = order::where('status', 'process')->get();
        $items = comment::where('seen', 0)->get();
        return view("Admin.Dashboard.main", compact('items', 'orders'));
    }
}
