<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Quotation detail</title>
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
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Quotes</span>
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
                            <div class="d-lg-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="mb-0">Quotation Detail</h3>
                                    <p class="mb-0 gre font-14">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="">
                                        <button type="button"
                                            class="mbl-100 shadow mt-3 mt-lg-0 in-f rounded-2 px-4 text-nowrap py-2 bg-secondary text-white border-0"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Generate Invoice</button>
                                    </div>
                                    <div class="ms-2">
                                        <a href="{{ route('BusinessUser.AddNewQuote') }}">
                                            <button type="button"
                                                class="mbl-100 in-f shadow mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0">
                                                Create Quote</button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="bg-white mt-3 p-3 rounded-3">
                                <div class="pr-height">
                                    <div class="position-relative pe-2">
                                        <img src="{{ asset('img/profile-back.png') }}" alt="" class="pro-img">
                                        <div class="d-flex align-items-end position-profile">
                                            <div>
                                                <img src="{{ asset('img/profile.png') }}" alt=""
                                                    class="shadow f-img">
                                            </div>
                                            <div class="ps-2">
                                                <h6 class="sky-c">Alexia Haass</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5 pt-3 border-bottom pe-2">
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Customer Name</h6>
                                            <p class="sky-c mb-0 fw-semibold">Alexia Haass</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Invoice Number</h6>
                                            <p class="sky-c mb-0 fw-semibold">#909090</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Date</h6>
                                            <p class="sky-c mb-0 fw-semibold">Monday - September 02,204</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Service Type</h6>
                                            <p class="sky-c mb-0 fw-semibold">Assessment</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Quantity</h6>
                                            <p class="sky-c mb-0 fw-semibold">01</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Product Type</h6>
                                            <p class="sky-c mb-0 fw-semibold">Handyman</p>
                                        </div>
                                    </div>
                                    <div class="row mt-5 border-bottom pe-2">
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Price</h6>
                                            <p class="sky-c mb-0 fw-semibold">$: 343.00</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Add on Packages</h6>
                                            <p class="sky-c mb-0 fw-semibold">$:10</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Internal Job Cost</h6>
                                            <p class="sky-c mb-0 fw-semibold">$:43</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Quotation Status</h6>
                                            <p class="sky-c mb-0  mt-1">
                                                <select name="" id=""
                                                    class="btn-blue w-100 py-2 text-white rounded-3 border-0 px-2">
                                                    <option value="">Accepted</option>
                                                    <option value="">Rejected</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Product Image</h6>
                                            <div class="mt-2">
                                                <img src="{{ asset('img/pro-1.png') }}" alt="" class="pro-1">
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Terms</h6>
                                            <p class="sky-c mb-0 fw-semibold">Terms here</p>
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
    <div class="modal modal-lg  fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div class="text-center w-100" id="exampleModalLabel">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <h3>Invoice</h3>
                            </div>
                            <div class="ms-2">
                                <p class="mb-0 font-12 invoiced-bg bg-lgrey p-2 rounded-3">Draft</p>
                            </div>
                        </div>
                        <p class="mb-0">Due Jun 11, 2024</p>
                    </div>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-wrap justify-content-end">
                        <div class="mb-3">
                            <form>
                                <select class="bg-sky form-select py-2 text-white shadow-none">
                                    <option value="" selected disabled hidden>Add Payment</option>
                                    <option value="">Payment 1</option>
                                    <option value="">Payment 2</option>
                                </select>
                            </form>
                        </div>
                        <div class="ms-3 mb-3">
                            <a href="#" class="bg-lgrey py-2 px-3 rounded-3 d-block">
                                <img src="{{ asset('img/msg.png') }}" class="image-fluid img">
                            </a>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#" class="bg-lgrey py-2 px-3 rounded-3 d-block">
                                <img src="{{ asset('img/print.png') }}" class="image-fluid img">
                            </a>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#" class="bg-lgrey py-2 px-3 rounded-3 d-block">
                                <i class="fa-solid fa-ellipsis text-dark"></i>
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
                            <div class="size ms-2">
                                <a href="#"><img src="{{ asset('img/invoicep.svg') }}"
                                        class="image-fluid img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-6 mt-3">
                            <a href="#" class="text-decoration-none">
                                <p class="mb-0 invoice-amount font-md">+ Add line Item</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <div class="me-5">
                                <div class="d-flex">
                                    <p class="mb-0 w-100">Sub Total</p>
                                    <p class="mb-0">$80.00</p>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0 invoice-amount skyyblue w-100">Discount</p>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0 invoice-amount skyyblue w-100">Add Tax</p>
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
                                    <p class="mb-0 fw-semibold w-100">Total Due</p>
                                    <p class="mb-0 fw-semibold">$80.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')

</body>

</html>
