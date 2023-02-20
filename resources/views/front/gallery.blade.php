<section class="gallery" id="gallery">
    <h1 class="heading"><span> گالری </span> ما </h1>
    <div class="box-container">


        @foreach($pictures as $pic)
            <div class="box">
                <img src="{{ asset('storage/images/gallery').'/'.$pic->pic}}" alt="">
                <div class="content">
                    <h3>{{$pic->title}}</h3>
                    <p>
                        {{$pic->about}}
                    </p>
                </div>
            </div>
        @endforeach


    </div> <!-- box-container -->
</section>
