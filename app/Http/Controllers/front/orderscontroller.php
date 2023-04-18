<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\product;
use App\utility\CookieHelper;
use App\utility\RenderData;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class orderscontroller extends Controller
{
    public function add(int $id, Request $request)
    {
        $order_id = Cookie::get('coflksOrderid');

//        dd($request->cookie());
        if ($order_id == null) {
            $order = order::create([]);
            $order->products()->syncWithoutDetaching([$id]);
//            cookie('coflks.Order.id', $order->id, 1880);
            return redirect()->route('Product.front.index')->cookie('coflksOrderid', $order->id, 5225600);
//            return redirect()->route('Product.front.index')->cookie()->for('coflks.Order.id', $order->id, 1880);
//            dd($order->products()->get());
        } else {
            $order = order::find($order_id);
            $order->products()->syncWithoutDetaching([$id]);
//            dd($order->products()->get());

            return redirect()->route('Product.front.index')->cookie('coflksOrderid', $order->id, 5225600);

        }
    }

    public function checkout(Request $request)
    {
        $order_id = Cookie::get('coflksOrderid');


        if ($order_id == null) {
            return redirect()->route('Product.front.index');
        } else {
            $order = order::find($order_id);
            $item = RenderData::getMainData();

            $productList = $order->products()->get();
            $total = 0;
            foreach ($productList as $p) {
                $total += $p->price;
            }
            $order->total_price = $total;
            $order->save();
            return view('front.shop.checkout', compact('item', 'productList', 'order'));

        }
    }

    public function confirm(Request $request)
    {
//        dd($request->fullName);
        $this->validate($request, [
            'fullName' => 'required ',
            'address' => 'required ',
            'phone' => 'required | digits:11 ',

        ], [
            'fullName.required' => 'ورود نام الزامی است.',
            'phone.required' => 'وارد کردن تلفن الزامی است.',
            'address.required' => 'وارد کردن آدرس الزامی است.',
            'phone.digits' => 'تلفن را  صحیح وارد کنید.',

        ]);
        $order_id = Cookie::get('coflksOrderid');
        if ($order_id == null) {
            return redirect()->route('Product.front.index');
        } else {
            $order = order::find($order_id);
            $order->fullname= $request->fullName;
            $order->phone= $request->phone;
            $order->address= $request->address;
            $order->caption= $request->caption;
            $order->save();

            return redirect()->route('pay' , $order->id);


        }
    }

    public function del(int $id, Request $request)
    {

        $order_id = Cookie::get('coflksOrderid');
        if ($order_id == null) {
            return redirect()->route('Product.front.index');
        } else {
            $order = order::find($order_id);
            $order->products()->detach([$id]);
            $order->save();
            return redirect()->route('shop.front.checkout');

        }
    }

}
