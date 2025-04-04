<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>New Contract</title>
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
                                    <span class="sky fs-4 fw-medium">Bookable Estimate</span>
                                    <!-- <i class="fas fa-chevron-right mx-1 fs-6"></i> -->
                                    <!-- <span class="fs-6">Create Bookable Estimate</span> -->
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
                            <form action="">
                                <div class="row justify-content-center">
                                    <div class="col-sm-7 col-md-8">
                                        <section class="">
                                            <div>
                                                <div class="accordion" id="accordionExample">
                                                    <!-- Question 1 -->
                                                    <div
                                                        class="accordion-item my-3 border-0 shadow-sm py-2 rounded-4 px-md-2">
                                                        <h2 class="accordion-header rounded-4 border-0 py-0"
                                                            id="headingOne">
                                                            <button
                                                                class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Customer
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne"
                                                            class="accordion-collapse pt-0 mt-0 collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <label for=""
                                                                            class=" fw-semibold">Select
                                                                            Customer</label>
                                                                        <div class="dropdown12 position-relative">
                                                                            <div id="dropdown-toggle-container"
                                                                                class="d-flex bg-white drop-container">
                                                                                <div class="w-100">
                                                                                    <button type="button"
                                                                                        id="dropdown-toggle-button"
                                                                                        class="w-100 border-0 p-0 text-start bg-white">
                                                                                        Select Here
                                                                                    </button>
                                                                                </div>
                                                                                <div>
                                                                                    <i
                                                                                        class="fa-solid fa-caret-down"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div id="dropdown-menu"
                                                                                class="bg-white shadow rounded-3 p-2 menu dropdown-menu1">
                                                                                <button type="button"
                                                                                    class="create-new-btn text-start shadow-sm rounded-3"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleModal">
                                                                                    <i
                                                                                        class="fa-solid fa-square-plus me-2"></i>Create
                                                                                    a new customer
                                                                                </button>
                                                                                <div class="mt-2">
                                                                                    <div id="search-input-container"
                                                                                        class="d-flex align-items-center shadow-sm px-3 py-2">
                                                                                        <input id="search-input"
                                                                                            type="text"
                                                                                            placeholder="Search Customer"
                                                                                            class="w-100 border-0">
                                                                                        <button id="search-btn"
                                                                                            class="search-btn">
                                                                                            <i
                                                                                                class="fa-solid fa-magnifying-glass"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="customer-list"
                                                                                    class="mt-2 customer-list">
                                                                                    <!-- Customer items will be added here dynamically -->
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="accordion-item my-3 border-0 shadow-sm py-2 rounded-4 px-md-2">
                                                        <h2 class="accordion-header rounded-4 border-0 py-0"
                                                            id="headingTwo">
                                                            <button
                                                                class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Services
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo"
                                                            class="accordion-collapse pt-0 mt-0 collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                                                <div class="border-bottom border-1 pb-3">
                                                                    <label for="" class="form-label">Browse
                                                                        Services</label>
                                                                    <div class="custom-dropdown">
                                                                        <div
                                                                            class="custom-dropdown-toggle1 p-3 rounded-3 d-flex border-1 bg-white">
                                                                            <div class="w-100">
                                                                                <button type="button"
                                                                                    class="w-100 custom-toggle-button p-0 text-start border-1 bg-white"
                                                                                    id="selectService">Select
                                                                                    Here</button>
                                                                            </div>
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="fa-solid fa-caret-down"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="custom-dropdown-menu bg-white shadow rounded-3 p-2">
                                                                            <div class="mt-2">
                                                                                <div
                                                                                    class="search-input d-flex align-items-center shadow-sm px-3 py-2">
                                                                                    <input type="text"
                                                                                        placeholder="Search Services"
                                                                                        class="w-100 border-0">
                                                                                    <button class="search-btn">
                                                                                        <i
                                                                                            class="fa-solid fa-magnifying-glass"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <ul class="custom-customer-list mt-2">
                                                                                <!-- Customer items will be added here dynamically -->
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <button type="button"
                                                                        class="create-new-btn text-start px-0 rounded-3"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#serviceModal"><i
                                                                            class="fa-solid fa-square-plus me-2"></i>Create
                                                                        a new
                                                                        Service</button>
                                                                </div>
                                                                <div
                                                                    class="d-flex border-bottom border-1 py-3 justify-content-between">
                                                                    <p class="mb-0 text-uppercase fw-semibold">
                                                                        Service</p>
                                                                    <p class="mb-0 text-uppercase fw-semibold">Price
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="d-flex border-bottom border-1 py-3 justify-content-between">
                                                                    <p class="mb-0 text-uppercase">Plumbing Service
                                                                        Call</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <input type="text"
                                                                            class="border-0 focus-none max-content"
                                                                            value="$75.00">
                                                                        <i
                                                                            class="fa-solid fa-trash text-danger ms-2"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="py-3">
                                                                    <div class="d-flex py-1 justify-content-between">
                                                                        <p class="mb-0">Subtotal</p>
                                                                        <p class="mb-0 text-uppercase ">$75.00</p>
                                                                    </div>
                                                                    <div class="d-flex py-1 justify-content-between">
                                                                        <p class="mb-0 create-new-btn px-0 py-0"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#discountModal">Add
                                                                            Discount</p>
                                                                    </div>
                                                                    <div class="d-flex py-1 justify-content-between">
                                                                        <p class="mb-0 create-new-btn px-0 py-0"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#feeModal">Add Fee</p>
                                                                    </div>
                                                                    <div class="d-flex py-1 justify-content-between">
                                                                        <p class="mb-0">Taxes</p>
                                                                        <p class="mb-0">$0.00</p>
                                                                    </div>
                                                                    <div class="d-flex py-1 justify-content-between">
                                                                        <p class="mb-0">Total</p>
                                                                        <p class="mb-0">$75.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Question 2 -->
                                                    <div
                                                        class="accordion-item my-3 border-0 shadow-sm py-2 rounded-4 px-md-2">
                                                        <h2 class="accordion-header rounded-4 border-0 py-0"
                                                            id="headingFour">
                                                            <button
                                                                class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                Schedule
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour"
                                                            class="accordion-collapse pt-0 mt-0 collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-xl-4 col-xxl-3 my-2">
                                                                        <div
                                                                            class="d-flex align-items-center border-1 rounded-3 px-2">
                                                                            <i class="fa-solid fa-clock"></i>
                                                                            <select
                                                                                class="custom-select border-0 form-select focus-none bg-transparent">
                                                                                <option value="15-min">15 min
                                                                                </option>
                                                                                <option value="30-min">30 min
                                                                                </option>
                                                                                <option value="45-min">45 min
                                                                                </option>
                                                                                <option value="1-hr">1 hr</option>
                                                                                <option value="1-hr-15-min">1 hr 15
                                                                                    min</option>
                                                                                <option value="1-hr-30-min">1 hr 30
                                                                                    min</option>
                                                                                <option value="1-hr-45-min">1 hr 45
                                                                                    min</option>
                                                                                <option value="2-hr">2 hr</option>
                                                                                <option value="2-hr-15-min">2 hr 15
                                                                                    min</option>
                                                                                <option value="2-hr-30-min">2 hr 30
                                                                                    min</option>
                                                                                <option value="2-hr-45-min">2 hr 45
                                                                                    min</option>
                                                                                <option value="3-hr">3 hr</option>
                                                                                <option value="3-hr-15-min">3 hr 15
                                                                                    min</option>
                                                                                <option value="3-hr-30-min">3 hr 30
                                                                                    min</option>
                                                                                <option value="3-hr-45-min">3 hr 45
                                                                                    min</option>
                                                                                <option value="4-hr">4 hr</option>
                                                                                <option value="4-hr-15-min">4 hr 15
                                                                                    min</option>
                                                                                <option value="4-hr-30-min">4 hr 30
                                                                                    min</option>
                                                                                <option value="4-hr-45-min">4 hr 45
                                                                                    min</option>
                                                                                <option value="5-hr">5 hr</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-4 col-xxl-3 my-2">
                                                                        <div
                                                                            class="d-flex align-items-center border-1 rounded-3 px-2">
                                                                            <i class="fa-solid fa-user"></i>
                                                                            <select
                                                                                class="custom-select border-0 form-select focus-none bg-transparent">
                                                                                <option value="1">1 Worker
                                                                                </option>
                                                                                <option value="2">2 Workers
                                                                                </option>
                                                                                <option value="3">3 Workers
                                                                                </option>
                                                                                <option value="4">4 Workers
                                                                                </option>
                                                                                <option value="5">5 Workers
                                                                                </option>
                                                                                <option value="6">6 Workers
                                                                                </option>
                                                                                <option value="7">7 Workers
                                                                                </option>
                                                                                <option value="8">8 Workers
                                                                                </option>
                                                                                <option value="9">9 Workers
                                                                                </option>
                                                                                <option value="10">10 Workers
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-4 col-xxl-3 my-2">
                                                                        <div
                                                                            class="d-flex align-items-center border-1 rounded-3 px-2">
                                                                            <i class="fa-solid fa-user"></i>
                                                                            <select
                                                                                class="custom-select border-0 form-select focus-none bg-transparent">
                                                                                <option value="0">0 Skill Required
                                                                                </option>
                                                                                <option value="1">1 Skill Required
                                                                                </option>
                                                                                <option value="2">2 Skills
                                                                                    Required
                                                                                </option>
                                                                                <option value="3">3 Skills
                                                                                    Required
                                                                                </option>
                                                                                <option value="4">4 Skills
                                                                                    Required
                                                                                </option>
                                                                                <option value="5">5 Skills
                                                                                    Required
                                                                                </option>
                                                                                <option value="6">6 Skills
                                                                                    Required
                                                                                </option>
                                                                                <option value="7">7 Skills
                                                                                    Required
                                                                                </option>
                                                                                <option value="8">8 Skills
                                                                                    Required
                                                                                </option>
                                                                                <option value="9">9 Skills
                                                                                    Required
                                                                                </option>
                                                                                <option value="10">10 Skills
                                                                                    Required</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 border-1 rounded-3 py-3">
                                                                    <div
                                                                        class="d-flex border-bottom px-3 pb-3 align-items-center">
                                                                        <i
                                                                            class="fa-solid fa-paperclip fs-5 px-2 py-2 me-2 border-1 rounded-3"></i>
                                                                        <div>
                                                                            <h6 class="fs-6 mb-1 fw-semibold">
                                                                                Scheduling Link</h6>
                                                                            <p class="mb-0">The scheduling link will
                                                                                be generated when you save this
                                                                                estimate</p>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex pt-3 px-3 algin-items-center justify-content-between">
                                                                        <h6 class="fw-medium mb-0">TIMESLOT TEMPLATE
                                                                        </h6>
                                                                        <p class="mb-0">None</p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-4">
                                                                    <h6 class="fw-medium mb-0">ASSIGNED</h6>
                                                                    <div class=" mt-2">
                                                                        <div class="dropdown-container">
                                                                            <button type="button" id="assign-btn"
                                                                                class="btn btn-primary">
                                                                                <i class="fa-solid fa-plus"></i>
                                                                                <span>Assign</span>
                                                                            </button>
                                                                            <div id="dropdown-content"
                                                                                class="dropdown-content">
                                                                                <select id="user-select"
                                                                                    class="form-select" multiple>
                                                                                    <option value="1">John Doe
                                                                                    </option>
                                                                                    <option value="2">Jane Smith
                                                                                    </option>
                                                                                    <option value="3">Alice
                                                                                        Johnson
                                                                                    </option>
                                                                                    <option value="4">Robert Brown
                                                                                    </option>
                                                                                    <option value="5">Emily Davis
                                                                                    </option>
                                                                                    <option value="6">Michael
                                                                                        Wilson
                                                                                    </option>
                                                                                    <option value="7">Sarah Miller
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div id="preview-container"
                                                                            class="preview-container"></div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex ps-2 mt-3 px-3 py-3 border-1 rounded-3">
                                                                        <input type="checkbox" name=""
                                                                            class="me-2" id="collect">
                                                                        <label for="collect" class="fw-semibold ">
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Offer job to service providers
                                                                            </h6>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Question 3 -->
                                                    <div
                                                        class="accordion-item my-3 border-0 shadow-sm py-2 rounded-4 px-md-2">
                                                        <h2 class="accordion-header rounded-4 border-0 py-0"
                                                            id="headingThree">
                                                            <button
                                                                class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Quote Options
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree"
                                                            class="accordion-collapse pt-0 mt-0 collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                                                <div class="col-lg-12 mb-3">
                                                                    <label for="title"
                                                                        class="ps-2 fw-semibold">Title</label>
                                                                    <input type="text" id="title"
                                                                        class="w-100 bg-white border rounded-3 p-2"
                                                                        placeholder="Estimate for custom handyman">
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <label for="memo"
                                                                        class="ps-2 fw-semibold">Memo</label>
                                                                    <input type="text" id="memo"
                                                                        class="w-100 bg-white border rounded-3 p-2"
                                                                        placeholder="Enter a custom description for your estimate">
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <label for="expires"
                                                                        class="ps-2 fw-semibold">Expires</label>
                                                                    <input type="date" id="expires"
                                                                        class="w-100 bg-white border rounded-3 p-2"
                                                                        placeholder="January 22,2025">
                                                                </div>

                                                                <div class="col-lg-12 mb-3">
                                                                    <label for=""
                                                                        class="ps-2 fw-semibold">Terms</label>
                                                                    <select name="" id=""
                                                                        class="w-100 form-select focus-none bg-white border rounded-3 p-2">
                                                                        <option value="T1"> T1</option>
                                                                        <option value="T2"> T2</option>
                                                                        <option value="T3"> T3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <label for=""
                                                                        class="ps-2 fw-semibold">Payment
                                                                        capture
                                                                        & collection</label>
                                                                    <div
                                                                        class="d-flex ps-2 px-3 py-3 border-1 rounded-3">
                                                                        <input type="checkbox" name=""
                                                                            class="me-2" id="collect">
                                                                        <label for="collect" class="fw-semibold ">
                                                                            <h6 class="fw-semibold mb-1">
                                                                                Collect Payment on Booking
                                                                            </h6>
                                                                            <p class="mb-0">Select this option
                                                                                if you want to collect payment
                                                                                details or require payment as
                                                                                part of the booking process.</p>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="col-sm-5 col-md-4 py-3" id="divHide">
                                        <div class="bg-white px-3 py-3 border-1 rounded-3">

                                            <div class="d-flex justify-content-between align-items-center">
                                                <h2 class="fs-5">Customer</h2>
                                                <p id="reset" class="chng pointer lblue px-0 py-0">Change</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('img/user.png') }}" class="rounded-circle me-2"
                                                    alt="">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 me-2">John Haass</p>
                                                    <!-- <a href="#" class="text-decoration-none">Edit</a> -->
                                                </div>
                                            </div>
                                            <p class="fw-semibold my-2 text-capitalize">contact info</p>
                                            <div class="d-flex align-items-center my-2">
                                                <p class="fw-semibold me-2 mb-0 text-capitalize">Notes</p>
                                                <span class="round-box small rounded-circle">0</span>
                                            </div>
                                            <div class="d-flex align-items-center my-2">
                                                <p class="fw-semibold me-2 mb-0 text-capitalize">Notification
                                                    preferences
                                                </p>
                                                <span class="round-box small rounded-pill">email</span>
                                            </div>
                                        </div>
                                        <div class="bg-white mt-3 px-3 py-3 shadow-sm rounded-3">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13462.978630550959!2d74.49813781738284!3d32.479520816527135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eebf05050a257%3A0x65c6ed11df82a794!2sFabulous%20Technology%20Solutions!5e0!3m2!1sen!2s!4v1736932944604!5m2!1sen!2s"
                                                width="100%" class="w-100" height="180" style="border:0;"
                                                allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            <div
                                                class="d-flex border-bottom pb-3 justify-content-between align-items-center">
                                                <div>
                                                    <h2 class="fs-5 text-capitalize mb-0 mt-2">Service address</h2>
                                                    <p class="mb-0">Will be determinded when scheduled</p>
                                                </div>
                                                <!-- <a href="#" class="text-decoration-none">Edit</a> -->
                                            </div>
                                            <div
                                                class="d-flex border-bottom pb-3 justify-content-between align-items-center">
                                                <div class="mt-3">
                                                    <h2 class="fs-5 text-capitalize mb-0">Territory</h2>
                                                    <p class="mb-0">Treasure Coast</p>
                                                </div>
                                                <!-- <a href="#" class="text-decoration-none">Edit</a> -->
                                            </div>
                                            <div class="d-flex mt-3 align-items-center">
                                                <div class="switch me-3">
                                                    <input type="checkbox" class="switch-input" id="toggle4"
                                                        checked>
                                                    <label class="switch-slider" for="toggle4"></label>
                                                </div>
                                                <p class="mb-0">Enforce service area</p>
                                            </div>
                                            <p class="mb-0 mt-2">The customer will be able to book this estimate for
                                                any
                                                service
                                                address</p>
                                        </div>
                                        <div class="bg-white mt-3 px-3 py-3 shadow-sm rounded-3">
                                            <h2 class="fs-5 text-capitalize mb-0">Internal notes</h2>
                                            <textarea name="" rows="5" class="border-1 rounded-3 w-100" id=""></textarea>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
   @include('Templates.UserLogoutModule')
    <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Add New Customer</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Full Name</label>
                                    <input type="text" class="modal-input" placeholder="John Doe">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Phone</label>
                                    <input type="tel" class="modal-input" placeholder="12345678">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Email</label>
                                    <input type="email" class="modal-input" placeholder="awesomaa1@domain.com">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Address</label>
                                    <input type="text" class="modal-input"
                                        placeholder="123 Eve, Rookers Block Las Vegas">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Referal</label>
                                    <select name="" id="" class="modal-input">
                                        <option value="">How did you hear about us?</option>
                                    </select>
                                </div>
                                <div class="row justify-content-between mt-5">
                                    <div class="col-sm-4 col-6">
                                        <button
                                            class="red-bg py-2 px-2 w-100 text-white border-danger border-1 rounded-3">Cancel</button>
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <button type="submit"
                                            class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal modal-lg fade" id="serviceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Add Custom Service?</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="row">
                                    <div class="mt-3 col-lg-8">
                                        <label for="name" class="form-label fw-medium mb-0">Service Name</label>
                                        <input type="text" id="name" class="modal-input"
                                            placeholder="123 Eve, Rookers Block Las Vegas">
                                    </div>
                                    <div class="mt-3 col-lg-4">
                                        <label for="price" class="form-label fw-medium mb-0">Price</label>
                                        <input type="text" id="price" class="modal-input" placeholder="$0">
                                    </div>
                                    <div class="mt-3 col-lg-12">
                                        <label for="des" class="form-label fw-medium mb-0">Service
                                            Description</label>
                                        <textarea name="" rows="4" id="des" class="modal-input" placeholder="Description here"></textarea>
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <div class="mt-3 col-sm-3">
                                        <label for="" class="form-label fw-medium mb-0">Duration</label>
                                        <div class="d-flex align-items-center">
                                            <input type="number" class="modal-input" placeholder="1">
                                            <span class="ms-2">Hour</span>
                                        </div>
                                    </div>
                                    <div class="mt-3 col-sm-3">
                                        <div class="d-flex align-items-center">
                                            <input type="number" class="modal-input" placeholder="0">
                                            <span class="ms-2">Minutes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="mb-0">Used to determine how much time to allocate on the schedule for
                                        this
                                        service</p>
                                    <div class="row justify-content-between mt-5">
                                        <div class="col-sm-4 col-6">
                                            <button
                                                class="red-bg py-2 px-2 w-100 text-white border-danger border-1 rounded-3">Cancel</button>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <button type="submit"
                                                class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <div class="modal modal-lg fade" id="discountModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog max-400 modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Add Discount</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="mx-auto">
                                <div class="row">
                                    <div class="col-12 mt-3 ">
                                        <label for="" class="form-label fw-medium mb-0">Discount In</label>
                                        <div class="d-flex">
                                            <div class="d-flex me-4">
                                                <input type="radio" class="me-2" id="dollar" name="discount"
                                                    placeholder="123 Eve, Rookers Block Las Vegas">
                                                <label for="dollar" class="form-label fw-medium mb-0">$</label>
                                            </div>
                                            <div class="d-flex">
                                                <input type="radio" class="me-2" id="per" name="discount"
                                                    placeholder="123 Eve, Rookers Block Las Vegas">
                                                <label for="per" class="form-label fw-medium mb-0">%</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 col-12">
                                        <label for="dis" class="form-label fw-medium mb-0">Enter Discount</label>
                                        <input type="number" id="dis" class="modal-input" placeholder="">
                                    </div>

                                </div>

                                <div class="">
                                    <div class="row justify-content-between mt-5">
                                        <div class="col-sm-4 col-6">
                                            <button
                                                class="red-bg py-2 px-2 w-100 text-white border-danger border-1 rounded-3">Cancel</button>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <button type="submit"
                                                class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <div class="modal modal-lg fade" id="feeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog max-400 modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Add Fee</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 pb-5">You have not created any fee yet</p>
                </div>


            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalvalue" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="modalTitle">Add New Customer</h4>
                </div>
                <div class="modal-body pb-4" id="modalBody">
                    ...
                </div>
            </div>
        </div>
    </div>
    @include('Templates.Jslinks')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stepContents = document.querySelectorAll('.step-content');
            const nextBtn = document.getElementById('nextBtn');
            const cancelBtn = document.getElementById('cancelBtn');

            let currentStep = 0;

            function updateStep() {
                // Update step content visibility
                stepContents.forEach((content, index) => {
                    content.classList.toggle('active', index === currentStep);
                });

                // Update button text
                if (currentStep === stepContents.length - 1) {
                    nextBtn.textContent = 'Done';
                } else {
                    nextBtn.textContent = 'Next';
                }
            }

            nextBtn.addEventListener('click', () => {
                if (currentStep < stepContents.length - 1) {
                    currentStep++;
                    updateStep();
                } else {
                    alert('Form completed!');
                    currentStep = 0;
                    updateStep();
                }
            });

            cancelBtn.addEventListener('click', () => {
                currentStep = 0;
                updateStep();
            });

            updateStep();
        });
    </script>
    <script>
        document.querySelector('.custom-dropdown-toggle1').addEventListener('click', function() {
            const dropdownMenu = document.querySelector('.custom-dropdown-menu');
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', function(event) {
            const isClickInside = document.querySelector('.custom-dropdown').contains(event.target);
            if (!isClickInside) {
                document.querySelector('.custom-dropdown-menu').style.display = 'none';
            }
        });

        // Sample customer data
        const customers1 = [{
                title: 'Picture Hanging',
                description: 'Our experts will come to assess your needs and discuss solutions.',
                options: ['Option 1 for Picture Hanging', 'Option 2 for Picture Hanging']
            },
            {
                title: 'Drywall Repair',
                description: 'Our experts will come to assess your needs and discuss solutions.',
                options: ['Option 1 for Drywall Repair', 'Option 2 for Drywall Repair']
            },
            {
                title: 'Gutter Cleaning',
                description: 'Our experts will come to assess your needs and discuss solutions.',
                options: ['Option 1 for Gutter Cleaning', 'Option 2 for Gutter Cleaning']
            },
            {
                title: 'Curtain Rod Install',
                description: 'Our experts will come to assess your needs and discuss solutions.',
                options: ['Option 1 for Curtain Rod Install', 'Option 2 for Curtain Rod Install']
            },
            {
                title: 'Door Knob/ Handle Lock Install',
                description: 'Our experts will come to assess your needs and discuss solutions.',
                options: ['Option 1 for Door Knob', 'Option 2 for Door Knob']
            },
        ];

        const customerList1 = document.querySelector('.custom-customer-list');
        const dropdownToggle1 = document.querySelector('.custom-toggle-button');
        const modalTitle = document.querySelector('#modalTitle'); // Get the modal title element
        const modalBody = document.querySelector('#modalBody');
        const selectService = document.querySelector(
            '#selectService'); // Assuming there's a select input or div to display the selected service

        customers1.forEach(customer => {
            const li = document.createElement('li');
            li.className = 'custom-customer-list-item d-flex flex-column align-items-start';
            li.setAttribute('data-bs-toggle', 'modal'); // Add data-bs-toggle attribute
            li.setAttribute('data-bs-target', '#exampleModalvalue'); // Add data-bs-target attribute

            // Using h6 for the title and p for the description
            li.innerHTML =
                `<h6 class="mb-0">${customer.title}</h6><p class="mb-0 font-12">${customer.description}</p>`;

            li.addEventListener('click', function() {
                dropdownToggle1.textContent = customer
                    .title; // Update the dropdown button text with the customer title
                modalTitle.textContent = customer.title; // Update the modal title with the customer title
                modalBody.innerHTML = '';

                if (customer.options) {
                    customer.options.forEach(option => {
                        const optionElement = document.createElement('div');
                        optionElement.textContent = option;
                        optionElement.className = 'option-item';
                        modalBody.appendChild(optionElement);

                        // Add click event for selecting an option
                        optionElement.addEventListener('click', function() {
                            // Update the Select Service display with the selected option
                            selectService.textContent =
                                option; // Or use `selectService.value = option` if it's an actual select dropdown

                            // Close the modal after selecting an option
                            const modalElement = document.getElementById(
                                'exampleModalvalue');
                            const modal = bootstrap.Modal.getInstance(
                                modalElement); // Get the current modal instance
                            modal.hide(); // Close the modal
                        });
                    });
                } else {
                    modalBody.innerHTML = '<p>No options available for this customer.</p>';
                }

                document.querySelector('.custom-dropdown-menu').style.display =
                    'none'; // Close the dropdown menu
            });

            customerList1.appendChild(li);
        });
    </script>
    <script>
        $(document).ready(function() {
            const $assignBtn = $('#assign-btn');
            const $dropdownContent = $('#dropdown-content');
            const $select = $('#user-select');
            const $previewContainer = $('#preview-container');

            // Toggle dropdown on button click
            $assignBtn.on('click', function(e) {
                e.stopPropagation(); // Prevent event bubbling
                $dropdownContent.toggle();
            });

            // Hide dropdown when clicking outside
            $(document).on('click', function() {
                $dropdownContent.hide();
            });

            // Prevent dropdown from hiding when clicking inside
            $dropdownContent.on('click', function(e) {
                e.stopPropagation();
            });

            // Update preview on dropdown change
            $select.on('change', function() {
                $previewContainer.empty(); // Clear previous preview
                const selectedOptions = $(this).val(); // Get selected options

                // Generate preview for selected options
                if (selectedOptions) {
                    const previewText = selectedOptions
                        .map(value => $select.find(`option[value="${value}"]`).text())
                        .join(', '); // Join text with commas
                    $previewContainer.append(`<span class="preview-item">${previewText}</span>`);
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('dropdown-toggle-container').addEventListener('click', function() {
                const dropdownMenu = document.getElementById('dropdown-menu');
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });

            document.addEventListener('click', function(event) {
                const isClickInside = document.querySelector('.dropdown12').contains(event.target);
                if (!isClickInside) {
                    document.getElementById('dropdown-menu').style.display = 'none';
                }
            });
            const assetPath = "{{ asset('img/user.png') }}";
            const customers = [{
                    name: 'Customer 1',
                    img: assetPath
                },
                {
                    name: 'Customer 2',
                    img: assetPath
                },
                {
                    name: 'Customer 3',
                    img: assetPath
                },
                {
                    name: 'Customer 4',
                    img: assetPath
                },
                {
                    name: 'Customer 5',
                    img: assetPath
                },
            ];

            const customerList = document.getElementById('customer-list');
            const dropdownToggle = document.getElementById('dropdown-toggle-button');
            const searchInput = document.getElementById('search-input');
            const divHide = document.getElementById('divHide');
            const changeText = document.querySelector('.chng');

            function displayCustomers(filteredCustomers) {
                customerList.innerHTML = '';
                filteredCustomers.forEach(customer => {
                    const li = document.createElement('li');
                    li.className = 'customer-list-item';
                    li.innerHTML = `<img src="${customer.img}" alt="Customer image">${customer.name}`;
                    li.addEventListener('click', function() {
                        dropdownToggle.textContent = customer.name;
                        document.getElementById('dropdown-menu').style.display = 'none';
                        divHide.style.display = 'block';
                        console.log('Customer selected, #divHide is now displayed as block');
                    });
                    customerList.appendChild(li);
                });
            }

            displayCustomers(customers);

            searchInput.addEventListener('input', function() {
                const searchQuery = searchInput.value.toLowerCase();
                const filteredCustomers = customers.filter(customer =>
                    customer.name.toLowerCase().includes(searchQuery)
                );
                displayCustomers(filteredCustomers);
            });

            changeText.addEventListener('click', function() {
                divHide.style.display = divHide.style.display === 'block' ? 'none' : 'block';
                console.log('Toggled #divHide visibility');
                dropdownToggle.textContent = "Select Here";
            });
        });
    </script>
</body>

</html>
