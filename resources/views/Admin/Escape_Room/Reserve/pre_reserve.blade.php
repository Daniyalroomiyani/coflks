@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>انتخاب سناریو و تاریخ </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include("Admin.error")
                        <form class="form-horizontal form-label-left" action="" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field()  }}

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room">سناریو

                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <select name="room" class="form-control select-city"
                                             id="room">

                                        @foreach($items as $item)
                                            <option
                                                value="{{  $item->id }}"> {{ $item->name .' - '. $item->Branch()->get()->toArray()[0]['name']}} </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room">تاریخ رزرو

                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <input
                                        name="date"
                                        class="form-control col-md-6 col-xs-12 "
                                        type="text" id="demo">
                                </div>
                            </div>


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
