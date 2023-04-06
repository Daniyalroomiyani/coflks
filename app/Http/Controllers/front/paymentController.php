<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\feed;
use App\Models\order;
use App\Models\payment as payments;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Payment\Facade\Payment;
use SoapFault;
use Exception;
use Illuminate\Support\Facades\Cookie;


class paymentController extends Controller
{
    public function pay(int $id)
    {


        try {
            $item = order::find($id);
//            var_dump( $item->total_price  );
//            dd( $item->total_price  );
            $invoice = new Invoice;
            $paymentID = md5(uniqid());
            $invoice->amount(($item->total_price));

//            $invoice->detail('زمان ' ,);
//            $product_id = $item->Product()->get()->toArray()[0]['id'];
            $data_pay = [
                'paid' => $invoice->getAmount(),
                'invoice_details' => [
                    'uuid' => $invoice->getUuid(),
                    'amount' => $invoice->getAmount(),
                    'transactionId' => $invoice->getTransactionId(),
                    'details' => $invoice->getDetails(),
                ],
                'payment_id' => $paymentID,
                'order_id' => $item->id,
            ];
            $pay = payments::create($data_pay);

//           dd($data_pay);


            $callbackUrl = route('shop.front.do.buy.result', [$item, 'payment_id' => $paymentID]);
            $payment = Payment::callbackUrl($callbackUrl);

            $payment->config('description', ' خرید  ');

            $payment->purchase($invoice, function ($driver, $transactionId) use ($pay) {
                $pay->transaction_id = $transactionId;
                $pay->save();

            });
//            dd('fg');


            return $payment->pay()->render();
        } catch (PurchaseFailedException|SoapFault $e) {
//            dd($e);
            $pay->transaction_result = [
                'message' => $e->getMessage(),
                'faultstring' => $e->faultstring,
            ];
            $pay->status = 'failed';
            $pay->save();
            $transaction = $pay;
//            dd($transaction->status);
            return view('FrontEnd.escape room.Reserve.Result', compact('transaction'));
//            dd($e);

//            return erorrPage
        }
    }


    public function result(Request $request, Order $item)
    {

//        dd($request->all());
        if ($request->Status == 'NOK') {
            $inside = 'خطا سیستم کد 01';

//            dd($request->all());
            //show error
            return redirect()->route('shop.front.checkout' )->withErrors('خطا در پرداخت لطفا مجددا تلاش کنید');

        }
        if (!$request->has('payment_id')) {
            $inside = 'خطا سیستم کد 01';

            return redirect()->route('shop.front.checkout' )->withErrors('خطا در پرداخت لطفا مجددا تلاش کنید');
            //show error
//            return redirect()->route('shop.front.checkout');

        }
        $transaction = payments::where('payment_id', $request->input('payment_id'))->first();
//        dd($transaction->status);
        if (empty($transaction)) {
            return redirect()->route('shop.front.checkout' )->withErrors('خطا در پرداخت لطفا مجددا تلاش کنید');
//            $inside = 'خطا سیستم کد 02';
//
//            return redirect()->route('shop.front.checkout');

            //error
            //
        }
        if ($transaction->status <> 'در انتظار پرداخت') {
            return redirect()->route('shop.front.checkout' )->withErrors('خطا در پرداخت لطفا مجددا تلاش کنید');
//            $inside = 'خطا سیستم کد 01';
//
//
//            return redirect()->route('shop.front.checkout');


            //erorr
        }
        if ($transaction->order_id <> $item->id) {
            //eror
            return redirect()->route('shop.front.checkout' )->withErrors('خطا در پرداخت لطفا مجددا تلاش کنید');
//            $inside = 'خطا سیستم کد 04';
//
//            return redirect()->route('shop.front.checkout');

        }


        try {

            $receipt = Payment::amount($item->total_price)->transactionId($request->Authority)->verify();
            $item->save();
            $transaction->transaction_result = [
                'referenceId' => $receipt->getReferenceId(),
                'date' => $receipt->getDate(),
                'details' => $receipt->details,
            ];

            $transaction->status = 'success';
            $item->status = 'process';

            $item->save();
            $transaction->save();
            Cookie::expire('coflksOrderid');

            // TODo Send Factor to user ....
            
            return view('front.shop.orders.Result', compact('transaction', 'item'));


        } catch (InvalidPaymentException|Exception $exception) {
            //error
//            dd($exception);
//                        echo $exception->getMessage();


//            dd($exception->getMessage());
            $transaction->status = 'failed';
            $transaction->transaction_result = [
                'message' => $exception->getMessage(),
                'code' => $exception->getCode()

            ];
//                $transaction->transaction_result= $exception;
//            $tt=[
//                'message'=>$exception->getMessage(),
//                  'code'=>$exception->getCode(),
//                ];
//            dd($transaction->transaction_result);
            $transaction->status = 'failed';
            $transaction->save();
//            $item->destroy();

//            $item->ostatus = 'cancel';
//            $item->payment_status = 'not_payed';
            $item->save();

//            Order::destroy($item->id);

//            dd($transaction->transaction_result);


//                dd($transaction->transaction_result);


//            return view('front.shop.orders.Result', compact('transaction', 'item'));
            return redirect()->route('shop.front.checkout' )->withErrors('خطا در تایید  پرداخت لطفا مجددا تلاش کنید');

//            echo $exception->getMessage();
        }
    }


}
