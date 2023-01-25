@extends('front.layout')


@section('content')

    @include('front.home')


    <!-- speciality section: start -->
    {{--@include('front.speciality')--}}
    <!-- speciality section: end -->

    <!-- popular section: start -->
    @include('front.popular')
    <!-- popular section: end -->

    <!-- steps section: start -->
    @include('front.steps')
    <!-- steps section: end -->

    <!-- gallery section: start -->
    @include('front.gallery')
    <!-- gallery section: end -->

    <!-- review section: start -->
    @include('front.review')
    <!-- review section: end -->

    <!-- order section: start -->
    @include('front.order')
    <!-- order section: end -->
@endsection
