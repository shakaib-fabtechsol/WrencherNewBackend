<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Packages</title>
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
                                <div class="bg-white px-3 py-2 mt-3 rounded-3 nav-tabs">
                                    <div class="table-responsive reports-tbl mt-2">
                                        <table class="table">
                                            <thead>
                                                <tr class="align-middle">
                                                    <th class="font-semi">ID</th>
                                                    <th class="font-semi">Title</th>
                                                    <th class="font-semi">Price</th>
                                                    <th class="font-semi">Discount % </th>
                                                    <th class="font-semi">Discounted Price</th>
                                                    <th class="font-semi">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($packages as $package)
                                                    <tr class="align-middle">
                                                        <td class="font-md">{{ $package->id ?? 'N/A' }}</td>
                                                        <td class="font-md">{{ $package->name ?? 'N/A' }}</td>
                                                        <td class="font-md">{{ $package->price ?? 'N/A' }}</td>
                                                        <td class="font-md">{{ $package->discount ?? 'N/A' }} % </td>
                                                        <td class="font-md">{{ $package->discountedprice ?? 'N/A' }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button
                                                                    class="border-0 bg-lgrey2 text-black rounded-2 px-2 py-2"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="{{ route('Admin.EditPackage', $package->id) }}">
                                                                            <i class="fa-solid fa-pencil me-2"></i>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="{{ route('Admin.DeletePackage', $package->id) }}">
                                                                            <i class="fa-solid fa-trash me-2"></i>
                                                                            Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div
                                            class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                            <div class="border-end border-2 py-1 pe-3">
                                                <p class="mb-0">Showing 1 to 25 of 350 results</p>
                                            </div>
                                            <div class="border-end border-2 px-3">
                                                <select name="" id=""
                                                    class="form-select focus-none shadow-none rounded-3">
                                                    <option value="" selected disabled hidden>30 per page
                                                    </option>
                                                    <option value="">30 per page</option>
                                                    <option value="">30 per page</option>
                                                </select>
                                            </div>
                                            <div class="border-end border-2 px-3">
                                                <button
                                                    class="border rounded-3 px-4 py-2 text-black bg-transparent">Previous</button>
                                            </div>
                                            <div class="border-1 ps-3">
                                                <button
                                                    class="rounded-3 border-0 px-4 py-2 text-black bg-lblue">Next</button>
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
