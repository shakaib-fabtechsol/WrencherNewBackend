<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Industries Management</title>
</head>

<body>
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif
    <section>
        <div class="main">
            @include('Templates.Adminsidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex align-items-center justify-content-start">
                        </div>
                        @include('Templates.AdminNavbar')
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="bottom-main">
                        <div class="content ">
                            <div class="container-fluid">
                                <div class="d-xl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 fw-semibold">
                                            Industries Management
                                        </h1>

                                    </div>
                                    <div
                                        class="d-flex flex-column flex-lg-row justify-content-end align-items-stretch mt-3 mt-xl-0">
                                        <div
                                            class="d-flex my-2 me-lg-2  my-lg-0 justify-content-between border-1 rounded-2 bg-white">
                                            <input type="search"
                                                class="border-0 w-100 px-3 py-2 bg-transparent focus-none"
                                                placeholder="Search Job">
                                            <span class="d-flex align-items-center bg-grey text-white">
                                                <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                            </span>
                                        </div>
                                        <div class="d-sm-flex justify-content-end">
                                            <a href="{{ route('Admin.AddNewIndustry') }}"
                                                class="mbl-100 d-flex justify-content-center align-items-center mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white text-decoration-none">
                                                <i class="fas fa-plus me-1"></i>
                                                <span>Add Industry</span>
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
                                                    <th class="font-semi">Image</th>
                                                    <th class="font-semi">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="align-middle">
                                                    <td class="font-md">1</td>
                                                    <td class="font-md">title</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="" alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                {{-- <span class="lblue font-md">Alexia Haass</span> --}}
                                                            </div>
                                                        </a>
                                                    </td>

                                                    <td class="font-md">status</td>

                                                    {{-- <td>
                                                    <div class="dropdown">
                                                        <button
                                                            class="border-0 bg-lgrey2 text-black rounded-2 px-2 py-2"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('Admin.ViewDetail') }}"><img
                                                                        src="{{ asset('img/img-1.png') }}"
                                                                        alt="" class="me-2">View
                                                                    Details</a></li>
                                                            <li><a class="dropdown-item" href="#"><img
                                                                        src="{{ asset('img/edit.png') }}"
                                                                        alt="" class="me-2">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><img
                                                                        src="{{ asset('img/img-2.png') }}"
                                                                        alt="" class="me-2">Deactivate
                                                                    Account</a></li>
                                                            <li><a class="dropdown-item" href="#"><img
                                                                        src="{{ asset('img/img-3.png') }}"
                                                                        alt="" class="me-2">Send
                                                                    Message</a></li>
                                                        </ul>
                                                    </div>
                                                </td> --}}
                                                </tr>
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
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
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
</body>

</html>
