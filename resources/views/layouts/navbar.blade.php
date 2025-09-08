<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/sistem/PUTIH_Logo_laciKita.png') }}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <a href="#" class="waves-effect waves-light">
                        <img src="{{ asset('assets/images/sistem/' . ($user->gender == 'Laki-laki' ? 'user_pria.png' : 'user_wanita.png')) }}"
                            class="img-radius" alt="User-Image">
                        <span>{{ $user->name }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                        <li>
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ti-layout-sidebar-left"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                @csrf</form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
