<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Material</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.BusinessUserNavBar')
            <div class="right">
                <div class="right-top input-shadow">
                    @include('Templates.BusinessUserNavBar')
                </div>
                <div class="right-bottom">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="d-xxl-flex align-items-center justify-content-between">
                                <div>
                                    <h4>Materials</h4>
                                    <p class="gre mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-lg-flex justify-content-end align-items-center mr-xxl-0 mt-2">
                                    <div class="d-flex justify-content-between border-1 rounded-2 bg-white me-2">
                                        <input type="search"
                                            class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                            placeholder="Search Job">
                                        <span class="d-flex align-items-center bg-grey text-white">
                                            <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end mt-lg-0 mt-2">
                                        <div class="me-2">
                                            <button type="button"
                                                class="mbl-100 rounded-2 px-sm-4 btn-sv px-2 text-nowrap py-2 bg-sky text-white border-0">Import
                                                Material</button>
                                        </div>
                                        <div class="me-2">
                                            <button type="button"
                                                class="mbl-100 rounded-2 px-sm-4 btn-sv px-2 text-nowrap py-2 bg-sky text-white border-0">Export
                                                Material</button>
                                        </div>
                                        <div class="">
                                            <a href="#"
                                                class="mbl-100 text-decoration-none d-inline-block rounded-2 px-sm-4 btn-sv px-2 text-nowrap py-2 bg-sky text-white border-0">Add
                                                Subcategory</a>
                                        </div>
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
                                            <td>Plumbing</td>
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
                                            <td>Hardware</td>
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
                                            <td>Fabric</td>
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
                                            <td>Electrical</td>
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
