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
                    <h2>لیست شعبه ها

                    </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('Admin.notifications')
                    @if(isset($items) && count($items) > 0)

                    <table id="datatable" class="table table-striped table-bordered text-center">
                            <thead >
                            <tr>
                                <th class="text-center">نام شعبه</th>
                                <th class="text-center">آدرس شعبه</th>
                                <th class="text-center">مدیریت</th>
                                <th class="text-center">آخرین تغیر توسط</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->location}}</td>
                                    <td>{{$item->admin}}</td>
                                    <td>{{$item->last_edit}}</td>
                                    <td>
                                        <a href="{{route('edit_branch' , $item->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="{{route('del_branch',$item->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>اطلاعاتی یافت نشد</h2>
                    @endif


                    <div class="pull-left">
                        <a class="btn btn-app" href="{{route('add_branch')}}">
                            <i class="fa fa-plus"></i> افزودن
                        </a>
                    </div>
                </div>
            </div>
        </div>

@endsection
