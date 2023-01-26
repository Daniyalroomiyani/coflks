@extends('front.layout')

@section('content')
    <section class="popular" id="popular">
        <h1 class="heading"><span>قهوه های </span> آبی </h1>
        <div class="box-container">


            <div class="box">

                <h3> 100 عربیکا</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                </p>
                <a href="#" class="btn">خرید</a>
                <a href="#" class="btn">اطلاعات بیشتر</a>
            </div>


            <div class="box" style="flex:40%">
                <span class="price"> {{number_format(50000) }} تومان</span>
                <img src="{{asset('images/p-1.jpg')}}" alt="">


            </div>


        </div> <!-- box-container -->


    </section>

@endsection


