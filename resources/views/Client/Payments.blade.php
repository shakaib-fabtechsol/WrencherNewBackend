<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Dashboard</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.ClientSidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.ClientNavbar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="bottom-main">
                        <div class="content ">
                            <div class="container-fluid">
                                <div class="d-xxl-flex align-items-center justify-content-between">
                                    <div class="my-2">
                                        <h1 class="fs-4 font-bold">
                                            Payments
                                        </h1>
                                        <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex my-2 justify-content-end align-items-center">
                                        <div
                                            class="d-lg-flex justify-content-end align-items-center mt-xl-0 mt-2 mt-lg-0 me-lg-2">
                                            <div class="d-flex justify-content-between border-1 rounded-2 bg-white">
                                                <input type="search"
                                                    class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                    placeholder="Search Estimates">
                                                <span class="d-flex align-items-center bg-grey text-white">
                                                    <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex ps-3 pe-1 mt-2 mt-lg-0 me-lg-2 align-items-center bg-white border-1 rounded-2">
                                            <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                            <select name="" id="filter"
                                                class="border-white filter-width pe-3 py-2 grey w-100 focus-none font-md bg-transparent">
                                                <option value="" selected disabled hidden>Filter</option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                        <div class="d-flex mt-2 mt-lg-0 mx-lg-0 align-items-center me-lg-2">
                                            <a class="blue-btn p-2 rounded-2 w-100 d-flex justify-content-center"
                                                href="#">Export All Transactions</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
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
                                <div>
                                    <div>
                                        <h3 class="lblue font-semi mb-4">Upcoming Jobs</h3>
                                        <div class="table-responsive reports-tbl mt-2">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">Job</th>
                                                        <th class="font-semi">Date</th>
                                                        <th class="font-semi">Team</th>
                                                        <th class="font-semi">Total Price</th>
                                                        <th class="font-semi">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-middle">
                                                        <td class="font-md">Celling fan install</td>
                                                        <td class="font-md">Mon - Agu 13,2024</td>
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}"
                                                                        alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <a href="#"><img
                                                                        src="{{ asset('img/CalendarIcon.png') }}"
                                                                        alt=""></a>
                                                                <a href="#"><img
                                                                        src="{{ asset('img/EditIcon.png') }}"
                                                                        alt=""></a>
                                                                <a href="#"><img
                                                                        src="{{ asset('img/DeleteIcon.png') }}"
                                                                        alt=""></a>
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

            </div>
        </div>
    </section>


    @include('Templates.Jslinks')

</body>

</html>
