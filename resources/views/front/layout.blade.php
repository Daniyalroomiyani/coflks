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

</head>
<body>

@include('front.header')


@include('front.home')


<!-- speciality section: start -->
{{--@include('front.speciality')--}}
<!-- speciality section: end -->

<!-- popular section: start -->
@include('front.popular')
<!-- popular section: end -->

<!-- steps section: start -->
@include('front.steps')
<!-- steps section: end -->

<!-- gallery section: start -->
@include('front.gallery')
<!-- gallery section: end -->

<!-- review section: start -->
@include('front.review')
<!-- review section: end -->

<!-- order section: start -->
@include('front.order')
<!-- order section: end -->

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

</body>
</html>
