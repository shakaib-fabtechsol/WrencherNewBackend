<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Invoice</title>
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
                                        <h1 class="fs-4 fw-semibold">
                                            Invoices
                                        </h1>
                                        <p class="mb-0">Keep tabs on every part of your business with over 8 built-in
                                            reports to choose from.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-xxl-0 mt-2">
                                        <div class="d-sm-flex align-items-center">
                                            <div
                                                class="d-flex justify-content-between border rounded-2 bg-white">
                                                <input type="search"
                                                    class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                    placeholder="Search Invoice">
                                                <span class="d-flex align-items-center bg-grey text-white">
                                                    <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="d-flex ps-3 mx-sm-2 mt-sm-0 mt-2 align-items-center border bg-white rounded-2">
                                                <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                                <select name="" id="filter"
                                                    class="border-white filter-width me-1 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                                    <option value="" selected disabled hidden>Filter</option>
                                                    <option value="">Filter by Date</option>
                                                    <option value="">Filter by Price</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('BusinessUser.CreateInvoice') }}">
                                                    <button type="button"
                                                        class="mbl-100 btn-sv mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0">Create
                                                        an Invoice</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white px-3 py-2 rounded-3 mt-3 ">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab" tabindex="0">
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
                                                        <tr class="align-middle">
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
                                                            <td class="font-md"># 9091</td>
                                                            <td class="font-md">
                                                                <p class="sky-c mb-0">Assessment</p>
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
                                                                    class="bg-primary text-success font-md status-btn text-center px-3 py-2 rounded-2 text-white border-0">
                                                                    <i class="fas fa-download me-1"></i>
                                                                    <span>Download Invoice</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
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
                                                            <td class="font-md"># 9091</td>
                                                            <td class="font-md">
                                                                <p class="sky-c mb-0">Assessment</p>
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
                                                                    class="bg-primary text-success font-md status-btn text-center px-3 py-2 rounded-2 text-white border-0">
                                                                    <i class="fas fa-download me-1"></i>
                                                                    <span>Download Invoice</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
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
                                                            <td class="font-md"># 9091</td>
                                                            <td class="font-md">
                                                                <p class="sky-c mb-0">Assessment</p>
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
                                                                    class="bg-primary text-success font-md status-btn text-center px-3 py-2 rounded-2 text-white border-0">
                                                                    <i class="fas fa-download me-1"></i>
                                                                    <span>Download Invoice</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
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
                                                            <td class="font-md"># 9091</td>
                                                            <td class="font-md">
                                                                <p class="sky-c mb-0">Assessment</p>
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
                                                                    class="bg-primary text-success font-md status-btn text-center px-3 py-2 rounded-2 text-white border-0">
                                                                    <i class="fas fa-download me-1"></i>
                                                                    <span>Download Invoice</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
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
                                                            <td class="font-md"># 9091</td>
                                                            <td class="font-md">
                                                                <p class="sky-c mb-0">Assessment</p>
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
                                                                    class="bg-primary text-success font-md status-btn text-center px-3 py-2 rounded-2 text-white border-0">
                                                                    <i class="fas fa-download me-1"></i>
                                                                    <span>Download Invoice</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
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
                                                            <td class="font-md"># 9091</td>
                                                            <td class="font-md">
                                                                <p class="sky-c mb-0">Assessment</p>
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
                                                                    class="bg-primary text-success font-md status-btn text-center px-3 py-2 rounded-2 text-white border-0">
                                                                    <i class="fas fa-download me-1"></i>
                                                                    <span>Download Invoice</span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
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
                                                            <td class="font-md"># 9091</td>
                                                            <td class="font-md">
                                                                <p class="sky-c mb-0">Assessment</p>
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
                                                                    class="bg-primary text-success font-md status-btn text-center px-3 py-2 rounded-2 text-white border-0">
                                                                    <i class="fas fa-download me-1"></i>
                                                                    <span>Download Invoice</span>
                                                                </button>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div
                                                    class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border rounded-3 py-2 px-3">
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
                                <img src="{{ asset('img/modalm.svg') }}" class="image-fluid img">
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
    @include('Templates.UserLogoutModule')
</body>

</html>
