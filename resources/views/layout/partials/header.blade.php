<div class="header">
    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="{{asset('/assets/img/logo.png')}}" width="35" height="35" alt=""> <span>Pre Clinic</span>
        </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);"><img src="assets/img/icons/bar-icon.svg" alt=""></a>
    <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="{{asset('/assets/img/icons/bar-icon.svg')}}"
            alt=""></a>
    <div class="top-nav-search mob-view">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <a class="btn"><img src="{{asset('/assets/img/icons/search-normal.svg')}}" alt=""></a>
        </form>
    </div>
    <ul class="nav user-menu float-end">
        <li class="nav-item dropdown has-arrow user-profile-list">
            <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                <div class="user-names">
                    <h5>{{ Auth::user()->name }}</h5>
                    <span>{{ Auth::user()->email }}</span>
                </div>
                <span class="user-img">
                    <img src="assets/img/user-06.jpg" alt="Admin">
                </span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        <li class="nav-item ">
            <a href="settings.html" class="hasnotifications nav-link"><img src="{{asset('/assets/img/icons/setting-icon-01.svg')}}"
                    alt=""> </a>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu float-end">
        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="fa-solid fa-ellipsis-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">SALIR</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
