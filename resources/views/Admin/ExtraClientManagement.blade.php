<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Client Management</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.Adminsidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <!-- <div class="d-flex align-items-center justify-content-start">
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Client</span>
                            </div> -->
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
                                <div class="d-xxl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 fw-semibold">
                                            Client Management
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
                                        <div
                                            class="d-flex ps-3 my-2 my-lg-0 me-lg-2 filter-width mt-sm-0 mt-2 align-items-center bg-white border-1 rounded-2">
                                            <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                            <select name=""
                                                class="w-100 pe-3 py-2 focus-none border-white me-1 font-md bg-transparent">
                                                <option value="" selected disabled hidden>Filter</option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-3 mt-3 rounded-3 nav-tabs">
                                    <div class="table-responsive reports-tbl ">
                                        <table class="table">
                                            <thead>
                                                <tr class="align-middle">
                                                    <th class="font-semi">User ID</th>
                                                    <th class="font-semi">User Image</th>
                                                    <th class="font-semi">First Name</th>
                                                    <th class="font-semi">Last Name</th>
                                                    <th class="font-semi">Phone Number</th>
                                                    <th class="font-semi">Email</th>
                                                    <th class="font-semi">Address</th>
                                                    <th class="font-semi">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="align-middle">
                                                    <td class="font-md">PK:9090</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png ') }}"
                                                                    alt="customer1" class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="font-md">DJ</td>
                                                    <td class="font-md">Robinson</td>
                                                    <td class="font-md">+21 91 999 999</td>
                                                    <td>client@gmail.com</td>
                                                    <td>usersexapleaddressher</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="border-0 bg-lgrey2 px-2 py-2 text-black rounded-2"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-1.png ') }}"
                                                                            alt="" class="me-2">View
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/edit.png ') }}"
                                                                            alt="" class="me-2">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-2.png ') }}"
                                                                            alt="" class="me-2">Deactivate
                                                                        Account</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-3.png ') }}"
                                                                            alt="" class="me-2">Send
                                                                        Message</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td class="font-md">PK:9090</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png ') }}"
                                                                    alt="customer1" class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="font-md">DJ</td>
                                                    <td class="font-md">Robinson</td>
                                                    <td class="font-md">+21 91 999 999</td>
                                                    <td>client@gmail.com</td>
                                                    <td>usersexapleaddressher</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="border-0 bg-lgrey2 px-2 py-2 text-black rounded-2"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-1.png ') }}"
                                                                            alt="" class="me-2">View
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/edit.png ') }}"
                                                                            alt="" class="me-2">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-2.png ') }}"
                                                                            alt="" class="me-2">Deactivate
                                                                        Account</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-3.png ') }}"
                                                                            alt="" class="me-2">Send
                                                                        Message</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td class="font-md">PK:9090</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png ') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="font-md">DJ</td>
                                                    <td class="font-md">Robinson</td>
                                                    <td class="font-md">+21 91 999 999</td>
                                                    <td>client@gmail.com</td>
                                                    <td>usersexapleaddressher</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="border-0 bg-lgrey2 px-2 py-2 text-black rounded-2"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-1.png ') }}"
                                                                            alt="" class="me-2">View
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/edit.png ') }}"
                                                                            alt="" class="me-2">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-2.png ') }}"
                                                                            alt="" class="me-2">Deactivate
                                                                        Account</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-3.png ') }}"
                                                                            alt="" class="me-2">Send
                                                                        Message</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="align-middle">
                                                    <td class="font-md">PK:9090</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png ') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="font-md">DJ</td>
                                                    <td class="font-md">Robinson</td>
                                                    <td class="font-md">+21 91 999 999</td>
                                                    <td>client@gmail.com</td>
                                                    <td>usersexapleaddressher</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="border-0 bg-lgrey2 px-2 py-2 text-black rounded-2"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-1.png ') }}"
                                                                            alt="" class="me-2">View
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/edit.png ') }}"
                                                                            alt="" class="me-2">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-2.png ') }}"
                                                                            alt="" class="me-2">Deactivate
                                                                        Account</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-3.png ') }}"
                                                                            alt="" class="me-2">Send
                                                                        Message</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td class="font-md">PK:9090</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png ') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="font-md">DJ</td>
                                                    <td class="font-md">Robinson</td>
                                                    <td class="font-md">+21 91 999 999</td>
                                                    <td>client@gmail.com</td>
                                                    <td>usersexapleaddressher</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="border-0 bg-lgrey2 px-2 py-2 text-black rounded-2"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-1.png ') }}"
                                                                            alt="" class="me-2">View
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/edit.png ') }}"
                                                                            alt="" class="me-2">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-2.png ') }}"
                                                                            alt="" class="me-2">Deactivate
                                                                        Account</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-3.png ') }}"
                                                                            alt="" class="me-2">Send
                                                                        Message</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td class="font-md">PK:9090</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png ') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="font-md">DJ</td>
                                                    <td class="font-md">Robinson</td>
                                                    <td class="font-md">+21 91 999 999</td>
                                                    <td>client@gmail.com</td>
                                                    <td>usersexapleaddressher</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="border-0 bg-lgrey2 px-2 py-2 text-black rounded-2"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-1.png ') }}"
                                                                            alt="" class="me-2">View
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/edit.png ') }}"
                                                                            alt="" class="me-2">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-2.png ') }}"
                                                                            alt="" class="me-2">Deactivate
                                                                        Account</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-3.png ') }}"
                                                                            alt="" class="me-2">Send
                                                                        Message</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td class="font-md">PK:9090</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png ') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="font-md">DJ</td>
                                                    <td class="font-md">Robinson</td>
                                                    <td class="font-md">+21 91 999 999</td>
                                                    <td>client@gmail.com</td>
                                                    <td>usersexapleaddressher</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="border-0 bg-lgrey2 px-2 py-2 text-black rounded-2"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-1.png ') }}"
                                                                            alt="" class="me-2">View
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/edit.png ') }}"
                                                                            alt="" class="me-2">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-2.png ') }}"
                                                                            alt="" class="me-2">Deactivate
                                                                        Account</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-3.png ') }}"
                                                                            alt="" class="me-2">Send
                                                                        Message</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td class="font-md">PK:9090</td>
                                                    <td>
                                                        <a href="#" class="text-decoration-none">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png ') }}"
                                                                    alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                                <span class="lblue font-md">Alexia Haass</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="font-md">DJ</td>
                                                    <td class="font-md">Robinson</td>
                                                    <td class="font-md">+21 91 999 999</td>
                                                    <td>client@gmail.com</td>
                                                    <td>usersexapleaddressher</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="border-0 bg-lgrey2 px-2 py-2 text-black rounded-2"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-1.png ') }}"
                                                                            alt="" class="me-2">View
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/edit.png ') }}"
                                                                            alt="" class="me-2">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-2.png ') }}"
                                                                            alt="" class="me-2">Deactivate
                                                                        Account</a></li>
                                                                <li><a class="dropdown-item" href="#"><img
                                                                            src="{{ asset('img/img-3.png ') }}"
                                                                            alt="" class="me-2">Send
                                                                        Message</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
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
</body>

</html>
