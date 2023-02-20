@extends('Admin.layout')

@section('content')

    <div class="page-title">

        <div class="title_right">

        </div>
    </div>

    <div class="row">
        {{--        orders--}}
{{--        <div class="col-md-12 col-sm-12 col-xs-12">--}}
{{--            <div class="x_panel">--}}
{{--                <div class="x_title">--}}
{{--                    <h2>سفارش های در انتظار--}}
{{--                    </h2>--}}

{{--                    <div class="clearfix"></div>--}}
{{--                </div>--}}
{{--                <div class="x_content">--}}
{{--                    @include('Admin.notifications')--}}
{{--                    @foreach($orders as $order)--}}

{{--                        <div class="modal fade bs-example-modal-sm{{$order->id}}" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--                            <div class="modal-dialog modal-sm">--}}
{{--                                <div class="modal-content">--}}

{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
{{--                                                aria-hidden="true">×</span>--}}
{{--                                        </button>--}}
{{--                                        <h4 class="modal-title" id="myModalLabel2">ارسال سفارش {{$order->full_name}}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <h4>{{$order->product->name}}</h4>--}}
{{--                                        <p>لطفا کد پیگیری مرسوله را وارد نمایید</p>--}}
{{--                                        <form class="form-horizontal form-label-left " action="{{route('confirm_tracing_ID_order' , $order->id)}}" method="post">--}}
{{--                                            {{ csrf_field()  }}--}}
{{--                                            <div class="item form-group">--}}
{{--                                                <div class="col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                    <input id="tracing_ID" class="form-control col-md-12 col-xs-12"--}}
{{--                                                           data-validate-length-range="6" data-validate-words="2"--}}
{{--                                                           name="tracing_ID"--}}
{{--                                                           value="{{ old('tracing_ID',isset($ritem) ? $ritem->tracing_ID: '') }}"--}}
{{--                                                           required="required" type="text">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="ln_solid"></div>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="col-md-7 col-md-offset-4">--}}
{{--                                                    <button id="send" type="submit" class="btn btn-success">تایید ارسال مرسوله</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    @endforeach--}}
{{--                    @if(isset($orders) && count($orders) > 0)--}}

{{--                        <table id="datatable" class="table table-striped table-bordered text-center">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th class="text-center">سفارش دهنده</th>--}}
{{--                                <th class="text-center">نام محصول</th>--}}
{{--                                <th class="text-center">وضعیت سفارش</th>--}}
{{--                                <th class="text-center">تاریخ ثبت</th>--}}
{{--                                <th class="text-center">تعداد</th>--}}
{{--                                <th class="text-center">عملیات</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}


{{--                            <tbody>--}}
{{--                            @foreach($orders as $order)--}}


{{--                                <tr>--}}

{{--                                    <td>{{$order->full_name}}</td>--}}
{{--                                    <td>{{$order->Product()->get()->toArray()[0]['name']}}</td>--}}
{{--                                    <td>{{$order->order_status}}</td>--}}
{{--                                    <td>{{$order->created_at}}</td>--}}
{{--                                    <td>{{$order->count}}</td>--}}
{{--                                    <td>--}}
{{--                                        <a title="اطلاعات بیشتر " href="{{route('check_Order' , $order->id)}}"><i--}}
{{--                                                class="glyphicon glyphicon-option-horizontal"></i></a>--}}
{{--                                        <a title="دریافت فاکتور " href="{{route('get_factor_order' , $order->id)}}"><i--}}
{{--                                                class="fa fa-file-pdf-o"></i></a>--}}
{{--                                        <a title="ثبت ارسال " data-toggle="modal"--}}
{{--                                           data-target=".bs-example-modal-sm{{$order->id}}"><i--}}
{{--                                                class="glyphicon glyphicon-send"></i></a>--}}

{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    @else--}}
{{--                        <h2>اطلاعاتی یافت نشد</h2>--}}
{{--                    @endif--}}




{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        --}}{{--        Reserve--}}
{{--        <div class="col-md-12 col-sm-12 col-xs-12">--}}
{{--            <div class="x_panel">--}}
{{--                <div class="x_title">--}}
{{--                    <h2>لیست رزرو های امروز--}}
{{--                    </h2>--}}

{{--                    <div class="clearfix"></div>--}}
{{--                </div>--}}
{{--                <div class="x_content">--}}
{{--                    @if(isset($items) && count($items) > 0)--}}

{{--                        <table id="datatable" class="table table-striped table-bordered text-center">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th class="text-center">رزرو کننده</th>--}}
{{--                                <th class="text-center">سناریو</th>--}}
{{--                                <th class="text-center">تاریخ</th>--}}
{{--                                <th class="text-center">ساعت شروع</th>--}}
{{--                                <th class="text-center">تلفن</th>--}}
{{--                                <th class="text-center">پرداخت</th>--}}
{{--                                <th class="text-center">عملیات</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}


{{--                            <tbody>--}}
{{--                            @foreach($items as $item)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$item->Fname . " ". $item->Lname}}</td>--}}
{{--                                    <td>{{$item->Escape_room()->get()->toArray()[0]['name']}}</td>--}}
{{--                                    <td>{{verta($item->day)->format('Y-n-j')}}</td>--}}
{{--                                    <td>{{$item->Escape_room()->get()->toArray()[0]['reserve_section'][$item->section]}}</td>--}}
{{--                                    <td>{{$item->phone}}</td>--}}
{{--                                    <td>{{$item->payment_status}}</td>--}}
{{--                                    <td>--}}
{{--                                        <a title="کسنل " href="{{route('cancel_reserve' , $item->id)}}"><i--}}
{{--                                                class="glyphicon glyphicon-trash"></i></a>--}}
{{--                                        <a title="اطلاعات بیشتر " href="{{route('show_reserve' , $item->id)}}"><i--}}
{{--                                                class="glyphicon glyphicon-option-horizontal"></i></a>--}}

{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    @else--}}
{{--                        <h2>اطلاعاتی یافت نشد</h2>--}}
{{--                    @endif--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    </div>
@endsection
