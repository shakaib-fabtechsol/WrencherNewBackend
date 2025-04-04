<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Payment</title>
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
                                <h3 class="hding fs-4 mb-0">
                                    <span class="sky font-semi">Sales</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span>Services</span>
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
                                <div class="d-flex flex-column flex-xl-row justify-content-between align-items-xl-end">
                                    <div class="me-2">
                                        <h4 class="mb-0 fw-semibold">Payment</h4>
                                        <p class="font-12 mb-0">Price adjustment rules allow you toi dynamiclly
                                            increase
                                            or decrease the service price for certain booking conditions, like by
                                            appointment time or service location</p>
                                    </div>
                                </div>
                                <div class="bg-white rounded-4 px-3 px-sm-4 py-2 h-100 white-min mt-4">
                                    <div class="col-xl-10">
                                        <div class="border-bottom border-1 py-3">
                                            <div class="d-flex align-items-center">
                                                <h3 class="fs-5 fw-semibold me-2 mt-1">Require payment method</h3>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input focus-none bg-success border-success"
                                                        type="checkbox" id="mySwitch" name="darkmode" value="yes"
                                                        checked>
                                                </div>
                                            </div>
                                            <p class="mb-0">Require customers provide a valid payment method when
                                                booking this service online?</p>
                                        </div>
                                        <div class="py-3">
                                            <div class="d-flex align-items-center">
                                                <h3 class="fs-5 fw-semibold me-2 mt-1">Payment method</h3>
                                            </div>
                                            <p class="mb-0">Select which types of payment method(s) customers can
                                                select
                                                from when booking</p>
                                        </div>
                                        <div class="border-1 rounded-3 px-3 py-3">
                                            <div class="d-flex align-items-start my-2">
                                                <input type="checkbox" class="me-2 mt-2" id="type1">
                                                <div class=" border-1 border-bottom pb-2">
                                                    <label for="type1" class="fw-semibold">Credit and Debit
                                                        card</label>
                                                    <p class="mb-0">This will require customers provide a vaild
                                                        credit/debit card during booking. Create a
                                                        customer in your connected stripe account with the customer’s
                                                        provided payment method. You will then be able to create a
                                                        charge when you see fit.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start my-2">
                                                <input type="checkbox" class="me-2 mt-2" id="type2">
                                                <div class=" border-1 border-bottom pb-2 w-100">
                                                    <label for="type2" class="fw-semibold">Cash</label>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start my-2">
                                                <input type="checkbox" class="me-2 mt-2" id="type3">
                                                <div class=" border-1 border-bottom pb-2 w-100">
                                                    <label for="type3" class="fw-semibold">Check</label>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start my-2">
                                                <input type="checkbox" class="me-2 mt-2" id="type4">
                                                <div class=" border-1 border-bottom pb-2 w-100">
                                                    <label for="type4" class="fw-semibold">Zelle</label>
                                                </div>
                                            </div>
                                            <div class="my-3 fw-semibold">
                                                <a href="#" class="sky-c text-decoration-none">Add a custom
                                                    payment
                                                    method</a>
                                            </div>
                                        </div>
                                        <div class="py-3 border-bottom border-1">
                                            <div class="d-flex align-items-center">
                                                <h3 class="fs-5 fw-semibold me-2 mt-1">Payment terms</h3>
                                            </div>
                                            <p class="mb-0">Our cancellation policy requires a minimum 48 hours
                                                notice.
                                                Cancellations made within this timeframe will
                                                incur a $50 charge.</p>
                                        </div>
                                        <p class="my-3">ProTip! To include links in your payment terms, use this
                                            formatting:</p>
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
