<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coflks</title>
    <link rel="icon" href="{{asset("images/logo.PNG")}}" type="image/ico"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
            integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}" type="text/css">
</head>
<body class="bg-light">
<div class="container">
    <div style="color: #017992" class="row text-center justify-contents-center">
        <i class="fa fa-wallet fa-5x mx-auto my-3 col-12" aria-hidden="true"></i>
        <h1 class="display-inline-block mx-auto">سبد خرید شما</h1>

    </div>
</div>
<div class="container mt-5">
    <div class="row">


        <div class="col-md-12 col-sm-12 p-2 " dir="rtl">
            <h3 class="text-dark">اظلاعات پرداخت
            </h3>
            <ul class="list-group pb-1">

                    <li class="list-group-item"><h6>{{$transaction->status}} <span
                                class="text-muted float-right">{{number_format($item->total_price)}}تومان</span></h6>
                    </li>
                <li class="list-group-item " style="text-align: center;"><h6>فاکتور خرید شما برای شما پیامک خواهد شد کد پیگیری :  {{$item->id}} </h6>
                    </li>

                <li class="list-group-item " style="text-align: center;"><h6> <a href="{{route('index_home')}}" class="btn" style="display: inline-block;
padding: .8rem 3rem;
border: .2rem solid #017992;
color: #017992;
cursor: pointer;
font-size: 1rem;
border-radius: .5rem;
position: relative;
overflow: hidden;
z-index: 0;
margin-top: 1rem;">بازگشت به صفحه اصلی</a>

                    </h6>
                    </li>

            </ul>

        </div>
        {{--        <div class="col-md-12 col-sm-12 p-2 ">--}}
        {{--            <h3 class="text-dark">سبد شما<span--}}
        {{--                    class="badge badge-dark float-right">{{count($item->products()->get())}}</span></h3>--}}
        {{--            <ul class="list-group pb-1">--}}
        {{--                @foreach($item->products()->get() as $product)--}}
        {{--                    <li class="list-group-item"><h6>{{$product->name}}<span--}}
        {{--                                class="text-muted float-right">{{number_format($product->price)}}</span></h6>--}}
        {{--                        <p class="mb-0">{{$product->weight}}</p>--}}
        {{--                    </li>--}}
        {{--                @endforeach--}}
        {{--                <li class="list-group-item my-1">مبلغ کل <span class="text-bold float-right">{{number_format($item->total_price)}} تومان </span>--}}
        {{--                </li>--}}

        {{--            </ul>--}}


        {{--        </div>--}}
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
