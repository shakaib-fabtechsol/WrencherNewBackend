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
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Website Analytics</span>
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
                                        <h1 class="fs-4 font-bold">
                                            Good morning, Jake Zophres.
                                        </h1>
                                        <p>Here’s how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center">
                                        <div
                                            class="d-flex ps-3 pe-1 mt-2 mt-lg-0 me-lg-2 align-items-center bg-white border-1 rounded-2">
                                            <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                            <select name="" id="filter"
                                                class="border-white filter-width pe-3 py-2 grey w-100 focus-none font-md bg-transparent">
                                                <option value="" selected disabled hidden>Filter</option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4 mt-xl-0">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Upcoming jobs</p>
                                            </div>
                                            <div class="row cardhight">
                                                <div class="col-6 border-end">
                                                    <div class="p-2 border-bottom h-50">
                                                        <h6 class="font-14">Thu August, 10, 2024</h6>
                                                        <p class="gre font-14">11:00pm</p>
                                                    </div>
                                                    <div class="p-2 h-50">
                                                        <h6 class="font-14">Thu August, 10, 2024</h6>
                                                        <p class="gre">11:00pm</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 h-100 d-flex flex-column justify-content-center">
                                                    <p class="font-14 fw-medium">No Upcoming Jobs</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4 mt-xl-0">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Open Estimates</p>
                                            </div>
                                            <div class="row cardhight">
                                                <div class="col-6 border-end">
                                                    <div class="p-2 border-bottom h-50">
                                                        <h6 class="font-14">Thu August, 10, 2024</h6>
                                                        <p class="gre font-12">11:00pm</p>
                                                        <p class="gre font-12">Sent To Customer</p>
                                                    </div>
                                                    <div class="p-2 h-50">
                                                        <h6 class="font-14">Thu August, 10, 2024</h6>
                                                        <p class="gre font-12">11:00pm</p>
                                                        <p class="gre font-12">Sent To Customer</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 h-100">
                                                    <div class="p-2 border-bottom h-50">
                                                        <div>
                                                            <h6 class="font-14">Hurricane shutters</h6>
                                                            <p class="gre font-12">Ik entities
                                                                3130 SW Edwards Ave
                                                                Palm City FL, 34990</p>
                                                        </div>
                                                        <div>

                                                        </div>
                                                    </div>
                                                    <div class="p-2 h-50">
                                                        <h6 class="font-14">Thu August, 10, 2024</h6>
                                                        <p class="gre font-12">11:00pm</p>
                                                        <p class="gre font-12">Sent To Customer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center my-2">
                                                <button
                                                    class="bg-sky text-white border-0 shadow py-2 px-4 rounded-3 ">See
                                                    all Estimated</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4 mt-xl-0">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1 d-flex justify-content-between">
                                                <div>
                                                    <p class="font-semi fs-6 mb-0">Open Invoices</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-decoration-none">
                                                        <p class="font-semi fs-6 mb-0 invoice-amount">View All</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end p-3">
                                                <p class="mb-0 font-semi">$3869.31</p>
                                                <p class="mb-0 font-12">Open Invoices</p>
                                            </div>
                                            <div class="p-3 w-100">
                                                <canvas id="Chart" height="250px"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Lead source</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div
                                                class="p-3 d-flex justify-content-between align-items-center border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Jobs</p>
                                                <div class="dropdown">
                                                    <button class="btn btn-date dropdown-toggle border-1" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        2024
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">2025</a></li>
                                                        <li><a class="dropdown-item" href="#">2026</a></li>
                                                        <li><a class="dropdown-item" href="#">2027</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="d-flex flex-column p-3">
                                                        <p class="mb-0 font-semi">$3869.31</p>
                                                        <p class="mb-0 font-12">780 Complete</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="d-flex flex-column p-3">
                                                        <p class="mb-0 font-semi">$390</p>
                                                        <p class="mb-0 font-12">4 sched</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="d-flex flex-column  p-3">
                                                        <p class="mb-0 font-semi">$0</p>
                                                        <p class="mb-0 font-12">Unscheduled</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 w-100">
                                                <canvas id="JobChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div
                                                class="p-3 d-flex justify-content-between align-items-center border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Jobs</p>
                                                <div class="dropdown">
                                                    <button class="btn btn-profit dropdown-toggle border-1"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Select profit
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">profit</a></li>
                                                        <li><a class="dropdown-item" href="#">Loss</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="d-flex flex-column p-3">
                                                        <p class="mb-0 font-semi">$3869.31</p>
                                                        <p class="mb-0 font-12">780 Complete</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="d-flex flex-column p-3">
                                                        <p class="mb-0 font-semi">$390</p>
                                                        <p class="mb-0 font-12">4 sched</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="d-flex flex-column  p-3">
                                                        <p class="mb-0 font-semi">$0</p>
                                                        <p class="mb-0 font-12">Unscheduled</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3">
                                                <canvas id="profitChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Average job size</p>
                                            </div>
                                            <div class="text-center my-2">
                                                <button class="bg-sky text-white border-0 shadow py-2 px-4 rounded-3">+
                                                    New Jobs
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Jobs $ Total For Week</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Sales by Service</p>
                                            </div>
                                            <p class="fs-6 mb-0 text-center">Track Stats important your Services</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Average Ticket</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 mt-4">
                                        <div class="h-100 bg-white border-1 rounded-3">
                                            <div class="p-3 border-bottom border-1">
                                                <p class="font-semi fs-6 mb-0">Close Ratio</p>
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

    <div class="modal modal-lg fade" id="callpop" tabindex="-1" aria-labelledby="callpopLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div class="text-center w-100" id="callpopLabel">
                        <h3>Add New Call</h3>
                    </div>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fs-4 fa-circle-xmark text-danger"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <label for="Customer Name" class="font-semi">Customer Name</label>
                        <input type="text" id="Customer Name" placeholder="Lucas Hood"
                            class="form-control focus-none mb-2">
                        <label for="Phone" class="font-semi">Phone</label>
                        <input type="number" id="Phone" placeholder="1234567" required
                            class="form-control focus-none mb-2">
                        <label for="email" class="font-semi">Email (Optional)</label>
                        <input type="email" id="email" placeholder="awesomaa1@domain.com"
                            class="form-control focus-none mb-2">
                        <label for="address" class="font-semi">Address (Optional)</label>
                        <input type="text" id="address" placeholder="123 Eve, Rookers Block Las Vegas"
                            class="form-control focus-none mb-2">
                        <label class="font-semi">What You Are Looking For?</label>
                        <div class="check-box d-sm-flex flex-wrap">
                            <div>
                                <input type="checkbox" id="Quote"> <label for="Quote">Quote</label>
                            </div>
                            <div>
                                <input type="checkbox" class="ms-0 ms-sm-2" id="Schedule an Estimate"> <label
                                    for="Schedule an Estimate">Schedule an Estimate</label>
                            </div>
                            <div>
                                <input type="checkbox" class="ms-0 ms-sm-2" id="Other"> <label
                                    for="Other">Other</label>
                            </div>
                        </div>
                        <label for="Notes" class="font-semi">Notes</label>
                        <div class="call-textarea">
                            <textarea id="Notes" placeholder="57000" class="w-100 bg-white border rounded-3 p-3"></textarea>
                        </div>
                        <div class="call-pop-btns d-sm-flex flex-wrap justify-content-between align-items-center mt-3">
                            <button type="button"
                                class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-red text-white border-0 mb-2 mb-sm-0">Cancel</button>
                            <button type="button"
                                class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-sky text-white border-0">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Templates.Jslinks')

    <script>
        const data = {
            labels: ['', '', ''],
            datasets: [{
                label: 'Invoices',
                data: [0, 0, 100],
                backgroundColor: ['rgba(214, 0, 75, 1)', 'rgba(187, 123, 0, 1)', 'rgba(14, 111, 190, 1)'],
                borderColor: ['rgba(214, 0, 75, 1)', 'rgba(187, 123, 0, 1)', 'rgba(14, 111, 190, 1)'],
                borderWidth: 1,
                borderRadius: 10,
                barThickness: 60
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        display: true, // Show the x-axis
                    },
                    y: {
                        display: false,
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            },
            plugins: [{
                afterDatasetDraw: function(chart) {
                    const ctx = chart.ctx;
                    const yScale = chart.scales.y;
                    const barColors = ['rgba(214, 0, 75, 1)', 'rgba(187, 123, 0, 1)',
                        'rgba(14, 111, 190, 1)'
                    ];
                    const labels = ['$0.00\nPast Due', '$0.00\nDue', '$3869.31\nUnSent'];

                    chart.data.datasets.forEach((dataset, datasetIndex) => {
                        dataset.data.forEach((value, index) => {
                            const bar = chart.getDatasetMeta(datasetIndex).data[index];
                            const x = bar.x;
                            const y = bar.y;

                            const barWidth = bar.width;
                            ctx.strokeStyle = barColors[index];
                            ctx.lineWidth = 2;
                            ctx.beginPath();

                            // Position the line near the bottom of the chart (close to the x-axis)
                            const lineYPosition = yScale.getPixelForValue(0) + 15;
                            ctx.moveTo(x - barWidth / 2, lineYPosition);
                            ctx.lineTo(x + barWidth / 2, lineYPosition);
                            ctx.stroke();

                            // Draw the labels at the bottom near the x-axis
                            ctx.fillStyle = '#5D7285';
                            ctx.font = '12px Arial';
                            ctx.textAlign = 'center';
                            ctx.textBaseline =
                                'top'; // Align text to top so it shows above the line
                            ctx.fillText(labels[index], x, lineYPosition +
                                5); // Adjust y-position for label at bottom
                        });
                    });
                }
            }]
        };

        const ctx = document.getElementById('Chart').getContext('2d');
        new Chart(ctx, config);
    </script>
    <!-- -----second chart----- -->
    <script>
        const data2 = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: '',
                data: [12, 19, 3, 5, 2, 3, 7, 3, 5, 2, 3, 7],
                backgroundColor: '#0E6FBE',
                borderColor: '#0E6FBE',
                borderWidth: 1,
                barThickness: 10
            }]
        };
        const config2 = {
            type: 'bar',
            data: data2,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        border: {
                            display: false
                        },
                        ticks: {
                            maxRotation: 0,
                            minRotation: 0,
                            autoSkip: false
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Initialize the chart
        const ctx2 = document.getElementById('JobChart').getContext('2d');
        new Chart(ctx2, config2);
    </script>
    <!-- -----Third Chart------ -->
    <script>
        const data3 = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: '',
                data: [12, 19, 3, 5, 2, 3, 7],
                backgroundColor: '#0E6FBE',
                borderColor: '#0E6FBE',
                borderWidth: 1,
                barThickness: 10
            }]
        };
        const config3 = {
            type: 'bar',
            data: data2,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        border: {
                            display: false
                        },
                        ticks: {
                            maxRotation: 0,
                            minRotation: 0,
                            autoSkip: false
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        const ctx3 = document.getElementById('profitChart').getContext('2d');
        new Chart(ctx3, config3);
    </script>
</body>

</html>
