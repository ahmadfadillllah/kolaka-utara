<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
            </a>
        </div>
        <div class="flex-grow-1 search-bar">
            <form action="{{ route('event.index') }}" method="GET">
                <div class="input-group">
                    <div class="input-group-prepend search-arrow-back">
                        <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Cari Event" name="event" />
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="right-topbar ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item search-btn-mobile">
                    <a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
                    </a>
                </li>

                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
                        <div class="media user-box align-items-center">
                            <div class="media-body user-info">
                                <p class="user-name mb-0">{{ Auth::user()->username }}</p>
                                <p class="designattion mb-0">{{ Auth::user()->email }}</p>
                            </div>
                            <img src="{{ asset('dashboard/codervent/syntrans/demo/vertical/assets') }}/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
                                class="bx bx-user"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="javascript:;"><i
                                class="bx bx-cog"></i><span>Ganti Password</span></a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i
                                class="bx bx-power-off"></i><span>Logout</span></a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>
