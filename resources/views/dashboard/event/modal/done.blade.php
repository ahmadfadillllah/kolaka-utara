<div class="modal fade" id="doneEvent{{ $ev->uuid }}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center p-5">
                <lord-icon
                    src="../../tdrtiskw.json"
                    trigger="loop"
                    colors="primary:#f7b84b,secondary:#405189"
                    style="width:130px;height:130px">
                </lord-icon>
                <div class="mt-0 pt-4">
                    <h4>Yakin mengubah status event ini?</h4>
                    <!-- Toogle to second dialog -->
                    <a href="{{ route('event.done', $ev->uuid) }}" type="button"  class="btn btn-danger">Update</a>
                </div>
            </div>
        </div>
    </div>
</div>
