<div class="modal fade" id="resetPassword{{ $us->id }}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
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
                    <h4>Yakin mereset password user ini?</h4>
                    <p class="text-muted"> Password default: 12345</p>
                    <!-- Toogle to second dialog -->
                    <a href="{{ route('users.resetPassword', $us->id) }}" type="button"  class="btn btn-danger">Reset</a>
                </div>
            </div>
        </div>
    </div>
</div>
