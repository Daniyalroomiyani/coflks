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
        <div class="col-md-8 col-sm-12 ">
            @include('admin.error')
            <form method="post">
                {{csrf_field()}}

                <div class="form-group mt-2">
                    <label for="address">نام و نام خانودگی</label>
                    <input type="text" id="fullName" name="fullName" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="address">تلفن </label>
                    <input type="text" id="phone" name="phone" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="address">آدرس</label>
                    <input type="text" id="address" name="address" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="address">توضیحات اضافه</label>
                    <textarea name="caption" type="text" id="caption" class="form-control"> </textarea>
                </div>
                <a href="{{route('Product.front.index')}}" type="button" style="color: whitesmoke"
                   class="btn btn-primary col-md-5 col-sm-5  my-5 btn-lg">بازگشت به فروشگاه</a>
                <button type="submit" style="color: whitesmoke" class="btn btn-success  col-md-6 col-sm-6  my-5 btn-lg">
                    ادامه و پرداخت
                </button>

            </form>

        </div>


        <div class="col-md-4 col-sm-12 p-2 ">
            <h3 class="text-dark">سبد شما<span class="badge badge-dark float-right">{{count($productList)}}</span></h3>
            <ul class="list-group pb-1">
                @foreach($productList as $product)
                    <li class="list-group-item"><h6>{{$product->name}}<span
                                class="text-muted float-right">{{number_format($product->price)}}</span></h6>
                        <p class="mb-0">{{$product->weight}}</p>
                        <a href="{{route('shop.front.delOrder' , $product->id)}}" type="button"
                           style="color: whitesmoke;display: block" class="btn btn-danger btn-sm  col-md-3 col-sm-3 ">حذف </a>
                    </li>
                @endforeach
                <li class="list-group-item my-1">مبلغ کل <span class="text-bold float-right">{{number_format($order->total_price)}} تومان </span>
                </li>

            </ul>


        </div>
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
