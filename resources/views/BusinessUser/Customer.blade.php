<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Customer</title>
</head>

<body>
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success")
        </script>
    @endif
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Sales</span>
                                    <!-- <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Customer</span> -->
                                </h3>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.BusinessUserNavBar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="d-xxl-flex align-items-center justify-content-between">
                                <div>
                                    <h1 class="fs-4 fw-mediun">
                                        Customers
                                    </h1>
                                    <p class="mb-0 gre">Here's how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-xl-flex justify-content-end align-items-center mt-xxl-0 mt-3">
                                    <div class="d-sm-flex align-items-center">
                                        <div
                                            class="d-flex justify-content-between border-1 rounded-2 bg-white me-2">
                                            <input type="search"
                                                class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                placeholder="Search Customer">
                                            <span class="d-flex align-items-center bg-grey text-white">
                                                <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="d-flex ps-3 align-items-center bg-white border-1 rounded-2 me-2 mt-sm-0 mt-2">
                                            <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                            <select name="" id="filter"
                                                class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                                <option value="" selected disabled hidden>Filter</option>
                                                <option value="">Today</option>
                                                <option value="">Last Week</option>
                                                <option value="">This Week</option>
                                                <option value="">Next Week</option>
                                                <option value="">Last Month</option>
                                                <option value="">This Month</option>
                                                <option value="">Last Year</option>
                                                <option value="">This Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end mt-xl-0 mt-3">
                                        <div class="d-flex justify-content-end me-2">
                                            <button type="button"
                                                class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 shadow text-nowrap py-2 bg-secondary text-white border-0">Mass
                                                Export</button>
                                        </div>
                                        <div class="d-flex justify-content-end me-2">
                                            <button type="button"
                                                class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 shadow text-nowrap py-2 bg-secondary text-white border-0">Mass
                                                Import</button>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('BusinessUser.AddNewCustomer') }}">
                                                <button type="button"
                                                    class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-sky text-white border-0">Add
                                                    Customer</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-3 p-3 mt-3">
                                <div class="d-flex flex-column h-100 justify-content-between">
                                    <div>
                                        <div class="match-book p-3 rounde.d-3">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Match Booking To Existing Customer</h5>
                                                    <p class="font-14">When Enabled , Zenbooker links new online
                                                        bookings to existing customers based on email New customers are
                                                        created for email without a match</p>
                                                </div>
                                                <div class="ms-3 d-flex justify-content-end">
                                                    <div class="switch">
                                                        <input type="checkbox" class="switch-input" id="toggle">
                                                        <label class="switch-slider" for="toggle"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-3 h-100">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th>Full Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($customers as $customer)
                                                        <tr class="align-middle">
                                                            <td><img src="{{ asset('img/customer1.png') }}" alt=""
                                                                    class="cus-img"></td>
                                                            <td><a href="{{ route('BusinessUser.CustomerDetails') }}"
                                                                    class="sky-c text-decoration-none">{{ $customer['name'] }}</a>
                                                            </td>
                                                            <td>{{ $customer['phone'] }}</td>
                                                            <td>{{ $customer['email'] }}</td>
                                                            <td>{{ $customer['location'] }}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-pen text-dark"></i></a>
                                                                    </div>
                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-center">
                                            <div
                                                class="mt-3 d-sm-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-sm-3 px-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="border-end border-2 py-1 pe-sm-3 pe-1">
                                                        <p class="mb-0 font-12">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-sm-3 px-1">
                                                        <select name="" id=""
                                                            class="form-select font-12 focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-center mt-sm-0 mt-2">
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black font-12">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue font-12">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
