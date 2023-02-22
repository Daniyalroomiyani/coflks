@extends('front.layout')


@section('content')

    <!-- speciality section: start -->
    <section class="speciality" id="speciality">

        <h1 class="heading"><span>مطالب </span> تازه </h1>
        <h1 class="heading"><span>مطالب </span> تازه </h1>

        <div class="box-container">

            @if(isset($feeds))
                @foreach($feeds as $feed)
                    <a href="#" target="_blank" class="box">
                        <img class="image" src="{{asset('storage/images/feeds').'/'.$feed->pic}}" alt="">
                        <div class="content">
                            <h3>{{$feed->tittle}}</h3>
                            <p>
                               {{\Illuminate\Support\Str::limit($feed->caption , 200)}}
                            </p>
                        </div>

                    </a>
                @endforeach
            @endif


        </div>

    </section>
    <!-- speciality section: end -->

@endsection
