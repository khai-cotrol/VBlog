<div class="nav_menu">
    <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">

        <ul class=" navbar-right" style="margin-right: 120px">
            <li class="nav-item dropdown open" >
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->img )}}" style="width: 30px;height: 30px" alt="">{{\Illuminate\Support\Facades\Auth::user()->name}}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                    <a class="dropdown-item"  href="{{route('post.list')}}">
                        <span>home</span>
                    </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
            </li>
        </ul>
    </nav>
</div>
