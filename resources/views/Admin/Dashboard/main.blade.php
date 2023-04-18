@extends('Admin.layout')

@section('content')

    <div class="page-title">

        <div class="title_right">

        </div>
    </div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>سفارش های در انتظار
                    </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('Admin.notifications')
                    @foreach($orders as $order)

                        <div class="modal fade bs-example-modal-sm{{$order->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel2">ارسال سفارش {{$order->fullName}}</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form class="form-horizontal form-label-left " action="{{route('confirm_tracing_ID_order' , $order->id)}}" method="post">
                                            {{ csrf_field()  }}
                                            <div class="item form-group">

                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-7 col-md-offset-4">
                                                    <button id="send" type="submit" class="btn btn-success">تایید ارسال </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>


                    @endforeach
                    @if(isset($orders) && count($orders) > 0)

                        <table id="datatable" class="table table-striped table-bordered text-center">
                            <thead>
                            <tr>
                                <th class="text-center">سفارش دهنده</th>
                                <th class="text-center">وضعیت سفارش</th>
                                <th class="text-center">تاریخ ثبت</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($orders as $order)


                                <tr>

                                    <td>{{$order->fullName}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>
                                        <a title="اطلاعات بیشتر " href="{{route('check_Order' , $order->id)}}"><i
                                                class="glyphicon glyphicon-option-horizontal"></i></a>
                                        <a title="دریافت فاکتور " href="{{route('get_factor_order' , $order->id)}}"><i
                                                class="fa fa-file-pdf-o"></i></a>
                                        <a title="ثبت ارسال " data-toggle="modal"
                                           data-target=".bs-example-modal-sm{{$order->id}}"><i
                                                class="glyphicon glyphicon-send"></i></a>

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>اطلاعاتی یافت نشد</h2>
                    @endif




                </div>
            </div>
        </div>



        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>نظرات تایید نشده
                    </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if(isset($items) && count($items) > 0)

                        <table id="datatable" class="table table-striped table-bordered text-center">
                            <thead >
                            <tr>
                                <th class="text-center">نام </th>
                                <th class="text-center">وضعیت</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>


                            <tbody>


                            @foreach($items as $item)

                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        @if($item->seen)
                                            تایید شده
                                        @else
                                            تایید نشده
                                        @endif
                                    </td>
                                    <td>

                                        <a href="{{route('see_comment' , $item->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>

                                    </td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    @else
                        <h2>اطلاعاتی یافت نشد</h2>
                    @endif


                </div>
            </div>
        </div>


    </div>
@endsection
