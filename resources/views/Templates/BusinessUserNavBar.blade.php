<div class="d-flex align-items-center justify-content-end">
    <a href="{{ route('BusinessUser.Notifications') }}"
        class="border-1 rounded-circle bell-circle position-relative">
        <i class="fa-solid fa-bell text-secondary"></i>
        <div class="notifi-dot"></div>
    </a>
    <div bis_skin_checked="1">
        <div class="dropdown d-flex justify-content-between w-100 align-items-center" bis_skin_checked="1">
            <a class="mb-0 text-decoration-none d-flex align-items-center">
                <div class="ms-2 d-none d-sm-block me-2 me-sm-0" bis_skin_checked="1">
                    <h6 class="text-center mb-0 l-h font-md text-dark">John Smith</h6>

                </div>
                <div class="position-relative" bis_skin_checked="1">
                    <img src="{{ asset('img/user.png') }}" alt="user" class="userimg me-0">
                    <div class="dot-profile">

                    </div>
                </div>
            </a>
            <button id="dropdownIcon" class="border-0 bg-transparent ms-2 px-0" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-solid fa-caret-down fs-6"></i>
            </button>
            <ul class="dropdown-menu w-100">
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fa-solid fa-user me-2"></i>View
                        Profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                        data-bs-target="#logoutModal">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <i class="fa-solid fa-bars d-md-none pointer ms-2"></i>
</div>
