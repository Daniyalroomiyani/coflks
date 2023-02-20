@extends('Admin.layout')
@section("content")



        <div class="">
            <div class="page-title">
                <div class="title_left">
                    @if(isset($item))
                    <h3>ویرایش کاربر</h3>
                    @else
                    <h3>ثبت کاربر جدید</h3>
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">

@include('Admin.error')
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <form class="form-horizontal form-label-left " action="" method="post" enctype="multipart/form-data" >
                                    {{ csrf_field()  }}
                                    <span class="section">اطلاعات شخصی</span>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">نام <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="firstname"  class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" name="firstname"
                                                   value="{{ old('firstname',isset($item) ? $item->firstname: '') }}"
                                                   required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">نام خانوادگی <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lastname"  class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2" name="lastname"
                                                   value="{{ old('lastname',isset($item) ? $item->lastname: '') }}"
                                                   required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">ایمیل <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="email" name="email" required="required"
                                                   value="{{ old('email',isset($item) ? $item->email: '') }}"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label for="password" class="control-label col-md-3">رمز عبور<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            @if(isset($item))
                                                <input id="password" type="password" name="password" data-validate-length="6"
                                                       readonly
                                                       class="form-control col-md-7 col-xs-12" required="required">
                                            @else
                                            <input id="password" type="password" name="password" data-validate-length="6"

                                                   value="{{old('password')}}"
                                                   class="form-control col-md-7 col-xs-12" required="required">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="password" class="control-label col-md-3">سطح دسترسی <span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            @if(isset($item) && $item->admin)
                                                    <input type="checkbox"  id="adminckeck" name="adminckeck"  checked/> مدیر
                                            @else
                                                <input type="checkbox"  id="adminckeck" name="adminckeck" /> مدیر
                                            @endif

                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="pic" class="control-label col-md-3">عکس </label>
                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn"
                                                   value="{{ old('pic',isset($item) ? $item->pic: '') }}"
                                                      name="pic" id="pic" data-edit="insertImage"/>
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
                            <br>
                            <br>
                            <br>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="panel panel-info text-center ">
                                    <div class="panel-heading">تصویر</div>
                                    <div class="panel-body backcolor">
                                        <img class="img-responsive img-rounded"  name="picture" alt="تصویر کاربر " src="{{old('picture' , isset($item)? asset('storage/images').'/'.$item->pic:'')}}" >

                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>


@endsection
