<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Jobs</title>
</head>

<body>
    <section>
        <div class="main">
            {{-- side Bar --}}
            @include('Templates.BusinessUserSideBar')
            {{-- side Bar --}}
            <div class="right">
                <div class="right-top px-4 input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Schedule</span>
                                    <!-- <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Jobs</span> -->
                                </h3>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.BusinessUserNavBar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="bottom-main">
                        <div class="content ">
                            <div class="container-fluid">
                                <div class="d-xl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 font-semi">
                                            Jobs
                                        </h1>
                                        <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-xl-0 mt-3">
                                        <div
                                            class="d-flex justify-content-between me-lg-3 border-1 rounded-2 bg-white">
                                            <input type="search"
                                                class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                placeholder="Search Job">
                                            <span class="d-flex align-items-center bg-grey text-white">
                                                <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="d-flex ps-3 mt-3 mt-lg-0 me-lg-3 align-items-center bg-white border-1 rounded-2">
                                            <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                            <select name="" id="filter"
                                                class="border-white tab-100 pe-3 py-2 grey form-select shadow-none focus-none font-md bg-transparent">
                                                <option value="" selected disabled hidden>Filter</option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('BusinessUser.AddNewJob') }}"
                                                class="mbl-100 mt-3 mt-lg-0 text-decoration-none text-center w-100 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0">
                                                Create Job
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table">
                                        <thead>
                                            <tr class="align-middle">
                                                <th class="font-semi">Customer</th>
                                                <th class="font-semi">Job</th>
                                                <th class="font-semi">Date</th>
                                                <th class="font-semi">Team</th>
                                                <th class="font-semi">Job Status</th>
                                                <th class="font-semi">Total Price</th>
                                                <th class="font-semi">Payment Status</th>
                                                <th class="font-semi">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-space border-0"></tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Alexia Haass</span>
                                                    </div>
                                                </td>
                                                <td class="font-md">Celling fan install</td>
                                                <td class="font-md">Mon - Agu 13,2024</td>
                                                <td class="font-md">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/team1.png') }}" alt="team1.png"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Username</span>
                                                    </div>
                                                </td>
                                                <td class="font-md">
                                                    <button type="button"
                                                        class="bg-lblue lblue font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                        Scheduled
                                                    </button>
                                                </td>
                                                <td class="font-md">$250.00</td>
                                                <td class="font-md">
                                                    <button type="button"
                                                        class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                        Paid
                                                    </button>
                                                </td>
                                                <td class="font-md">
                                                    <div>
                                                        <a href="{{ route('BusinessUser.scheduleCalendar') }}"><img
                                                                src="{{ asset('img/cal.png') }}" alt=""
                                                                class="bg-lgrey p-2 rounded-3"></a>
                                                        <a href="{{ route('BusinessUser.Appliance') }}">
                                                            <img src="{{ asset('img/edit.png') }}" alt=""
                                                                class="bg-lgrey p-2 rounded-3"></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Alexia Haass</span>
                                                    </div>
                                                </td>
                                                <td class="font-md">Celling fan install</td>
                                                <td class="font-md">Mon - Agu 13,2024</td>
                                                <td class="font-md">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/team1.png') }}" alt="team1.png"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Username</span>
                                                    </div>
                                                </td>
                                                <td class="font-md">
                                                    <button type="button"
                                                        class="bg-warning text-white font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                        Unscheduled
                                                    </button>
                                                </td>
                                                <td class="font-md">$250.00</td>
                                                <td class="font-md">
                                                    <button type="button"
                                                        class="bg-warning text-white font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                        Unpaid
                                                    </button>
                                                </td>
                                                <td class="font-md">
                                                    <div>
                                                        <a href="{{ route('BusinessUser.scheduleCalendar') }}"><img
                                                                src="{{ asset('img/cal.png') }}" alt=""
                                                                class="bg-lgrey p-2 rounded-3"></a>
                                                        <a href="{{ route('BusinessUser.Appliance') }}">
                                                            <img src="{{ asset('img/edit.png') }}" alt=""
                                                                class="bg-lgrey p-2 rounded-3"></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')
</body>

</html>
