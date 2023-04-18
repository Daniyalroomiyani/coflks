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
                                <th>وضعیت سفارش</th>
                                <td>{{$order->status}}</td>
                            </tr>

                            <tr>
                                <th>سفارش به نام</th>
                                <td>{{$order->fullName}}</td>
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
                                <th>قیمت کل</th>
                                <td>{{$order->total_price}}</td>
                            </tr>


                            <tr>
                                <th>وضعیت پرداخت</th>
                                <td>{{$order->payments()->get()[0]->status}}</td>
                            </tr>


                            <tr>
                                <th>توضیحات اضافه</th>
                                <td>{{$order->caption}}</td>
                            </tr>
                            <tr>
                                <th>تاریخ ثبت سفارش</th>
                                <td>{{$order->created_at}}</td>
                            </tr>
                            <tr>
                                <th>اقلام سفارش</th>
                                <td>                                @foreach($order->products()->get() as $pr)

                                        {{$pr->name}} {{$pr->weight}}  - کد {{$pr->id }}
                                        <br>
                                    @endforeach
                                </td>

                            </tr>

                        </table>

                        @switch($order->    status)
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
                                   data-target=".bs-example-modal-sm2">
                                    <i class="glyphicon glyphicon-ok"></i> ارسال سفارش
                                </a>
                            </div>
                            <div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel2">ارسال
                                                سفارش {{$order->fullName}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal form-label-left " action="" method="post">
                                                {{ csrf_field()  }}

                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-7 col-md-offset-4">
                                                        <button id="send" type="submit" class="btn btn-success">تایید
                                                            ارسال
                                                        </button>
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
                               data-target=".bs-example-modal-sm">
                                <i class="glyphicon glyphicon-trash"></i>لغو سفارش
                            </a>
                        </div>


                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span
                                                aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel2">شما در حال لغو یک سفارش هستید</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h4>لغو سفاش {{$order->fullName}}</h4>
                                        <p>آیا از لغو سفارش اطمینان دارید؟</p>
                                        <p style="color: red" class="alert">این کار قابل بازگشت نیست</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                        <a type="button" class="btn btn-warning"
                                           href="{{route('del_Order' , $order->id)}}">لفو سفارش</a>
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
