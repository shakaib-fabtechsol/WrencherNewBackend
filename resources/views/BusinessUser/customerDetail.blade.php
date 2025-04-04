<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Customer detail</title>
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
                                    <span class="fs-6">Customer</span>
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
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="mb-0">Customer Detail</h3>
                                    <p class="mb-0 gre font-14">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="">
                                        <a href="{{ route('BusinessUser.AddNewCustomer') }}"
                                            class="mbl-100 shadow mt-3 mt-lg-0 in-f rounded-2 px-4 text-nowrap py-2 bg-sky text-decoration-none d-inline-block text-white border-0">
                                            Add Customer</a>
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
                                            <div class="ps-2 mt-2">
                                                <h5 class="sky-c ">Alexia Haass</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5 pt-3 border-bottom pe-2">
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Customer Name</p>
                                            <p class="sky-c mb-0 fw-semibold">Alexia Haass</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Phone Number</p>
                                            <p class="sky-c mb-0 fw-semibold">+21 090 909 9090</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Email</p>
                                            <p class="sky-c mb-0 fw-semibold">customer@gmail.com</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Address</p>
                                            <p class="sky-c mb-0 fw-semibold">locationdetailshere</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3 border-bottom pe-2">
                                        <h5 class="">Address Detail</h5>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Street Address</p>
                                            <p class="sky-c mb-0 fw-semibold">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Floor Address</p>
                                            <p class="sky-c mb-0 fw-semibold">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">City Address</p>
                                            <p class="sky-c mb-0 fw-semibold">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">State Address</p>
                                            <p class="sky-c mb-0 fw-semibold">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Postal Code</p>
                                            <p class="sky-c mb-0 fw-semibold">locationdetailshere</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3 border-bottom pe-2">
                                        <h5>Service Detail</h5>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Service Type</p>
                                            <p class="sky-c mb-0 fw-semibold">Assessment</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Product Type</p>
                                            <p class="sky-c mb-0 fw-semibold">Handyman</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Service Repeats</p>
                                            <p class="sky-c mb-0 fw-semibold">02</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <p class="mb-0 font-12">Action</p>
                                            <a href="#" class="sky-c mb-0 fw-semibold ">Service Detail ></a>
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
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')

</body>

</html>
