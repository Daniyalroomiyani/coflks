@if($errors->any())
    <div class="alert  panel panel-danger alert-danger   "style="background-color: #792222;color: aliceblue;text-align: center;">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
