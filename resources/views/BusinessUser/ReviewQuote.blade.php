<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Review</title>
</head>

<body>
    <div class="bg-greyn min-vh">
        <div class="mycontainer">
            <div class="tabs rounded-4 p-4">
                <nav class="tbss review px-4 rounded-4 py-3 shadow-sm">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <p class="nav-link pb-0" id="nav-Billable-tab" data-bs-toggle="tab" data-bs-target="#nav-Billable"
                            type="button" role="tab" aria-controls="nav-Billable" aria-selected="true">Edit</p>
                        <p class="nav-link pb-0 active" id="nav-NonBillable-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-NonBillable" type="button" role="tab"
                            aria-controls="nav-NonBillable" aria-selected="false">Email view</p>
                        <p class="nav-link pb-0" id="nav-NonBillable-tab" data-bs-toggle="tab" data-bs-target="#nav-pdf"
                            type="button" role="tab" aria-controls="nav-pdf" aria-selected="false">PDF view</p>
                    </div>
                </nav>
                <div class="tab-content bg-white py-5 px-3 px-md-4 px-lg-5 rounded-4 mt-4 shadow" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-Billable" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <section class="">
                            <div class="col-lg-12">
                                <div class="row mt-3 align-items-end">
                                    <div class="col-md-4">
                                        <p class="mb-0">
                                            <b>BlueWave Enterprises Services</b>
                                        </p>
                                        <p class="mb-0">4940 SW Lake Grove Cir<br> Palm City FL 34990</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mb-0">example@gmail.com</p>
                                        <p class="mb-0">+1 (772) 279-4277</p>
                                        <a href="#"
                                            class="text-decoration-none text-dark">https://wrencher-fe.netlify.app</a>
                                    </div>
                                    <div class="col-4 d-none d-md-block d-flex justify-content-end">
                                        <img src="{{ asset('img/logo-main.png') }}" alt=""
                                            class="log-logo w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-6 mb-3 ">
                                    <div>
                                        <label for="" class="ps-2 fw-semibold">Select Customer</label>
                                        <div class="dropdown1">
                                            <div class="dropdown-toggle1 d-flex bg-white">
                                                <div class="w-100">
                                                    <button type="button"
                                                        class="w-100 dropdown-toggle2 border-0 p-0 text-start bg-white">Select
                                                        Here</button>
                                                </div>
                                                <div>
                                                    <i class="fa-solid fa-caret-down"></i>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu1 bg-white shadow rounded-3 p-2">
                                                <button type="button"
                                                    class="create-new-btn text-start shadow-sm rounded-3"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="fa-solid fa-square-plus me-2"></i>Create a new
                                                    customer</button>
                                                <div class="mt-2">
                                                    <div
                                                        class="search-input d-flex align-items-center shadow-sm px-3 py-2">
                                                        <input type="text" placeholder="Search Customer"
                                                            class="w-100 border-0">
                                                        <button class="search-btn"><i
                                                                class="fa-solid fa-magnifying-glass"></i></button>
                                                    </div>
                                                </div>
                                                <ul class="customer-list mt-2">
                                                    <!-- Customer items will be added here dynamically -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="date" class="ps-2 fw-semibold">Date</label>
                                    <input type="date" id="date" class="w-100 bg-white border rounded-3 p-2">
                                </div>

                                <script>
                                    const dateInput = document.getElementById('date');
                                    const today = new Date();
                                    const formattedDate = today.toISOString().split('T')[0]; // Format as YYYY-MM-DD
                                    dateInput.value = formattedDate;
                                </script>

                                <div class="col-lg-6 mb-3">
                                    <label for="inv" class="ps-2 fw-semibold">Invoice Number</label>
                                    <input type="text" id="inv" class="w-100 bg-white border rounded-3 p-2"
                                        placeholder="1234" readonly>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="date" class="ps-2 fw-semibold">Expiration Date</label>
                                    <input type="date" id="expdate" class="w-100 bg-white border rounded-3 p-2">
                                </div>

                                <script>
                                    // Get the current date
                                    const currentDate = new Date();

                                    // Add one month to the current date
                                    const nextMonthDate = new Date(
                                        currentDate.getFullYear(),
                                        currentDate.getMonth() + 1,
                                        currentDate.getDate()
                                    );

                                    // Format the date as YYYY-MM-DD
                                    const formattedDate4 = nextMonthDate.toISOString().split('T')[0];

                                    // Set the value of the input field
                                    document.getElementById('expdate').value = formattedDate4;
                                </script>

                                <div class="col-lg-12 mb-3">
                                    <label for="" class="ps-2 fw-semibold">Property Address</label>
                                    <textarea name="" rows="5" id="" class="w-100 bg-white border rounded-3 p-2"
                                        placeholder=" 123 Elm Street, Springfield, Illinois, 62701, United States"></textarea>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="terms_of_service" class="w-100 fw-semibold">Terms of
                                        Services</label>
                                    <input type="text" id="terms_of_service"
                                        class="form-control focus-none w-new py-2"
                                        placeholder="Enter terms of service...">
                                </div>
                                <!-- <div class="col-lg-4 mb-3">
                                    <label for="" class="ps-2 fw-semibold">Ship To</label>
                                    <textarea name="" rows="5" id="" class="w-100 bg-white border rounded-3 p-2"
                                        placeholder=" 123 Elm Street, Springfield, Illinois, 62701, United States"></textarea>
                                </div> -->

                                <!-- <div class="col-lg-4 mb-3">
                                    <label for="" class="ps-2 fw-semibold">Ship From</label>
                                    <textarea name="" rows="5" id="" class="w-100 bg-white border rounded-3 p-2"
                                        placeholder=" 123 Elm Street, Springfield, Illinois, 62701, United States"></textarea>
                                </div> -->
                            </div>
                            <div class="table-responsive reports-tbl mt-5">
                                <table class="table">
                                    <thead>
                                        <tr class="align-middle">
                                            <th class="font-semi text-center">#</th>
                                            <th class="font-semi text-center">Photo</th>
                                            <!-- <th class="font-semi text-center">Date</th> -->
                                            <th class="font-semi text-center">Product/service</th>
                                            <th class="font-semi text-center">Description</th>
                                            <th class="font-semi text-center">Qty</th>
                                            <th class="font-semi text-center">Rate </th>
                                            <th class="font-semi text-center">Amount</th>
                                            <th class="font-semi text-center">Taxable</th>
                                            <th class="font-semi text-center">Packages</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="align-middle">
                                            <td class="font-md text-center">
                                                1
                                            </td>
                                            <td class="font-md text-center">
                                                <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                            </td>
                                            <!-- <td class="font-md text-center">
                                               12/10/2024
                                            </td> -->
                                            <td class="font-md text-center">
                                                Handyman
                                            </td>

                                            <td class="font-md text-center">
                                                Custom Handyman
                                            </td>
                                            <td class="font-md text-center">
                                                1
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                Yes
                                            </td>
                                            <td class="font-md text-center">
                                                "A" - 5% Off
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="font-md text-center">
                                                2
                                            </td>
                                            <td class="font-md text-center">
                                                <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                            </td>
                                            <!-- <td class="font-md text-center">
                                               12/10/2024
                                            </td> -->
                                            <td class="font-md text-center">
                                                Handyman
                                            </td>

                                            <td class="font-md text-center">
                                                Custom Handyman
                                            </td>
                                            <td class="font-md text-center">
                                                1
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                Yes
                                            </td>
                                            <td class="font-md text-center">
                                                "B" - 15% Off
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="font-md text-center">
                                                3
                                            </td>
                                            <!-- <td class="font-md text-center">
                                               12/10/2024
                                            </td> -->
                                            <td class="font-md text-center">
                                                <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                            </td>
                                            <td class="font-md text-center">
                                                Handyman
                                            </td>

                                            <td class="font-md text-center">
                                                Custom Handyman
                                            </td>
                                            <td class="font-md text-center">
                                                1
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                No
                                            </td>
                                            <td class="font-md text-center">
                                                "C" - 25% Off
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="bg-white p-3 border rounded-3">
                                        <h6 class="gre font-14">Edit default settings</h6>
                                        <h6>Payment Details</h6>
                                        <h6>Accepted Payment Methods</h6>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <p class="gre fw-medium font-12 mb-0">Stripe (2.99 per transaction)</p>
                                                <div>
                                                    <img src="{{ asset('img/stripe.png') }}" alt=""
                                                        class="stripe-img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="switch">
                                                    <input type="checkbox" class="switch-input" id="toggle4"
                                                        checked disabled>
                                                    <label class="switch-slider" for="toggle4"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mt-3">
                                            <div>
                                                <p class="gre fw-medium font-12 mb-0">Paypal (2.99 per transaction)</p>
                                                <div>
                                                    <img src="{{ asset('img/s-p.png') }}" alt=""
                                                        class="stripe-img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="switch">
                                                    <input type="checkbox" class="switch-input" id="toggle"
                                                        disabled>
                                                    <label class="switch-slider" for="toggle"></label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mt-4 mt-sm-0">
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <p class="mb-0">Subtotal</p>
                                        <p class="mb-0">$249.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Discount</p>
                                        </div>
                                        <p class="mb-0">$0.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Taxable subtotal</p>
                                        </div>
                                        <p class="mb-0">$0.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Select tax rate</p>
                                        </div>
                                    </div>
                                    <div class="border-1 border-black rounded-2 px-3 py-2">
                                        <p class="mb-0 me-2">Automatic Calculation</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Sales tax</p>
                                            <i class="fa-regular fa-circle-question"></i>
                                        </div>
                                        <p class="mb-0">$0.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2 fw-semibold">Estimate total</p>
                                        </div>
                                        <p class="mb-0 fw-semibold">$224.10</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Deposit</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">$200.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>

                    <div class="tab-pane fade show active" id="nav-NonBillable" role="tabpanel"
                        aria-labelledby="nav-home-tab" tabindex="0">
                        <section class="">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class=" d-flex justify-content-center">
                                    <img src="{{ asset('img/logo-main.png') }}" alt="logo"
                                        class="img-fluid log-logo">
                                </div>
                            </div>
                            <div class="px-3 rounded-4 py-4 bg-sky2 mt-4">
                                <p class="fs-3 text-center fw-semibold">Your estimate is ready!</p>
                                <p class="text-center">Total $224.10</p>
                                <p class="text-center text-uppercase">Deposit Due!</p>
                                <p class="fs-2 mb-0 fw-medium text-center">$200.00</p>
                            </div>
                            <p class="py-3 mb-0 text-center">The email message you write will go here</p>
                            <div class="d-flex justify-content-center mt-2">
                                <div class="mx-2">
                                    <button
                                        class="red-bg py-2 px-4 w-100 text-white border-danger border-1 rounded-3">Decline</button>
                                </div>
                                <div class="mx-2">
                                    <button type="submit"
                                        class="bg-sky py-2 px-4 w-100 text-white border-primary border-1 rounded-3"
                                        data-bs-target="#acceptModal" data-bs-toggle="modal">Accept</button>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane fade" id="nav-pdf" role="tabpanel" aria-labelledby="nav-pdf"
                        tabindex="0">
                        <section class="">
                            <div class="bg-sky2 px-4 rounded-4">
                                <div class="row border-bottom border-1 py-4">
                                    <div class="col-6">
                                        <p class="mb-0">Bill to</p>
                                        <p class="mb-0">Alexia Hass</p>
                                        <p class="mb-0">5012 SE Star Apple Street</p>
                                        <p class="mb-0">Palm City, FL 34990</p>
                                        <p class="mb-0">United States</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0">Bill to</p>
                                        <p class="mb-0">Alexia Hass</p>
                                        <p class="mb-0">5012 SE Star Apple Street</p>
                                        <p class="mb-0">Palm City, FL 34990</p>
                                        <p class="mb-0">United States</p>
                                    </div>
                                </div>
                                <div class="row py-4">
                                    <div class="col-6">
                                        <p class="mb-0">Estimate details</p>
                                        <p class="mb-0">Estimate no: 1712</p>
                                        <p class="mb-0">Estimate date: 12/23/2024</p>
                                    </div>

                                </div>
                            </div>
                            <div class="table-responsive reports-tbl mt-5">
                                <table class="table">
                                    <thead>
                                        <tr class="align-middle">
                                            <th class="font-semi text-center">#</th>
                                            <th class="font-semi text-center">Photo</th>
                                            <!-- <th class="font-semi text-center">Date</th> -->
                                            <th class="font-semi text-center">Product/service</th>
                                            <th class="font-semi text-center">Description</th>
                                            <th class="font-semi text-center">Qty</th>
                                            <th class="font-semi text-center">Rate </th>
                                            <th class="font-semi text-center">Amount</th>
                                            <th class="font-semi text-center">Taxable</th>
                                            <th class="font-semi text-center">Packages</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="align-middle">
                                            <td class="font-md text-center">
                                                1
                                            </td>
                                            <!-- <td class="font-md text-center">
                                               12/10/2024
                                            </td> -->
                                            <td class="font-md text-center">
                                                <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                            </td>
                                            <td class="font-md text-center">
                                                Handyman
                                            </td>

                                            <td class="font-md text-center">
                                                Custom Handyman
                                            </td>
                                            <td class="font-md text-center">
                                                1
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                Yes
                                            </td>
                                            <td class="font-md text-center">
                                                "A" - 5% Off
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="font-md text-center">
                                                2
                                            </td>
                                            <td class="font-md text-center">
                                                <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                            </td>
                                            <!-- <td class="font-md text-center">
                                               12/10/2024
                                            </td> -->
                                            <td class="font-md text-center">
                                                Handyman
                                            </td>

                                            <td class="font-md text-center">
                                                Custom Handyman
                                            </td>
                                            <td class="font-md text-center">
                                                1
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                Yes
                                            </td>
                                            <td class="font-md text-center">
                                                "B" - 15% Off
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="font-md text-center">
                                                3
                                            </td>
                                            <td class="font-md text-center">
                                                <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                            </td>
                                            <!-- <td class="font-md text-center">
                                               12/10/2024
                                            </td> -->
                                            <td class="font-md text-center">
                                                Handyman
                                            </td>

                                            <td class="font-md text-center">
                                                Custom Handyman
                                            </td>
                                            <td class="font-md text-center">
                                                1
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                $99.00
                                            </td>
                                            <td class="font-md text-center">
                                                No
                                            </td>
                                            <td class="font-md text-center">
                                                "C" - 25% Off
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="bg-white p-3 border rounded-3">
                                        <h6 class="gre font-14">Edit default settings</h6>
                                        <h6>Payment Details</h6>
                                        <h6>Accepted Payment Methods</h6>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <p class="gre fw-medium font-12 mb-0">Stripe (2.99 per transaction)</p>
                                                <div>
                                                    <img src="{{ asset('img/stripe.png') }}" alt=""
                                                        class="stripe-img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="switch">
                                                    <input type="checkbox" class="switch-input" id="toggle4"
                                                        checked>
                                                    <label class="switch-slider" for="toggle4"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mt-3">
                                            <div>
                                                <p class="gre fw-medium font-12 mb-0">Paypal (2.99 per transaction)</p>
                                                <div>
                                                    <img src="{{ asset('img/s-p.png') }}" alt=""
                                                        class="stripe-img">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="switch">
                                                    <input type="checkbox" class="switch-input" id="toggle">
                                                    <label class="switch-slider" for="toggle"></label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mt-4 mt-sm-0">
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <p class="mb-0">Subtotal</p>
                                        <p class="mb-0">$249.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Discount</p>
                                        </div>
                                        <p class="mb-0">$0.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Taxable subtotal</p>
                                        </div>
                                        <p class="mb-0">$0.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Select tax rate</p>
                                        </div>
                                    </div>
                                    <div class="border-1 border-black rounded-2 px-3 py-2">
                                        <p class="mb-0 me-2">Automatic Calculation</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Sales tax</p>
                                            <i class="fa-regular fa-circle-question"></i>
                                        </div>
                                        <p class="mb-0">$0.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2 fw-semibold">Estimate total</p>
                                        </div>
                                        <p class="mb-0 fw-semibold">$224.10</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-1">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Deposit</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">$200.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-lg fade" id="acceptModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Pay Deposit Confirmation</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-11 mx-auto">
                                <p>Click the button to pay the deposit and accept the estimate, optionally leave a
                                    message</p>

                                <!-- Authorized by Input -->
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Authorized by (enter
                                        name)</label>
                                    <input type="text" class="modal-input" placeholder="">
                                </div>

                                <!-- Signature Section -->
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Signature</label>
                                    <div class="signature-container border rounded bg-light">
                                        <canvas id="signatureCanvas" class="w-100" style="height: 150px;"></canvas>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-end">
                                        <button type="button" id="clearSignature"
                                            class="btn btn-sm btn-danger">Clear</button>
                                        <!-- <button type="button" id="saveSignature" class="btn btn-sm btn-primary">Save</button> -->
                                    </div>
                                    <input type="hidden" id="signatureInput" name="signature">
                                </div>

                                <!-- Message (Optional) -->
                                <div class="">
                                    <label for="" class="form-label fw-medium mb-0">Message (optional)</label>
                                    <textarea name="" id="" class="modal-input" rows="5"></textarea>
                                </div>

                                <!-- Card Details Section -->
                                <div class="mt-4">
                                    <label for="card_number" class="form-label fw-medium mb-0">Card Number</label>
                                    <input type="text" id="card_number" class="modal-input"
                                        placeholder="Enter card number">
                                </div>
                                <div class="mt-3 d-flex gap-3">
                                    <div class="w-50">
                                        <label for="expiry_date" class="form-label fw-medium mb-0">Expiry Date</label>
                                        <input type="month" id="expiry_date" class="modal-input"
                                            placeholder="MM/YY">
                                    </div>
                                    <div class="w-50">
                                        <label for="cvv" class="form-label fw-medium mb-0">CVV</label>
                                        <input type="text" id="cvv" class="modal-input" placeholder="CVV">
                                    </div>
                                </div>

                                <!-- Payment Buttons -->
                                <div class="d-flex flex-wrap justify-content-end mt-5">
                                    <div class="me-2">
                                        <button
                                            class="red-bg py-2 px-4 w-100 text-white border-danger border-1 rounded-3"
                                            data-bs-dismiss="modal" aria-label="Close">Close</button>
                                    </div>
                                    <div class="me-2">
                                        <button type="submit"
                                            class="bg-sky py-2 px-3 w-100 text-white border-primary border-1 rounded-3">Pay
                                            with Cash or Check</button>
                                    </div>
                                    <div class="">
                                        <button type="submit"
                                            class="bg-sky py-2 px-3 w-100 text-white border-primary border-1 rounded-3">Pay
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @include('Templates.Jslinks')
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

    <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Add New Customer</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <!-- <div>
                                    <div>
                                        <div>
                                            <img src="{{ asset('img/user.png') }}" alt="" class="user-file">
                                        </div>
                                        <div class="mt-2">
                                            <label for="file-up" class="bg-sky py-2 px-3 rounded-2 text-white">
                                                Add Image
                                            </label>
                                        </div>
                                    </div>
                                    <input type="file" id="file-up" class="d-none">
                                </div> -->
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Full Name</label>
                                    <input type="text" class="modal-input" placeholder="John Doe">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Phone</label>
                                    <input type="tel" class="modal-input" placeholder="12345678">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Email</label>
                                    <input type="email" class="modal-input" placeholder="awesomaa1@domain.com">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Address</label>
                                    <input type="text" class="modal-input"
                                        placeholder="123 Eve, Rookers Block Las Vegas">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Referal</label>
                                    <select name="" id="" class="modal-input">
                                        <option value="">How did you hear about us?</option>
                                    </select>
                                </div>
                                <div class="row justify-content-between mt-5">
                                    <div class="col-sm-4 col-6">
                                        <button type="button"
                                            class="red-bg py-2 px-2 w-100 text-white border-danger border-1 rounded-3">Cancel</button>
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <button type="submit"
                                            class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-lg fade" id="mapModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Where's your place located?</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <h5>Your address is only shared with Job Seekers.</h5>
                                <div>
                                    <input id="autocomplete" type="text" class="form-control"
                                        placeholder="Enter a location">
                                    <div id="map" class="mt-3"></div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div>
                                        <p class="blu fw-medium pointer" data-bs-target="#confirmModal"
                                            data-bs-toggle="modal">Enter Manual Address</p>
                                    </div>
                                    <div>
                                        <button class="bg-sky text-white py-2 px-5 rounded-2 border-blu">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-lg fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Confirm your address</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <p class="text-center fw-semibold">Your address is only shared with guests after they’ve made a
                            reservation.</p>
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Street Address</label>
                                    <input type="text" class="modal-input" placeholder="Sialkot, 90 more">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Apt, floor, bldg (if
                                        applicable)</label>
                                    <input type="text" class="modal-input" placeholder="Second Floor">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">City / town /
                                        village</label>
                                    <input type="text" class="modal-input" placeholder="Main Chino ">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Province / state /
                                        territory (if
                                        applicaable)</label>
                                    <input type="text" class="modal-input" placeholder="Punjab">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Postal code (if
                                        applicable)</label>
                                    <input type="text" class="modal-input" placeholder="57000">
                                </div>
                                <div class="row justify-content-between mt-5">
                                    <div class="col-sm-4 col-6">
                                        <input type="reset" value="Clear"
                                            class="text-decoration-underline border-0 bg-transparent" name=""
                                            id="">
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <button type="button" data-bs-target="#AddressModal" data-bs-toggle="modal"
                                            class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AddressModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('img/claim.png') }}" alt="">
                        </div>
                        <div class="ms-2">
                            <h6 class="fw-bold mb-0">We don't recognize that address</h6>
                            <p class="fw-medium gre mb-0">Are you sure that it's correct?</p>
                        </div>
                    </div>
                    <div class="row mt-4 align-items-center">
                        <div class="col-sm-6 text-center">
                            <p class="pointer sky text-decoration-underline font-c py-2 mb-0"
                                data-bs-target="#confirmModal" data-bs-toggle="modal">No, edit the address</p>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit"
                                class="bg-sky text-white border-blu py-2 w-100 px-2 rounded-3 font-c"
                                data-bs-dismiss="modal" aria-label="Close">Yes, my address is correct</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const canvas = document.getElementById("signatureCanvas");
            const clearButton = document.getElementById("clearSignature");
            const saveButton = document.getElementById("saveSignature");
            const signatureInput = document.getElementById("signatureInput");
            let signaturePad;

            // Initialize SignaturePad when the modal is shown
            const modal = document.getElementById("acceptModal");
            modal.addEventListener("shown.bs.modal", function() {
                // Set canvas size dynamically
                canvas.width = canvas.offsetWidth;
                canvas.height = canvas.offsetHeight;

                // Initialize the signature pad
                signaturePad = new SignaturePad(canvas);
            });

            // Clear the signature
            clearButton.addEventListener("click", function() {
                if (signaturePad) {
                    signaturePad.clear();
                }
            });

            // Save the signature as a data URL
            saveButton.addEventListener("click", function() {
                if (signaturePad && !signaturePad.isEmpty()) {
                    const dataURL = signaturePad.toDataURL();
                    signatureInput.value = dataURL; // Save signature data to hidden input
                    alert("Signature saved!");
                } else {
                    alert("Please provide a signature first.");
                }
            });

            // Reset signature pad when modal is hidden
            modal.addEventListener("hidden.bs.modal", function() {
                if (signaturePad) {
                    signaturePad.clear();
                }
            });
        });
    </script>

</body>

</html>
