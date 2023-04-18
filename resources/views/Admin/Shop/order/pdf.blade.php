<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('build/css/vendor/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('build/css/vendor/tooltipster.css')}}">
    <link rel="stylesheet" href="{{asset('build/css/vendor/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('build/css/style.css')}}">
    <!-- Bootstrap -->
    <link href="{{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset("vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="{{asset('images/logo.PNG')}}">


    <!-- date time picker -->
    <link type="text/css" rel="stylesheet" href="{{asset('build/css/jalalidatepicker.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('build/css/jalalidatepicker.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('build/css/kamadatepicker.min.css')}}"/>


    <title>Coflks</title>
</head>

<body class="body-backcolor">


<!-- HEADER -->
<div class="header-wrap">

    <!-- LOGO -->

    <div class="profile_pic">
        <img src="{{asset('images/logo.png')}}" height="100px" alt="logo" class="img-circle profile_img">
    </div>

{{--    <figure class="logo">--}}
{{--        <img src="{{asset('images/logo.png')}}" alt="logo">--}}
{{--    </figure>--}}

    <!-- /LOGO -->


</div>
<!-- /HEADER -->


<!-- SECTION -->
<div class="section-wrap " >
    <div class="section" style="padding: 0;">
        <div class="pull-right" style="width: 50%">
            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item product-info">
                <h4 class="text-header " style="font-size: medium">اطلاعات خرید شما </h4>
                <hr class="line-separator">
                <!-- INFORMATION LAYOUT -->
                <div class="information-layout">
                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">خرید به نام</p>
                        <p>{{$order->fullName}}</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">تلفن </p>
                        <p>{{$order->phone}} </p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->


                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header ">تعداد  </p>
                        <div class="pull-left">
                            <p>{{$order->count}}</p>
                        </div>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header ">تاریخ خرید </p>
                        <div class="pull-left">
                            <p>{{$order->created_at}}</p>
                        </div>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->
                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header ">آدرس </p>
                        <div class="pull-left">
                            <p>{{$order->address}}</p>
                        </div>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->


                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header ">وضعیت سفارش </p>
                        <div class="pull-left">
                            <p>{{$order->status}}</p>
                        </div>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->
                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header ">وضعیت پرداخت </p>
                        <div class="pull-left">
                            <p>{{$order->payment_status}}</p>
                        </div>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->



                    @if(isset($order->tracing_ID))
                        <!-- INFORMATION LAYOUT ITEM -->
                        <div class="information-layout-item">
                            <p class="text-header">کد رهگیری پستی </p>
                            <p>{{$order->tracing_ID}} تومان</p>

                        </div>
                        <!-- /INFORMATION LAYOUT ITEM -->
                    @endif
                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">قیمت کل </p>
                        <p>{{$order->total_price}} تومان</p>

                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->


                </div>
                <!-- INFORMATION LAYOUT -->
            </div>
            <!-- /SIDEBAR ITEM -->

        </div>


        <div class="pull-left" style="width: 50%">
            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item product-info">
                <h4 class="text-header " style="font-size: medium">اطلاعات پرداخت </h4>
                <hr class="line-separator">
                <!-- INFORMATION LAYOUT -->
                <div class="information-layout">
                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">زمان</p>
                        <p>{{verta($transaction->transaction_result['date'])->format('Y/n/j H:i:s')}} </p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->


                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">مقدار پرداخت شده</p>
                        <p>{{$transaction->paid}} </p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->


                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header ">شماره ارجاع بانک </p>
                        <div class="pull-left">
                            <p>{{$transaction->transaction_result['referenceId']}}</p>
                        </div>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header ">جزییات پرداخت </p>
                        <div class="pull-left">
                            <p>{{$transaction->transaction_result['details']}}</p>
                        </div>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->



                </div>
                <!-- INFORMATION LAYOUT -->
            </div>
            <!-- /SIDEBAR ITEM -->

        </div>
    </div>

</div>
<!-- /SECTION -->






</body>


<!-- jQuery -->
<script src="{{asset('build/js/vendor/jquery-3.1.0.min.js')}}"></script>
<!-- Tooltipster -->
<script src="{{asset('build/js/vendor/jquery.tooltipster.min.js')}}"></script>
<!-- ImgLiquid -->
<script src="{{asset('build/js/vendor/imgLiquid-min.js')}}"></script>

<!-- XM Tab -->
<script src="{{asset('build/js/vendor/jquery.xmtab.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('build/js/vendor/owl.carousel.min.js')}}"></script>
<!-- Tweet -->
<script src="{{asset('build/js/vendor/twitter/jquery.tweet.min.js')}}"></script>
<!-- Side Menu -->
<script src="{{asset('build/js/side-menu.js')}}"></script>
<!-- Liquid -->
<script src="{{asset('build/js/liquid.js')}}"></script>
<!-- Checkbox Link -->
<script src="{{asset('build/js/checkbox-link.js')}}"></script>
<!-- Image Slides -->
<script src="{{asset('build/js/image-slides.js')}}"></script>
<!-- Post Tab -->
<script src="{{asset('build/js/post-tab.js')}}"></script>
<!-- XM Accordion -->
<script src="{{asset('build/js/vendor/jquery.xmaccordion.min.js')}}"></script>
<!-- XM Pie Chart -->
<script src="{{asset('build/js/vendor/jquery.xmpiechart.min.js')}}"></script>
<!-- Item V1 -->
<script src="{{asset('build/js/item-v1.js')}}"></script>

<!-- Home -->
<script src="{{asset('build/js/home.js')}}"></script>
<!-- Home v2 -->
<script src="{{asset('build/js/home-v2.js')}}"></script>
<!-- Tooltip -->
<script src="{{asset('build/js/tooltip.js')}}"></script>
<!-- User Quickview Dropdown -->
<script src="{{asset('build/js/user-board.js')}}"></script>
<!-- Footer -->
<script src="{{asset('build/js/footer.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset("vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>

<!-- date time picker -->

<script type="text/javascript" src="{{asset('build/js/jalalidatepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('build/js/jalalidatepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('build/js/kamadatepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('build/js/kamadatepicker.holidays.js')}}"></script>


{{--my js--}}
<script type="text/javascript" src="{{asset('build/js/my_js.js')}}"></script>

<script>


    // jalaliDatepicker.startWatch(options);
    // jalaliDatepicker.show(input);
    // jalaliDatepicker.hide();
    // kamaDatepicker('demo');

    kamaDatepicker('demo', {
        buttonsColor: "red",
        markToday: true,
        gotoToday: true,
        forceFarsiDigits: true,
        highlightSelectedDay: true,
        sync: true
    });

</script>


</body>

</html>
