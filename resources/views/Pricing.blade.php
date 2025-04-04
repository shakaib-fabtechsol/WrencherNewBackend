<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Pricing</title>
</head>

<body>
    <header class="bg-lgrey">
        @include('Templates.Header')
        <section class="bg-effect pt-5">
            <div class="mycontainer">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-7 col-lg-8 py-4">
                        <h2 class="fs-1 text-black text-center fw-bold">
                            Try Wrencher for free now. Pick a plan later.
                        </h2>
                        <p class="text-center mt-4 mb-4">Start your free 14-day trial and access all Wrencher features,
                            no credit card required.</p>
                        <div class="max-price mx-auto mt-4">
                            <form action="#">
                                <div class="d-flex bg-white shadow-sm rounded-3 py-1 px-1">
                                    <input type="text" class="border-0 px-2 w-100 focus-none"
                                        placeholder="Email Address">
                                    <button type="submit"
                                        class="rounded-3 text-nowrap px-3 py-2 d border-0 bg-sky text-white">
                                        <p class="mb-0 small" class="">Try For 14 Days</p>
                                        <p class="font-12 mb-0">It's free</p>
                                    </button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-center">
                                <div class="px-3 mt-5 py-2 rounded-pill pricing-grey">
                                    <div class="d-flex flex-column flex-sm-row  justify-content-center">
                                        <a href="#"
                                            class="bg-sky text-center text-white d-flex align-items-center justify-content-center text-decoration-none text-capitalize rounded-pill fw-semibold me-sm-3 px-5 py-3">Monthly</a>
                                        <a href="#"
                                            class="bg-white text-black text-decoration-none mt-3 mt-sm-0 text-capitalize rounded-pill px-4 py-3">
                                            <span class="fw-medium fs-5 me-2">Annual</span>
                                            <span class="rounded-pill text-white px-3 py-2 btn-blue fw-medium">Save
                                                100$</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section class="bg-white py-5">
        <div class="mycontainer">
            <h2 class="fw-semibold text-center">
                Need help finding the right plan?
            </h2>
            <p class="text-center mt-3">Take this short quiz and we’ll match you with the right plan for your business.
            </p>
            <div class="d-flex justify-content-center">
                <a href="#plans" class="text-decoration-none bg-sky px-5 rounded-3 text-white py-3">Find Your Plan</a>
            </div>
        </div>
    </section>
    <section class="bg-bluenew py-5" id="plans">
        <div class="mycontainer py-5">
            <div class="row bg-plans px-sm-3 px-lg-4 rounded-3">
                <div class="col-sm-6 col-md-4 py-4 px-4">
                    <h6 class="fw-bold fw-semibold fs-4">Lite <span class="text-grey fw-medium fs-6">/month</span>
                    </h6>
                    <p class="text-grey">Scale your business with powerful
                        sales and marketing automation
                        tools.</p>
                    <p class="fs-2 fw-semibold mb-0">$0.00 <span class="text-grey fw-medium fs-6">Billed
                            monthly</span></p>
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
                        <a href="#"
                            class="text-decoration-none d-inline-block text-white rounded-pill px-4 py-2 trial-bg ">Start
                            Free Trial</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 py-4 px-4">
                    <h6 class="fw-bold fw-semibold fs-4">Grow <span class="text-grey fw-medium fs-6">/month</span>
                    </h6>
                    <p class="text-grey">Build efficient processes that better
                        connect your team and impress
                        your customers.</p>
                    <p class="fs-2 fw-semibold mb-0">$27 <span class="text-grey fw-medium fs-6">Billed monthly</span>
                    </p>
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
                        <a href="#"
                            class="text-decoration-none d-inline-block text-white rounded-pill px-4 py-2 trial-bg ">Start
                            Free Trial</a>
                    </div>
                </div>
                <div class="bg-sky col-minus rounded-4 col-sm-6 col-md-4 py-4 px-4">
                    <div class="popular-neg d-flex justify-content-center">
                        <span class="bg-white rounded-pill px-4 py-2 fw-semibold d-inline-block text-uppercase">Most
                            Popular</span>
                    </div>
                    <h6 class="fw-semibold text-white fw-semibold fs-4 mt-4">Professional <span
                            class="text-white fw-medium fs-6">/month</span></h6>
                    <p class="text-white">Build efficient processes that better
                        connect your team and impress
                        your customers.</p>
                    <p class="fs-2 text-white fw-semibold mb-0">$27 <span class="text-white fw-medium fs-6">Billed
                            monthly</span></p>
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
                        <a href="#"
                            class="text-decoration-none d-inline-block text-white rounded-pill px-4 py-2 trial-bg ">Start
                            Free Trial</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="mycontainer">
            <h2 class="fw-semibold text-center">
                Top-rated features for service business
            </h2>
            <div class="pr-main">
                <div class="pricing-tbl mt-4 mt-lg-5">
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center">
                            <h2 class="fw-semibold text-capitalize py-3 px-3 fs-5 mb-0">Wrencher plan features</h2>
                        </div>
                        <div class="col-8 border border-primary border-start-0">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <h2 class="fw-semibold text-capitalize py-3 px-4 fs-5 mb-0">Lite</h2>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <h2 class="fw-semibold text-capitalize py-3 px-4 fs-5 mb-0">Grow</h2>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <h2 class="fw-semibold text-capitalize py-3 px-4 fs-5 mb-0">Professional</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <h2 class="fw-semibold text-capitalize sky py-3 px-3 fs-5 mb-0">Job Tracking</h2>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Scheduling</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Job details and attachments</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Job forms</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Routing</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">GPS Tracking</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Time tracking and expense tracking</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Automatic time tracking</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Job Costing</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <h2 class="fw-semibold text-capitalize sky py-3 px-3 fs-5 mb-0">Customer Management</h2>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Client Manager (CRM)</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Client Hub</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Requests</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Referrals</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Online Booking</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Automated Email Send & Text Messages
                                </h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Two-Way Text Massaging</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Lead Management</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <h2 class="fw-semibold text-capitalize sky py-3 px-3 fs-5 mb-0">Quoting</h2>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Quoting</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Markups</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Optional add-ons</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Line item images</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Automated Quote Follow-ups</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <h2 class="fw-semibold text-capitalize sky py-3 px-3 fs-5 mb-0">Invoicing & Payments</h2>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Invoicing</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Credit Card Procesing</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>2.9% +30C</span>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>2.9% +30C</span>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>2.9% +30C</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Tip collection</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Mobile Card Reader</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>2.9% +30C</span>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>2.9% +30C</span>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>2.9% +30C</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Bank Payment (ACH)</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>1%</span>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>1%</span>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>1%</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Instant Payouts</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Automatic Payments</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Automated Invoice Follow-up</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <h2 class="fw-semibold text-capitalize sky py-3 px-3 fs-5 mb-0">Setup & Integrations</h2>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Jobber App Marketplace</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">QuickBooks Online Sync</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Zapier</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Users</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>15 users</span>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>5 users</span>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <span>1 user</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <h2 class="fw-semibold text-capitalize sky py-3 px-3 fs-5 mb-0">Additional Features</h2>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">1-on-1 Product Support</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Wrencher Entrepreneurship Group
                                    Membership</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Mobile App</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Reporting</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">Custom Fields</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 border border-primary d-flex align-items-center border-top-0">
                            <div class="d-flex align-items-center justify-content-between w-100 py-3 px-3">
                                <h2 class="fw-medium text-capitalize mb-0 fs-5">1-on-1 Product Coaching</h2>
                                <img src="{{ asset('img/pricing-icon.png') }}" alt="pricing-icon"
                                    class="img-fluid ms-2 pr-icon">
                            </div>
                        </div>
                        <div class="col-8 border border-primary border-start-0 border-top-0">
                            <div class="row h-100">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <i class="far fa-check-circle sky fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('Templates.Footer')
    @include('Templates.Jslinks')
</body>

</html>
