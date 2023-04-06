<section class="popular" id="popular">
    <h1 class="heading"><span>قهوه های </span> آبی </h1>
    <div class="box-container">

        @foreach($products as $pr)
            <div class="box">
                <span class="price"> {{number_format($pr->price) }} تومان</span>
                <img src="{{asset('storage/images/shop/product').'/'.$pr->pic}}" alt="">
                <h3>  {{$pr->name }} -- {{$pr->weight}}</h3>

                <a href="{{route('shop.front.addOrder' , $pr->id)}}" class="btn">خرید</a>
                <a href="{{route('product.front.post', $pr->id)}}" class="btn">اطلاعات بیشتر</a>
            </div>
        @endforeach





    </div> <!-- box-container -->

    <div class="box-container">

            <div class="box">
                <a  href="{{route('Product.front.index')}}" class="btn">محصولات بیشتر</a>

            </div>

    </div> <!-- box-container -->


</section>
