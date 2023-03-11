@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>محصول جدید</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab"
                                                                      role="tab" data-toggle="tab"
                                                                      aria-expanded="true">اطلاعات اصلی</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content2" role="tab"
                                                                id="profile-tab" data-toggle="tab"
                                                                aria-expanded="false">عکس</a>
                            </li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                 aria-labelledby="home-tab">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    @include("Admin.error")
                                    <form class="form-horizontal form-label-left " action="" method="post"
                                          enctype="multipart/form-data">
                                        {{ csrf_field()  }}
                                        <span class="section">اطلاعات اصلی</span>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">نام
                                                محصول
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="name"
                                                       value="{{ old('name',isset($item) ? $item->name: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">قیمت
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="price" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="price"
                                                       value="{{ old('price',isset($item) ? $item->price: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="count">تعداد
                                                موجود
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="count" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="count"
                                                       value="{{ old('count',isset($item) ? $item->count: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>  <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="machine">آسیاب
                                                برای
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="machine" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="machine"
                                                       value="{{ old('machine',isset($item) ? $item->machine: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="weight">وزن


                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="weight" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="weight"
                                                       value="{{ old('weight',isset($item) ? $item->weight: '') }}"
                                                       required="required" type="text">
                                            </div>

                                        </div>


                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_id">دسته
                                                بندی

                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                                                <select name="cat_id" class="form-control select-city"
                                                        id="city_id">

                                                    @foreach($cats as $i)
                                                        <option
                                                            value="{{  $i->id }}" {{isset($item)&& $i->id == $selected->id ? 'selected' : '' }} >{{ $i->name  }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption">توضیحات
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea name="caption" id="caption"
                                                          class="form-control col-md-7 col-xs-12" rows="10"

                                                          required="required"
                                                          type="text">{{old('caption',isset($item) ? $item->caption: '') }}</textarea>
                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <label for="pic"
                                                   class="control-label col-md-3">عکس </label>
                                            <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="file" data-role="magic-overlay"
                                                       data-target="#pictureBtn"
                                                       name="pic" id="pic"
                                                       data-edit="insertImage"/>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="pic"
                                                   class="control-label col-md-3">درصد </label>
                                            <div class="col-md-4  col-sm-12 col-xs-12">
                                                <p>عربیکا </p>
                                                <input class="knob" data-width="100" data-height="120"
                                                       data-angleOffset=-125 name="arabica"
                                                       value="{{ old('arabica',isset($item) ? $item->arabica: '') }}"

                                                       data-angleArc=250 data-fgColor="#34495E"
                                                       data-rotation="anticlockwise" value="35">
                                            </div>
                                            <div class="col-md-4  col-sm-12 col-xs-12">
                                                <p>ربوستا </p>
                                                <input class="knob" data-width="100" data-height="120"
                                                       data-angleOffset=-125 name="robusta"
                                                       value="{{ old('robusta',isset($item) ? $item->robusta: '') }}"

                                                       data-angleArc=250 data-fgColor="#34495E"
                                                       data-rotation="anticlockwise" value="35">
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
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                 aria-labelledby="profile-tab">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel panel-info text-center ">
                                        <div class="panel-heading">تصویر</div>
                                        <div class="panel-body  ">

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر کافکس "
                                                    src="{{old('picture' , isset($item->pic)? asset('storage/images/shop/product').'/'.$item->pic:'')}}">
                                            </div>

                                            <form class="form-horizontal form-label-left col-md-12 col-sm-12 col-xs-12 "
                                                  action="" method="post"
                                                  enctype="multipart/form-data">
                                                {{ csrf_field()  }}
                                                <span class="section">عکس ها</span>


                                                <div class="btn-group col-md-12 col-sm-12 col-xs-12">

                                                    <div class="item form-group">
                                                        <label for="pic"
                                                               class="control-label col-md-3">عکس </label>
                                                        <div class="btn-group col-md-12 col-sm-12 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('pic',(isset($item)   ? $item->pic: '')) }}"

                                                                   name="pic" id="pic"
                                                                   data-edit="insertImage"/>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <button id="send" type="submit" class="btn btn-success">ارسال
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
