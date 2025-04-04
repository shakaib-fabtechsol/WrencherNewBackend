<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Pricebook</title>
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
                                    <!-- <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Pricebook</span> -->
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
                            <div class="d-xl-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="mb-0">Pricebook</h3>
                                    <p class="mb-0 gre">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-lg-flex justify-content-end align-items-center mt-xl-0 mt-2">
                                    <div
                                        class="d-flex ps-3 mt-3 mt-lg-0 me-lg-3 align-items-center border bg-white rounded-2">
                                        <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                        <select name="" id="filter"
                                            class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                            <option value="" selected disabled hidden>Filter</option>
                                            <option value="">Filter by Date</option>
                                            <option value="">Filter by Price</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Description</th>
                                            <th>Cost</th>
                                            <th>Inventory</th>
                                            <th>Location in inventory</th>
                                            <th>Markup</th>
                                            <th>Sale Price</th>
                                            <th>Vendor</th>
                                            <th>Item Type</th>
                                            <th>Vendor Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('img/plumbing.png') }}" alt="customer1"
                                                        class="me-2 cus-img rounded-circle">
                                                    <span class="lblue font-md">Pvc Pipe</span>
                                                </div>
                                            </td>
                                            <td>Account Owner</td>
                                            <td>$45.00</td>
                                            <td>69</td>
                                            <td>D block C row</td>
                                            <td>10%</td>
                                            <td>$49.5</td>
                                            <td>ABC vendor</td>
                                            <td><a href="{{ route('BusinessUser.plumbingDetails') }}"
                                                    class="text-decoration-none">Plumbing</a>
                                            </td>
                                            <td><a href="#">https://abcvendor,com</a></td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('img/plumbing.png') }}" alt="customer1"
                                                        class="me-2 cus-img rounded-circle">
                                                    <span class="lblue font-md">Pvc Pipe</span>
                                                </div>
                                            </td>
                                            <td>Account Owner</td>
                                            <td>$45.00</td>
                                            <td>69</td>
                                            <td>D block C row</td>
                                            <td>10%</td>
                                            <td>$49.5</td>
                                            <td>ABC vendor</td>
                                            <td><a href="{{ route('BusinessUser.plumbingDetails') }}"
                                                    class="text-decoration-none">Hardware</a>
                                            </td>
                                            <td><a href="#">https://abcvendor,com</a></td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('img/plumbing.png') }}" alt="customer1"
                                                        class="me-2 cus-img rounded-circle">
                                                    <span class="lblue font-md">Pvc Pipe</span>
                                                </div>
                                            </td>
                                            <td>Account Owner</td>
                                            <td>$45.00</td>
                                            <td>69</td>
                                            <td>D block C row</td>
                                            <td>10%</td>
                                            <td>$49.5</td>
                                            <td>ABC vendor</td>
                                            <td><a href="{{ route('BusinessUser.plumbingDetails') }}"
                                                    class="text-decoration-none">Fabric</a>
                                            </td>
                                            <td><a href="#">https://abcvendor,com</a></td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('img/plumbing.png') }}" alt="customer1"
                                                        class="me-2 cus-img rounded-circle">
                                                    <span class="lblue font-md">Pvc Pipe</span>
                                                </div>
                                            </td>
                                            <td>Account Owner</td>
                                            <td>$45.00</td>
                                            <td>69</td>
                                            <td>D block C row</td>
                                            <td>10%</td>
                                            <td>$49.5</td>
                                            <td>ABC vendor</td>
                                            <td><a href="{{ route('BusinessUser.plumbingDetails') }}"
                                                    class="text-decoration-none">Electrical</a></td>
                                            <td><a href="#">https://abcvendor,com</a></td>
                                        </tr>
                                    </tbody>
                                </table>
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
