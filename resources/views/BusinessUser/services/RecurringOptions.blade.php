<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Recurring Options</title>
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
                                        <h4 class="mb-0 fw-semibold">Recurring Options</h4>
                                        <p class="gre font-12 mb-0">Add required skill tags to make sure jobs booked
                                            for
                                            this service are assigned to the right team members..</p>
                                    </div>
                                </div>
                                <div class="bg-white white-min rounded-4 px-3 px-sm-4 py-4 mt-4">
                                    <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                                        <img src="{{ asset('img/recurring.png') }}" alt="recurring" class="img-fluid">
                                        <h3 class="fs-5 mb-0 fw-semibold me-2 mt-2">Recurring Options</h3>
                                        <p class="gre mb-0">Let customers schedule this service as a recurring
                                            booking by adding
                                            recurring frequencies that customer will be able to choose form. You can
                                            also offer discounts for certain
                                            frequencies.</p>
                                        <div class="my-4 d-flex">
                                            <a href="#"
                                                class="bg-sky d-inline-block shadow border-blue b order-blu text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Create
                                                a Recurring Option</a>
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
