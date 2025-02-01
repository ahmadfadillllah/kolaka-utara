<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="javascript:void(0)" class="logo">
            {{-- <span>
                <img src="logo.png" alt="logo-small" class="logo-sm">
            </span> --}}
            <span class="">
                <img src="{{ asset('home') }}/assets/img/logo-kolaka.png" class="logo-icon-2" alt="" style="width:60px" />
            </span>
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <!-- <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small> -->
                        <span>Main Menu</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.index') }}">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li class="menu-label mt-2">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Web Apps</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategorievent.index') }}">
                            <i class="iconoir-archive menu-icon"></i>
                            <span>Kategori Event</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('event.index') }}">
                            <i class="iconoir-archive menu-icon"></i>
                            <span>Event</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tagsevent.index') }}">
                            <i class="iconoir-archive menu-icon"></i>
                            <span>Tags Event</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak.index') }}">
                            <i class="iconoir-multiple-pages-empty menu-icon"></i>
                            <span>Kontak Kami</span>
                        </a>
                    </li>
                    <li class="menu-label mt-2">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Others</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <i class="iconoir-page-flip menu-icon"></i>
                            <span>Hak Akses Pengguna</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="iconoir-split-square-dashed menu-icon"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!--end startbar-collapse-->
    </div>
    <!--end startbar-menu-->
</div>
<div class="startbar-overlay d-print-none"></div>
