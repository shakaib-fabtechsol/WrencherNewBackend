<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Open Job</title>
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
                                <div class="border-bottom">
                                    <div class="d-sm-flex flex-wrap align-items-center justify-content-between mb-3">
                                        <div>
                                            <h1 class="fs-3 font-semi">
                                                Quotes Details
                                            </h1>
                                            <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                        </div>
                                        <div class="d-lg-flex justify-content-end align-items-center">
                                            <button type="button"
                                                class="mbl-100 shadow mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0"
                                                data-bs-toggle="modal" data-bs-target="#clientModal">Convert
                                                Invoice</button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-0">Tax able</p>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p class="mb-0 skyyblue">$: 10</p>
                                </div>
                                <div>
                                    <h5 class="font-semi">Internal Job Cost</h5>
                                    <div class="bg-white rounded-3 p-2">
                                        <div class="table-responsive reports-tbl mt-3">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">Vendor</th>
                                                        <th class="font-semi">Description</th>
                                                        <th class="font-semi">Link</th>
                                                        <th class="font-semi">Quantity</th>
                                                        <th class="font-semi">Markup</th>
                                                        <th class="font-semi">Total</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space border-0"></tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">Account Owner</td>
                                                        <td class="font-md">
                                                            <a href="#" class="skyyblue">
                                                                http://abcvendor.com
                                                            </a>
                                                        </td>
                                                        <td class="font-md">02</td>
                                                        <td class="font-md">10%</td>
                                                        <td class="font-md">$: 45.00</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 col-12">
                                        <div class=" mt-3 border-1 bg-white rounded-4 px-3 py-3 h-100">
                                            <p class="mb-0 border-bottom font-md">Quote Details</p>
                                            <p class="mb-0 mt-2">Product Image</p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mt-2">
                                                        <img src="{{ asset('img/client-d-qution.svg') }}" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="d-flex flex-wrap mt-3">
                                                            <div class=" col-sm-6 col-12 mb-3">
                                                                <h6 class="mb-0">Customer Name</h6>
                                                                <p class="sky-c mb-0 font-12">Alexia Haass</p>
                                                            </div>
                                                            <div class="col-sm-6 col-12 mb-3">
                                                                <h6 class="mb-0">Invoice Number</h6>
                                                                <p class="sky-c mb-0 font-12">#909090</p>
                                                            </div>
                                                            <div class=" col-sm-6 col-12 mb-3 text-truncate">
                                                                <h6 class="mb-0">Date</h6>
                                                                <p class="sky-c mb-0 font-12">Monday - September 02, 204
                                                                </p>
                                                            </div>
                                                            <div class=" col-sm-6 col-12 mb-3">
                                                                <h6 class="mb-0">Service Type</h6>
                                                                <p class="sky-c mb-0 font-12">Assessment</p>
                                                            </div>
                                                            <div class="col-sm-6 col-12  mb-3">
                                                                <h6 class="mb-0">Quantity</h6>
                                                                <p class="sky-c mb-0 font-12">01</p>
                                                            </div>
                                                            <div class="col-sm-6 col-12  mb-3">
                                                                <h6 class="mb-0">Product Type</h6>
                                                                <p class="sky-c mb-0 font-12">Handyman</p>
                                                            </div>
                                                            <div class="col-sm-6 col-12  mb-3">
                                                                <h6 class="mb-0">Price</h6>
                                                                <p class="sky-c mb-0 font-12">$: 343.00</p>
                                                            </div>
                                                            <div class="col-sm-6 col-12 mb-3">
                                                                <h6 class="mb-0">Add on Packages</h6>
                                                                <p class="sky-c mb-0 font-12">$:10</p>
                                                            </div>
                                                            <div class="col-sm-6 col-12 mb-3">
                                                                <h6 class="mb-0">Internal Job Cost</h6>
                                                                <p class="sky-c mb-0 font-12">$:43</p>
                                                            </div>
                                                            <div class="col-sm-6 col-12 mb-3">
                                                                <h6 class="mb-0">Terms</h6>
                                                                <p class="sky-c mb-0 font-12">Term here</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 mt-4 mt-xl-0">
                                        <div class=" mt-3 border-1 bg-white rounded-4 px-3 py-3 h-100 ">
                                            <div
                                                class="border-bottom d-flex  justify-content-sm-between align-items-start flex-column flex-sm-row">
                                                <div>
                                                    <p class="mb-0 font-md">Details About Estimates</p>
                                                </div>
                                                <div class="mt-3 mt-sm-0">
                                                    <button type="button" class="client-d-btnr mb-2">
                                                        Request Changes
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="mb-0 fs-4 text-center mt-3">The Repair Guy Services</p>
                                            <p class="mb-0 light-black text-center mt-2">Estimate Total</p>
                                            <p class="mb-0 fs-4 text-center mt-2">$:45.00</p>
                                            <div class="border-bottom">
                                                <div class="d-flex justify-content-center mt-5">
                                                    <button type="button" class="client-btn-accept">
                                                        Accept
                                                    </button>
                                                </div>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <button type="button" class="client-btn-decline mt-3">
                                                        Decline
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-center light-black">Estimates are subject to change. The
                                                business will reach out to confirm final details.
                                                ©2024 Intuit Inc. All rights reserved. <span class="sky">Terms of
                                                    Conduction</span> </p>
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
    <div class="modal modal-lg fade" id="clientModal" tabindex="-1" aria-labelledby="clientModalLabel"
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
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-wrap justify-content-end">
                        <div class="mb-3">
                            <a href="#">
                                <form>
                                    <select class="rounded-2 clientmodal text-white border-0 focus-none p-3">
                                        <option value="" selected disabled hidden>Add Payment</option>
                                        <option value="">Payment 1</option>
                                        <option value="">Payment 2</option>
                                    </select>
                                </form>
                            </a>
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
</body>

</html>