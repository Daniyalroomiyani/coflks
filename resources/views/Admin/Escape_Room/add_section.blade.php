@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>سکشن های
                       {{$item->name}}
                    </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include("Admin.error")
                        <form class="form-horizontal form-label-left " action="{{route('save_section' , $item->id)}}" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field()  }}
{{--                            <input type="hidden" name="num" value="{{$num}}">--}}
                            <span class="section">اطلاعات اصلی</span>

                            @for($i = 0 ; $i< $num ; $i++)
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{$i}}">
زمان شروع سکشن {{$i+1}}                                        <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="{{$i}}" class="form-control col-md-7 col-xs-12"
                                               data-validate-length-range="6" data-validate-words="2"
                                               name="{{$i}}"
                                               value="{{ old($i , (isset($item) && isset($item->reserve_section)&&count($item->reserve_section) > 0) ? $item->reserve_section[$i]: '') }}"
                                               required="required" type="text">
                                    </div>
                                </div>
                            @endfor





                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">ارسال</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
