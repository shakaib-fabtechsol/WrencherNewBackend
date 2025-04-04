<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Intake Questions</title>
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
                                        <h4 class="mb-0 fw-semibold">Intake Questions</h4>
                                        <p class="gre font-12 mb-0">Intake questions allow you to collect extra
                                            information from your customers during the booking process using custom
                                            fields.</p>
                                    </div>
                                    <a href="#" class="sky-c text-decoration-none fw-semibold ">Learn more about
                                        intake
                                        questions</a>
                                </div>
                                <div class="bg-white white-min rounded-4 px-3 px-sm-4 py-2 mt-4">
                                    <div class="border-dashed-blue rounded-3 p-4 my-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="fs-5 mb-0 fw-bold me-2">1. How tall is the ceiling at the fan?
                                            </h3>
                                            <div class="d-flex align-items-center">
                                                <a href="#"><i class="fas fa-edit text-black me-2"></i></a>
                                                <a href="#"><i class="fas fa-trash text-danger"></i></a>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3 ps-3">
                                            <a class="rounded-3 me-2 text-decoration-none text-secondary">Multiple
                                                choice . 6 option - Required</a>
                                        </div>
                                    </div>
                                    <div class="my-5 d-flex justify-content-center">
                                        <a href="#"
                                            class="bg-sky d-inline-block shadow border-blue b order-blu text-white py-2 px-sm-5 text-decoration-none px-3 rounded-3">New
                                            Intake Question</a>
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
