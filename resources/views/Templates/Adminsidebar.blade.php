<div class="left ">
    <div class="left-top">
        <a href="{{ route('Admin.Dashboard') }}" class="logodiv pt-4">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </a>

    </div>
    <div class="left-mid pt-4">
        <div class="list">
            <ul class="first-ul">
                <li>
                    <a href="{{ route('Admin.Dashboard') }}"
                        class="sidelink {{ request()->routeIs('Admin.Dashboard', 'Admin.WebsiteAnalytics') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Admin.Dashboard', 'Admin.WebsiteAnalytics') ? asset('img/dashboard-active.png') : asset('img/dashboard.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Dashboard</p>
                        </div>
                        <i class="fas fa-chevron-down chevron-icon" data-target="#dashboardMenu"></i>
                    </a>
                    <ul id="dashboardMenu" class="collapse mydropdown">
                        <li><a class="sidelink" href="{{ route('Admin.WebsiteAnalytics') }}">Website Analytics</a></li>
                    </ul>
                </li>
                <li class="my-2">
                    <a href="{{ route('Admin.BusinessManagement') }}"
                        class="sidelink {{ request()->routeIs('Admin.BusinessManagement', 'Admin.ViewDetail') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Admin.BusinessManagement', 'Admin.ViewDetail') ? asset('img/business-active.png') : asset('img/business.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Business</p>
                        </div>
                    </a>
                </li>
                <li class="my-2">
                    <a href="{{ route('Admin.Chat') }}"
                        class="sidelink {{ request()->routeIs('Admin.Chat') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Admin.Chat') ? asset('img/chat-active.png') : asset('img/chat.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Chat</p>
                        </div>
                    </a>
                </li>
                <li class="my-2">
                    <a href="{{ route('Admin.Packages') }}"
                        class="sidelink {{ request()->routeIs('Admin.Packages') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Admin.Packages') ? asset('img/promotion-active.png') : asset('img/promotion.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Packages</p>
                        </div>
                    </a>
                </li>
                {{-- <li class="my-2">
                    <a href="{{ route('Admin.Services') }}"
                        class="sidelink {{ request()->routeIs('Admin.Services') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Admin.Services') ? asset('img/services-active.png') : asset('img/services.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Services</p>
                        </div>
                    </a>
                </li> --}}
                <li class="my-2">
                    <a href="{{ route('Admin.Industry') }}"
                        class="sidelink {{ request()->routeIs('Admin.Industry') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Admin.Industry') ? asset('img/services-active.png') : asset('img/services.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Industries</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="left-bottom mx-2">
        <a href="#" class="logout-clr px-3 py-1 rounded-3 w-100 text-center mx-4" data-bs-toggle="modal" data-bs-target="#logoutModal">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>
</div>

@include('Templates.UserLogoutModule')
