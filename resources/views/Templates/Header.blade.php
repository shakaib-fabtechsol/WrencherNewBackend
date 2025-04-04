<nav class="navbar navbar-expand-lg shadow-sm navbar-light bg-light">
    <div class="mycontainer py-1 d-flex flex-wrap justify-content-between">
        <a href="{{ route('Home') }}" class="navbar-brand me-xl-5 pe-xl-3">
            <img src="{{ asset('img/logo-main.png') }}" alt="logo" class="w-100 h-auto">
        </a>
        <button class="navbar-toggler px-0 py-0 border-0 focus-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#mynavbar">
            <i class="fa-solid fa-bars fs-3"></i>
        </button>
        <div class="collapse navbar-collapse align-items-center" id="mynavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item px-xl-2">
                    <a class="nav-link text-grey " href="{{ route('Features') }}#why-wrencher">Why Wrencher?</a>
                </li>
                <li class="nav-item px-xl-2">
                    <a class="nav-link {{ request()->routeIs('Features') ? 'active' : '' }} text-grey"
                        href="{{ route('Features') }}">Features</a>
                </li>
                <li class="nav-item px-xl-2">
                    <a class="nav-link text-grey" href="{{ route('Home') }}#industries">Industries</a>
                </li>
                <li class="nav-item px-xl-2">
                    <a class="nav-link {{ request()->routeIs('Pricing') ? 'active' : '' }} text-grey"
                        href="{{ route('Pricing') }}">Pricing</a>
                </li>
                <li class="nav-item dropdown d-flex flex-wrap align-items-center px-xl-2">
                    <a href="{{ route('Resources') }}"
                        class="text-decoration-none {{ request()->routeIs('Resources') ? 'lblue' : 'text-grey' }}">Resources</a>
                    <button
                        class="nav-link {{ request()->routeIs('Resources') ? 'active' : '' }}  dropdown-toggle d-flex align-items-center text-grey"
                        href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-caret-down ms-2 ms-lg-0" id="dropdownIcon"></i>
                    </button>
                    <ul class="dropdown-menu new-dropdown shadow border-0 px-0 right-0"
                        aria-labelledby="resourcesDropdown">
                        <li><a class="dropdown-item px-3 py-2 border-bottom border-1"
                                href="{{ route('Resources') }}#trainings">Trainings</a></li>
                        <li><a class="dropdown-item px-3 py-2 border-bottom border-1"
                                href="{{ route('Resources') }}#calculators">Calculators</a></li>
                        <li><a class="dropdown-item px-3 py-2 border-bottom border-1" href="#">National
                                Averages</a></li>
                        <li><a class="dropdown-item px-3 py-2 border-bottom border-1" href="#">Sample
                                Contracts</a></li>
                        <li><a class="dropdown-item px-3 py-2  " href="{{ route('ResourcesAll') }}">See All</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item px-xl-2">
                    <a class="nav-link d-flex align-items-center text-grey" href="#">
                        <i class="fa-solid fa-phone sky me-1"></i>
                        <span>1-999-999-9090</span>
                    </a>
                </li>
                @if (session()->has('user'))
                    <li class="nav-item px-xl-2">
                        <a class="nav-link text-grey" href="{{ route('Logout') }}">Logout</a>
                    </li>
                    <li class="nav-item d-flex align-items-center ps-xl-0">
                        @php
                            $dashboardRoute = '#'; // Default fallback
                            if (session('user')->role == 2) {
                                $dashboardRoute = route('Client.Dashboard');
                            } elseif (session('user')->role == 1) {
                                $dashboardRoute = route('BusinessUser.Dashboard');
                            } elseif (session('user')->role == 0) {
                                $dashboardRoute = route('Admin.Dashboard');
                            }
                        @endphp
                        <a class="text-decoration-none text-grey w-auto bg-sky text-white py-2 px-4 rounded-pill"
                            href="{{ $dashboardRoute }}">
                            Dashboard
                        </a>
                    </li>
                @else
                    <li class="nav-item px-xl-2">
                        <a class="nav-link text-grey" href="{{ route('Login') }}">Login</a>
                    </li>
                    <li class="nav-item d-flex align-items-center ps-xl-0">
                        <a class="text-decoration-none text-grey w-auto bg-sky text-white py-2 px-4 rounded-pill"
                            href="{{ route('Signup') }}">Sign Up</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
