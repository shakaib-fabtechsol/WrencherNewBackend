<div class="d-flex align-items-center justify-content-end">
    <a href="{{ route('Admin.Notifications') }}" class="border-1 rounded-circle bell-circle position-relative">
        <i class="fa-solid fa-bell text-secondary"></i>
        <div class="notifi-dot"></div>
    </a>
    <div bis_skin_checked="1">
        <div class="dropdown d-flex justify-content-between w-100 align-items-center" bis_skin_checked="1">
            <a class="mb-0 text-decoration-none d-flex align-items-end">
                <div class="ms-2 d-none d-sm-block me-2 me-sm-0" bis_skin_checked="1">
                    <h6 class="text-center mb-0 l-h font-md text-dark">Jake Zophres</h6>
                    <p class="mt-1 font-12 fw-semibold mb-0 text-secondary ">Super
                        Admin</p>
                </div>
                <div class="position-relative" bis_skin_checked="1">
                    <img src="{{ asset('img/user.png') }}" alt="user" class="userimg me-0">
                    <div class="dot-profile">

                    </div>
                </div>
            </a>
            <button id="dropdownIcon" class="border-0 bg-transparent ms-2 px-0" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-solid fa-caret-down fs-6 px-0 text-secondary"></i>
            </button>
            <ul class="dropdown-menu w-100">
                <li>
                    <a class="dropdown-item" href="{{ route('Admin.Profile') }}">
                        <i class="fa-solid fa-user me-2"></i>View
                        Profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('Admin.CreateSubadmin') }}">
                        <i class="fa-solid fa-user me-2"></i>Add Sub Admin</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <i class="fa-solid fa-bars d-md-none pointer ms-2"></i>
</div>

@include('Templates.UserLogoutModule')