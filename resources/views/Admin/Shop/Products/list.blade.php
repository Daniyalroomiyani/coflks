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
                                <th class="text-center">نام محصول</th>
                                <th class="text-center">قیمت</th>
                                <th class="text-center">تعداد موجود</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->count}}</td>
                                    <td>
                                        @if($item->count>0)
                                        <a  title="ثبت دستی سفارش" href="{{route('add_Order' , $item->id)}}"><i class="glyphicon glyphicon-shopping-cart"></i></a>

                                        @endif
                                        <a href="{{route('edit_Product' , $item->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a data-toggle="modal"
                                           data-target=".bs-example-modal-sm" ><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>




                                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel2">شما در حال حذف یک محصول هستید</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>حذف   {{$item->name}}</h4>
                                                <p>آیا از حذف محصول اطمینان دارید؟</p>
                                                <p style="color: red" class="alert">این کار قابل بازگشت نیست و تمامی سفارشات این محصول را لفو میکند</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                                <a type="button" class="btn btn-warning" href="{{route('del_Product' , $item->id)}}">حذف محصول</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>اطلاعاتی یافت نشد</h2>
                    @endif

                    <div class="pull-left">
                        <a class="btn btn-app" href="{{route('add_Product')}}">
                            <i class="fa fa-plus"></i> افزودن
                        </a>
                    </div>

                </div>
            </div>
        </div>

@endsection
