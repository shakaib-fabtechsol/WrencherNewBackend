<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Reports</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.Adminsidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <!-- <span class="hding mb-0 blu fs-4 font-j fw-semibold">Services</span> -->
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.AdminNavbar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="bottom-main">
                        <div class="content ">
                            <div class="container-fluid">
                                <div class="d-xl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-3 font-semi">
                                            Services
                                        </h1>
                                        <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-3">
                                        <div class="d-flex justify-content-between me-lg-3 border-1 rounded-2 bg-white">
                                            <input type="search"
                                                class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                placeholder="Search Service">
                                            <span class="d-flex align-items-center bg-grey text-white">
                                                <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                            </span>
                                        </div>
                                        <div class="d-sm-flex justify-content-end">
                                            <a href="{{ route('Admin.AddNewService') }}"
                                                class="mbl-100 d-flex justify-content-center align-items-center mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white text-decoration-none">
                                                <i class="fas fa-plus me-1"></i>
                                                <span>Add Services</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <section class="mt-3 bg-white p-4 rounded-4">
                                    <div>
                                        <h2 class="sky border-bottom py-2">Handyman</h2>
                                        <div class="row justify-content-start py-2">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 my-3">
                                                <div class="bg-white rounded-4 shadow px-3 py-3">
                                                    <img src="{{ asset('img/service1.png') }}" alt="service1"
                                                        class="rounded-3 w-100">
                                                    <h3 class="mt-3 fs-5 lblue font-semi text-capitalize">Picture
                                                        Hanging</h3>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-5 font-md">Price Varies</p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-circle dot-green me-1 font-12"></i>
                                                            <span>Bookable</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 my-3">
                                                <div class="bg-white rounded-4 shadow px-3 py-3">
                                                    <img src="{{ asset('img/service2.png') }}" alt="service1"
                                                        class="rounded-3 w-100">
                                                    <h3 class="mt-3 fs-5 lblue font-semi text-capitalize">DryWall repair
                                                    </h3>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-5 font-md">Price Varies</p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-circle dot-green me-1 font-12"></i>
                                                            <span>Bookable</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 my-3">
                                                <div class="bg-white rounded-4 shadow px-3 py-3">
                                                    <img src="{{ asset('img/service3.png') }}" alt="service1"
                                                        class="rounded-3 w-100">
                                                    <h3 class="mt-3 fs-5 lblue font-semi text-capitalize">Gutter
                                                        Cleaning</h3>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-5 font-md">Price Varies</p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-circle dot-green me-1 font-12"></i>
                                                            <span>Bookable</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 my-3">
                                                <div class="bg-white rounded-4 shadow px-3 py-3">
                                                    <img src="{{ asset('img/service4.png') }}" alt="service1"
                                                        class="rounded-3 w-100">
                                                    <h3 class="mt-3 fs-5 lblue font-semi text-capitalize">Curtain Rod
                                                        Install</h3>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-5 font-md">Price Varies</p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-circle dot-green me-1 font-12"></i>
                                                            <span>Bookable</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h2 class="sky border-bottom py-2">Electrical Services</h2>
                                        <div class="row justify-content-start py-2">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 my-3">
                                                <div class="bg-white rounded-4 shadow px-3 py-3">
                                                    <img src="{{ asset('img/service1.png') }}" alt="service1"
                                                        class="rounded-3 w-100">
                                                    <h3 class="mt-3 fs-5 lblue font-semi text-capitalize">Light Fixture
                                                        Installation</h3>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-5 font-md">Price Varies</p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-circle dot-green me-1 font-12"></i>
                                                            <span>Bookable</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 my-3">
                                                <div class="bg-white rounded-4 shadow px-3 py-3">
                                                    <img src="{{ asset('img/service2.png') }}" alt="service1"
                                                        class="rounded-3 w-100">
                                                    <h3 class="mt-3 fs-5 lblue font-semi text-capitalize">Ceiling Fan
                                                        Installation</h3>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-5 font-md">Price Varies</p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-circle dot-green me-1 font-12"></i>
                                                            <span>Bookable</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 my-3">
                                                <div class="bg-white rounded-4 shadow px-3 py-3">
                                                    <img src="{{ asset('img/service3.png') }}" alt="service1"
                                                        class="rounded-3 w-100">
                                                    <h3 class="mt-3 fs-5 lblue font-semi text-capitalize">Wiring
                                                        Inspection</h3>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-5 font-md">Price Varies</p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-circle dot-green me-1 font-12"></i>
                                                            <span>Bookable</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-sm-6 my-3">
                                                <div class="bg-white rounded-4 shadow px-3 py-3">
                                                    <img src="{{ asset('img/service4.png') }}" alt="service1"
                                                        class="rounded-3 w-100">
                                                    <h3 class="mt-3 fs-5 lblue font-semi text-capitalize">Curtain Rod
                                                        Install</h3>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-5 font-md">Price Varies</p>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-circle dot-green me-1 font-12"></i>
                                                            <span>Bookable</span>
                                                        </div>
                                                    </div>
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
        </div>
    </section>

    @include('Templates.Jslinks')

</body>

</html>
