<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Inventory</title>

</head>

<body>
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif
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
                                    <!-- <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Quotes</span> -->
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
                                <div class="d-xxl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 font-semibold">
                                            Inventory
                                        </h1>
                                        <p class="mb-0">Here's how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-xxl-0 mt-2">
                                        <div class="d-sm-flex align-items-center">
                                            <div
                                                class="d-flex justify-content-between border-1 rounded-2 bg-white">
                                                <input type="search"
                                                    class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                    placeholder="Search Inventory">
                                                <span class="d-flex align-items-center bg-grey text-white">
                                                    <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="d-flex ps-3 mx-sm-2 mt-sm-0 mt-2 align-items-center bg-white border-1 rounded-2">
                                                <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                                <select name="" id="filter"
                                                    class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                                    <option value="" selected disabled hidden>Filter</option>
                                                    <option value="">Filter by Date</option>
                                                    <option value="">Filter by Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="d-flex justify-content-end">
                                                <div class="dropdown">
                                                    <a href="{{ route('BusinessUser.AddNewInventory') }}"
                                                        class="mbl-100 text-decoration-none btn-sv mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0">
                                                        Create inventory
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item" href="#">Normal
                                                                Quote</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="#">Packages Quote</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-3 mt-3 rounded-3 nav-tabs">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true">All Items</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">Low Stock
                                                Items</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-requested-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-requested" type="button" role="tab"
                                                aria-controls="pills-requested" aria-selected="false">Out of Stock
                                                Items</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Items Name</th>
                                                            <th class="font-semi">Description</th>
                                                            <th class="font-semi">Type</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Quantity</th>
                                                            <th class="font-semi">Tracking Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($inventories as $inventory)
                                                            <tr class="align-middle">
                                                                <td class="font-md">{{ $inventory->name ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $inventory->description ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $inventory->type ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $inventory->date ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $inventory->quantity ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $inventory->trackingStatus ?? 'N/A' }}</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <div class="dropdown">
                                                                                <button
                                                                                    class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                    type="button" id="dropdownMenuButton"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    <i
                                                                                        class="fa-solid fa-pen text-dark"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu"
                                                                                    aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Schedule </a>
                                                                                    </li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Invoice</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">View Log of SMS
                                                                                            and
                                                                                            Email</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Check Estimate
                                                                                            View
                                                                                            Status</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Request
                                                                                            Deposit</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="ms-2">
                                                                            <a href="{{ route('BusinessUser.DeleteInventory', ['id' => $inventory->id]) }}"
                                                                                class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                    class="fa-solid fa-trash text-dark"></i></a>
                                                                        </div>
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
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Items Name</th>
                                                            <th class="font-semi">Description</th>
                                                            <th class="font-semi">Type</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Quantity</th>
                                                            <th class="font-semi">Tracking Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lowStock as $lowSt)
                                                            <tr>
                                                                <td class="font-md">{{ $lowSt->name ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $lowSt->description ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $lowSt->type ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $lowSt->date ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $lowSt->quantity ?? 'N/A' }}</td>
                                                                <td class="font-md">
                                                                    <p
                                                                        class="rounded-3 d-inline-block px-3 py-2 mb-0 low-stock">
                                                                        Low Stock Item</p>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <div class="dropdown">
                                                                                <button
                                                                                    class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                    type="button" id="dropdownMenuButton"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    <i
                                                                                        class="fa-solid fa-pen text-dark"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu"
                                                                                    aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Schedule </a>
                                                                                    </li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Invoice</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">View Log of SMS
                                                                                            and
                                                                                            Email</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Check Estimate
                                                                                            View
                                                                                            Status</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Request
                                                                                            Deposit</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="ms-2">
                                                                            <a href="{{ route('BusinessUser.DeleteInventory', ['id' => $lowSt->id]) }}"
                                                                                class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                    class="fa-solid fa-trash text-dark"></i></a>
                                                                        </div>
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
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-requested" role="tabpanel"
                                            aria-labelledby="pills-requested-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Items Name</th>
                                                            <th class="font-semi">Description</th>
                                                            <th class="font-semi">Type</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Quantity</th>
                                                            <th class="font-semi">Tracking Status</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($outOfStock as $outOfSt)
                                                            <tr>
                                                                <td class="font-md">{{ $outOfSt->name ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $outOfSt->description ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $outOfSt->type ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $outOfSt->date ?? 'N/A' }}</td>
                                                                <td class="font-md">{{ $outOfSt->quantity ?? 'N/A' }}</td>
                                                                <td class="font-md">
                                                                    <p
                                                                        class="rounded-3 d-inline-block px-3 py-2 mb-0 low-stock">
                                                                        Low Stock Item</p>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <div class="dropdown">
                                                                                <button
                                                                                    class="btn btn-light dropdown-toggle p-2 rounded-3"
                                                                                    type="button" id="dropdownMenuButton"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    <i
                                                                                        class="fa-solid fa-pen text-dark"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu"
                                                                                    aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Schedule </a>
                                                                                    </li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Invoice</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">View Log of SMS
                                                                                            and
                                                                                            Email</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Check Estimate
                                                                                            View
                                                                                            Status</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="#">Request
                                                                                            Deposit</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="ms-2">
                                                                            <a href="{{ route('BusinessUser.DeleteInventory', ['id' => $outOfSt->id]) }}"
                                                                                class="text-center inline-block trash-b p-2 rounded-3"><i
                                                                                    class="fa-solid fa-trash text-dark"></i></a>
                                                                        </div>
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
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
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
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')
    <div class="modal modal-lg fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div class="text-center w-100" id="exampleModalLabel">
                        <div class="d-flex justify-content-center">
                            <div>
                                <h3>Invoice</h3>
                                <p class="mb-0">Due Jun 11, 2024</p>
                            </div>
                            <div>
                                <p class="mb-0 invoiced-bg">Draft</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-wrap justify-content-end">
                        <div class="mb-3">
                            <form>
                                <select class="rounded-2 clientmodal text-white border-0 focus-none p-3">
                                    <option value="" selected disabled hidden>Add Payment</option>
                                    <option value="">Payment 1</option>
                                    <option value="">Payment 2</option>
                                </select>
                            </form>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#">
                                <img src="{{ asset('img/modalm.svg') }}" class="image-fluid img">
                            </a>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#">
                                <img src="{{ asset('img/models.svg') }}" class="image-fluid img">
                            </a>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#">
                                <img src="{{ asset('img/modeld.svg') }}" class="image-fluid img">
                            </a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3 border-invoice">
                        <div>
                            <h4 class="mb-0">$0.00</h4>
                            <p class="mb-0">Amount Paid</p>
                        </div>
                        <div>
                            <h4 class="mb-0 invoice-amount">$80.00</h4>
                            <p class="mb-0">Amount Due</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3 border-invoice">
                        <div>
                            <h4 class="mb-0">Appliance repair</h4>
                            <p class="mb-0">Service Base Price ($80.00)</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="mb-0">$80.00</h4>
                            </div>
                            <div class="size">
                                <img src="{{ asset('img/invoicep.svg') }}" class="image-fluid img">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-3">
                            <a href="#" class="text-decoration-none">
                                <p class="mb-0 invoice-amount font-md">+ Add line Item</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <div class="d-flex">
                                <p class="mb-0 w-100">Sub Total</p>
                                <p class="mb-0">$80.00</p>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0 invoice-amount w-100">Discount</p>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0 invoice-amount w-100">Add Tax</p>
                            </div>
                            <div class="d-flex mt-3">
                                <p class="mb-0 w-100">Total</p>
                                <p class="mb-0">$80.00</p>
                            </div>
                            <div class="d-flex mt-3 align-items-center">
                                <p class="mb-0 w-100">Amount Paid</p>
                                <p class="mb-0">$0.00</p>
                            </div>
                            <div class="d-flex mt-3">
                                <p class="mb-0 font-md w-100">Total Due</p>
                                <p class="mb-0 font-md">$0.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateDropdownColor() {
            const dropdowns = document.querySelectorAll('.statusDropdown');

            dropdowns.forEach(dropdown => {
                const selectedValue = dropdown.value;

                // Reset all color classes
                dropdown.classList.remove(
                    "bg-primary",
                    "bg-warning",
                    "bg-success",
                    "bg-danger",
                    "bg-info",
                    "bg-secondary",
                    "bg-light"
                );

                // Apply color based on the selected value
                switch (selectedValue) {
                    case "Open":
                        dropdown.classList.add("bg-secondary"); // Gray
                        break;
                    case "Schedule":
                        dropdown.classList.add("bg-primary"); // Blue
                        break;
                    case "Accepted":
                        dropdown.classList.add("bg-info"); // Light Blue
                        break;
                    case "Decline":
                        dropdown.classList.add("bg-danger"); // Red
                        break;
                    case "Requested":
                        dropdown.classList.add("bg-warning"); // Yellow
                        break;
                    case "Paid":
                        dropdown.classList.add("bg-success"); // Green
                        break;
                }
            });
        }

        // Initialize colors on page load
        document.addEventListener("DOMContentLoaded", updateDropdownColor);

        // Update color dynamically on change
        document.addEventListener("change", (event) => {
            if (event.target.classList.contains("statusDropdown")) {
                updateDropdownColor();
            }
        });
    </script>
</body>

</html>
