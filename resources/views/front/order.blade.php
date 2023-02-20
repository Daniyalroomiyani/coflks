<section class="order" id="comment">
    <h1 class="heading">نظر <span>شما</span> مهم است  </h1>

    <div class="row">

        <div class="image">
            <img  src="{{asset('storage/images/site/' . $item->pics['down'])}}" alt="فرشاد حسنپور">
        </div>

        <form style="padding-top: 10%" action="{{route('save_comment')}}" method="post">
            {{ csrf_field()  }}

            @include('Admin.error')
            <div class="inputBox">
                <input type="text" name="name" required placeholder="نام">
                <input type="number" name="rate"  required placeholder="نمره(1-5)">
            </div>

{{--            <div class="inputBox">--}}
{{--                <input type="number" placeholder="شماره همراه">--}}
{{--                <input type="text" placeholder="سفارش">--}}
{{--            </div>--}}

            <textarea name="txt" id="txt" cols="30" rows="10" placeholder="نظر شما"></textarea>

            <input type="submit" value="ثبت سفارش" class="btn">

        </form>

    </div> <!-- row -->

</section>
