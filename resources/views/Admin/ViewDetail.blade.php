<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>View Details</title>
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
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Dashboard</span>
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
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="my-2 me-3">
                                        <h1 class="fs-4 font-bold">
                                            View Details
                                        </h1>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="bg-sky text-white text-decoration-none py-2 px-5 rounded-3"
                                            href="{{ route('Admin.ScheduleCalendar') }}">View Job</a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Customers</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">123900</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Lite Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Grow Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Professional Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Customers</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">12390</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Lite Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Grow Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Professional Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
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
</body>

</html>
