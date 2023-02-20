@extends('Admin.layout')

@section('content')

    <div class="page-title">

        <div class="title_right">

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>لیست رزرو ها
                    </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('Admin.notifications')
                    @if(isset($items) && count($items) > 0)

                        <table id="datatable" class="table table-striped table-bordered text-center">
                            <thead >
                            <tr>
                                <th class="text-center">رزرو کننده</th>
                                <th class="text-center">سناریو</th>
                                <th class="text-center">شعبه</th>
                                <th class="text-center">تاریخ</th>
                                <th class="text-center">ساعت شروع</th>
                                <th class="text-center">تلفن</th>
                                <th class="text-center">پرداخت</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->Fname . " ". $item->Lname}}</td>
                                    <td>{{$item->Escape_room()->get()->toArray()[0]['name']}}</td>

                                    <td>{{$item->Escape_room()->get()[0]->Branch()->get()->toArray()[0]['name']}}</td>
                                    <td>{{verta($item->day)->format('Y-n-j')}}</td>
                                    <td>{{$item->Escape_room()->get()->toArray()[0]['reserve_section'][$item->section]}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->payment_status}}</td>
                                    <td>
                                        <a  title="کسنل " href="{{route('cancel_reserve' , $item->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                        <a  title="اطلاعات بیشتر " href="{{route('show_reserve' , $item->id)}}"><i class="glyphicon glyphicon-option-horizontal"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>اطلاعاتی یافت نشد</h2>
                    @endif

                    <div class="pull-left">
                        <a class="btn btn-app" href="{{route('Reserve')}}">
                            <i class="fa fa-plus"></i> افزودن
                        </a>
                    </div>

                </div>
            </div>
        </div>

@endsection
