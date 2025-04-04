<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 py-3">
            <div class="modal-body border-0">
                <h2 class="fw-bold text-center">Logout Confirmation</h2>
                <p class="fs-5 text-center">Do you want to Logout</p>
            </div>
            <div class="modal-footer d-flex justify-content-center border-0">
                <button type="button"
                    class="border-1 px-4 py-2 rounded-3 border-primary bg-transparent text-black fw-medium me-3"
                    data-bs-dismiss="modal">Cancel</button>
                <a href="{{ route('Logout') }}"
                    class="px-4 py-2 rounded-3 bg-primary border-1 text-decoration-none border-primary text-white">Confirm</a>
            </div>
        </div>
    </div>
</div>
