@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title">
                    <h2>ثتب سفارش  {{$product->name}}</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include("Admin.error")
                        <form class="form-horizontal form-label-left " action="" method="post">
                            {{ csrf_field()  }}
                            <span class="section">اطلاعات سفارش</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full_name">نام کامل
                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="full_name" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6" data-validate-words="2"
                                           name="full_name"
                                           value="{{ old('full_name',isset($ritem) ? $ritem->full_name: '') }}"
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="count">تعداد

                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="count" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6" data-validate-words="2"
                                           name="count"
                                           value="{{ old('count',isset($ritem) ? $ritem->count: '') }}"
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

                                    </select>
                                </div>
                            </div>


                                <div class="item form-group">




                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post_ID">کد پستی

                                        <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="post_ID" class="form-control col-md-7 col-xs-12"
                                               data-validate-length-range="6" data-validate-words="2"
                                               name="post_ID"
                                               value="{{ old('post_ID',isset($ritem) ? $ritem->post_ID: '') }}"
                                               required="required" type="text">
                                    </div>
                                </div>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">آدرس
                                        <span
                                            class="required">*</span>

                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea name="address" id="address"
                                                          class="form-control col-md-7 col-xs-12" rows="10"

                                                          type="text">{{old('address',isset($item) ? $item->address: '') }}</textarea>
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
