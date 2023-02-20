<section class="review" id="review">
    <h1 class="heading"> <span> نظرات </span> مشتریان </h1>
    <div class="box-container">


        @foreach($comments as $cm )
        <div class="box">
            <h3>{{$cm->name}}</h3>
            <div class="stars">
                @for( $i = 0 ; $i<$cm->rate ;$i++)
                    <i class="fas fa-star"></i>
                @endfor
                @for( $i = $cm->rate ; $i<5 ;$i++)
                    <i class="far fa-star"></i>
                @endfor

            </div>
            <p>
              {{$cm->msg}}
            </p>
        </div>

        @endforeach


    </div> <!-- box-container -->
</section>
