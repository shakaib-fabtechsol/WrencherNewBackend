<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>How it Work</title>
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
                                        <h4 class="mb-0 fw-semibold">How it Work, FAQ, Testimonials & Highlights</h4>
                                        <p class="gre font-12 mb-0">Highlight the features of this service or your
                                            business, answer common questions customers might have and showcase review
                                            form other customers.</p>
                                    </div>
                                </div>
                                <div class="bg-white white-min rounded-4 px-3 px-sm-4 py-2 mt-4">
                                    <div class="border-bottom border-1 py-3">
                                        <div class="col-xxl-4 col-xl-5 col-lg-7 col-md-8 col-12">
                                            <h3 class="fs-5 mb-0 fw-semibold me-2 mt-2">Frequently asked questions</h3>
                                            <p class="">Add questions and answers customers might have about this
                                                service</p>
                                            <div class="my-4 d-flex">
                                                <a href="#"
                                                    class="bg-sky d-inline-block border-blue b order-blu text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Add</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-1 py-3">
                                        <div class="col-xxl-4 col-xl-5 col-lg-7 col-md-8 col-12">
                                            <h3 class="fs-5 mb-0 fw-semibold me-2 mt-2">How it work</h3>
                                            <p class="">Walk customers through how this service works, including
                                                what
                                                happens next after booking</p>
                                            <div>
                                                <p class="fw-semibold">Book Online</p>
                                                <p class="fw-semibold">Schedule a Time/Date</p>
                                                <p class="fw-semibold">Work with Technician on ideal location</p>
                                                <p class="fw-semibold">Sit Back and Relax</p>
                                            </div>
                                            <div class="my-4 d-flex align-items-center">
                                                <a href="#"
                                                    class="bg-sky d-inline-block border-blue b order-blu me-2 text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Edit</a>
                                                <a href="#" class="sky-c text-decoration-none">Copy to other
                                                    services...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-1 py-3">
                                        <div class="col-xxl-4 col-xl-5 col-lg-7 col-md-8 col-12">
                                            <h3 class="fs-5 mb-0 fw-semibold me-2 mt-2">Bulletpoints</h3>
                                            <p class="">Emphasize important features of this service your
                                                business to
                                                customers</p>
                                            <div class="my-4 d-flex">
                                                <a href="#"
                                                    class="bg-sky d-inline-block border-blue b order-blu text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Add</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <div class="col-xxl-4 col-xl-5 col-lg-7 col-md-8 col-12">
                                            <h3 class="fs-5 mb-0 fw-semibold me-2 mt-2">Testimonials</h3>
                                            <p class="">Showcase reviews and testimonials from customers to add
                                                social
                                                proof
                                                to your service</p>
                                            <div class="my-4 d-flex">
                                                <a href="#"
                                                    class="bg-sky d-inline-block border-blue b order-blu text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Add</a>
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
