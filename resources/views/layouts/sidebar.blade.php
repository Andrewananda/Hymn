<div class="deznav-scroll">
    <div class="main-profile">
        <h5 class="mb-0 fs-20 text-black "><span class="font-w400">Hello,</span> {{ \Illuminate\Support\Facades\Auth::user()->name }}</h5>
        <p class="mb-0 fs-14 font-w400">{{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
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
                <li><a href="{{ route('hymn.all') }}">All Hymns</a></li>
                <li><a href="{{ route('hymn.add') }}">Add Hymn</a></li>
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
