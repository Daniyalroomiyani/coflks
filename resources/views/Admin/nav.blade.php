<div class="top_nav hidden-print">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">

                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        <img src="{{asset("storage/images/".\Illuminate\Support\Facades\Auth::user()->pic)}}" alt="">
                        {{\Illuminate\Support\Facades\Auth::user()->firstname . " ".\Illuminate\Support\Facades\Auth::user()->lastname}}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">


                        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</div>
