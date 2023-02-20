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
                                <th>رزرو کننده</th>
                                <td>{{$item->Fname. " ".$item->Lname}}</td>
                            </tr>
                            <tr>
                                <th>سناریو</th>
                                <td>{{$item->Escape_room()->get()->toArray()[0]['name']}}</td>
                            </tr>
                            <tr>
                                <th>شعبه</th>
                                <td>{{$item->Escape_room()->get()[0]->Branch()->get()->toArray()[0]['name']}}</td>
                            </tr>
                            <tr>
                                <th>تاریخ</th>
                                <td>{{verta($item->day)->format('Y-n-j')}}</td>
                            </tr>
                            <tr>
                                <th>ساعت شروع</th>
                                <td>{{$item->Escape_room()->get()->toArray()[0]['reserve_section'][$item->section]}}</td>
                            </tr>
                            <tr>
                                <th>تعداد</th>
                                <td>{{$item->number}}</td>
                            </tr>
                            <tr>
                                <th>تلفن</th>
                                <td>{{$item->phone}}</td>
                            </tr>
                            <tr>
                                <th>پرداخت</th>
                                <td>{{$item->payment_status}}</td>
                            </tr>
                            <tr>
                                <th>مبلغ</th>
                                <td>{{$item->paid}}</td>
                            </tr>
  <tr>
                                <th>تاریخ ثبت رزرو</th>
                                <td>{{$item->created_at}}</td>
                            </tr>

                            <tr>
                                <th>توضیحات</th>
                                <td>{{$item->caption}}</td>
                            </tr>

{{--                            <thead >--}}
{{--                            <tr>--}}
{{--                                <th class="text-center">رزرو کننده</th>--}}
{{--                                <th class="text-center">سناریو</th>--}}
{{--                                <th class="text-center">تاریخ</th>--}}
{{--                                <th class="text-center">ساعت شروع</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}


{{--                            <tbody>--}}

{{--                                <tr>--}}
{{--                                    <td>{{$item->Fname . " ". $item->Lname}}</td>--}}
{{--                                    <td>{{$item->Escape_room()->get()->toArray()[0]['name']}}</td>--}}
{{--                                    <td>{{verta($item->day)->format('Y-n-j')}}</td>--}}
{{--                                    <td>{{$item->Escape_room()->get()->toArray()[0]['reserve_section'][$item->section]}}</td>--}}

{{--                                </tr>--}}

{{--                            </tbody>--}}

                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
