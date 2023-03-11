@extends('front.layout')


@section('content')
    <h1 class="heading"><span>قهوه های </span> آبی </h1>


    @foreach($cats as $c)
    <section class="popular" id="popular">


        <h1 class="heading"><span>{{$c->name}}</span>  </h1>
        <div class="box-container">

            @foreach($c->products()->get() as $pr)

                <div class="box">
                    <span class="price"> {{number_format($pr->price) }} تومان</span>
                    <img src="{{asset('storage/images/shop/product').'/'.$pr->pic}}" alt="">
                    <h3>  {{$pr->name }} -- {{$pr->weight}}</h3>

                    <a href="#" class="btn">خرید</a>
                    <a href="{{route('product.front.post' , $pr->id)}}" class="btn">اطلاعات بیشتر</a>
                </div>
            @endforeach

        </div> <!-- box-container -->
    </section>
    @endforeach


@endsection
