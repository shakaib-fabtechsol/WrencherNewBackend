<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Availability</title>
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
                                        <h4 class="mb-0 fw-semibold">Availability</h4>
                                        <p class="gre font-12 mb-0">You cab overdue your default business hours and
                                            availablity settings and custom timeslots for this service using an
                                            availability template</p>
                                    </div>
                                    <a href="#" class="sky-c text-decoration-none fw-semibold ">Learn more about
                                        intake
                                        questions</a>
                                </div>
                                <div class="bg-white rounded-4 px-3 px-sm-4 py-4 h-100 white-min mt-4">
                                    <div class="d-flex align-items-center my-2">
                                        <input type="radio" class="me-2" id="type1">
                                        <label for="type1">Use default time slots based on your business hours and
                                            availability settings</label>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <input type="radio" class="me-2" id="type2">
                                        <label for="type2">Use a custom availability template</label>
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
