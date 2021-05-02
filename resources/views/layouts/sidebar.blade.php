<div class="deznav-scroll">
    <div class="main-profile">
        <img src="{{asset('assets/images/Untitled-1.jpg')}}" alt="">
        <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
        <h5 class="mb-0 fs-20 text-black "><span class="font-w400">Hello,</span> Marquez</h5>
        <p class="mb-0 fs-14 font-w400">marquezzzz@mail.com</p>
    </div>
    <ul class="metismenu" id="menu">
        <li><a class="ai-icon" href="#" aria-expanded="false">
                <i class="flaticon-144-layout"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-077-menu-1"></i>
                <span class="nav-text">Hymn</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="./app-profile.html">All Hymns</a></li>
                <li><a href="">Add Hymn</a></li>
            </ul>
        </li>

        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-077-menu-1"></i>
                <span class="nav-text">Category</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('category.all') }}">All Categories</a></li>
                <li><a href="{{ route('category.add') }}">Add Category</a></li>
            </ul>
        </li>

        <li>
            <a href="{{route('logout')}}">
                <i class="flaticon-003-logout"></i>
                <span class="nav-text">Sign Out</span>
            </a>
        </li>
    </ul>
</div>
