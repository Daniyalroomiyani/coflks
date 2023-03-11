<!-- home section: start -->
<section class="home" id="home">
    <div class="content">
        <h3>{{$item->title}}</h3>
        <p>
           {{$item->about}}
        </p>
{{--        <a href="#" class="btn">سفارش میدم</a>--}}
    </div>

    <div class="image">
        <img src="{{asset('storage/images/site/' . $item->pics['up'])}}" alt="">
    </div>
</section>
<!-- home section: end -->
