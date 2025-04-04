<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title> Sales Reports</title>

</head>

<body>
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')
            <div class="right">
                <div class="right-top px-4 input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Sales</span>
                                    <!-- <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Reports</span> -->
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
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h1 class="fs-3 font-semi">
                                        Reports
                                    </h1>
                                    <p class="mb-0">Here's how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-lg-flex justify-content-end align-items-center">
                                    <div
                                        class="d-flex ps-3 mt-3 mt-lg-0 me-lg-3 align-items-center bg-white border-1 rounded-2">
                                        <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                        <select name="" id="filter"
                                            class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                            <option value="" selected disabled hidden>Filter</option>
                                            <option value="">Filter by Date</option>
                                            <option value="">Filter by Price</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 border-1 bg-white rounded-4 px-3 py-3">
                                <div class="main-tabb ">
                                    <ul class="nav rounded-3 px-2 nav-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 active btn-fs-setting"
                                                id="pills-profitloss-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profitloss" type="button" role="tab"
                                                aria-controls="pills-profitloss" aria-selected="true">Profit
                                                and Loss</button>
                                        </li>
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 btn-fs-setting" id="pills-receivable-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-receivable" type="button"
                                                role="tab" aria-controls="pills-receivable"
                                                aria-selected="false">Accounts
                                                Receivable</button>
                                        </li>
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 btn-fs-setting" id="pills-invoices-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-invoices" type="button"
                                                role="tab" aria-controls="pills-invoices"
                                                aria-selected="false">Invoices</button>
                                        </li>
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 btn-fs-setting"
                                                id="pills-receivedPayment-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-receivedPayment" type="button" role="tab"
                                                aria-controls="pills-receivedPayment" aria-selected="false">Received
                                                Payments</button>
                                        </li>
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 btn-fs-setting" id="pills-openInvoice-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-openInvoice" type="button"
                                                role="tab" aria-controls="pills-openInvoice"
                                                aria-selected="false">Open
                                                Invoices</button>
                                        </li>
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 btn-fs-setting"
                                                id="pills-estimateList-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-estimateList" type="button" role="tab"
                                                aria-controls="pills-estimateList" aria-selected="false">Estimate
                                                List</button>
                                        </li>
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 btn-fs-setting"
                                                id="pills-saleByProduct-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-saleByProduct" type="button" role="tab"
                                                aria-controls="pills-saleByProduct" aria-selected="false">Sales
                                                by Product</button>
                                        </li>
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 btn-fs-setting"
                                                id="pills-physicalInventory-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-physicalInventory" type="button"
                                                role="tab" aria-controls="pills-physicalInventory"
                                                aria-selected="false">Physical
                                                Inventory</button>
                                        </li>
                                        <li class="nav-item px-2" role="presentation">
                                            <button class="nav-link py-2 px-1 btn-fs-setting"
                                                id="pills-balanceSheet-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-balanceSheet" type="button" role="tab"
                                                aria-controls="pills-balanceSheet" aria-selected="false">Balance
                                                Sheet</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-profitloss" role="tabpanel"
                                        aria-labelledby="pills-profitloss-tab" tabindex="0">
                                        <div class="row mt-3">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                                <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                                    <div class="profit d-flex align-items-center mb-2">
                                                        <div class="profit-img profit-size me-3">
                                                            <img src="{{ asset('img/profit-stats-up.svg') }}"
                                                                alt="pic">
                                                        </div>
                                                        <p class="mb-0 fw-medium fs-4">$1234.00</p>
                                                    </div>
                                                    <p class="mb-0">Net Profit</p>
                                                    <p class="mb-0 skin fw-medium"><span class="green">+8.7%</span>
                                                        than
                                                        last
                                                        month</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                                <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                                    <div class="profit d-flex align-items-center mb-2">
                                                        <div class="profit-img profit-size me-3">
                                                            <img src="{{ asset('img/coins-pic.svg') }}"
                                                                alt="pic">
                                                        </div>
                                                        <p class="mb-0 fw-medium fs-4">$1234.00</p>
                                                    </div>
                                                    <p class="mb-0">Total Income</p>
                                                    <p class="mb-0 skin fw-medium"><span class="green">+8.7%</span>
                                                        than
                                                        last
                                                        month</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                                <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                                    <div class="profit d-flex align-items-center mb-2">
                                                        <div class="profit-img profit-size me-3">
                                                            <img src="{{ asset('img/dollar-pic.svg') }}"
                                                                alt="pic">
                                                        </div>
                                                        <p class="mb-0 fw-medium fs-4">$123.00</p>
                                                    </div>
                                                    <p class="mb-0">Total Expenses</p>
                                                    <p class="mb-0 skin fw-medium"><span class="red">+8.7%</span>
                                                        than
                                                        last month
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <div class="col4-main bg-white shadow p-3 rounded-4">
                                                    <div
                                                        class="income-main d-flex justify-content-between align-items-center mb-3">
                                                        <p class="mb-0 font-semi">Income</p>
                                                        <img src="{{ asset('img/Filter.svg') }}" alt="pic"
                                                            class="img-incom">
                                                    </div>
                                                    <div
                                                        class="coin-angle-main d-flex justify-content-between align-items-center mb-3">
                                                        <div class="coin-content d-flex align-items-center">
                                                            <div class="profit-img profit-size me-3">
                                                                <img src="{{ asset('img/coins-pic.svg') }}"
                                                                    alt="pic">
                                                            </div>
                                                            <div class="coin-incom">
                                                                <p class="mb-0">Income</p>
                                                                <p class="mb-0 perpel">60%+</p>
                                                            </div>
                                                        </div>
                                                        <div class="incom-angle">
                                                            <i class="fa-solid fa-angle-right"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress-main mb-2">
                                                        <div
                                                            class="progress-content d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Service Revenue</p>
                                                            <p class="mb-0" id="progress-no">40%</p>
                                                        </div>
                                                        <div class="progress h-100 mt-1" role="progressbar"
                                                            aria-label="Success example" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-success py-1 h-100"
                                                                style="width: 40%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-main mb-2">
                                                        <div
                                                            class="progress-content d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Job Completion Income</p>
                                                            <p class="mb-0" id="progress-no">40%</p>
                                                        </div>
                                                        <div class="progress h-100 mt-1" role="progressbar"
                                                            aria-label="Success example" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-primary py-1 h-100"
                                                                style="width: 40%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-main">
                                                        <div
                                                            class="progress-content d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Recurring Income</p>
                                                            <p class="mb-0" id="progress-no">20%</p>
                                                        </div>
                                                        <div class="progress h-100 mt-1" role="progressbar"
                                                            aria-label="Success example" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-warning py-1 h-100"
                                                                style="width: 20%">
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <div class="bg-white p-3 rounded-3 shadow">
                                                    <div
                                                        class="income-main d-flex justify-content-between align-items-center mb-3">
                                                        <div>
                                                            <p class="mb-0 font-semi">Expense</p>
                                                            <p class="gre font-12 mb-0">Total Expense 50</p>
                                                        </div>
                                                        <div>
                                                            <img src="{{ asset('img/Filter.svg') }}" alt="pic"
                                                                class="img-incom">
                                                        </div>
                                                    </div>
                                                    <div class="w-100">
                                                        <canvas id="myDoughnutChart" class="w-100 h-100"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-receivable" role="tabpanel"
                                        aria-labelledby="pills-receivable-tab" tabindex="0">
                                        <div class="table-responsive reports-tbl mt-3">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">Customer</th>
                                                        <th class="font-semi">Account Name</th>
                                                        <th class="font-semi">Account ID</th>
                                                        <th class="font-semi">Account Number</th>
                                                        <th class="font-semi">Account Rating</th>
                                                        <th class="font-semi">Customer Phone</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space border-0"></tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">Alexia Haass</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">4.6</td>
                                                        <td class="font-md">+21 999 909 9090</td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">Alexia Haass</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">4.6</td>
                                                        <td class="font-md">+21 999 909 9090</td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">Alexia Haass</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">4.6</td>
                                                        <td class="font-md">+21 999 909 9090</td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">Alexia Haass</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">4.6</td>
                                                        <td class="font-md">+21 999 909 9090</td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">Alexia Haass</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">2024</td>
                                                        <td class="font-md">4.6</td>
                                                        <td class="font-md">+21 999 909 9090</td>
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
                                    <div class="tab-pane fade" id="pills-invoices" role="tabpanel"
                                        aria-labelledby="pills-invoices-tab" tabindex="0">
                                        <!-- ----invoice------ -->
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-3">
                                                <div class="report-card p-3 h-100">
                                                    <p class="mb-0 dark-blue fs-5 font-md">Overview</p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex">
                                                            <img src="{{ asset('img/reddot.svg') }}"
                                                                class="image-fluid img">
                                                            <p class="mb-0 ms-2 fs-6">Past Due</p>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">$:0</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <div class="d-flex">
                                                            <img src="{{ asset('img/yellowdot.svg') }}"
                                                                class="image-fluid img">
                                                            <p class="mb-0 ms-2 fs-6">Sent but not Due</p>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">$:0</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <div class="d-flex">
                                                            <img src="{{ asset('img/blue.svg') }}"
                                                                class="image-fluid img">
                                                            <p class="mb-0 ms-2 fs-6">Draft</p>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">$:0</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-3">
                                                <div class="report-card p-3 h-100">
                                                    <p class="mb-0 dark-blue fs-5 font-md">Issued</p>
                                                    <p class="mb-0 mt-2">Past 30 days</p>
                                                    <div class="mt-2 d-flex align-items-center">
                                                        <h2 class="mb-0 font-semi">Rs:0</h2>
                                                        <p class="mb-0 report-circle p-2 ms-2 font-md">0%</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-3">
                                                <div class="report-card p-3 h-100">
                                                    <p class="mb-0 dark-blue fs-5 font-md">Average Invoice</p>
                                                    <p class="mb-0 mt-2">Past 30 days</p>
                                                    <div class="mt-2 d-flex align-items-center">
                                                        <h2 class="mb-0 font-semi">Rs:0</h2>
                                                        <p class="mb-0 report-circle p-2 ms-2 font-md">0%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive reports-tbl mt-3">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">Customer</th>
                                                        <th class="font-semi">Invoice number</th>
                                                        <th class="font-semi">Date</th>
                                                        <th class="font-semi">Due Date</th>
                                                        <th class="font-semi">job</th>
                                                        <th class="font-semi">status</th>
                                                        <th class="font-semi">Total Amount</th>
                                                        <th class="font-semi">Payment Status</th>
                                                        <th class="font-semi">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space border-0"></tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">#03</td>
                                                        <td class="font-md">Mon-Aug 13,2024</td>
                                                        <td class="font-md">Mon-Aug 13,2024</td>
                                                        <td class="font-md">celling fan install</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lblue lblue font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Draft
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md"> <button type="button"
                                                                class="light-yellow font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                unpaid
                                                            </button>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="d-flex">
                                                                <div class="team-size">
                                                                    <a href="#" class="text-decoration-none">
                                                                        <img src="{{ asset('img/team-pen.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                                <div class="team-size ms-2">
                                                                    <a href="#" class="text-decoration-none">
                                                                        <img src="{{ asset('img/team-del.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
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

                                    <div class="tab-pane fade" id="pills-receivedPayment" role="tabpanel"
                                        aria-labelledby="pills-receivedPayment-tab" tabindex="0">
                                        <div class="table-responsive reports-tbl mt-3">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">Customer</th>
                                                        <th class="font-semi">Payment Method</th>
                                                        <th class="font-semi">Service Name</th>
                                                        <th class="font-semi">Service Status</th>
                                                        <th class="font-semi">Total Amount</th>
                                                        <th class="font-semi">Received Paymnet</th>
                                                        <th class="font-semi">Due Amount</th>
                                                        <th class="font-semi">Download Receipt</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space border-0"></tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lblue lblue font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Draft
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-prpl sky font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Inprogress
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-prpl sky font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Inprogress
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
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
                                    <div class="tab-pane fade" id="pills-openInvoice" role="tabpanel"
                                        aria-labelledby="pills-openInvoice-tab" tabindex="0">
                                        <div class="table-responsive reports-tbl mt-3">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">Customer</th>
                                                        <th class="font-semi">Invoice Number</th>
                                                        <th class="font-semi">Service Name</th>
                                                        <th class="font-semi">Creation Date</th>
                                                        <th class="font-semi">Aging</th>
                                                        <th class="font-semi">Total Amount</th>
                                                        <th class="font-semi">Invoice Status</th>
                                                        <th class="font-semi">Download Invoice</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space border-0"></tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            #9091
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">08/27/2024</td>
                                                        <td class="font-md">30 Days</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            #9091
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">08/27/2024</td>
                                                        <td class="font-md">30 Days</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            #9091
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">08/27/2024</td>
                                                        <td class="font-md">30 Days</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            #9091
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">08/27/2024</td>
                                                        <td class="font-md">30 Days</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            #9091
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">08/27/2024</td>
                                                        <td class="font-md">30 Days</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
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
                                    <div class="tab-pane fade" id="pills-estimateList" role="tabpanel"
                                        aria-labelledby="pills-estimateList-tab" tabindex="0">
                                        <div class="row mt-3">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                                <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                                    <div class="profit d-flex align-items-center mb-2">
                                                        <i class="fa-solid fa-calculator me-2"></i>
                                                        <p class="mb-0 fw-medium fs-5">Total Estimates</p>
                                                    </div>
                                                    <p class="mb-0 skin fw-semibold fs-3 text-success">5000</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                                <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                                    <div class="profit d-flex align-items-center mb-2">
                                                        <i class="fa-solid fa-calculator me-2"></i>
                                                        <p class="mb-0 fw-medium fs-5">Pending Estimates</p>
                                                    </div>
                                                    <p class="mb-0 skin fw-semibold fs-3 text-danger">1800</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                                <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                                    <div class="profit d-flex align-items-center mb-2">
                                                        <i class="fa-solid fa-calculator me-2"></i>
                                                        <p class="mb-0 fw-medium fs-5">Accepted Estimates</p>
                                                    </div>
                                                    <p class="mb-0 skin fw-semibold fs-3 text-success">3200</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive reports-tbl mt-3">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">Customer</th>
                                                        <th class="font-semi">Payment Method</th>
                                                        <th class="font-semi">Service Name</th>
                                                        <th class="font-semi">Service Status</th>
                                                        <th class="font-semi">Total Amount</th>
                                                        <th class="font-semi">Received Paymnet</th>
                                                        <th class="font-semi">Due Amount</th>
                                                        <th class="font-semi">Download Receipt</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space border-0"></tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lblue lblue font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Draft
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-prpl sky font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Inprogress
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-prpl sky font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Inprogress
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <div class="">
                                                                <img src="{{ asset('img/paypal2.png') }}"
                                                                    alt="" class="paypal">
                                                                <p class="font-12 mb-0">accountemail.com</p>
                                                            </div>
                                                        </td>
                                                        <td class="font-md">
                                                            <span class="lblue font-md">Assessment</span>
                                                        </td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-lgreen text-success font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                Complete
                                                            </button>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">$250.00</td>
                                                        <td class="font-md">
                                                            <button type="button"
                                                                class="bg-sky d-flex justify-content-center align-items-center text-white font-md status-btn text-center px-3 py-2 rounded-2 border-0">
                                                                <i class="fas fa-download text-white me-1"></i>
                                                                Download
                                                                Receipt
                                                            </button>
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
                                    <div class="tab-pane fade" id="pills-saleByProduct" role="tabpanel"
                                        aria-labelledby="pills-saleByProduct-tab" tabindex="0">
                                    </div>
                                    <div class="tab-pane fade" id="pills-physicalInventory" role="tabpanel"
                                        aria-labelledby="pills-physicalInventory-tab" tabindex="0">
                                    </div>
                                    <div class="tab-pane fade" id="pills-balanceSheet" role="tabpanel"
                                        aria-labelledby="pills-balanceSheet-tab" tabindex="0">
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
    <script>
        const ctx = document.getElementById('myDoughnutChart').getContext('2d');
        const myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Operational Cost', 'Overhead Expenses', 'Payment Processing Fees'],
                datasets: [{
                    label: 'Dataset Example',
                    data: [12, 19, 3],
                    backgroundColor: [
                        'rgba(0, 197, 104, 1)',
                        'rgba(0, 183, 254, 1)',
                        'rgba(255, 0, 0, 1)',
                    ],
                    borderColor: [
                        'rgba(0, 197, 104, 1)',
                        'rgba(0, 183, 254, 1)',
                        'rgba(255, 0, 0, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRation: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 20,
                            padding: 20,
                            // Custom function for label word-wrapping
                            generateLabels: function(chart) {
                                const data = chart.data;
                                return data.labels.map(function(label, i) {
                                    const dataset = data.datasets[0];
                                    const total = dataset.data.reduce((sum, val) => sum + val, 0);
                                    const value = dataset.data[i];
                                    const percentage = ((value / total) * 100).toFixed(2);

                                    // Split label if too long, manually wrapping it
                                    const labelText = label.match(
                                        /.{1,15}/g); // Adjust the number for word wrap
                                    const displayLabel = labelText.join(
                                        '\n'); // Join the split label on a new line

                                    return {
                                        text: `${displayLabel}: ${percentage}%`,
                                        fillStyle: dataset.backgroundColor[i],
                                        strokeStyle: dataset.borderColor[i],
                                        lineWidth: dataset.borderWidth,
                                        hidden: isNaN(dataset.data[i]) || chart.getDatasetMeta(0).data[
                                            i].hidden,
                                        index: i
                                    };
                                });
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const dataset = tooltipItem.dataset;
                                const total = dataset.data.reduce((sum, value) => sum + value, 0);
                                const value = dataset.data[tooltipItem.dataIndex];
                                const percentage = ((value / total) * 100).toFixed(2);
                                return `${dataset.label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                },
                cutout: '80%'
            }
        });
    </script>





</body>

</html>
