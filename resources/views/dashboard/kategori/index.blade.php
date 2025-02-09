@include('layout.head', ['title' => 'Kategori Event'])
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
                                    <h4 class="card-title mb-0">Kategori Event</h4>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#insertKategori"><i class="iconoir-plus-circle menu-icon"></i> Tambah</button>
                                    @include('dashboard.kategori.modal.insert')
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
                                            @if (Auth::user()->role = 'admin')
                                            <th>Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($kategori as $ka)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ka->nama }}</td>
                                            @if (Auth::user()->role = 'admin')
                                            <td>
                                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editKategori{{ $ka->uuid }}">Edit</button>
                                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteKategori{{ $ka->uuid }}">Hapus</button>
                                            </td>
                                            @endif
                                        </tr>
                                        @include('dashboard.kategori.modal.edit')
                                        @include('dashboard.kategori.modal.delete')

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
