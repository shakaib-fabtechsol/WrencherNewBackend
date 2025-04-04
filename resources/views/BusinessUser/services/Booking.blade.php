<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Booking</title>
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
                                        <h4 class="mb-0 fw-semibold">Booking Page</h4>
                                        <p class="gre font-12 mb-0">Highlight the features of this service or your
                                            business, answer common questions customers might have and showcase review
                                            form other customers.</p>
                                    </div>
                                </div>
                                <div class="bg-white rounded-4 px-3 px-sm-4 py-4 h-100 white-min mt-4">
                                    <div class="col-xl-8">
                                        <div class="border-bottom pb-3">
                                            <h6 class="fw-semibold fs-5">Visibility</h6>
                                            <p>If you hide this service from your booking page, customers will only be
                                                able
                                                to book it if you link directly to it or embed it</p>
                                            <div class="d-flex align-items-center my-2">
                                                <input type="radio" class="me-2" id="type1">
                                                <label for="type1">Show service on booking page</label>
                                            </div>
                                            <div class="d-flex align-items-center my-2">
                                                <input type="radio" class="me-2" id="type2">
                                                <label for="type2">Hide service on booking page</label>
                                            </div>
                                        </div>
                                        <div class="border-bottom pb-3 mt-3">
                                            <h6 class="fw-semibold fs-5">Category</h6>
                                            <p>Select which category this service should be listed under</p>
                                            <div class="col-md-8 col-lg-6">
                                                <input type="number"
                                                    class="w-100 border-1 bg-nblue px-3 py-2 rounded-2"
                                                    placeholder="Electrical">
                                            </div>
                                        </div>
                                        <div class="border-bottom pb-3">
                                            <h6 class="fw-semibold mt-3 fs-5">Confirmation Page</h6>
                                            <p>Customize what should happen after a customer books this service from
                                                your booking page</p>
                                            <div class="d-flex align-items-center my-2">
                                                <input type="radio" class="me-2" id="type1">
                                                <label for="type1" class="fw-medium">Display default confirmation
                                                    message</label>
                                            </div>
                                            <div class="d-flex align-items-center my-2">
                                                <input type="radio" class="me-2" id="type2">
                                                <label for="type2" class="fw-medium">Display Custom confirmation
                                                    message</label>
                                            </div>
                                            <div class="d-flex align-items-center my-2">
                                                <input type="radio" class="me-2" id="type3">
                                                <label for="type3" class="fw-medium">Redirect to external
                                                    site</label>
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
