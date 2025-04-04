<div class="left ">
    <div class="left-top">
        <a href="{{ route('Client.Dashboard') }}" class="logodiv pt-4">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </a>
        
    </div>
    <div class="left-mid pt-4">
        <div class="list">
            <ul class="first-ul">
                <li>
                    <a href="{{ route('Client.Dashboard') }}"
                        class="sidelink {{ request()->routeIs('Client.Dashboard') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Client.Dashboard') ? asset('img/dashboard-active.png') : asset('img/dashboard.png') }}" alt="" class="sideicon">
                            <p class="mb-0">Dashboard</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Client.Payments') }}"
                        class="sidelink {{ request()->routeIs('Client.Payments') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Client.Payments') ? asset('img/payment-active.png') : asset('img/payment.png') }}" alt="" class="sideicon">
                            <p class="mb-0">Payments</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Client.ClientQuatationDetail') }}"
                        class="sidelink {{ request()->routeIs('Client.ClientQuatationDetail') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Client.ClientQuatationDetail') ? asset('img/sales-active.svg') : asset('img/sales.png') }}" alt="" class="sideicon">
                            <p class="mb-0">Quotes</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Client.Setting') }}"
                        class="sidelink {{ request()->routeIs('Client.Setting') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('Client.Setting') ? asset('img/settings-active.svg') : asset('img/settings.png') }}" alt="" class="sideicon">
                            <p class="mb-0">Settings</p>
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