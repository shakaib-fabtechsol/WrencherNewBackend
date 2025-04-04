<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Price adjustment rules</title>
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
                                        <h4 class="mb-0 fw-semibold">Price Adjustment Rules</h4>
                                        <p class="gre font-12 mb-0">Price adjustment rules allow you toi dynamiclly
                                            increase or decrease the service price for certain booking conditions, like
                                            by appointment time or service location.</p>
                                    </div>
                                </div>
                                <div class="bg-white white-min rounded-4 px-3 px-sm-4 py-2 mt-4">
                                    <div class="border-bottom border-1 py-3">
                                        <div class="col-xxl-4 col-xl-5 col-lg-7 col-md-8 col-12">
                                            <h3 class="fs-5 mb-0 fw-semibold me-2 mt-2">Timeslot Price Rules</h3>
                                            <p class="">Adjust pricing based on the weekday and start time of the
                                                job.
                                            </p>
                                            <p class="">For example, change more on your busiest days, or offer a
                                                discount
                                                for times you have trouble filling.</p>
                                            <div class="my-4 d-flex">
                                                <a href="#"
                                                    class="bg-sky d-inline-block border-blue b order-blu text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Add
                                                    Rule</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-1 py-3">
                                        <div class="col-xxl-4 col-xl-5 col-lg-7 col-md-8 col-12">
                                            <h3 class="fs-5 mb-0 fw-semibold me-2 mt-2">Booking lead time price rules
                                            </h3>
                                            <p class="">Adjust pricing based on how far in advance the job is
                                                scheduled
                                            </p>
                                            <div class="my-4 d-flex">
                                                <a href="#"
                                                    class="bg-sky d-inline-block border-blue b order-blu text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Add
                                                    Rule</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-1 py-3">
                                        <div class="col-xxl-4 col-xl-5 col-lg-7 col-md-8 col-12">
                                            <h3 class="fs-5 mb-0 fw-semibold me-2 mt-2">Service Territory price rules
                                            </h3>
                                            <p class="">Adjust pricing on which territory the service is booked
                                                in.</p>
                                            <div class="my-4 d-flex">
                                                <a href="#"
                                                    class="bg-sky d-inline-block border-blue b order-blu text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Add
                                                    Rule</a>
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
