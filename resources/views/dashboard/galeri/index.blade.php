@include('dashboard.layout.head', ['title' => 'Galeri'])
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
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#insertGaleri">Tambah</button>
                        @include('dashboard.galeri.modal.insert')
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                @foreach ($galeri as $ga)
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <img src="{{ asset('storage') }}/{{ $ga->path }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#"  class="card-link btn btn-danger" data-toggle="modal" data-target="#deleteGaleri{{ $ga->uuid }}">Hapus</a>
                        </div>
                        @include('dashboard.galeri.modal.delete')
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@include('dashboard.layout.footer')
