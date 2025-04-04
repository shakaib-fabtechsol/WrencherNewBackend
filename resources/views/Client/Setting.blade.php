<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Settings</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.ClientSidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
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
                                <div class="p-2">
                                    <h2 class="mt-2">Settings</h2>
                                    <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                    <div class="row  py-3 mt-3">
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3 h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/ManageUser.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Manage User Account</h5>
                                                        <p class="mb-0">Customers can book this service from your
                                                            booking.
                                                            You can also link directly to this service or embed it.</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/Availability.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Availability</h5>
                                                        <p class="mb-0">Customers can book this service from your
                                                            booking.
                                                            You can also link directly to this service or embed it.</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/CalendarSync.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Calendar Sync</h5>
                                                        <p class="mb-0">Customers can book this service from your
                                                            booking.
                                                            You can also link directly to this service or embed it.</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
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
