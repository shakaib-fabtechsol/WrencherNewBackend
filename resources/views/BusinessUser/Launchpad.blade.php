<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>LaunchPad</title>
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
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">LaunchPad</span>
                                    {{-- <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Services</span> --}}
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
                            <div class="container-fluid cust-prog">
                                <div class="d-flex justify-content-end mt-3">
                                    <a href="{{ route('BusinessUser.Dashboard') }}" class="bg-sky bg-blue px-4 fw-medium  py-2 rounded-3 text-decoration-none text-white">Skip</a>
                                </div>
                                <div class="progress-container mb-4"></div>
                                    <div class="progress" style="height: 20px; background-color: white; border:1px solid #007bff; border-radius: 10px;">
                                        <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #007bff; border-radius: 10px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-text text-black fw-bold">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="{{ asset('img/material1.png') }}" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Import All Contacts</p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">Add your existing
                                                        contacts to manage clients easily.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Connect</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="../img/material2.png" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Create Your Services</p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">List the services you
                                                        offer for easy booking.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Create Services</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="../img/material3.png" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Connect Google My Business
                                                    </p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">Sync your business
                                                        with Google for better visibility.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Connect</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="../img/material4.png" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Upload Your Logo</p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">Personalize your
                                                        brand with your company logo.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Upload</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="../img/material5.png" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Design Quotes & Invoices
                                                    </p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">Create professional
                                                        quotes and invoices.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Start Designing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="../img/material6.png" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Turn On Automations</p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">Automate tasks to
                                                        save time and boost efficiency.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Enable Automations</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="../img/material7.png" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Activate Marketing Tools
                                                    </p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">Set up campaigns to
                                                        attract more customers.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Turn On Marketing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="../img/material8.png" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Create Your First Quote</p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">Send your first quote
                                                        to a client.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Create Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 p-2">
                                        <div class="bg-white border rounded-4 h-100 p-4">
                                            <div
                                                class="d-flex flex-column justify-content-between align-items-center h-100">
                                                <div class="d-flex flex-column align-items-center">
                                                    <img class="materialimg" src="../img/material9.png" alt="img">
                                                    <p class="text-center fw-semibold mt-2 mb-0">Create Your First Invoice
                                                    </p>
                                                    <p class="text-center fw-light ex-small mt-2 mb-0">Set up an invoice to
                                                        receive payments.</p>
                                                </div>
                                                <div class="w-100">
                                                    <a class="w-100 d-flex justify-content-center align-items-center text-white text-decoration-none p-2 rounded-3 mt-3 bg-search-btn"
                                                        href="#">Create Invoice</a>
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
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')


</body>

</html>
