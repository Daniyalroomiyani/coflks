<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category_for_products;
use Illuminate\Http\Request;

class category_for_productsController extends Controller
{
    public function index()
    {
        $items = category_for_products::all();
        return view('Admin.Shop.Products.category.list' , compact('items'));
    }

    public function add()
    {
        return view('Admin.Shop.Products.category.form');
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

        $newdata =category_for_products::create($data);
        if ($newdata && $newdata instanceof category_for_products)
            return redirect()->route('list_category_for_products')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }

    public function edit(int $id)
    {
        $item = category_for_products::find($id);
        return view('Admin.Shop.Products.category.form ' , compact('item'));
    }

    public function edit_save(Request $request , int $id)
    {
        $this->validate($request ,[
            'name'=>'required '
        ] ,
            [
                'name.required' => 'ورود عنوان الزامی است.',

            ]);

        $item= category_for_products::find($id);
        $item->name = $request->input('name');

        $item->save();
        return redirect()->route('list_category_for_products')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }
    public function del( int $id)
    {
        category_for_products::destroy($id);
        return redirect()->route('list_category_for_products')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }
}
