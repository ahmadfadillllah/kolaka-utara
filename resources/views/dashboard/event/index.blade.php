@include('layout.head', ['title' => 'Event'])
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
                                    <h4 class="card-title mb-0">Event</h4>
                                    <a href="{{ route('event.insert') }}" class="btn btn-dark"><i class="iconoir-plus-circle menu-icon"></i> Tambah Event</a>
                                </div>
                            </div>  <!--end row-->
                        </div><!--end card-header-->

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table datatable" id="datatable_1">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Tags</th>
                                            <th>Telah dilaksanakan?</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($event as $ev)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ev->nama_kategori }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($ev->judul, 70) }}</td>
                                            <td>{{ $ev->tags }}</td>
                                            <td>{{ $ev->done ? 'Ya' : 'Belum' }}</td>
                                            <td>
                                                @if ($ev->done)
                                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#doneEvent{{ $ev->uuid }}">Undone</button>
                                                @else
                                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#doneEvent{{ $ev->uuid }}">Done</button>
                                                @endif
                                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteEvent{{ $ev->uuid }}">Hapus</button>
                                            </td>
                                        </tr>
                                        @include('dashboard.event.modal.delete')
                                        @include('dashboard.event.modal.done')

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
