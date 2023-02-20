@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>اتاق فرار</h2>

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
                            @if(isset($item))
                                <li role="presentation" class=""><a href="#tab_content3" role="tab"
                                                                    id="profile-tab" data-toggle="tab"
                                                                    aria-expanded="false">سکشن ها</a>
                                </li>
                            @endif
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">َعنوان
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="themes[]">ژانر
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                                                <select name="themes[]" class="form-control select-city"
                                                        multiple="multiple" id="themes[]">

                                                    @foreach($cats as $i)
                                                        <option
                                                            value="{{  $i->id }}" {{isset($item)? (in_array($i->id , $select_ids)) ? 'selected' : '' : ''}} >{{ $i->name  }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_id">شعبه
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                                                <select name="branch_id" class="form-control select-city"
                                                        id="branch_id">

                                                    @foreach($branches as $i)
                                                        <option
                                                            value="{{  $i->id }}" {{isset($item)? ($i->id == $item->branch_id) ? 'selected' : '' : ''}} >{{ $i->name  }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="players">تعداد
                                                افراد مجاز(n-n)
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="players" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="players"
                                                       value="{{ old('players',isset($item) ? $item->players: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="time_to_play">زمان (دقیقه)
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="time_to_play" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="time_to_play"
                                                       value="{{ old('time_to_play',isset($item) ? $item->time_to_play: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ages">رده سنی(بالا تر از)
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="ages" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="ages"
                                                       value="{{ old('ages',isset($item) ? $item->ages: '') }}"
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link">لینک فیلم
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="link" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="link"
                                                       value="{{ old('link',isset($item) ? $item->link: '') }}"
                                                       required="required" type="text">
                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rules">سناریو
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea name="rules" id="rules"
                                                          class="form-control col-md-7 col-xs-12" rows="10"

                                                          required="required"
                                                          type="text">{{old('rules',isset($item) ? $item->rules: '') }}</textarea>
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
                                            <label for="pic" class="control-label col-md-3">عکس </label>
                                            <div class="btn-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="file" data-role="magic-overlay" data-target="#pictureBtn"
                                                       value="{{ old('pic',isset($item) ? $item->pic: '') }}"
                                                       name="pic" id="pic" data-edit="insertImage"/>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rate">درجه
                                                سختی
                                                <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 ">

                                                <input class="knob" data-width="100" data-height="120"
                                                       data-angleOffset=-125
                                                       data-angleArc=250 data-fgColor="#34495E"
                                                       data-rotation="anticlockwise" name="rate"
                                                       value="{{old('rate' , isset($item) ? $item->rate : 50)}}">
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
                                            <img
                                                class="img-responsive img-rounded justify-content-center image center-margin"
                                                name="picture" alt="تصویر بازی "
                                                src="{{old('picture' , isset($item)? asset('storage/images/escape_rooms').'/'.$item->pic:'')}}">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(isset($item))
                                <div role="tabpanel" class="tab-pane fade" id="tab_content3"
                                     aria-labelledby="profile-tab">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_content">
                                            @include('Admin.notifications')
                                            @if(isset($item) && isset($item->reserve_section) && count($item->reserve_section) > 0)

                                                <table id="datatable"
                                                       class="table table-striped table-bordered text-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">ساعت شروع</th>

                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @foreach($item->reserve_section as $itm)
                                                        <tr>
                                                            <td>{{$itm}}</td>


                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="pull-left">
                                                    <a class="btn btn-app" href="{{route('edit_section' , $item->id)}}">
                                                        <i class="fa fa-edit"></i> ویرایش
                                                    </a>
                                                </div>
                                            @else
                                                <h2>اطلاعاتی یافت نشد</h2>
                                                <form class="form-horizontal form-label-left "
                                                      action="{{route('add_section',$item->id )}}"
                                                      method="post">

                                                    {{ csrf_field()  }}
                                                    <span class="section">افزودن سکشن </span>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                               for="sections">تعداد سکشن ها
                                                            <span
                                                                class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="sections" class="form-control col-md-7 col-xs-12"
                                                                   data-validate-length-range="6"
                                                                   data-validate-words="2"
                                                                   name="sections"
                                                                   value="{{ old('sections') }}"
                                                                   required="required" type="text">
                                                        </div>
                                                    </div>



                                                    <div class="pull-left">
                                                        <button id="send" type="submit" class="btn btn-app"><i
                                                                class="fa fa-plus"></i> افزودن
                                                        </button>
                                                    </div>
                                                </form>



                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
