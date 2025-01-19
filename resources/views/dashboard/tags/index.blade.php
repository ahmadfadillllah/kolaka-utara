@include('dashboard.layout.head', ['title' => 'Tags Event'])
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
                            <li class="breadcrumb-item active" aria-current="page">Tags Event</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#insertTags">Tambah</button>
                        @include('dashboard.tags.modal.insert')
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $ta)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ta->nama }}</td>
                                        <td>
							                <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#deleteTags{{ $ta->uuid }}">Hapus</a>
                                        </td>
                                    </tr>
                                @include('dashboard.tags.modal.delete')
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
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
