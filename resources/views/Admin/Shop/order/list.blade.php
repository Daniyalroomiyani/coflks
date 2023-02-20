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
                    <h2>لیست سفارش ها
                    </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('Admin.notifications')
                    @if(isset($items) && count($items) > 0)

                        <table id="datatable" class="table table-striped table-bordered text-center">
                            <thead >
                            <tr>
                                <th class="text-center">سفارش دهنده</th>
                                <th class="text-center">نام محصول</th>
                                <th class="text-center">وضعیت سفارش</th>
                                <th class="text-center">تاریخ ثبت</th>
                                <th class="text-center">تعداد</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->Product()->get()->toArray()[0]['name']}}</td>
                                    <td>{{$item->order_status}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->count}}</td>
                                    <td>
                                        <a  title="اطلاعات بیشتر " href="{{route('check_Order' , $item->id)}}"><i class="glyphicon glyphicon-option-horizontal"></i></a>
                                        <a  title="دریافت فاکتور " href="{{route('get_factor_order' , $item->id)}}"><i class="fa fa-file-pdf-o"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>اطلاعاتی یافت نشد</h2>
                    @endif

                    <div class="pull-left">
                        <a class="btn btn-app" href="{{route('list_Product')}}">
                            <i class="fa fa-plus"></i> سفارش جدید
                        </a>
                    </div>

                </div>
            </div>
        </div>

@endsection
