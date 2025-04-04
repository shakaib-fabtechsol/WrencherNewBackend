<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>New Contract</title>
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
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Notifications</span>
                                </h3>
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
                            <div class="row px-2">
                                <div class="col-xl-7 col-xxl-6 col-lg-8">
                                    <h2 class="fs-4 fw-semibold fw-bold">
                                        All Notifications
                                    </h2>
                                    <p class="mt-2">Manage user accounts and permissions with detailed views and
                                        actions, including
                                        the ability to edit, suspend, and close user profiles.</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="innerdiv">
                                    <div class="container-fluid">
                                        <div class="row my-3">
                                            <div class="col-12 notif py-3">
                                                <div class="d-lg-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/bells.png') }}" alt=""
                                                            class="bell d-none d-sm-block me-2 me-md-3" />
                                                        <div>
                                                            <p class="mb-0 fw-semibold fs-5">New User Added</p>
                                                            <p class="mb-0 small">New users profile link</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mt-lg-0">
                                                        <div
                                                            class="d-flex flex-wrap justify-content-end align-items-center">
                                                            <p class="mb-0 small">11/02/2023</p>
                                                            <p class="mb-0 small  ms-2 ms-sm-3 ms-md-4">
                                                                1 mins. ago
                                                            </p>
                                                        </div>
                                                        <div
                                                            class=" d-flex align-items-center justify-content-end mt-3">
                                                            <span>Off</span>
                                                            <label class="switch mx-2">
                                                                <input type="checkbox" id="Capture" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <span>On</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-12 notif p-3">
                                                <div class="d-lg-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/bells.png') }}" alt=""
                                                            class="bell d-none d-sm-block me-2 me-md-3" />
                                                        <div>
                                                            <p class="mb-0 fw-semibold fs-5">New User Added</p>
                                                            <p class="mb-0 small">New users profile link</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mt-lg-0">
                                                        <div
                                                            class="d-flex flex-wrap justify-content-end align-items-center">
                                                            <p class="mb-0 small">11/02/2023</p>
                                                            <p class="mb-0 small  ms-2 ms-sm-3 ms-md-4">
                                                                1 mins. ago
                                                            </p>
                                                        </div>
                                                        <div
                                                            class=" d-flex align-items-center justify-content-end mt-3">
                                                            <span>Off</span>
                                                            <label class="switch mx-2">
                                                                <input type="checkbox" id="Capture" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <span>On</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-12 notif p-3">
                                                <div class="d-lg-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/bells.png') }}" alt=""
                                                            class="bell d-none d-sm-block me-2 me-md-3" />
                                                        <div>
                                                            <p class="mb-0 fw-semibold fs-5">New User Added</p>
                                                            <p class="mb-0 small">New users profile link</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mt-lg-0">
                                                        <div
                                                            class="d-flex flex-wrap justify-content-end align-items-center">
                                                            <p class="mb-0 small">11/02/2023</p>
                                                            <p class="mb-0 small  ms-2 ms-sm-3 ms-md-4">
                                                                1 mins. ago
                                                            </p>
                                                        </div>
                                                        <div
                                                            class=" d-flex align-items-center justify-content-end mt-3">
                                                            <span>Off</span>
                                                            <label class="switch mx-2">
                                                                <input type="checkbox" id="Capture" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <span>On</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row my-3">
                                            <div class="col-12 notif p-3">
                                                <div class="d-lg-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/bells.png') }}" alt=""
                                                            class="bell d-none d-sm-block me-2 me-md-3" />
                                                        <div>
                                                            <p class="mb-0 fw-semibold fs-5">New User Added</p>
                                                            <p class="mb-0 small">New users profile link</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mt-lg-0">
                                                        <div
                                                            class="d-flex flex-wrap justify-content-end align-items-center">
                                                            <p class="mb-0 small">11/02/2023</p>
                                                            <p class="mb-0 small  ms-2 ms-sm-3 ms-md-4">
                                                                1 mins. ago
                                                            </p>
                                                        </div>
                                                        <div
                                                            class=" d-flex align-items-center justify-content-end mt-3">
                                                            <span>Off</span>
                                                            <label class="switch mx-2">
                                                                <input type="checkbox" id="Capture" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <span>On</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-12 notif p-3">
                                                <div class="d-lg-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/bells.png') }}" alt=""
                                                            class="bell d-none d-sm-block me-2 me-md-3" />
                                                        <div>
                                                            <p class="mb-0 fw-semibold fs-5">New User Added</p>
                                                            <p class="mb-0 small">New users profile link</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mt-lg-0">
                                                        <div
                                                            class="d-flex flex-wrap justify-content-end align-items-center">
                                                            <p class="mb-0 small">11/02/2023</p>
                                                            <p class="mb-0 small  ms-2 ms-sm-3 ms-md-4">
                                                                1 mins. ago
                                                            </p>
                                                        </div>
                                                        <div
                                                            class=" d-flex align-items-center justify-content-end mt-3">
                                                            <span>Off</span>
                                                            <label class="switch mx-2">
                                                                <input type="checkbox" id="Capture" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <span>On</span>
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
        </div>
    </section>

    @include('Templates.Jslinks')

</body>

</html>
