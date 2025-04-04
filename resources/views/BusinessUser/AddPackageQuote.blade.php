<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add new package quote</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Quotation') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Add New Quote</h5>
                    </div>
                </div>
                <div class="">
                    @include('Templates.BusinessUserNavBar')
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="right-bottom1">
                <div class="container-fluid h-100">
                    <form action="#" class="">
                        <div class="col-lg-8">
                            <h4 class="mb-0 blu2 mt-3">Add New Quote Details</h4>
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
                                    <img src="{{ asset('img/logo-main.png') }}" alt="" class="log-logo w-100">
                                </div>

                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-8 ">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
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
                                        <input type="date" id="date"
                                            class="w-100 bg-white border rounded-3 p-2">
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
                                        <input type="date" id="expdate"
                                            class="w-100 bg-white border rounded-3 p-2">
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
                                    <!-- <div class="col-lg-6 mb-3">
                                        <label for="" class="ps-2 fw-semibold">Ship To</label>
                                        <textarea name="" rows="5" id="" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder=" 123 Elm Street, Springfield, Illinois, 62701, United States"></textarea>
                                    </div> -->

                                    <!-- <div class="col-lg-4 mb-3">
                                        <label for="" class="ps-2 fw-semibold">Ship From</label>
                                        <textarea name="" rows="5" id="" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder=" 123 Elm Street, Springfield, Illinois, 62701, United States"></textarea>
                                    </div> -->

                                    <!-- <div class="col-lg-6 mb-3">
                                        <label for="" class="ps-2 fw-semibold">Invoice Number</label>
                                        <input type="number" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type Invoice Number">
                                    </div> -->


                                </div>
                            </div>
                        </div>
                        <div class="table-responsive reports-tbl mt-5">
                            <table class="table" id="dynamicTable">
                                <thead>
                                    <tr class="align-middle">
                                        <th class="font-semi text-center">Photo</th>
                                        <th class="font-semi text-center">A</th>
                                        <th class="font-semi text-center">B</th>
                                        <th class="font-semi text-center">C</th>
                                        <th class="font-semi text-center">Product/service</th>
                                        <th class="font-semi text-center">Description</th>
                                        <th class="font-semi text-center">Qty</th>
                                        <th class="font-semi text-center">Rate</th>
                                        <th class="font-semi text-center">Amount</th>
                                        <th class="font-semi text-center">Taxable</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td class="font-md text-center">
                                            <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                        </td>
                                        <td class="font-md text-center ">
                                            <div class="toggle-cell border-1 border-black rounded-3 py-2"></div>
                                        </td>
                                        <td class="font-md text-center ">
                                            <div class="toggle-cell border-1 border-black rounded-3 py-2"></div>
                                        </td>
                                        <td class="font-md text-center ">
                                            <div class="toggle-cell border-1 border-black rounded-3 py-2"></div>
                                        </td>
                                        <td class="font-md text-center">
                                            <select name="" class="form-select focus-none w-new py-2">
                                                <option value="Picture Hanging">Select Service/Product</option>
                                                <option value="Picture Hanging">Picture Hanging</option>
                                                <option value="Drywall Repair">Drywall Repair</option>
                                                <option value="Gutter Cleaning">Gutter Cleaning</option>
                                                <option value="Curtain Rod Install">Curtain Rod Install</option>
                                            </select>
                                        </td>

                                        <td class="font-md text-center">
                                            <input type="text" class="form-control focus-none w-new py-2"
                                                placeholder="">
                                        </td>

                                        <td class="font-md text-center">
                                            <input type="number" class="form-control focus-none w-new py-2 qty"
                                                value="1" min="1">
                                        </td>

                                        <td class="font-md text-center">
                                            <input type="text" class="form-control focus-none w-new py-2"
                                                placeholder="0.00">
                                        </td>
                                        <td class="font-md text-center">
                                            <input type="text" class="form-control focus-none w-new py-2"
                                                placeholder="$0.00">
                                        </td>
                                        <td class="font-md text-center">
                                            <input type="checkbox" checked>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" id="addRowBtn"
                                class="ms-auto mb-3 d-flex justify-content-center btn btn-primary mt-3">Add Line
                                Item</button>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-8">
                                <div class="row gx-0 bg-white">
                                    <div class="col-12">
                                        <p
                                            class="bg-sky border-2 border-black border-bottom-0 text-white px-2 py-2 mb-0 opacity-75">
                                            Service Packages</p>
                                    </div>
                                    <div class="col-sm-6 col-md-4 border-2 border-black">
                                        <p class="bg-danger2 fw-semibold mb-0 text-center fs-5 px-2 py-2">
                                            "A" - 5% Off
                                        </p>
                                        <p
                                            class="py-4 text-center border-top border-bottom border-2 border-black fw-semibold fs-1 text-black mb-0">
                                            $2,423
                                        </p>
                                        <div class="d-flex bg-danger2 px-3 justify-content-between py-2">
                                            <p class="fs-5 fw-semibold mb-0">Save</p>
                                            <p class="fs-5 fw-semibold mb-0">$128</p>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-6 col-md-4 border-2 border-black border-end-0 border-start-0">
                                        <p class="bg-warning2 fw-semibold mb-0 text-center fs-5 px-2 py-2">
                                            "B" - 10% Off
                                        </p>
                                        <p
                                            class="py-4 text-center border-top border-bottom border-end-0 border-start-0 border-2 border-black fw-semibold fs-1 text-black mb-0">
                                            $3,375
                                        </p>
                                        <div class="d-flex bg-warning2 px-3 justify-content-between py-2">
                                            <p class="fs-5 fw-semibold mb-0">Save</p>
                                            <p class="fs-5 fw-semibold mb-0">$563</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 border-2 border-black">
                                        <p class="bg-success2 fw-semibold mb-0 text-center fs-5 px-2 py-2">
                                            "C" - 20% Off
                                        </p>
                                        <p
                                            class="py-4 text-center border-top border-bottom border-2 border-black fw-semibold fs-1 text-black mb-0">
                                            $3,600
                                        </p>
                                        <div class="d-flex bg-success2 px-3 justify-content-between py-2">
                                            <p class="fs-5 fw-semibold mb-0">Save</p>
                                            <p class="fs-5 fw-semibold mb-0">$1,125</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <div class="table-responsive reports-tbl2">
                                    <table class="table">
                                        <thead>
                                            <tr class="align-middle">
                                                <th class="font-semi text-center">All Services</th>
                                                <th class="font-semi text-center">$4,500,00</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td class="font-semi text-center">

                                                </td>
                                                <td class="font-md text-center">
                                                    $
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="font-semi text-center">
                                                    Discount
                                                </td>
                                                <td class="font-md text-center">
                                                    -$
                                                </td>
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="font-semi text-center">
                                                    Deposit
                                                </td>
                                                <td class="font-md text-center">
                                                    50%
                                                </td>
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="font-semi text-center">
                                                    Total
                                                </td>
                                                <td class="font-md text-center">
                                                    $
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
                                                <input type="checkbox" class="switch-input" id="toggle4" checked>
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
                                    <div class="my-3">
                                        <label for="note" class="w-100 fw-semibold">Note to customer</label>
                                        <textarea name="" id="note" rows="4" class="w-100 rounded-2 border-1 px-3 py-2"></textarea>
                                    </div>
                                    <div class="my-3">
                                        <label for="job_notes" class="w-100 fw-semibold">Job Notes (hidden from
                                            customer)</label>
                                        <textarea name="job_notes" id="job_notes" rows="4" class="w-100 rounded-2 border-1 px-2 py-2"
                                            placeholder="Enter job notes here..."></textarea>
                                    </div>

                                    <h2 class="fs-5">Add a material (hidden from customer)</h2>
                                    <div class="table-responsive reports-tbl mt-3">
                                        <table class="table" id="materialTable">
                                            <thead>
                                                <tr class="align-middle">
                                                    <!-- <th class="font-semi text-center">Service Date</th> -->
                                                    <th class="font-semi text-center">Material Name</th>
                                                    <th class="font-semi text-center">Cost</th>
                                                    <th class="font-semi text-center">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="align-middle">
                                                    <td class="font-md text-center">
                                                        <input type="text"
                                                            class="form-control focus-none w-new py-2 w-100"
                                                            placeholder="Name...">
                                                    </td>
                                                    <td class="font-md text-center">
                                                        <input type="text"
                                                            class="form-control focus-none w-new py-2 w-100"
                                                            placeholder="Cost...">
                                                    </td>
                                                    <td class="font-md text-center">
                                                        <input type="text"
                                                            class="form-control focus-none w-new py-2 w-100"
                                                            placeholder="Link...">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" id="addNewMaterial"
                                        class="ms-auto d-flex justify-content-center btn btn-primary mt-3 mb-3">Add
                                        More</button>

                                    <!-- <div class="my-3">
                                        <label for="material_name" class="w-100 fw-semibold">Material Name</label>
                                        <input type="text" id="material_name" class="form-control focus-none w-new py-2"
                                            placeholder="Enter material Name...">
                                    </div>

                                    <div class="row">
                                        <div class="my-2 col-sm-6">
                                            <label for="material_cost" class="w-100 fw-semibold">Cost</label>
                                            <input type="text" id="material_cost"
                                                class="form-control focus-none w-new py-2"
                                                placeholder="Enter material Cost...">
                                        </div>
                                        <div class="my-2 col-sm-6">
                                            <label for="material_link" class="w-100 fw-semibold">Link</label>
                                            <input type="text" id="material_link"
                                                class="form-control focus-none w-new py-2"
                                                placeholder="Enter material Link...">
                                        </div>
                                    </div> -->

                                    <div class="my-3">
                                        <label for="job_duration" class="w-100 fw-semibold">Estimated Job
                                            Duration</label>
                                        <input type="text" id="job_duration"
                                            class="form-control focus-none w-new py-2"
                                            placeholder="Enter estimated duration...">
                                    </div>

                                    <!-- <div class="my-3">
                                        <label for="terms_of_service" class="w-100 fw-semibold">Terms of
                                            Services</label>
                                        <input type="text" id="terms_of_service"
                                            class="form-control focus-none w-new py-2"
                                            placeholder="Enter terms of service...">
                                    </div> -->

                                    <div class="my-3">
                                        <label for="" class="w-100 fw-semibold">Attachments</label>
                                        <label for="attachment"
                                            class="border-dashed border-1 py-4 px-3 w-100 rounded-2">
                                            <p class="text-center mb-1 text-primary">Add attachment</p>
                                            <p class="mt-2 text-center mb-0">Max file size: 20 MB</p>
                                        </label>
                                        <input type="file" id="attachment" class="d-none"
                                            accept="image/*,video/*,.pdf,.doc,.docx">
                                        <div id="preview-container" class="mt-3"></div>
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
                                        <input type="text" class="form-control" placeholder="0%">
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
                                <div class="border-2 border-black rounded-2 px-3 py-2">
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
                                        <i class="fa-solid fa-trash text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 mb-2">
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button class="border py-2 bg-sky text-white w-100 rounded-3">Save</button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <a href="{{ route('BusinessUser.ReviewQuote') }}"
                                    class="border py-2 bg-dark w-100 rounded-3 text-decoration-none text-black d-inline-block text-center px-2">Review
                                    & Send</a>
                            </div>
                        </div>
                    </form>
                    <!-- <div class="mt-5 py-4">
                        <div class="mycontainer ">
                            <div class="row bg-plans px-sm-3 px-lg-4 rounded-3">
                                <div class="col-sm-6 col-md-4 py-4 px-4">
                                    <h6 class="fw-bold fw-semibold fs-4">Lite <span class="text-grey fw-medium fs-6">/month</span></h6>
                                    <p class="text-grey">Scale your business with powerful
                                        sales and marketing automation
                                        tools.</p>
                                    <p class="fs-2 fw-semibold mb-0">$0.00 <span class="text-grey fw-medium fs-6">Billed monthly</span></p>
                                    <p class="text-grey fw-semibold mt-1">Key features on Lite:</p>
                                    <ul class="mb-0 pb-0 list-unstyled">
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">Quote add-ons and images</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">Job costing</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">Automated quote follow-ups</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">Two-way text messaging</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">1 User</span>
                                        </li>
                                    </ul>
                                    <div class="mt-3">
                                    <a href="#" class="text-decoration-none d-inline-block text-white rounded-pill px-4 py-2 trial-bg ">Start Free Trial</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 py-4 px-4">
                                    <h6 class="fw-bold fw-semibold fs-4">Grow <span class="text-grey fw-medium fs-6">/month</span></h6>
                                    <p class="text-grey">Build efficient processes that better
                                        connect your team and impress
                                        your customers.</p>
                                    <p class="fs-2 fw-semibold mb-0">$27 <span class="text-grey fw-medium fs-6">Billed monthly</span></p>
                                    <p class="text-grey fw-semibold mt-1">Key features on Grow::</p>
                                    <ul class="mb-0 pb-0 list-unstyled">
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">Automated reminders & payments</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">1-on-1 Product coaching</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">QuickBooks Online sync</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">Online booking</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 sky"></i>
                                            <span class="text-grey fw-medium">5 Users</span>
                                        </li>
                                    </ul>
                                    <div class="mt-3">
                                    <a href="#" class="text-decoration-none d-inline-block text-white rounded-pill px-4 py-2 trial-bg ">Start Free Trial</a>
                                    </div>
                                </div>
                                <div class="bg-sky col-minus rounded-4 col-sm-6 col-md-4 py-4 px-4">
                                    <div class="popular-neg d-flex justify-content-center">
                                        <span class="bg-white rounded-pill px-4 py-2 fw-semibold d-inline-block text-uppercase">Most Popular</span>
                                    </div>
                                    <h6 class="fw-semibold text-white fw-semibold fs-4 mt-4">Professional <span class="text-white fw-medium fs-6">/month</span></h6>
                                    <p class="text-white">Build efficient processes that better
                                        connect your team and impress
                                        your customers.</p>
                                    <p class="fs-2 text-white fw-semibold mb-0">$27 <span class="text-white fw-medium fs-6">Billed monthly</span></p>
                                    <p class="text-white fw-semibold mt-1">Key features on Grow::</p>
                                    <ul class="mb-0 pb-0 list-unstyled">
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 text-white"></i>
                                            <span class="text-white fw-medium">Automated reminders & payments</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 text-white"></i>
                                            <span class="text-white fw-medium">1-on-1 Product coaching</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 text-white"></i>
                                            <span class="text-white fw-medium">QuickBooks Online sync</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 text-white"></i>
                                            <span class="text-white fw-medium">Online booking</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check me-2 text-white"></i>
                                            <span class="text-white fw-medium">5 Users</span>
                                        </li>
                                    </ul>
                                    <div class="mt-3">
                                    <a href="#" class="text-decoration-none d-inline-block text-white rounded-pill px-4 py-2 trial-bg ">Start Free Trial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')
    <script>
        document.getElementById('attachment').addEventListener('change', function(event) {
            const previewContainer = document.getElementById('preview-container');
            previewContainer.innerHTML = ''; // Clear previous preview
            const file = event.target.files[0];

            if (file) {
                const fileReader = new FileReader();

                fileReader.onload = function(e) {
                    // Check file type and create appropriate preview
                    const fileType = file.type;
                    let previewElement;

                    if (fileType.startsWith('image/')) {
                        previewElement = document.createElement('img');
                        previewElement.src = e.target.result;
                        previewElement.style.maxWidth = '100%';
                        previewElement.style.maxHeight = '200px';
                        previewElement.classList.add('rounded');
                    } else if (fileType.startsWith('video/')) {
                        previewElement = document.createElement('video');
                        previewElement.src = e.target.result;
                        previewElement.controls = true;
                        previewElement.style.maxWidth = '100%';
                        previewElement.style.maxHeight = '200px';
                        previewElement.classList.add('rounded');
                    } else if (fileType === 'application/pdf') {
                        previewElement = document.createElement('embed');
                        previewElement.src = e.target.result;
                        previewElement.type = 'application/pdf';
                        previewElement.style.width = '100%';
                        previewElement.style.height = '200px';
                    } else {
                        previewElement = document.createElement('p');
                        previewElement.textContent = `Selected file: ${file.name}`;
                    }

                    previewContainer.appendChild(previewElement);
                };

                fileReader.readAsDataURL(file);
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            // Toggle "X" functionality for existing and dynamically added rows
            $(document).on('click', '.toggle-cell', function() {
                if ($(this).html().trim() === '') {
                    $(this).html('<p class="mb-0">X</p>');
                } else {
                    $(this).html('');
                }
            });

            // Add new row on button click
            $('#addRowBtn').on('click', function() {
                let newRow = `
                <tr class="align-middle">
                             <td class="font-md text-center">
                                            <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                        </td>
                    <td class="font-md text-center"><div class="toggle-cell border border-1 border-black rounded-3 py-2"></div></td>
                    <td class="font-md text-center"><div class="toggle-cell border border-1 border-black rounded-3 py-2"></div></td>
                    <td class="font-md text-center"><div class="toggle-cell border border-1 border-black rounded-3 py-2"></div></td>
                    <td class="font-md text-center">
                        <select name="" class="form-select focus-none w-new py-2">
                            <option value="Picture Hanging">Select Service/Product</option>
                            <option value="Picture Hanging">Picture Hanging</option>
                            <option value="Drywall Repair">Drywall Repair</option>
                            <option value="Gutter Cleaning">Gutter Cleaning</option>
                            <option value="Curtain Rod Install">Curtain Rod Install</option>
                        </select>
                    </td>
             
                    <td class="font-md text-center">
                        <input type="text" class="form-control focus-none w-new py-2" placeholder="">
                    </td>
                    <td class="font-md text-center">
                        <input type="number" class="form-control focus-none w-new py-2 qty" value="1" min="1">
                    </td>
                    <td class="font-md text-center">
                        <input type="text" class="form-control focus-none w-new py-2" placeholder="0.00">
                    </td>
                    <td class="font-md text-center">
                        <input type="text" class="form-control focus-none w-new py-2" placeholder="$0.00">
                    </td>
                    <td class="font-md text-center">
                        <input type="checkbox" checked>
                    </td>
                </tr>
            `;

                // Append the new row to the table body
                $('#dynamicTable tbody').append(newRow);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#addNewMaterial').click(function() {
                let newRow = `
                    <tr class="align-middle">
                       <td class="font-md text-center">
                            <input type="text" class="form-control focus-none w-new w-100 py-2"
                                placeholder="Name...">
                        </td>
                        <td class="font-md text-center">
                            <input type="text" class="form-control focus-none w-new w-100 py-2"
                                placeholder="Cost...">
                        </td>
                        <td class="font-md text-center">
                            <input type="text" class="form-control focus-none w-new w-100 py-2"
                                placeholder="Link...">
                        </td>
                    </tr>
                `;
                $('#materialTable tbody').append(newRow);
            });
        });
    </script>
</body>

</html>
