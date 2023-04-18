<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\product;
use niklasravnsborg\LaravelPdf\Facades\Pdf;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $items = order::all();
        return view('Admin.Shop.order.list', compact('items'));
    }


    public function final(int $id)
    {
        $order = Order::find($id);
        $order->payment_status = 'payed';
        $order->order_status = 'process';
        $order->save();
        $product = product::find($order->product->id);
        $product->count -= $order->count;
        $product->save();
        return redirect()->route('list_Order')->with(session()->flash('success', 'ثبت نهایی سفارش با موفقیت انجام شد.'));

    }


    public function del(int $id)
    {
        $order = Order::find($id);
        $order->status = 'cancel';
        $order->save();
        return redirect()->route('list_Order')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));

    }


    public function check(int $id)
    {


        $order = Order::find($id);

        return view('Admin.Shop.order.checkout_order', compact('order'));


    }

    public function get_factor(int $id)
    {
        $order = Order::find($id);
        $transaction = $order->payments()->get()[0];



        $pdf = Pdf::loadView('Admin.Shop.order.pdf', compact('transaction' , 'order'));
        return $pdf->stream('report.pdf');
    }

    public function confirm(Request $request, int $id)
    {
        $order = Order::find($id);
//        dd($request->all());
        $order->status = 'send';
        $order->save();
        return redirect()->back()->with(session()->flash('success_order', 'ثبت ارسال سفارش با موفقیت انجام شد.'));


    }
}
