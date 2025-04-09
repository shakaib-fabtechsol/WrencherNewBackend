<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Dashboard</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.Adminsidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Dashboard</span>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.AdminNavbar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="bottom-main">
                        <div class="content ">
                            <div class="container-fluid">
                                <div
                                    class="d-xl-flex pb-2 border-bottom border-1 align-items-center justify-content-between">
                                    <div class="my-2">
                                        @php
                                             $name = Auth::user()->name;
                                             $lastName = Auth::user()->lastName;
                                        @endphp
                                        <h1 class="fs-4 font-bold">
                                            Good morning, {{ $name }}{{ ' ' }}{{ $lastName }}
                                        </h1>
                                        <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex my-2 justify-content-end align-items-center">
                                        <p class="mb-0 font-semi mt-2 mt-lg-0">Today</p>
                                        <div
                                            class="d-flex ps-3 pe-1 mt-2 mt-lg-0 mx-lg-0 align-items-center bg-white border-1 rounded-2">
                                            <select name="" id="filter"
                                                class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                                <option value="" selected disabled hidden>All territories</option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Customers</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">12390</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Lite Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Grow Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                                        <div class="border-grey bg-white rounded-3 px-3 py-3 shadow-sm h-100">
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <h4 class="fs-5 mb-0 fw-semibold">Professional Users</h4>
                                                <img src="{{ asset('../img/user-icon.png') }}" alt="userbox"
                                                    class="user-box rounded-2 ms-2">
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <p class="mb-0 fw-semibold fs-4">99</p>
                                                <div
                                                    class="px-3 py-1 rounded-pill logout-clr d-flex align-items-center small">
                                                    <img src="{{ asset('../img/arrow.png') }}" alt="arrow"
                                                        class="image-fluid me-1">
                                                    <span class="fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="shadow rev-main mb-3 border-grey bg-white px-3 py-3 rounded-3 mt-5 col-xl-9 col-xxl-9">
                                    <div class="d-flex mb-3 justify-content-end w-100">
                                        <div>
                                            <select name="monthSelector" class="form-select" id="monthSelector">
                                                <option value="">All Months</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="rev-inner">
                                        <canvas id="revenueChart"></canvas>
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

    <script>
        const ctx = document.getElementById('revenueChart').getContext('2d');

        const allLabels = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
        const allData = [2500, 5000, 7500, 8000, 2200, 7300, 3200, 5000, 2200, 1200, 8500, 4000];

        const revenueChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: allLabels,
                datasets: [{
                    label: 'Gross Revenue by Month',
                    data: allData,
                    backgroundColor: '#3551B6',
                    borderWidth: 0,
                    borderRadius: 10,
                    barThickness: 20,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'top',
                        formatter: (value) => `$ ${value}`, // Fixed template literal
                        font: {
                            weight: 'bold',
                            size: 12,
                        },
                        color: '#fff',
                        backgroundColor: '#3551B6', // Background for the labels
                        borderRadius: 5, // Rounded corners for the label background
                        padding: 4, // Add padding around the label
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `$ ${context.raw}`; // Fixed template literal
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return `$ ${value}`; // Fixed template literal
                            }
                        },
                        grid: {
                            display: true,
                        },
                        title: {
                            display: true,
                            text: 'Revenue (in $)',
                            font: {
                                size: 14,
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                        },
                        title: {
                            display: true,
                            text: 'Months',
                            font: {
                                size: 14,
                            }
                        }
                    }
                }
            },
            plugins: [ChartDataLabels],
        });

        // Handle month selection
        document.getElementById('monthSelector').addEventListener('change', function() {
            const selectedMonth = this.value;

            if (selectedMonth === "") {
                // Reset to all months
                revenueChart.data.labels = allLabels;
                revenueChart.data.datasets[0].data = allData;
            } else {
                // Show only the selected month
                const index = allLabels.indexOf(selectedMonth);
                revenueChart.data.labels = [selectedMonth];
                revenueChart.data.datasets[0].data = [allData[index]];
            }

            revenueChart.update();
        });
    </script>

</body>

</html>
