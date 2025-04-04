<div class="left ">
    <div class="left-top">
        <a href="{{ route('BusinessUser.Dashboard') }}" class="logodiv pt-4">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </a>

    </div>
    <div class="left-mid pt-4">
        <div class="list">
            <ul class="first-ul">
                <li>
                    <a href="{{ route('BusinessUser.Dashboard') }}"
                        class="sidelink {{ request()->routeIs('BusinessUser.Dashboard', 'BusinessUser.WebsiteAnalytics') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('BusinessUser.Dashboard', 'BusinessUser.WebsiteAnalytics') ? asset('img/dashboard-active.png') : asset('img/dashboard.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Dashboard</p>
                        </div>
                        <i class="fas fa-chevron-down chevron-icon" data-target="#dashboardMenu"></i>
                    </a>
                    <ul id="dashboardMenu" class="collapse mydropdown">
                        <li><a class="sidelink" href="{{ route('BusinessUser.WebsiteAnalytics') }}">Website
                                Analytics</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('BusinessUser.scheduleCalendar') }}"
                        class="sidelink {{ request()->routeIs('BusinessUser.scheduleCalendar', 'BusinessUser.Jobs', 'BusinessUser.Appliance', 'BusinessUser.plumbingDetails') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('BusinessUser.scheduleCalendar', 'BusinessUser.Jobs', 'BusinessUser.Appliance', 'BusinessUser.plumbingDetails') ? asset('img/schedule-active.png') : asset('img/schedule.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Schedule</p>
                        </div>
                        <i class="fas fa-chevron-down chevron-icon" data-target="#scheduleMenu"></i>
                    </a>
                    <ul id="scheduleMenu" class="collapse mydropdown">
                        <li><a class="sidelink" href="{{ route('BusinessUser.Jobs') }}">Jobs</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('BusinessUser.Oppurtunities') }}"
                        class="sidelink {{ request()->routeIs('BusinessUser.Oppurtunities', 'BusinessUser.Conversations') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('BusinessUser.Oppurtunities', 'BusinessUser.Conversations') ? asset('img/oppurtunities-active.png') : asset('img/oppurtunities.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Opportunities</p>
                        </div>
                        <i class="fas fa-chevron-down chevron-icon" data-target="#oppurtunityMenu"></i>
                    </a>
                    <ul id="oppurtunityMenu" class="collapse mydropdown">
                        <li><a class="sidelink" href="{{ route('BusinessUser.Conversations') }}">Conversations</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"
                        class="sidelink {{ request()->routeIs('BusinessUser.Quotation', 'BusinessUser.Invoice', 'BusinessUser.QuotationDetail', 'BusinessUser.Payment', 'BusinessUser.Contract', 'BusinessUser.Reports', 'BusinessUser.Expense', 'BusinessUser.ExpenseDetails', 'BusinessUser.PriceBook', 'BusinessUser.Customer', 'BusinessUser.Inventory', 'BusinessUser.Services') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('BusinessUser.Quotation', 'BusinessUser.Invoice', 'BusinessUser.QuotationDetail', 'BusinessUser.Payment', 'BusinessUser.Contract', 'BusinessUser.Reports', 'BusinessUser.Expense', 'BusinessUser.ExpenseDetails', 'BusinessUser.PriceBook', 'BusinessUser.Customer', 'BusinessUser.Inventory', 'BusinessUser.Services') ? asset('img/sales-active.svg') : asset('img/sales.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Sales</p>
                        </div>
                        <i class="fas fa-chevron-down chevron-icon" data-target="#salesmenu"></i>
                    </a>
                    <ul id="salesmenu" class="collapse mydropdown">
                        <li><a class="sidelink" href="{{ route('BusinessUser.Quotation') }}">Quotes</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.Invoice') }}">Invoices</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.Payment') }}">Payments</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.Contract') }}">Contracts</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.Reports') }}">Reports</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.Expense') }}">Expenses</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.PriceBook') }}">Pricebook</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.Customer') }}">Customers</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.Inventory') }}">Inventory</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('BusinessUser.Team') }}"
                        class="sidelink {{ request()->routeIs('BusinessUser.Team', 'BusinessUser.Chat') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('BusinessUser.Team', 'BusinessUser.Chat') ? asset('img/team-active.svg') : asset('img/team.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Team</p>
                        </div>
                        <i class="fas fa-chevron-down chevron-icon" data-target="#teammenu"></i>
                    </a>
                    <ul id="teammenu" class="collapse mydropdown">
                        <li><a class="sidelink" href="{{ route('BusinessUser.Chat') }}">Internal Chat</a></li>
                    </ul>

                </li>
                <li>
                    <a href="#"
                        class="sidelink {{ request()->routeIs('BusinessUser.Automations', 'BusinessUser.Reputation') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('BusinessUser.Automations', 'BusinessUser.Reputation') ? asset('img/marketing-active.svg') : asset('img/marketing.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Marketing</p>
                        </div>
                        <i class="fas fa-chevron-down chevron-icon" data-target="#marketing"></i>
                    </a>
                    <ul id="marketing" class="collapse mydropdown">
                        <li><a class="sidelink" href="{{ route('BusinessUser.Automations') }}">Automations</a></li>
                        <li><a class="sidelink" href="#">Email Campaigns</a></li>
                        <li><a class="sidelink" href="{{ route('BusinessUser.Reputation') }}">Reputation
                                Management</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('BusinessUser.Resources') }}"
                        class="sidelink {{ request()->routeIs('BusinessUser.Resources') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('BusinessUser.Resources') ? asset('img/resources-active.svg') : asset('img/resources.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Resources</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('BusinessUser.Setting') }}"
                        class="sidelink {{ request()->routeIs('BusinessUser.Setting') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ request()->routeIs('BusinessUser.Setting') ? asset('img/settings-active.svg') : asset('img/settings.png') }}"
                                alt="" class="sideicon">
                            <p class="mb-0">Settings</p>
                        </div>
                        <i class="fas fa-chevron-down chevron-icon" data-target="#resourcesMenu"></i>
                    </a>
                    <ul id="resourcesMenu" class="collapse mydropdown">
                        <li><a class="sidelink" href="#">Website Builder</a></li>
                        <li><a class="sidelink" href="#">Client hub/portal</a></li>
                        <li><a class="sidelink" href="#">Referall system</a></li>
                        <li><a class="sidelink" href="#">Price Book</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('BusinessUser.Launchpad') }}"
                        class="sidelink {{ request()->routeIs('BusinessUser.Launchpad') ? 'active' : '' }} d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <i
                                class="fa-solid fa-network-wired sideicon sidefont {{ request()->routeIs('BusinessUser.Launchpad') ? 'text-white' : '' }}"></i>
                            <p class="mb-0">Launch Pad</p>
                        </div>
                    </a>
                </li>
                <!-- <li>
                    <a href="#"
                        class="sidelink d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/team.png') }}" alt="" class="sideicon">
                            <p class="mb-0">Users</p>
                        </div>
                    </a>
                </li> -->


            </ul>
        </div>
    </div>
    <div class="left-bottom mx-2">
        <a href="#" class="logout-clr px-3 py-2 rounded-3 w-100 text-center mx-4 pointer"
            data-bs-toggle="modal" data-bs-target="#logoutModal">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>
</div>
