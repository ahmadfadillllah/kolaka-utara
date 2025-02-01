<div class="modal fade" id="insertTags" tabindex="-1" role="dialog" aria-labelledby="exampleModalDark1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h6 class="modal-title m-0 text-white" id="exampleModalDark1">Tambah Tags Event</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <form action="{{ route('tagsevent.insert') }}" method="post">
                @csrf
                <div class="modal-body">
                        <div class="row">

                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>

                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark btn-sm">Submit</button>
                </div>
            </form>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div>
<script>
    // Mendapatkan tanggal hari ini
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd; // Format: YYYY-MM-DD

    // Menetapkan nilai default pada input
    document.getElementById('tanggalMasuk').value = today;
</script>


