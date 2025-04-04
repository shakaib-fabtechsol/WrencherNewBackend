<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Plan your service</title>
</head>

<body>

    <section>
        <div class="mycontainer">
            <div class="loginmain d-flex align-items-center justify-content-center">
                <div class="w-100 py-4 d-flex align-items-center justify-content-center">
                    <div class=" shadow-none">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class=" d-flex justify-content-center">
                                <img src="{{ asset('img/logo-main.png') }}" alt="logo" class="img-fluid log-logo">
                            </div>
                        </div>
                        <div>
                            <div class="px-md-5">
                                <p class="text-center mt-2 fw-semibold mb-0 text-grey">Home Repair</p>
                                <h3 class="text-center mt-3 fw-medium">Online Booking Platform</h3>
                                <p class="text-center mt-2 mb-0 text-grey ">Customize, embed, and share the booking page
                                    Where customer can book your services</p>
                            </div>
                            <div class="mt-5">
                                <a href="{{ route('BookingService') }}"
                                    class="text-decoration-none text-black d-flex book-box my-3 py-3 px-3 rounded-4 align-items-center justify-content-between">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="book-icon me-3 rounded-pill">
                                            <i class="fi fi-rr-globe d-flex align-items-center fs-4"></i>
                                        </div>
                                        <div>
                                            <h2 class="fs-5 mb-0 fw-semibold">Booking Online Now</h2>
                                            <p class="mb-0 text-grey mt-1">Add your brand elements and colors to your
                                                customer facing booking page.</p>
                                        </div>
                                    </div>
                                    <div class="arrow-up rounded-circle">
                                        <i
                                            class="fa-solid fa-arrow-up-right-from-square fs-6 d-flex align-items-center"></i>
                                    </div>
                                </a>
                                <a href="{{ route('RequestQuote') }}"
                                    class="text-decoration-none text-black d-flex book-box my-3 py-3 px-3 rounded-4 align-items-center justify-content-between">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="book-icon me-3 rounded-pill">
                                            <i class="fi fi-rr-code-pull-request d-flex align-items-center fs-4"></i>
                                        </div>
                                        <div>
                                            <h2 class="fs-5 mb-0 fw-semibold">Request a Quote</h2>
                                            <p class="mb-0 text-grey mt-1">Add your brand elements and colors to your
                                                customer facing booking page.</p>
                                        </div>
                                    </div>
                                    <div class="arrow-up rounded-circle">
                                        <i
                                            class="fa-solid fa-arrow-up-right-from-square fs-6 d-flex align-items-center"></i>
                                    </div>
                                </a>
                                <a href="{{ route('PersonEstimate') }}"
                                    class="text-decoration-none text-black d-flex book-box my-3 py-3 px-3 rounded-4 align-items-center justify-content-between">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="book-icon me-3 rounded-pill">
                                            <i class="fi fi-rr-calculator-bill d-flex align-items-center fs-4"></i>
                                        </div>
                                        <div>
                                            <h2 class="fs-5 mb-0 fw-semibold">Schedule an in Person Estimate</h2>
                                            <p class="mb-0 text-grey mt-1">Add your brand elements and colors to your
                                                customer facing booking page.</p>
                                        </div>
                                    </div>
                                    <div class="arrow-up rounded-circle">
                                        <i
                                            class="fa-solid fa-arrow-up-right-from-square fs-6 d-flex align-items-center"></i>
                                    </div>
                                </a>
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
