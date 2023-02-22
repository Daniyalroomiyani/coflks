<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category_for_feed;
use Illuminate\Http\Request;

class CategoryForFeedcontroller extends Controller
{
    public function index()
    {
        $items = category_for_feed::all();
        return view('Admin.categoryFeed.list' , compact('items'));
    }

    public function add()
    {
        return view('Admin.categoryFeed.form');
    }

    public function save(Request $request)
    {
        $this->validate($request ,[
            'name'=>'required '
        ] ,
            [
                'name.required' => 'ورود عنوان الزامی است.'
            ]);
        $data=[
            'name'=>$request->input('name'),
        ];

        $newdata =category_for_feed::create($data);
        if ($newdata && $newdata instanceof category_for_feed)
            return redirect()->route('list_CategoryFeed')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }

    public function edit(int $id)
    {
        $item = category_for_feed::find($id);
        return view('Admin.categoryFeed.form ' , compact('item'));
    }

    public function edit_save(Request $request , int $id)
    {
        $this->validate($request ,[
            'name'=>'required '
        ] ,
            [
                'name.required' => 'ورود عنوان الزامی است.',

            ]);

        $item= category_for_feed::find($id);
        $item->name = $request->input('name');


        $item->save();
        return redirect()->route('list_CategoryFeed')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }
    public function del( int $id)
    {
        category_for_feed::destroy($id);
        return redirect()->route('list_CategoryFeed')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }
}
