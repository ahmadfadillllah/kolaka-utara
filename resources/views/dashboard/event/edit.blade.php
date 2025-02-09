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
                                <div class="col">
                                    <h4 class="card-title">Edit Event</h4>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <form action="{{ route('event.update', $event->uuid) }}" method="post" enctype="multipart/form-data" id="eventForm">
                            @csrf
                            <div class="card-body pt-0">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <select id="default" name="kategori_event_uuid" required>
                                        <option value="{{ $event->kategori_event_uuid }}" selected>{{ $event->nama_kategori }}</option>
                                        @foreach ($kategori as $ka)
                                            <option value="{{ $ka->uuid }}">{{ $ka->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" value="{{ $event->judul }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tags</label>
                                    <select id="multiSelect" name="tags[]" multiple>
                                        @foreach ($tags as $ta)
                                            <option value="{{ $ta->nama }}"
                                                @if(in_array($ta->nama, explode(',', $event->tags))) selected @endif>
                                                {{ $ta->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <!-- Kolom pertama: Label dan Gambar Sampul -->
                                    <div class="col-md-6 mb-3">
                                        <label for="currentCover" class="form-label">Sampul</label>
                                        <img src="{{ asset('storage') }}/{{ $event->path }}" alt="Current Sampul" style="max-width: 100%; height: auto;">
                                    </div>

                                    <!-- Kolom kedua: Input File untuk Update Sampul -->
                                    <div class="col-md-6 mb-3">
                                        <label for="fileInput" class="form-label">Update Sampul</label>
                                        <input type="file" class="form-control" id="fileInput" name="file">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                    <div id="deskripsi"></div>
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="iconoir-plus-circle menu-icon"></i> Update</button>
                            </div>
                        </form>
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div><!-- container -->
    </div>
    <!-- end page content -->
</div>
@include('layout.footer')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Quill editor
        var quill = new Quill('#deskripsi', {
    theme: 'snow',
    modules: {
        toolbar: [
            [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'align': [] }],
            ['bold', 'italic', 'underline'],
            ['link']
        ]
    }
});

// Setelah inisialisasi, set konten dari Laravel Blade
quill.root.innerHTML = `{!! $event->deskripsi !!}`;


        // Menambahkan event listener saat form disubmit
        var form = document.getElementById('eventForm');
        if (form) { // Pastikan form ditemukan sebelum menambahkan event listener
            form.addEventListener('submit', function(e) {
                // Ambil konten dari Quill
                var deskripsi = quill.root.innerHTML;

                // Cek apakah konten kosong
                if (!deskripsi || deskripsi.trim() === '') {
                    alert("Deskripsi tidak boleh kosong!");
                    e.preventDefault(); // Mencegah form disubmit jika kosong
                    return;
                }

                // Menambahkan konten Quill ke dalam form (bisa disesuaikan sesuai kebutuhan)
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", "deskripsi");  // nama field di server
                hiddenField.setAttribute("value", deskripsi);
                form.appendChild(hiddenField); // Menambahkan ke form
            });
        } else {
            console.error('Form with ID "eventForm" not found!');
        }
    });
</script>






