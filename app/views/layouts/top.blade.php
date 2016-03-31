<header class="top-nav">
    <div class="top-nav-inner">
        <div class="">
            <button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleSM">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav-notification pull-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-lg"></i>{{Auth::user()->user_name}}</a>
                    <span class="badge badge-danger bounceIn">1</span>
                    <ul class="dropdown-menu dropdown-sm pull-right user-dropdown">
                        <li class="user-avatar">
                            <div class="user-content">
                                <h5 class="no-m-bottom">{{Auth::user()->user_name}}</h5>
                                <div class="m-top-xs">
                                    <a href="{{url('/logout')}}">退出登陆</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{url('auth')}}">
                               用户管理
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- ./top-nav-inner -->
</header>