<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Profile</title>
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
                                <h3 class="hding mb-0 dark-blue">Profile</h3>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.ClientNavbar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="mb-0 fw-semibold">Profile</h3>
                                    <p class="mb-0 gre font-14">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="">
                                        <a href="{{ route('Client.EditProfile') }}"
                                            class="mbl-100 shadow mt-3 mt-lg-0 in-f rounded-2 px-4 text-nowrap py-2 bg-sky text-decoration-none d-inline-block text-white border-0">
                                            <img src="{{ asset('img/edit pic.svg') }}" alt="" class="edit-icon">
                                            Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white mt-3 p-3 rounded-3">
                                <div class="pr-height">
                                    <div class="position-relative pe-2">
                                        <div class="d-flex align-items-end ">
                                            <div class="profile-edit shadow me-2">
                                                <img src="{{ asset('img/user.png') }}" alt="" class=" f-img">
                                            </div>
                                            <div class="ps-2">
                                                <h6 class="sky-c fs-5 fw-semibold">Jake Zophres</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 pt-3 border-bottom pe-2">
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Admin Name</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Phone Number</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">+21 090 909 9090</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Email</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">customer@gmail.com</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Address</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">locationdetailshere</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3 border-bottom pe-2">
                                        <h5>Address Details</h5>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Street Address</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">City Address</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">State Address</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">locationdetailshere</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Postal Code</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">locationdetailshere</p>
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

</body>

</html>
