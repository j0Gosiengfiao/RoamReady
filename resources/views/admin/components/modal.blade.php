<!--Can be used by other backend roles page-->
<div class="modal" id="SearchModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header gap-2">
                <div class="position-relative popup-search w-100">
                    <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
                        placeholder="Search">
                    <span
                        class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i
                            class='bx bx-search'></i></span>
                </div>
                <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @yield('search-list')
            </div>
        </div>
    </div>
</div>