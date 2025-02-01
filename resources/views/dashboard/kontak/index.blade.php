@include('layout.head', ['title' => 'Kontak'])
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
                                    <h4 class="card-title mb-0">Kontak</h4>

                                </div>
                            </div>  <!--end row-->
                        </div><!--end card-header-->

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table datatable" id="datatable_1">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Subject</th>
                                            <th>Email</th>
                                            <th>No. WhatsApp</th>
                                            <th>Pesan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($kontak as $ko)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ko->name }}</td>
                                            <td>{{ $ko->subject }}</td>
                                            <td>{{ $ko->email }}</td>
                                            <td>{{ $ko->no_wa }}</td>
                                            <td>{{ $ko->message }}</td>
                                            <td><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteKontak{{ $ko->uuid }}">Hapus</button></td>
                                        </tr>
                                        @include('dashboard.kontak.modal.delete')

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
