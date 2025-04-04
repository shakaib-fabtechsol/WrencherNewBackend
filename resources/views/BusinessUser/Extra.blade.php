<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>repuatation Management</title>

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
                                    <span class="sky fs-4 fw-medium">Dashboard</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Website Analytics</span>
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
                            <div class="d-flex align-items-center justify-content-between border-bottom py-3">
                                <div>
                                    <h1 class="fs-3 font-semi">
                                        Overview
                                    </h1>
                                    <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-lg-flex justify-content-end align-items-center">
                                    <div
                                        class="d-flex ps-3 mt-3 mt-lg-0 me-lg-3 align-items-center bg-white border-1 rounded-2">
                                        <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                        <select name="" id="filter"
                                            class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                            <option value="" selected disabled hidden>Filter</option>
                                            <option value="">Today</option>
                                            <option value="">Last Week</option>
                                            <option value="">This Week</option>
                                            <option value="">Next Week</option>
                                            <option value="">Last Month</option>
                                            <option value="">This Month</option>
                                            <option value="">Last Year</option>
                                            <option value="">This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="report-card p-3 h-100">
                                        <p class="mb-0 dark-blue fs-5 font-md">Overview</p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{ asset('img/reddot.svg') }}" class="image-fluid img">
                                                <p class="mb-0 ms-2 fs-6">Past Due</p>
                                            </div>
                                            <div>
                                                <p class="mb-0">$:0</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div class="d-flex">
                                                <img src="{{ asset('img/yellowdot.svg') }}" class="image-fluid img">
                                                <p class="mb-0 ms-2 fs-6">Sent but not Due</p>
                                            </div>
                                            <div>
                                                <p class="mb-0">$:0</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div class="d-flex">
                                                <img src="{{ asset('img/blue.svg') }}" class="image-fluid img">
                                                <p class="mb-0 ms-2 fs-6">Draft</p>
                                            </div>
                                            <div>
                                                <p class="mb-0">$:0</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reputation-img mt-3 p-3">
                                <img src="{{ asset('img/reputation-pic.svg') }}" alt="pic" class="reputation-img">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('Templates.Jslinks')
    <script>
        const data = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'My Dataset',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
        };

        // Initialize the chart
        const myDoughnutChart = new Chart(
            document.getElementById('myDoughnutChart'),
            config
        );
    </script>

</body>

</html>
