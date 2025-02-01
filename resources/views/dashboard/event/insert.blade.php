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
                                    <h4 class="card-title">Tambah Event</h4>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <form action="{{ route('event.post') }}" method="post" enctype="multipart/form-data" id="eventForm">
                            @csrf
                            <div class="card-body pt-0">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <select id="default" name="kategori_event_uuid" required>
                                        <option selected readonly>Pilih kategori</option>
                                        @foreach ($kategori as $ka)
                                            <option value="{{ $ka->uuid }}">{{ $ka->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" placeholder="Masukkan Judul">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tags</label>
                                    <select id="multiSelect" name="tags[]">
                                        @foreach ($tags as $ta)
                                            <option value="{{ $ta->nama }}">{{ $ta->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sampul</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="file">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                    <div id="deskripsi" > </div>
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="iconoir-plus-circle menu-icon"></i> Submit</button>
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
            placeholder: 'Tulis sesuatu...',
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






