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
                                <td>{{$item->full_name}}</td>
                            </tr>

                            <tr>
                                <th>تلفن</th>
                                <td>{{$item->phone}}</td>
                            </tr>
                            <tr>
                                <th>نوع پیام </th>
                                <td>{{$item->type()->get()->toArray()[0]['name']}}</td>
                            </tr>




  <tr>
                                <th>تاریخ ثبت </th>
                                <td>{{$item->created_at}}</td>
                            </tr>

                            <tr>
                                <th>توضیحات</th>
                                <td>{{$item->msg}}</td>
                            </tr>

                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
