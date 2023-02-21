<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="{{asset('images/logo.PNG')}}" type="image/ico"/>
    <title>Coflks پنل مدیریت </title>

    <!-- Bootstrap -->
    <link href="{{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset("vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset("vendors/nprogress/nprogress.css")}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset("vendors/iCheck/skins/flat/green.css")}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset("vendors/bootstrap-daterangepicker/daterangepicker.css")}}" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('build/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{asset("build/css/custom.min.css")}}" rel="stylesheet">


    <!-- date time picker -->
    <link type="text/css" rel="stylesheet" href="{{asset('build/css/jalalidatepicker.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('build/css/jalalidatepicker.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('build/css/kamadatepicker.min.css')}}"/>


</head>
<!-- /header content -->
<body class="nav-md">

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col hidden-print">
            <div class="left_col scroll-view menu_fixed">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-coffee"></i> <span>Coflks</span></a>
                </div>

                <div class="clearfix"></div>

                @include('Admin.menu')
            </div>
        </div>

    @include('Admin.nav')



    <!-- /header content -->

        <!-- page content -->
        <div class="right_col" role="main">

            @yield('content')

        </div>


        <!-- /page content -->


        <div id="lock_screen">
            <table>
                <tr>
                    <td>
                        <div class="clock"></div>
                        <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</div>


<!-- jQuery -->
{{--<script src="{{asset("build/js/jquery-3.6.0.min.js")}}"></script>--}}
<script src="{{asset("vendors/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{asset("vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("vendors/fastclick/lib/fastclick.js")}}"></script>
<!-- NProgress -->
<script src="{{asset("vendors/nprogress/nprogress.js")}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}"></script>
<!-- iCheck -->
<script src="{{asset("vendors/iCheck/icheck.min.js")}}"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{asset("vendors/moment/min/moment.min.js")}}"></script>

<script src="{{asset("vendors/bootstrap-daterangepicker/daterangepicker.js")}}"></script>

<!-- bootstrap-wysiwyg -->
<script src="{{asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{asset('vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{asset('vendors/google-code-prettify/src/prettify.js')}}"></script>
<!-- jQuery Tags Input -->
<script src="{{asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
<!-- Switchery -->
<script src="{{asset('vendors/switchery/dist/switchery.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('build/js/select2.min.js')}}"></script>
<!-- Parsley -->
<script src="{{asset('vendors/parsleyjs/dist/parsley.min.js')}}"></script>
<script src="{{asset('vendors/parsleyjs/dist/i18n/fa.js')}}"></script>
<!-- Autosize -->
<script src="{{asset('vendors/autosize/dist/autosize.min.js')}}"></script>
<!-- jQuery autocomplete -->
<script src="{{asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
<!-- starrr -->
<script src="{{asset('vendors/starrr/dist/starrr.js')}}"></script>

<!-- Chart.js -->
<script src="{{asset("vendors/Chart.js/dist/Chart.min.js")}}"></script>
<!-- jQuery Sparklines -->
<script src="{{asset("vendors/jquery-sparkline/dist/jquery.sparkline.min.js")}}"></script>
<!-- gauge.js -->
<script src="{{asset("vendors/gauge.js/dist/gauge.min.js")}}"></script>
<!-- Skycons -->
<script src="{{asset("vendors/skycons/skycons.js")}}"></script>
<!-- Flot -->
<script src="{{asset("vendors/Flot/jquery.flot.js")}}"></script>
<script src="{{asset("vendors/Flot/jquery.flot.pie.js")}}"></script>
<script src="{{asset("vendors/Flot/jquery.flot.time.js")}}"></script>
<script src="{{asset("vendors/Flot/jquery.flot.stack.js")}}"></script>
<script src="{{asset("vendors/Flot/jquery.flot.resize.js")}}"></script>

<!-- jQuery Smart Wizard -->
<script src="{{asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
<!-- Dropzone.js -->
<script src="{{asset('vendors/dropzone/dist/min/dropzone.min.js')}}"></script>

<!-- Flot plugins -->
<script src="{{asset("vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}"></script>
<script src="{{asset("vendors/flot-spline/js/jquery.flot.spline.min.js")}}"></script>
<script src="{{asset("vendors/flot.curvedlines/curvedLines.js")}}"></script>
<!-- DateJS -->
<script src="{{asset("vendors/DateJS/build/production/date.min.js")}}"></script>
<!-- JQVMap -->
<script src="{{asset("vendors/jqvmap/dist/jquery.vmap.js")}}"></script>
<script src="{{asset("vendors/jqvmap/dist/maps/jquery.vmap.world.js")}}"></script>
<script src="{{asset("vendors/jqvmap/examples/js/jquery.vmap.sampledata.js")}}"></script>
<!-- jQuery Knob -->
<script src="{{asset('vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset("build/js/custom.min.js")}}"></script>

<!-- date time picker -->

<script type="text/javascript" src="{{asset('build/js/jalalidatepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('build/js/jalalidatepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('build/js/kamadatepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('build/js/kamadatepicker.holidays.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>



<script>
    jQuery(document).ready(function ($) {
        $('select.select-city').select2();
        $('#datatable').DataTable();
    });

</script>


<script>


    // jalaliDatepicker.startWatch(options);
    // jalaliDatepicker.show(input);
    // jalaliDatepicker.hide();
    // kamaDatepicker('demo');

    kamaDatepicker('demo', { buttonsColor: "red",markToday:true, gotoToday:true , forceFarsiDigits: true });

</script>


<script>

    Dropzone.options.myAwesomeDropzone = {
        dictDefaultMessage: "فایل را اینجا رها کنید تا آپلود شود",
        dictFallbackMessage: "مرورگر شما آپلود فایل drag'n'drop را پشتیبانی نمی کند.",
        dictFallbackText: "برای بارگذاری فایل های خود مانند روزهای گذشته، از فرم پشت زیر استفاده کنید.",
        dictFileTooBig: "پرونده خیلی بزرگ است (MiB). حداکثر اندازه فایل: MiB.",
        dictInvalidFileType: "شما نمیتوانید فایلهای این نوع آپلود کنید.",
        dictResponseError: "سرور کد  را در پاسخ داد.",
        dictCancelUpload: "لغو آپلود",
        dictCancelUploadConfirmation: "آیا مطمئن هستید که میخواهید این آپلود را لغو کنید؟",
        dictRemoveFile: "حذف فایل",
        dictRemoveFileConfirmation: null,
        dictMaxFilesExceeded: "شما نمیتوانید فایلهای بیشتری آپلود کنید."
    }
</script>

</body>
</html>


