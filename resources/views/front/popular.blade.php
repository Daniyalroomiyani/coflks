<section class="popular" id="popular">
    <h1 class="heading"><span>قهوه های </span> آبی </h1>
    <div class="box-container">

        @foreach($products as $pr)
            <div class="box">
                <span class="price"> {{number_format($pr->price) }} تومان</span>
                <img src="{{asset('storage/images/shop/product').'/'.$pr->pic}}" alt="">
                <h3>  {{$pr->name }} -- {{$pr->weight->name}}</h3>

                <a href="#" class="btn">خرید</a>
                <a href="#" class="btn">اطلاعات بیشتر</a>
            </div>
        @endforeach





    </div> <!-- box-container -->

    <div class="box-container">

            <div class="box">
                <a  href="{{route('Product.front.index')}}" class="btn">محصولات بیشتر</a>

            </div>

    </div> <!-- box-container -->


</section>
