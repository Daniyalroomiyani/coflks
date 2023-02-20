@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title">
                    <h2>رزرو {{$room->name}}</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include("Admin.error")
                        <form class="form-horizontal form-label-left " action="{{route('do_save_Reserve')}}" method="post">
                            {{ csrf_field()  }}
                            <input type="hidden" name="room_id" value="{{$room->id}}">
                            <input type="hidden" name="date" value="{{$data['date']}}">
                            <input type="hidden" name="section" value="{{$data['section']}}">
                            <span class="section">اطلاعات رزرو کننده</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Fname">نام
                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="Fname" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6" data-validate-words="2"
                                           name="Fname"
                                           value="{{ old('Fname',isset($ritem) ? $ritem->Fname: '') }}"
                                           required="required" type="text">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Lname">نام خانوادگی
                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="Lname" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6" data-validate-words="2"
                                           name="Lname"
                                           value="{{ old('Lname',isset($ritem) ? $ritem->Lname: '') }}"
                                           required="required" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">شماره تلفن
                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="phone" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6" data-validate-words="2"
                                           name="phone"
                                           value="{{ old('phone',isset($ritem) ? $ritem->phone: '') }}"
                                           required="required" type="text">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numbers">تعداد
                                    افراد
                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="numbers" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6" data-validate-words="2"
                                           name="numbers"
                                           value="{{ old('numbers',isset($ritem) ? $ritem->numbers: '') }}"
                                           required="required" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numbers">نحوه پرداخت
                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="payment_method" class="form-control select-city"
                                            id="payment_method">


                                            <option value="cash"> نقدی </option>
                                            <option value="transfer"> کارت به کارت </option>
                                            <option value="pose"> کارتخون </option>

                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paid">مبلغ پرداخت شده
                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="paid" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6" data-validate-words="2"
                                           name="paid"
                                           required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption">توضیحات

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea name="caption" id="caption"
                                                          class="form-control col-md-7 col-xs-12" rows="10"

                                                          type="text">{{old('caption',isset($item) ? $item->caption: '') }}</textarea>
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

            </div>
        </div>
    </div>

@endsection
