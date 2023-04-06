@extends('front.layout')

@section('content')
    <section class="popular" id="popular">
        <h1 class="heading"><span>قهوه های </span> آبی </h1>
        <div class="box-container">


            <div class="box">

                <h3> {{$product->name}}</h3>
                <p>
                    {{$product->caption}}
                </p>
                <a href="{{route('shop.front.addOrder', $product->id)}}" class="btn">خرید</a>

            </div>


            <div class="box" style="flex:10%">
                {{--                <span class="price"> {{number_format($product->price) }} تومان</span>--}}
                <img src="{{asset('storage/images/shop/product').'/'.$product->pic}}" alt="">


            </div>


        </div> <!-- box-container -->
        <section class="review" id="review">
            {{--            <h1 class="heading"> <span> ویژگی ها </span> دیگر </h1>--}}
            <div class="box-container">


                <div class="box">
                    <h3>وزن بسته</h3>

                    <p>
                        {{$product->weight}} </p>
                </div>
                <div class="box">
                    <h3>قیمت</h3>

                    <p>
                        {{number_format($product->price) }} تومان
                    </p>
                </div>

                @if(( !($product->arabica==0 && $product->robosta ==0)))
                    <div class="box">
                        <h3>آسیاب برای</h3>

                        <p>
                            {{$product->machine}}
                        </p>
                    </div>
                    <div class="box">
                        <h3>درصد عربیکا</h3>

                        <p>
                            @if(isset($product->arabica))
                                {{$product->arabica}} ٪
                            @else
                                0
                                ٪
                            @endif
                        </p>
                    </div>
                    <div class="box">
                        <h3>درصد ربوستا</h3>

                        <p>
                            @if(isset($product->robusta))
                                {{$product->robusta}} ٪
                            @else
                                0
                                ٪
                            @endif
                        </p>
                    </div>

                @endif
            </div> <!-- box-container -->

        </section>


        </div> <!-- box-container -->
        <h1 class="heading"> محصولات <span>مشابه</span></h1>

        <div class="box-container">


            @foreach($simProducts as $pr)

                <div class="box">
                    <span class="price"> {{number_format($pr->price) }} تومان</span>
                    <img src="{{asset('storage/images/shop/product').'/'.$pr->pic}}" alt="">
                    <h3>  {{$pr->name }} -- {{$pr->weight}}</h3>

                    <a href="{{route('shop.front.addOrder' , $pr->id)}}" class="btn">خرید</a>
                    <a href="{{route('product.front.post' , $pr->id)}}" class="btn">اطلاعات بیشتر</a>
                </div>
            @endforeach

        </div> <!-- box-container -->


    </section>

@endsection


