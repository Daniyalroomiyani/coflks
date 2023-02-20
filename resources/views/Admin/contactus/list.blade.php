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
                    <h2>لیست محصولات ها
                    </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('Admin.notifications')
                    @if(isset($items) && count($items) > 0)

                    <table id="datatable" class="table table-striped table-bordered text-center">
                            <thead >
                            <tr>
                                <th class="text-center">نام </th>
                                <th class="text-center">تلفن</th>
                                <th class="text-center">دسته بندی</th>
                                <th class="text-center">وضعیت</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->type()->get()->toArray()[0]['name']}}</td>
                                    <td>{{$item->read_msg}}</td>
                                    <td>

                                        <a href="{{route('show_Contact' , $item->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>اطلاعاتی یافت نشد</h2>
                    @endif



                </div>
            </div>
        </div>

@endsection
