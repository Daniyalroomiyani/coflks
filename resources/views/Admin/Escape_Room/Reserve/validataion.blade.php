@extends('Admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title">
                        <h2>لطفا خطا های زیر را برطرف نمایید</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="alert  panel panel-danger alert-danger   "style="background-color: #792222;color: aliceblue">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>

                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>

                        <div class="text-center text-black-50">
                            <button class="btn btn-app" style="background-color: rgba(55,87,29,0.37)"
                               onclick="goBack()" >

                                <i   class="fa fa-backward"> صفحه قبل</i>
                            </button>
                    </div>

            </div>
        </div>
    </div>

@endsection
