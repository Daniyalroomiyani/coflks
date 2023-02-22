<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category_for_products;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $items = Product::all();

        return view('Admin.Shop.Products.list', compact('items'));
    }

    public function add()
    {
        $cats = category_for_products::all();
        return view('Admin.Shop.Products.form', compact('cats'));
    }

    public function save(Request $request)
    {

//dd($request->all());
        $this->validate($request, [
            'name' => 'required ',
            'price' => 'required|numeric',
            'count' => 'required|numeric',
            'caption' => 'required ',
            'cat_id' => 'required '
        ],
            [
                'name.required' => 'ورود نام الزامی است.',
                'caption.required' => 'ورود توضیحات الزامی است.',
                'price.required' => 'ورود قیمت الزامی است.',
                'price.numeric' => 'قیمت را صحیح وارد کنید.',
                'count.numeric' => 'تعداد را صحیح وارد کنید.',
                'count.required' => 'ورود تعداد موجود الزامی است.',
                'cat_id.required' => 'ورود دسته بندی  الزامی است.',
            ]);
        $data = [
            'name' => $request->input('name'),
            'caption' => $request->input('caption'),
            'count' => $request->input('count'),
            'price' => $request->input('price'),
            'robusta' => $request->input('robusta') == 'NaN' ? 0 : $request->input('robusta'),
            'arabica' => $request->input('arabica') == 'NaN' ? 0 : $request->input('arabica'),
            'cat_id' => $request->input('cat_id'),
            'weight' => $request->input('weight'),

        ];


//        dd($data);
        if ($request->files->count() > 0) {

            if ($request->has('pic')) {
                $data['pic'] = $request->file('pic')->getClientOriginalName();
                $request->file('pic')->move(storage_path('app/public/images/shop/product'), $request->file('pic')->getClientOriginalName());
            }

        }


        $newdata = Product::create($data);

        if ($newdata && $newdata instanceof Product) {


            return redirect()->route('list_Product')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
        }
    }

    public function edit(int $id)
    {
        $item = Product::find($id);

        $cats = category_for_products::all();

        $selected = $item->category()->get()[0];
        return view('Admin.Shop.Products.form', compact('item', 'cats', 'selected'));
    }

    public function edit_save(Request $request, int $id)
    {
        $item = Product::find($id);


        if ($request->files->count() > 0) {

            if ($request->has('pic')) {
                $item->pic = $request->file('pic')->getClientOriginalName();
                $request->file('pic')->move(storage_path('app/public/images/shop/product'), $request->file('pic')->getClientOriginalName());
            }


            $item->save();
            return redirect()->route('list_Product')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
        }
        $this->validate($request, [
            'name' => 'required ',
            'price' => 'required|numeric',
            'count' => 'required|numeric',
            'caption' => 'required ',
            'cat_id' => 'required '
        ],
            [
                'name.required' => 'ورود نام الزامی است.',
                'caption.required' => 'ورود توضیحات الزامی است.',
                'price.required' => 'ورود قیمت الزامی است.',
                'price.numeric' => 'قیمت را صحیح وارد کنید.',
                'count.numeric' => 'تعداد را صحیح وارد کنید.',
                'count.required' => 'ورود تعداد موجود الزامی است.',
                'cat_id.required' => 'ورود دسته بندی  الزامی است.',
            ]);


        $item->name = $request->input('name');
        $item->caption = $request->input('caption');
        $item->count = $request->input('count');
        $item->price = $request->input('price');
        $item->robusta = $request->input('robusta');
        $item->arabica = $request->input('arabica');
        $item->cat_id = $request->input('cat_id');
        $item->weight = intval($request->input('weight'));
        $item->save();
        return redirect()->route('list_Product')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }

    public function del(int $id)
    {
        $item = Product::destroy($id);
//        $cat_ids[]= $item->category()->get()->toArray();
//        dd($cat_ids[0]);

        return redirect()->route('list_Product')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }
}
