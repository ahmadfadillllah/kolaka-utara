@include('dashboard.layout.head', ['title' => 'Users'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">Dashboard</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Hak Akses Pengguna</li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="ml-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light">Settings</button>
                        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $us)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $us->username }}</td>
                                        <td>{{ $us->email }}</td>
                                        <td>{{ $us->role }}</td>
                                        <td>
                                            {{-- @if (Auth::user()->statusenabled == true)
                                                <a href="#" class="badge badge-warning" data-toggle="modal" data-target="#changeStatus{{ $us->id }}">Disabled</a>
                                            @else
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#changeStatus{{ $us->id }}">Enabled</a>
                                            @endif --}}
							                <a href="#" class="badge badge-info" data-toggle="modal" data-target="#resetPassword{{ $us->id }}">Reset Password</a>
                                        </td>
                                    </tr>
                                @include('dashboard.users.modal.resetPassword')
                                @include('dashboard.users.modal.changeStatus')
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@include('dashboard.layout.footer')
