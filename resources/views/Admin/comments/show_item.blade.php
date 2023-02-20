@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include("Admin.error")
                        <table id="datatable" class="table table-striped table-bordered   text-center">
                            <tr>
                                <th>نام و نام خانوداگی</th>
                                <td>{{$item->name}}</td>
                            </tr>

                            <tr>
                                <th>نمره</th>
                                <td>{{$item->rate}}</td>
                            </tr>
                            <tr>
                                <th>وضعیت</th>
                                <td>
                                    @if($item->seen)
                                        تایید شده
                                    @else
                                        تایید نشده
                                    @endif
                                </td>
                            </tr>


                            <tr>
                                <th>تاریخ ثبت</th>
                                <td>{{verta($item->created_at)}}</td>
                            </tr>

                            <tr>
                                <th>توضیحات</th>
                                <td>{{$item->msg}}</td>
                            </tr>

                        </table>

                       @if(!$item->seen)
                            <div class="pull-left">
                                <a class="btn  btn-app " data-toggle="modal"
                                   href="{{route('confirm_comment' , $item->id)}}"
                                >
                                    <i class="glyphicon glyphicon-ok"></i>  تایید
                                </a>
                            </div>
                        @else
                            <div class="pull-left">
                                <a class="btn  btn-app " data-toggle="modal"
                                >
                                    <i class="glyphicon glyphicon-thumbs-up"></i>  تایید شده
                                </a>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
