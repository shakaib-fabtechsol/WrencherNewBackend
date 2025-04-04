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
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Packages</span>
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
                                <div class="d-xl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-3 font-semi">
                                            Packages
                                        </h1>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-3">
                                        <div class="d-sm-flex justify-content-end">
                                            <a href="{{ route('Admin.AddNewPackage') }}"
                                                class="mbl-100 d-flex justify-content-center align-items-center mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white text-decoration-none">
                                                <i class="fas fa-plus me-1"></i>
                                                <span>Add Package</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-8">
                                        <div class="row gx-0 bg-white">
                                            <div class="col-12">
                                                <p
                                                    class="bg-sky border-2 border-black border-bottom-0 text-white px-2 py-2 mb-0 opacity-75">
                                                    Service Packages</p>
                                            </div>
                                            <div class="col-sm-6 col-md-4 border-2 border-black">
                                                <p class="bg-danger2 fw-semibold mb-0 text-center fs-5 px-2 py-2">
                                                    "A" - 5% Off
                                                </p>
                                                <p
                                                    class="py-4 text-center border-top border-bottom border-2 border-black fw-semibold fs-1 text-black mb-0">
                                                    $2,423
                                                </p>
                                                <div class="d-flex bg-danger2 px-3 justify-content-between py-2">
                                                    <p class="fs-5 fw-semibold mb-0">Save</p>
                                                    <p class="fs-5 fw-semibold mb-0">$128</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-sm-6 col-md-4 border-2 border-black border-end-0 border-start-0">
                                                <p class="bg-warning2 fw-semibold mb-0 text-center fs-5 px-2 py-2">
                                                    "B" - 10% Off
                                                </p>
                                                <p
                                                    class="py-4 text-center border-top border-bottom border-end-0 border-start-0 border-2 border-black fw-semibold fs-1 text-black mb-0">
                                                    $3,375
                                                </p>
                                                <div class="d-flex bg-warning2 px-3 justify-content-between py-2">
                                                    <p class="fs-5 fw-semibold mb-0">Save</p>
                                                    <p class="fs-5 fw-semibold mb-0">$563</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 border-2 border-black">
                                                <p class="bg-success2 fw-semibold mb-0 text-center fs-5 px-2 py-2">
                                                    "C" - 20% Off
                                                </p>
                                                <p
                                                    class="py-4 text-center border-top border-bottom border-2 border-black fw-semibold fs-1 text-black mb-0">
                                                    $3,600
                                                </p>
                                                <div class="d-flex bg-success2 px-3 justify-content-between py-2">
                                                    <p class="fs-5 fw-semibold mb-0">Save</p>
                                                    <p class="fs-5 fw-semibold mb-0">$1,125</p>
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
