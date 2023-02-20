<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function index()
    {
        $items = comment::all();
        return view('Admin.comments.list' , compact('items'));
    }

    public function see(  int $id)
    {
        $item = comment::find($id);
        return view('Admin.comments.show_item' , compact('item'));
    }

    public function confirm(int $id)
    {
        $item = comment::find($id);
        $item->seen = true;
        $item->save();
        return redirect()->route('list_comment')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));


    }
}
