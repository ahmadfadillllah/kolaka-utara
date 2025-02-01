@include('layout.head', ['title' => 'Hak Akses Pengguna'])
@include('layout.topbar')
@include('layout.leftbar')

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-xxl">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col d-flex align-items-center justify-content-between">
                                    <h4 class="card-title mb-0">Hak Akses Pengguna</h4>

                                </div>
                            </div>  <!--end row-->
                        </div><!--end card-header-->

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table datatable" id="datatable_1">
                                    <thead class="table-light">
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
                                            <td><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#resetPassword{{ $us->id }}">Reset Password</button></td>
                                        </tr>
                                        @include('dashboard.users.modal.resetPassword')

                                        @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->


        </div><!-- container -->
    </div>
    <!-- end page content -->
</div>
@include('layout.footer')
