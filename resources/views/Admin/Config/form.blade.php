@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> تنظیمات اصلی</h2>

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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">عنوان

                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="title" class="form-control col-md-7 col-xs-12"
                                                       name="title"
                                                       value="{{ old('title',isset($item) ? $item->title: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">تلفن

                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="phone" class="form-control col-md-7 col-xs-12"
                                                       name="phone"
                                                       value="{{ old('phone',isset($item) ? $item->phone: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Email">ایمیل

                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="Email" class="form-control col-md-7 col-xs-12"
                                                       name="Email"
                                                       value="{{ old('Email',isset($item) ? $item->Email: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="instagram">اینستاگرام

                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="instagram" class="form-control col-md-7 col-xs-12"
                                                       name="instagram"
                                                       value="{{ old('instagram',isset($item) ? $item->instagram: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telegram">تلگرام

                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="telegram" class="form-control col-md-7 col-xs-12"
                                                       name="telegram"
                                                       value="{{ old('telegram',isset($item) ? $item->telegram: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="about">درباره

                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                   <textarea name="about" id="about"
                                             class="form-control col-md-7 col-xs-12" rows="10"

                                             required="required"
                                             type="text">{{old('about',isset($item) ? $item->about: '') }}</textarea>
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
                                        <div class="panel-heading">تصاویر</div>
                                        <div class="panel-body  ">


                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر بالا  "
                                                    {{--                                                    src="{{old('picture' , isset($pic)? asset('storage/images/shop/product').'/'.$pic:'')}}">--}}
                                                    src="{{asset('storage/images/site/' . $item->pics['up'])}}">
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر پایین  "
                                                    {{--  src="{{old('picture' , isset($pic)? asset('storage/images/shop/product').'/'.$pic:'')}}">--}}


                                                    src="{{asset('storage/images/site/' . $item->pics['down'])}}">
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر پس زمینه  "
                                                    {{--  src="{{old('picture' , isset($pic)? asset('storage/images/shop/product').'/'.$pic:'')}}">--}}


                                                    src="{{asset('storage/images/site/' . $item->pics['backG'])}}">
                                            </div>


                                            <form class="form-horizontal form-label-left col-md-12 col-sm-12 col-xs-12 "
                                                  action="{{route('upload.config')}}" method="post"
                                                  enctype="multipart/form-data">
                                                {{ csrf_field()  }}
                                                <span class="section"></span>


                                                <div class="btn-group col-md-4 col-sm-4 col-xs-12">
                                                    <div class="item form-group">
                                                        <label for="up"
                                                               class="control-label col-md-3">عکس بالا </label>
                                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('up',(isset($item))  ? $item->pics['up']: '') }}"

                                                                   name="up" id="up"
                                                                   data-edit="insertImage"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group col-md-4 col-sm-4 col-xs-12">
                                                    <div class="item form-group">
                                                        <label for="down"
                                                               class="control-label col-md-3">عکس پایین </label>
                                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('down',(isset($item))  ? $item->pics['down']: '') }}"

                                                                   name="down" id="down"
                                                                   data-edit="insertImage"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group col-md-4 col-sm-4 col-xs-12">
                                                    <div class="item form-group">
                                                        <label for="backG"
                                                               class="control-label col-md-3">پس زمینه </label>
                                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('backG',(isset($item))  ? $item->pics['backG']: '') }}"

                                                                   name="backG" id="backG"
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
                                        <div class="panel-body  ">


                                            <div class="col-md-3 col-sm-3    col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر اول  "
                                                    {{--                                                    src="{{old('picture' , isset($pic)? asset('storage/images/shop/product').'/'.$pic:'')}}">--}}
                                                    src="{{asset('storage/images/site/' . $item->pics['step1'])}}">
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر دوم  "
                                                    {{--  src="{{old('picture' , isset($pic)? asset('storage/images/shop/product').'/'.$pic:'')}}">--}}


                                                    src="{{asset('storage/images/site/' . $item->pics['step2'])}}">
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر سوم  "
                                                    {{--  src="{{old('picture' , isset($pic)? asset('storage/images/shop/product').'/'.$pic:'')}}">--}}


                                                    src="{{asset('storage/images/site/' . $item->pics['step3'])}}">
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر چهار  "
                                                    {{--  src="{{old('picture' , isset($pic)? asset('storage/images/shop/product').'/'.$pic:'')}}">--}}


                                                    src="{{asset('storage/images/site/' . $item->pics['step4'])}}">
                                            </div>


                                            <form class="form-horizontal form-label-left col-md-12 col-sm-12 col-xs-12 "
                                                  action="{{route('upload.config')}}" method="post"
                                                  enctype="multipart/form-data">
                                                {{ csrf_field()  }}
                                                <span class="section"></span>


                                                <div class="btn-group col-md-3 col-sm-3 col-xs-12">
                                                    <div class="item form-group">
                                                        <label for="step1"
                                                               class="control-label col-md-3">عکس یک </label>
                                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('step1',(isset($item))  ? $item->pics['step1']: '') }}"

                                                                   name="step1" id="step1"
                                                                   data-edit="insertImage"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group col-md-3 col-sm-3 col-xs-12">
                                                    <div class="item form-group">
                                                        <label for="step2"
                                                               class="control-label col-md-3">عکس دوم </label>
                                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('step2',(isset($item))  ? $item->pics['step2']: '') }}"

                                                                   name="step2" id="step2"
                                                                   data-edit="insertImage"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group col-md-3 col-sm-3 col-xs-12">
                                                    <div class="item form-group">
                                                        <label for="step3"
                                                               class="control-label col-md-3">پس سوم </label>
                                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('step3',(isset($item))  ? $item->pics['step3']: '') }}"

                                                                   name="step3" id="step3"
                                                                   data-edit="insertImage"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group col-md-3 col-sm-3 col-xs-12">
                                                    <div class="item form-group">
                                                        <label for="step4"
                                                               class="control-label col-md-3">عکس چهارم </label>
                                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('step4',(isset($item))  ? $item->pics['step4']: '') }}"

                                                                   name="step4" id="step4"
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
                                        <div class="panel-body  ">


                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <img
                                                    class="img-responsive img-rounded justify-content-center image center-margin "
                                                    name="picture" alt="تصویر آیکون  "
                                                    {{--                                                    src="{{old('picture' , isset($pic)? asset('storage/images/shop/product').'/'.$pic:'')}}">--}}
                                                    src="{{asset('storage/images/site/' . $item->pics['icon'])}}">
                                            </div>


                                            <form class="form-horizontal form-label-left col-md-12 col-sm-12 col-xs-12 "
                                                  action="{{route('upload.config')}}" method="post"
                                                  enctype="multipart/form-data">
                                                {{ csrf_field()  }}
                                                <span class="section"></span>


                                                <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                                                    <div class="item form-group">
                                                        <label for="icon"
                                                               class="control-label col-md-3">عکس آیکون </label>
                                                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                            <input type="file" data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   value="{{ old('icon',(isset($item))  ? $item->pics['icon']: '') }}"

                                                                   name="icon" id="icon"
                                                                   data-edit="insertImage"/>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <button id="send" type="submit" class="btn btn-success">
                                                            ارسال
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
                <div class="x_content">

                </div>
            </div>
        </div>
    </div>

@endsection
