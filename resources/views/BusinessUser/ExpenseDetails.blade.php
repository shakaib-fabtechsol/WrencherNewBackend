<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Expense Details</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Sales</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Expenses</span>
                                </h3>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.BusinessUserNavBar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="d-xxl-flex align-items-center justify-content-between">
                                <div>
                                    <h1 class="fs-4 font-bold">
                                        Expenses Detail
                                    </h1>
                                    <p class="mb-0 gre">Keep tabs on every part of your business with over 10 built-in
                                        reports to choose from.</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-3 px-3 py-4 mt-3 border-1">
                                <div class="row">
                                    <div class="col-xl-5 border-end border-1">
                                        <div class="px-2 px-sm-3 px-xl-4">
                                            <h2 class="fs-3 fw-medium sky-c">Receipts</h2>
                                            <img src="{{ asset('img/expense-receipt.png') }}" alt="expense-receipt"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 mt-4 mt-xl-0 px-4 px-xl-5">
                                        <div class="row mt-3 pt-3 border-bottom pe-2">
                                            <div class="col-lg-3 col-sm-4 col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Customer Name</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Date</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Item Name</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Reimburse to</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                            </div>
                                        </div>
                                        <div class="row pt-3 border-bottom pe-2">
                                            <div class="col-lg-3 col-sm-4 col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Customer Name</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Date</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Item Name</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Reimburse to</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Alexia Haass</p>
                                            </div>
                                        </div>
                                        <div class="row pt-3 border-bottom pe-2">
                                            <div class="col-12 mb-2">
                                                <h6 class="mb-0 small fw-medium">Description</h6>
                                                <p class="sky-c mb-0 fs-6 fw-semibold">Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the 1500s,</p>
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
