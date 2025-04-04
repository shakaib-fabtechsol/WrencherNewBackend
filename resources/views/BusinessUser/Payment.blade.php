<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Sales Payment</title>
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
                                    <span class="fs-6">Payment</span> -->
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
                            <div class="d-xl-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="mb-0">Payments</h3>
                                    <p class="mb-0 gre">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-lg-flex justify-content-end align-items-center mt-xl-0 mt-2">
                                    <div
                                        class="d-flex justify-content-between border me-lg-3 rounded-2 bg-white">
                                        <input type="search"
                                            class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                            placeholder="Search Transaction">
                                        <span class="d-flex align-items-center bg-grey text-white">
                                            <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                        </span>
                                    </div>
                                    <div
                                        class="d-flex ps-3 mt-3 mt-lg-0 me-lg-3 align-items-center border bg-white rounded-2">
                                        <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                        <select name="" id="filter"
                                            class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                            <option value="" selected disabled hidden>Filter</option>
                                            <option value="">Filter by Date</option>
                                            <option value="">Filter by Price</option>
                                        </select>
                                    </div>
                                    <div class="d-lg-flex justify-content-end">
                                        <button type="button"
                                            class="mbl-100 shadow mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0">Export
                                            All Transactions</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-3 mt-3 rounded-3">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                        <div class="bg-white p-2 shadow rounded-3">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="{{ asset('img/Page-1.png') }}" alt="">
                                                </div>
                                                <div class="ps-2">
                                                    <p class="mb-0 primary-blue">Successful Charges</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <div>
                                                    <h3 class="mb-0">0</h3>
                                                </div>
                                                <div class="ps-2 d-flex align-items-center">
                                                    <span><i class="fa-solid fa-caret-down text-danger"></i></span>
                                                    <p class="mb-0 text-danger">32%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                        <div class="bg-white p-2 shadow rounded-3">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="{{ asset('img/solar_card.png') }}" alt="">
                                                </div>
                                                <div class="ps-2">
                                                    <p class="mb-0 prpl-re">Recorded Payments</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <div>
                                                    <h3 class="mb-0">60</h3>
                                                </div>
                                                <div class="ps-2 d-flex align-items-center">
                                                    <span><i class="fa-solid fa-caret-up parrot-gre"></i></span>
                                                    <p class="mb-0 parrot-gre">32%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                        <div class="bg-white p-2 shadow rounded-3">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="{{ asset('img/sales-1.png') }}" alt="">
                                                </div>
                                                <div class="ps-2">
                                                    <p class="mb-0 text-warning">Recorded Payments</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <div>
                                                    <h3 class="mb-0">$99,244.23</h3>
                                                </div>
                                                <div class="ps-2 d-flex align-items-center">
                                                    <span><i class="fa-solid fa-caret-up parrot-gre"></i></span>
                                                    <p class="mb-0 parrot-gre">32%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive mt-2">
                                    <table class="table">
                                        <thead>
                                            <tr class="align-middle">
                                                <th colspan="2" class="fs-5">Friday, May 10</th>
                                                <th class="fw-semibold">
                                                    <div class="d-flex justify-content-end">
                                                        <div>
                                                            <span class="fw-normal">3 payments</span>
                                                        </div>
                                                        <div class="ps-2">
                                                            <p class="mb-0">750.00 $</p>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Alexia Haass</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0">Via Card</p>
                                                        <i class="fa-regular fa-credit-card ps-2"></i>
                                                    </div>
                                                </td>
                                                <td class="text-end">$250.00</td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Alexia Haass</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0">Via Zile</p>
                                                        <i class="bi bi-credit-card-2-front ps-2"></i>
                                                    </div>
                                                </td>
                                                <td class="text-end">$250.00</td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Alexia Haass</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0">Via Card</p>
                                                        <i class="fa-regular fa-credit-card ps-2"></i>
                                                    </div>
                                                </td>
                                                <td class="text-end">$250.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive mt-2">
                                    <table class="table">
                                        <thead>
                                            <tr class="align-middle">
                                                <th colspan="2" class="fs-5">Sunday, May 6</th>
                                                <th class="fw-semibold">
                                                    <div class="d-flex justify-content-end">
                                                        <div>
                                                            <span class="fw-normal">3 payments</span>
                                                        </div>
                                                        <div class="ps-2">
                                                            <p class="mb-0">750.00 $</p>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Alexia Haass</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0">Via Card</p>
                                                        <i class="fa-regular fa-credit-card ps-2"></i>
                                                    </div>
                                                </td>
                                                <td class="text-end">$250.00</td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Alexia Haass</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0">Via Zile</p>
                                                        <i class="bi bi-credit-card-2-front ps-2"></i>
                                                    </div>
                                                </td>
                                                <td class="text-end">$250.00</td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                            class="me-2 cus-img rounded-circle">
                                                        <span class="lblue font-md">Alexia Haass</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0">Via Card</p>
                                                        <i class="fa-regular fa-credit-card ps-2"></i>
                                                    </div>
                                                </td>
                                                <td class="text-end">$250.00</td>
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
