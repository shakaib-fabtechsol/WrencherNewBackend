<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Booking link and widgets</title>
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
                                        <h4 class="mb-0 fw-semibold">Booking Link & Widgets</h4>
                                        <p class="gre font-12 mb-0">Highlight the features of this service or your
                                            business, answer common questions customers might have and showcase review
                                            form other customers.</p>
                                    </div>
                                </div>
                                <div class="bg-white rounded-4 px-3 px-sm-4 py-4 h-100 white-min mt-4">
                                    <div class="col-xl-8 col-xxl-7">
                                        <div class="border-bottom pb-3">
                                            <h6 class="fw-semibold fs-5">Booking link & Widget</h6>
                                            <p>Customers can book this service from your booking page. You can also link
                                                directly to this service or embed it inside a widget.</p>
                                            <h6 class="fw-semibold fs-5 mt-3">Direct link to book this service</h6>
                                            <p>You can copy past this link to share this service’s booking form with
                                                your customers.</p>
                                            <div class="d-flex align-items-center">
                                                <input type="url"
                                                    class="w-100 border-1 bg-nblue px-3 py-2 rounded-2 me-2"
                                                    placeholder="http://widget.company.com/book/therepairguyservices?presele">
                                                <div class="my-4 d-flex align-items-center">
                                                    <a href="#"
                                                        class="bg-sky d-inline-block border-blue b order-blu me-2 text-white py-2 px-sm-4 small text-decoration-none px-2 rounded-3">Copy</a>
                                                    <a href="#" class="sky-c text-decoration-none">View</a>
                                                </div>
                                            </div>
                                            <h6 class="fw-semibold fs-5 mt-3">Embed this service</h6>
                                            <p>You can copy past this link to share this service’s booking form with
                                                your customers.</p>
                                            <div class="col-sm-4 d-flex align-items-center">
                                                <input type="url"
                                                    class="w-100 border-1 bg-nblue px-3 py-2 rounded-2 me-2"
                                                    placeholder="Embed Service">
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
