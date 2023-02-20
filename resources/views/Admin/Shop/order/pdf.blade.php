
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <!-- Bootstrap -->
    <link href="{{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset("vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{asset("build/css/custom.min.css")}}" rel="stylesheet">




</head>
<!-- /header content -->
<body class="nav-md">

<div class="container body">
    <div class="main_container">



    <!-- /header content -->

        <!-- page content -->
        <div class="right_col" role="main">

            <table id="datatable-buttons" class="table table-striped table-bordered    text-center">

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

        </div>


        <!-- /page content -->




    </div>
</div>

</body>
</html>










