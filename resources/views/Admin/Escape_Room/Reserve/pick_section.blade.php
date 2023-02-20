@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>انتخاب زمان</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include("Admin.error")
                        <div class="form-horizontal form-label-left ">


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="reserve">لطفا از زمان مورد
                                    نظر را انتخاب کنید

                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12  ">
                                    @for($i = 0  ; $i < count($reservation) ; $i++)
                                        @if($reservation[$i])
                                            <form class="form-horizontal pull-right form-label-left "
                                                  action="{{route('save_Reserve')}}"
                                                  method="post">

                                                {{ csrf_field()  }}

                                                <input type="hidden" name="date" value="{{$string_date}}">
                                                <input type="hidden" name="room_id" value="{{$room->id}}">

                                                <button class="btn btn-app" type="submit"
                                                        style="background-color: rgba(73,153,71,0.46)">
                                                    <i></i> {{$room->reserve_section[$i]}}
                                                    <i class="fa fa-check-square"></i>
                                                </button>
                                                <input type="hidden" name="section" value="{{$i}}">
                                            </form>
                                        @else
                                            <div class="pull-right">
                                                <a class="btn btn-app" style="background-color: rgba(231,35,35,0.37)"
                                                   href="#">
                                                    <i></i>{{$room->reserve_section[$i]}}
                                                    <i class="fa fa-window-close"></i>
                                                </a>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
