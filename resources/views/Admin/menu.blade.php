<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{asset("storage/images/".\Illuminate\Support\Facades\Auth::user()->pic)}}" alt="..."
             class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>خوش آمدید,</span>
        <h2>{{\Illuminate\Support\Facades\Auth::user()->firstname . " ".\Illuminate\Support\Facades\Auth::user()->lastname}}</h2>
    </div>
</div>
<!-- /menu profile quick info -->

<br/>


<!-- sidebar menu  admin-->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i> خانه <span class="fa "></span></a>

            </li>


            <li><a><i class="fa fa-picture-o"></i> گالری  <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('list_gallery')}}">لیست</a></li>
                    <li><a href="{{route('add_gallery')}}">افزودن</a></li>

                </ul>
            </li>

            <li><a><i class="fa fa-shopping-basket"></i> فروشگاه <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">

                    <li><a>محصولات<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="sub_menu"><a href="{{route('list_Product')}}">لیست محصولات</a>
                            </li>
                            <li><a href="{{route('add_Product')}}">افزودن محصول</a>
                            </li>
                            <li><a href="{{route('list_category_for_products')}}">مدیریت دسته بندی ها</a>
                            </li>
                        </ul>
                    </li>

                    <li><a>سفارشات<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="sub_menu"><a href="{{route('list_Order')}}">لیست سفارش ها</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>

            <li><a><i class="fa fa-newspaper-o"></i> اخبار <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('list_Feed')}}">لیست</a></li>
                    <li><a href="{{route('add_Feed')}}">افزودن</a></li>
                    <li><a href="{{route('list_CategoryFeed')}}">دسته بندی ها</a></li>


                </ul>
            </li>

            <li><a href="{{route('list_comment')}}"><i class="fa fa-comment-o"></i> نظرات  <span class="fa "></span></a>

            <li><a><i class="fa fa-male"></i>مدیریت کاربران<span
                        class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('userlist')}}">لیست کاربران</a></li>
                    <li><a href="{{route('register')}}">افزودن کاربر</a></li>

                </ul>
            </li>

            <li><a href="{{route('edit.config')}}"><i class="fa fa-cogs"></i> تنظیمات  <span class="fa "></span></a>


            </li>


        </ul>
    </div>


</div>
<!-- /sidebar menu -->


<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">

    <a data-toggle="tooltip"
       href="{{\Illuminate\Support\Facades\Auth::user()->admin ? route('edit' , \Illuminate\Support\Facades\Auth::user()->id): '#'}}"
       data-placement="top" title="پروفایل">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
        <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="خروج" href="{{route('logout')}}">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
