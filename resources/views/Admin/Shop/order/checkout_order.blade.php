@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include("Admin.error")
                        <table id="datatable-buttons" class="table table-striped table-bordered   text-center">

                            <tr>
                                <th>وضعیت سفارش </th>
                                <td>{{$order->order_status}}</td>
                            </tr>
                                @if($order->order_status == 'ارسال شده')

                                <tr>
                                    <th>کدرهگیری </th>
                                    <td>{{$order->tracing_ID}}</td>
                                </tr>
                            @endif
                            <tr>
                                <th>سفارش به نام</th>
                                <td>{{$order->full_name}}</td>
                            </tr>
                            <tr>
                                <th>تلفن</th>
                                <td>{{$order->phone}}</td>
                            </tr>
                            <tr>
                                <th>آدرس</th>
                                <td>{{$order->address}}</td>
                            </tr>
                            <tr>
                                <th>کد پستی</th>
                                <td>{{$order->post_ID}}</td>
                            </tr>
                            <tr>
                                <th>قیمت کل</th>
                                <td>{{$order->total_price}}</td>
                            </tr>
                            <tr>
                                <th>تعداد</th>
                                <td>{{$order->count}}</td>
                            </tr>
                            <tr>
                                <th>ثبت شده توسط </th>
                                <td>{{$order->order_by}}</td>
                            </tr>

                            <tr>
                                <th>نام محصول</th>
                                <td>{{$order->product->name}}</td>
                            </tr>

                            <tr>
                                <th>روش پرداخت </th>
                                <td>{{$order->payment_method}}</td>
                            </tr>

                            <tr>
                                <th>وضعیت پرداخت</th>
                                <td>{{$order->payment_status}}</td>
                            </tr>


                            <tr>
                                <th>توضیحات اضافه</th>
                                <td>{{$order->caption}}</td>
                            </tr>
                            <tr>
                                <th>تاریخ ثبت سفارش</th>
                                <td>{{$order->created_at}}</td>
                            </tr>

                        </table>

                        @switch($order->order_status)
                            @case( 'در انتظار پرداخت')
                            <div class="pull-left">
                                <a class="btn  btn-app " href="{{route('final_save_order', $order->id)}}">
                                    <i class="glyphicon glyphicon-ok"></i>تایید پرداخت و ثبت نهایی
                                </a>
                            </div>
                            @break

                            @case('در حال پردازش')

                            <div class="pull-left">
                                <a class="btn  btn-app " data-toggle="modal"
                                   data-target=".bs-example-modal-sm2" >
                                    <i class="glyphicon glyphicon-ok"></i>  ارسال سفارش
                                </a>
                            </div>
                            <div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel2">ارسال سفارش {{$order->full_name}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h4>{{$order->product->name}}</h4>
                                            <p>لطفا کد پیگیری مرسوله را وارد نمایید</p>
                                            <form class="form-horizontal form-label-left " action="" method="post">
                                                {{ csrf_field()  }}
                                                <div class="item form-group">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input id="tracing_ID" class="form-control col-md-12 col-xs-12"
                                                               data-validate-length-range="6" data-validate-words="2"
                                                               name="tracing_ID"
                                                               value="{{ old('tracing_ID',isset($ritem) ? $ritem->tracing_ID: '') }}"
                                                               required="required" type="text">
                                                    </div>
                                                </div>
                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-7 col-md-offset-4">
                                                        <button id="send" type="submit" class="btn btn-success">تایید ارسال مرسوله</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @break



                        @endswitch  
                        <div class="pull-left">
                            <a class="btn  btn-app " data-toggle="modal"
                               data-target=".bs-example-modal-sm" >
                                <i class="glyphicon glyphicon-trash"></i>لغو سفارش
                            </a>
                        </div>


                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel2">شما در حال لغو یک سفارش هستید</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h4>لغو سفاش  {{$order->full_name}}</h4>
                                        <h4>{{$order->product->name}}</h4>
                                        <p>آیا از لغو سفارش اطمینان دارید؟</p>
                                        <p style="color: red" class="alert">این کار قابل بازگشت نیست</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                        <a type="button" class="btn btn-warning" href="{{route('del_Order' , $order->id)}}">لفو سفارش</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="pull-left">
                            <a class="btn  btn-app " href="{{route('get_factor_order', $order->id)}}">
                                <i class="fa fa-file-pdf-o"></i>دریافت فاکتور
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
