<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coflks</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- cusotm css file link -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">

    <link rel="icon" href="{{asset("images/logo.PNG")}}" type="image/ico"/>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset("images/logo.PNG") }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">


</head>
<body>

@include('front.header')

@yield('content')

<!-- footer section: start -->
@include('front.footer')
<!-- footer section: end -->

<!-- scroll top button: start -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll top button: end -->

{{--<!-- loader: start -->--}}
{{--<div class="loader-container">--}}
{{--    <img src="{{asset('images/loader.gif')}}" alt="">--}}
{{--</div>--}}
{{--<!-- loader: end -->--}}




<!-- custom js file link -->
<script src="{{asset('js/script.js')}}"></script>


<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>



</body>
</html>
