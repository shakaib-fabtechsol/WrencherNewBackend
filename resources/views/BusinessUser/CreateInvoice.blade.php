<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add new invoice</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Invoice') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Add New Invoice</h5>
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
                    <div class="col-lg-8">
                        <h4 class="mb-0 blu2 mt-3">Add New Invoice Details</h4>
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
                    <form action="#" class="mt-5">
                        <div class="row mt-3">
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
                                        <input type="text" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder=" 123 Elm Street, Springfield, Illinois, 62701, United States">
                                    </div> -->

                                    <!-- <div class="col-lg-6 mb-3">
                                        <label for="" class="ps-2 fw-semibold">Ship From</label>
                                        <input type="text" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder=" 123 Elm Street, Springfield, Illinois, 62701, United States">
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
                                        <!-- <th class="font-semi text-center">Service Date</th> -->
                                        <th class="font-semi text-center">Photo</th>
                                        <th class="font-semi text-center">Product/service</th>
                                        <th class="font-semi text-center">Description</th>
                                        <th class="font-semi text-center">Qty</th>
                                        <th class="font-semi text-center">Rate </th>
                                        <th class="font-semi text-center">Amount</th>
                                        <th class="font-semi text-center">Taxable</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <!-- <td class="font-md text-center">
                                            <input type="date" id="date2" class="form-control w-new py-2">
                                        </td> -->
                                        <td class="font-md text-center">
                                            <img src="{{ asset('img/service1.png') }}" class="servicesmall">
                                        </td>
                                        <td class="font-md text-center">
                                            <select name="" id=""
                                                class="form-select focus-none w-new py-2">
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
                                class="ms-auto d-flex justify-content-center btn btn-primary mt-3 mb-3">Add Line
                                Item</button>
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
                                        <textarea name="" id="note" rows="4" class="w-100 rounded-2 border-1"></textarea>
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
                                            placeholder="Name...">
                                    </div>

                                    <div class="row">
                                        <div class="my-2 col-sm-6">
                                            <label for="material_cost" class="w-100 fw-semibold">Cost</label>
                                            <input type="text" id="material_cost"
                                                class="form-control focus-none w-new py-2"
                                                placeholder="Cost...">
                                        </div>
                                        <div class="my-2 col-sm-6">
                                            <label for="material_link" class="w-100 fw-semibold">Link</label>
                                            <input type="text" id="material_link"
                                                class="form-control focus-none w-new py-2"
                                                placeholder="Link...">
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

                </div>
            </div>
        </div>
    </section>

    @include('Templates.Jslinks')
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
                    <form action="">
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
                                        <button
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
                    <form action="">
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
                    <form action="">
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
    @include('Templates.UserLogoutModule')
    <script>
        let map;
        let autocomplete;

        function initAutocomplete() {
            // Initialize the map
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                }, // Default center
                zoom: 8 // Default zoom
            });

            // Initialize the autocomplete functionality
            var input = document.getElementById('autocomplete');
            autocomplete = new google.maps.places.Autocomplete(input, {
                types: ['geocode'] // Restrict the types of predictions.
            });

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();

                if (!place.geometry) {
                    console.log("No details available for input: '" + place.name + "'");
                    return;
                }

                // Get the address components and fill the city and state fields.
                var addressComponents = place.address_components;
                var city = '';
                var state = '';

                for (var i = 0; i < addressComponents.length; i++) {
                    var component = addressComponents[i];
                    if (component.types.includes('locality')) {
                        city = component.long_name;
                    }
                    if (component.types.includes('administrative_area_level_1')) {
                        state = component.short_name; // or use component.long_name for full state name
                    }
                }

                // Center the map on the selected place
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
            });
        }
    </script>
    <script>
        const dateInput2 = document.getElementById('date2');
        const today2 = new Date();
        const formattedDate2 = today2.toISOString().split('T')[0]; // Format as YYYY-MM-DD
        dateInput2.value = formattedDate2;
    </script>
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
            $('#addRowBtn').click(function() {
                let newRow = `
                    <tr class="align-middle">
                        <td class="font-md text-center">
                            <img src="{{ asset('img/service1.png') }}" class="servicesmall">
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
                            <input type="text" class="form-control focus-none w-new py-2" placeholder="">
                        </td>
                     
                        <td class="font-md text-center">
                            <input type="number" class="form-control focus-none w-new py-2 qty" value="1" min="1" >
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
