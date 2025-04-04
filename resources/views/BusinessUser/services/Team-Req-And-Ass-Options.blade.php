<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Team Requirements & Assignment Options</title>
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
                                        <h4 class="mb-0 fw-semibold">Team Requirements & Assignment Options</h4>
                                        <p class="gre font-12 mb-0">Add required skill tags to make sure jobs booked
                                            for
                                            this service are assigned to the right team members.</p>
                                    </div>
                                </div>
                                <div class="bg-white rounded-4 px-3 px-sm-4 py-4 h-100 white-min mt-4">
                                    <div class="border-bottom border-1 pb-3">
                                        <div class="d-flex align-items-center my-2">
                                            <input type="checkbox" class="me-2" id="type1">
                                            <label for="type1">Appliance Repair</label>
                                        </div>
                                        <div class="d-flex align-items-center my-2">
                                            <input type="checkbox" class="me-2" id="type2">
                                            <label for="type2">Assembly</label>
                                        </div>
                                        <div class="d-flex align-items-center my-2">
                                            <input type="checkbox" class="me-2" id="type3">
                                            <label for="type3">Drywall Repair</label>
                                        </div>
                                        <div class="d-flex align-items-center my-2">
                                            <input type="checkbox" class="me-2" id="type4">
                                            <label for="type4">Electrical</label>
                                        </div>
                                        <div class="d-flex align-items-center my-2">
                                            <input type="checkbox" class="me-2" id="type5">
                                            <label for="type5">Estimate</label>
                                        </div>
                                        <div class="d-flex align-items-center my-2">
                                            <input type="checkbox" class="me-2" id="type6">
                                            <label for="type6">Gutter Cleaner</label>
                                        </div>
                                        <div class="d-flex align-items-center my-2">
                                            <input type="checkbox" class="me-2" id="type7">
                                            <label for="type7">Handyman</label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center border-bottom border-1">
                                        <h3 class="fs-5 my-3 sky-c fw-semibold text-capitalize"> + Create new skill tag
                                        </h3>
                                    </div>
                                    <div class="border-bottom border-1 pb-3">
                                        <div class="py-3">
                                            <h3 class="fs-4 fw-semibold">Minimum Crew Size</h3>
                                            <p class="mb-0">Select the number of service providers needed to complete
                                                this type of service</p>
                                        </div>
                                        <div class="d-flex col-sm-9 col-md-8 col-lg-6 col-xl-5 flex-column flex-sm-row">
                                            <input type="number"
                                                class="bg-nblue border-1 rounded-2 py-2 my-1 my-sm-0 w-100 px-2 focus-none me-2"
                                                placeholder="2">
                                            <input type="text"
                                                class="bg-nblue border-1 rounded-2 py-2 my-1 my-sm-0 w-100 px-2 focus-none"
                                                placeholder="Service Provider">
                                        </div>
                                    </div>
                                    <div class="">
                                        <h3 class="fs-4 fw-semibold my-3 text-capitalize">Assignment & Job Offers</h3>
                                        <p>Control how providers are assigned when this service is booked</p>
                                        <div class="d-flex align-items-start my-2">
                                            <input type="radio" class="me-2 mt-2" id="type1">
                                            <div>
                                                <label for="type1" class="fw-medium">Manual</label>
                                                <p>Use default time slots based on your business hours and availability
                                                    settings</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start my-2">
                                            <input type="radio" class="me-2 mt-2" id="type2">
                                            <div>
                                                <label for="type2" class="fw-medium">Automatically offer</label>
                                                <p>Offer jobs for this service to all available providers who process
                                                    the necessary skill tags to jobs for this service.</p>
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
