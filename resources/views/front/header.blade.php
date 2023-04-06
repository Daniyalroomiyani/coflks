<!-- header section: start -->
<header>
    <a href="#" class="logo"><i class="fas fa-coffee"></i> Coflks </a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="{{route('index_home')}}#home">خانه</a>
        <a href="{{route('index_home')}}#popular">فروشگاه</a>
        <a href="{{route('index_home')}}#gallery">گالری</a>
        <a href="{{route('index_home')}}#review">نظر شما</a>
        <a href="{{route('index_home')}}#comment">ارسال نظر</a>
        <a href="{{route('feed_list_front')}}">وبلاگ</a>
        @if(\Illuminate\Support\Facades\Cookie::has('coflksOrderid'))
            <a style="color: red;border-style: solid;border-radius: 30px" href="{{route('shop.front.checkout')}}">سبد خرید<i > {{count(\App\Models\order::find(Cookie::get('coflksOrderid'))->products()->get())}}</i> </a>
        @endif

    </nav>


</header>
<!-- header section: end -->
