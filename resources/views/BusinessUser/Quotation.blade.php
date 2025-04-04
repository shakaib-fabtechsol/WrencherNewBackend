<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Sales quotes</title>
</head>

<body>
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
                                    <span class="fs-6">Quotes</span> -->
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
                                <div class="d-xxl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 font-semibold">
                                            Quotation
                                        </h1>
                                        <p class="mb-0">Here's how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-xxl-0 mt-2">
                                        <div
                                            class="d-sm-flex justify-content-end justify-content-lg-start align-items-center">
                                            <div
                                                class="d-flex justify-content-between border rounded-2 bg-white">
                                                <input type="search"
                                                    class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                    placeholder="Search Quotation">
                                                <span class="d-flex align-items-center bg-grey text-white">
                                                    <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="d-flex ps-3 mx-sm-2 mt-sm-0 mt-2 align-items-center border bg-white rounded-2">
                                                <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                                <select name="" id="filter"
                                                    class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                                    <option value="" selected disabled hidden>Filter</option>
                                                    <option value="">Filter by Date</option>
                                                    <option value="">Filter by Price</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div
                                                class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-end">
                                                <div class="dropdown me-sm-2">
                                                    <button
                                                        class="mbl-100 btn-sv mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0"
                                                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Create a quote
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('BusinessUser.AddNewQuote') }}">Normal
                                                                Quote</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('BusinessUser.AddPackageQuote') }}">Packages
                                                                Quote</a></li>
                                                    </ul>
                                                </div>
                                                <!-- <a  class="mbl-100 btn-sv mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0 text-decoration-none" href="#">Create Bookable Estimate</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-3 mt-3 rounded-3 nav-tabs">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true">All Quotes</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">Opens(200)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact" type="button" role="tab"
                                                aria-controls="pills-contact"
                                                aria-selected="false">Schedule(200)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-disabled" type="button" role="tab"
                                                aria-controls="pills-disabled"
                                                aria-selected="false">Accepted(200)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-decline-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-decline" type="button" role="tab"
                                                aria-controls="pills-decline"
                                                aria-selected="false">Declined(200)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-requested-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-requested" type="button" role="tab"
                                                aria-controls="pills-requested"
                                                aria-selected="false">Requested(200)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-paid-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-paid" type="button" role="tab"
                                                aria-controls="pills-paid" aria-selected="false">Paid(200)</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Select</th>
                                                            <th class="font-semi">Customer</th>
                                                            <th class="font-semi">Location</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Total Price</th>
                                                            <th class="font-semi">Payment Status</th>
                                                            <th class="font-semi">Quotation Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open" selected>Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule" selected>Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted" selected>Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline" selected>Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested" selected>Requested
                                                                    </option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid" selected>Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div
                                                    class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                                    <div class="border-end border-2 py-1 pe-3">
                                                        <p class="mb-0">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <select name="" id=""
                                                            class="form-select focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Select</th>
                                                            <th class="font-semi">Customer</th>
                                                            <th class="font-semi">Location</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Total Price</th>
                                                            <th class="font-semi">Payment Status</th>
                                                            <th class="font-semi">Quotation Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open" selected>Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open" selected>Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open" selected>Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div
                                                    class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                                    <div class="border-end border-2 py-1 pe-3">
                                                        <p class="mb-0">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <select name="" id=""
                                                            class="form-select focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                            aria-labelledby="pills-contact-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Select</th>
                                                            <th class="font-semi">Customer</th>
                                                            <th class="font-semi">Location</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Total Price</th>
                                                            <th class="font-semi">Payment Status</th>
                                                            <th class="font-semi">Quotation Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule" selected>Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule" selected>Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule" selected>Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div
                                                    class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                                    <div class="border-end border-2 py-1 pe-3">
                                                        <p class="mb-0">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <select name="" id=""
                                                            class="form-select focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel"
                                            aria-labelledby="pills-disabled-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Select</th>
                                                            <th class="font-semi">Customer</th>
                                                            <th class="font-semi">Location</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Total Price</th>
                                                            <th class="font-semi">Payment Status</th>
                                                            <th class="font-semi">Quotation Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted" selected>Accepted
                                                                    </option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted" selected>Accepted
                                                                    </option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted" selected>Accepted
                                                                    </option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div
                                                    class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                                    <div class="border-end border-2 py-1 pe-3">
                                                        <p class="mb-0">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <select name="" id=""
                                                            class="form-select focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per
                                                                page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-decline" role="tabpanel"
                                            aria-labelledby="pills-decline-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Select</th>
                                                            <th class="font-semi">Customer</th>
                                                            <th class="font-semi">Location</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Total Price</th>
                                                            <th class="font-semi">Payment Status</th>
                                                            <th class="font-semi">Quotation Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name="" id="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline" selected>Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name=""
                                                                    id=""></td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline" selected>Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name=""
                                                                    id=""></td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline" selected>Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div
                                                    class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                                    <div class="border-end border-2 py-1 pe-3">
                                                        <p class="mb-0">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <select name="" id=""
                                                            class="form-select focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per
                                                                page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-requested" role="tabpanel"
                                            aria-labelledby="pills-requested-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Select</th>
                                                            <th class="font-semi">Customer</th>
                                                            <th class="font-semi">Location</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Total Price</th>
                                                            <th class="font-semi">Payment Status</th>
                                                            <th class="font-semi">Quotation Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name=""
                                                                    id=""></td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested" selected>Requested
                                                                    </option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name=""
                                                                    id=""></td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested" selected>Requested
                                                                    </option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name=""
                                                                    id=""></td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested" selected>Requested
                                                                    </option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div
                                                    class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                                    <div class="border-end border-2 py-1 pe-3">
                                                        <p class="mb-0">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <select name="" id=""
                                                            class="form-select focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per
                                                                page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-paid" role="tabpanel"
                                            aria-labelledby="pills-paid-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Select</th>
                                                            <th class="font-semi">Customer</th>
                                                            <th class="font-semi">Location</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Total Price</th>
                                                            <th class="font-semi">Payment Status</th>
                                                            <th class="font-semi">Quotation Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name=""
                                                                    id=""></td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid" selected>Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name=""
                                                                    id=""></td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid" selected>Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td><input type="checkbox" name=""
                                                                    id=""></td>
                                                            <td>
                                                                <a href="{{ route('BusinessUser.QuotationDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia
                                                                            Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">123 Eva, ookers Block Las Vegas</td>
                                                            <td class="font-md">Mon - Aug 13, 2024</td>
                                                            <td class="font-md">$250.00</td>
                                                            <td class="font-md">
                                                                <button type="button"
                                                                    class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    Paid
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <select
                                                                    class="lorng statusDropdown py-2 border-0 rounded-2 text-center px-2 w-100 text-white">
                                                                    <option value="Open">Open</option>
                                                                    <option value="Schedule">Schedule</option>
                                                                    <option value="Accepted">Accepted</option>
                                                                    <option value="Decline">Decline</option>
                                                                    <option value="Requested">Requested</option>
                                                                    <option value="Paid" selected>Paid</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                type="button"
                                                                                id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i
                                                                                    class="fa-solid fa-pen text-dark"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Schedule </a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Invoice</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View Log of SMS
                                                                                        and
                                                                                        Email</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Check Estimate
                                                                                        View
                                                                                        Status</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Request
                                                                                        Deposit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ms-2">
                                                                        <a href="#"
                                                                            class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                class="fa-solid fa-trash text-dark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div
                                                    class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                                    <div class="border-end border-2 py-1 pe-3">
                                                        <p class="mb-0">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <select name="" id=""
                                                            class="form-select focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per
                                                                page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
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
    <div class="modal modal-lg fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div class="text-center w-100" id="exampleModalLabel">
                        <div class="d-flex justify-content-center">
                            <div>
                                <h3>Invoice</h3>
                                <p class="mb-0">Due Jun 11, 2024</p>
                            </div>
                            <div>
                                <p class="mb-0 invoiced-bg">Draft</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-wrap justify-content-end">
                        <div class="mb-3">
                            <form>
                                <select class="rounded-2 clientmodal text-white border-0 focus-none p-3">
                                    <option value="" selected disabled hidden>Add Payment</option>
                                    <option value="">Payment 1</option>
                                    <option value="">Payment 2</option>
                                </select>
                            </form>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#">
                                <img src="{{asset('img/modalm.svg')}}" class="image-fluid img">
                            </a>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#">
                                <img src="{{ asset('img/models.svg') }}" class="image-fluid img">
                            </a>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#">
                                <img src="{{ asset('img/modeld.svg') }}" class="image-fluid img">
                            </a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3 border-invoice">
                        <div>
                            <h4 class="mb-0">$0.00</h4>
                            <p class="mb-0">Amount Paid</p>
                        </div>
                        <div>
                            <h4 class="mb-0 invoice-amount">$80.00</h4>
                            <p class="mb-0">Amount Due</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3 border-invoice">
                        <div>
                            <h4 class="mb-0">Appliance repair</h4>
                            <p class="mb-0">Service Base Price ($80.00)</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="mb-0">$80.00</h4>
                            </div>
                            <div class="size">
                                <img src="{{ asset('img/invoicep.svg') }}" class="image-fluid img">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-3">
                            <a href="#" class="text-decoration-none">
                                <p class="mb-0 invoice-amount font-md">+ Add line Item</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <div class="d-flex">
                                <p class="mb-0 w-100">Sub Total</p>
                                <p class="mb-0">$80.00</p>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0 invoice-amount w-100">Discount</p>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0 invoice-amount w-100">Add Tax</p>
                            </div>
                            <div class="d-flex mt-3">
                                <p class="mb-0 w-100">Total</p>
                                <p class="mb-0">$80.00</p>
                            </div>
                            <div class="d-flex mt-3 align-items-center">
                                <p class="mb-0 w-100">Amount Paid</p>
                                <p class="mb-0">$0.00</p>
                            </div>
                            <div class="d-flex mt-3">
                                <p class="mb-0 font-md w-100">Total Due</p>
                                <p class="mb-0 font-md">$0.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateDropdownColor() {
            const dropdowns = document.querySelectorAll('.statusDropdown');

            dropdowns.forEach(dropdown => {
                const selectedValue = dropdown.value;

                // Reset all color classes
                dropdown.classList.remove(
                    "bg-primary",
                    "bg-warning",
                    "bg-success",
                    "bg-danger",
                    "bg-info",
                    "bg-secondary",
                    "bg-light"
                );

                // Apply color based on the selected value
                switch (selectedValue) {
                    case "Open":
                        dropdown.classList.add("bg-secondary"); // Gray
                        break;
                    case "Schedule":
                        dropdown.classList.add("bg-primary"); // Blue
                        break;
                    case "Accepted":
                        dropdown.classList.add("bg-info"); // Light Blue
                        break;
                    case "Decline":
                        dropdown.classList.add("bg-danger"); // Red
                        break;
                    case "Requested":
                        dropdown.classList.add("bg-warning"); // Yellow
                        break;
                    case "Paid":
                        dropdown.classList.add("bg-success"); // Green
                        break;
                }
            });
        }

        // Initialize colors on page load
        document.addEventListener("DOMContentLoaded", updateDropdownColor);

        // Update color dynamically on change
        document.addEventListener("change", (event) => {
            if (event.target.classList.contains("statusDropdown")) {
                updateDropdownColor();
            }
        });
    </script>
</body>

</html>
