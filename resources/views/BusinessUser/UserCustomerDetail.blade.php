<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>User Customer Detail</title>
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
                                <h3 class="hding mb-0 dark-blue">Users</h3>
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
                                    <h3 class="mb-0">Customer Details</h3>
                                    <p class="mb-0 gre font-14">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="">
                                        <a href="#"
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
                                            <div class="ps-2">
                                                <h6 class="sky-c">Alexia Haass</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5 pt-3 border-bottom pe-2">
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Customer Name</h6>
                                            <p class="sky-c mb-0 font-12">Alexia Haass</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Phone Number</h6>
                                            <p class="sky-c mb-0 font-12">+21 090 909 9090</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Email</h6>
                                            <p class="sky-c mb-0 font-12">customer@gmail.com</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Address</h6>
                                            <p class="sky-c mb-0 font-12">locationdetailshere</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3 border-bottom pe-2">
                                        <h5>Address Detail</h5>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Street Address</h6>
                                            <p class="sky-c mb-0 font-12">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Floor Address</h6>
                                            <p class="sky-c mb-0 font-12">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">City Address</h6>
                                            <p class="sky-c mb-0 font-12">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">State Address</h6>
                                            <p class="sky-c mb-0 font-12">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Postal Code</h6>
                                            <p class="sky-c mb-0 font-12">locationdetailshere</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3 border-bottom pe-2">
                                        <h5>Service Details</h5>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Service Type</h6>
                                            <p class="sky-c mb-0 font-12">Assessment</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Product Type</h6>
                                            <p class="sky-c mb-0 font-12">Handyman</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Service Repeats</h6>
                                            <p class="sky-c mb-0 font-12">02</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0">Action</h6>
                                            <p class="sky-c mb-0 font-12">Service Detail ></p>
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
