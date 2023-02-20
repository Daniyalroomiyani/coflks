@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>خبر</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">


                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include("Admin.error")
                        <form class="form-horizontal form-label-left " action="" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field()  }}
                            <span class="section">اطلاعات اصلی</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">موضوع
                                    <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="subject" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6" data-validate-words="2"
                                           name="subject"
                                           value="{{ old('subject',isset($item) ? $item->subject: '') }}"
                                           required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                   <label class="control-label col-md-1 col-sm-1 col-xs-12" for="question">سوال
                                       <span
                                           class="required">*</span>
                                   </label>
                                   <div class="col-md-5 col-sm-5 col-xs-12">
                                                <textarea name="question" id="question"
                                                          class="form-control col-md-7 col-xs-12" rows="10"

                                                          required="required"
                                                          type="text">{{old('question',isset($item) ? $item->question: '') }}</textarea>
                                   </div>


                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="answer">پاسخ
                                        <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                                <textarea name="answer" id="answer"
                                                          class="form-control col-md-7 col-xs-12" rows="10"

                                                          required="required"
                                                          type="text">{{old('answer',isset($item) ? $item->answer: '') }}</textarea>
                                    </div>
                            </div>





                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success btn-block">ارسال</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
