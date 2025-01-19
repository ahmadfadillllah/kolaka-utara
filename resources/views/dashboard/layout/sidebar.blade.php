<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{ asset('home') }}/assets/img/logo-kolaka.png" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h4 class="logo-text">KolutEventa</h4>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard.index') }}">
                <div class="parent-icon"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Web Apps</li>
        <li>
            <a href="{{ route('event.index') }}">
                <div class="parent-icon"><i class="bx bx-task"></i>
                </div>
                <div class="menu-title">Event</div>
            </a>
        </li>
        <li>
            <a href="{{ route('kontak.index') }}">
                <div class="parent-icon"><i class="bx bx-help-circle"></i>
                </div>
                <div class="menu-title">Kontak Kami</div>
            </a>
        </li>

        <li>
            <a href="{{ route('kategorievent.index') }}">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Kategori Event</div>
            </a>
        </li>
        <li>
            <a href="{{ route('tagsevent.index') }}">
                <div class="parent-icon"><i class="fadeIn animated bx bx-cabinet"></i>
                </div>
                <div class="menu-title">Tags Event</div>
            </a>
        </li>
        <li class="menu-label">Others</li>
        <li>
            <a href="{{ route('users.index') }}">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Hak Akses Pengguna</div>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}">
                <div class="parent-icon"><i class="bx bx-lock"></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
