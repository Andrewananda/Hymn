<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>ar Hire</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Car</b>Hire</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
{{--                        <img src="{{\Illuminate\Support\Facades\Auth::user()->photo}}" class="user-image" alt="User Image">--}}
                        <span class="hidden-xs">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{\Illuminate\Support\Facades\Auth::user()->photo}}" class="img-circle" alt="User Image">

                            <p>
                                {{\Illuminate\Support\Facades\Auth::user()->name}}
                                <small>Member since. {{\Illuminate\Support\Facades\Auth::user()->created_at}}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-footer">
                            <div class="pull-left">
{{--                                <a href="{{ route('profile') }}" class="btn btn-default btn-flat">Profile</a>--}}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>
