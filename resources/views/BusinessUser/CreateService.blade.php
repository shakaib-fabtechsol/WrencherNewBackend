<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Services</title>
</head>


<body>
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')
            <div class="right">
                <div class="right-top px-4 input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding fs-4 mb-0">
                                    <span class="sky font-semi">Sales</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span>Services</span>
                                </h3>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="notifications.html"
                                    class="border border-1 rounded-circle bell-circle position-relative">
                                    <i class="fa-solid fa-bell text-secondary"></i>
                                    <div class="notifi-dot"></div>
                                </a>
                                <div bis_skin_checked="1">
                                    <div class="dropdown d-flex justify-content-between w-100 align-items-center"
                                        bis_skin_checked="1">
                                        <a class="mb-0 text-decoration-none d-flex align-items-center">
                                            <div class="ms-2 d-none d-sm-block me-2 me-sm-0" bis_skin_checked="1">
                                                <h6 class="text-center mb-0 l-h font-md text-dark">
                                                    John Smith
                                                </h6>
                                            </div>
                                            <div class="position-relative" bis_skin_checked="1">
                                                <img src="../img/user.png" alt="user" class="userimg me-0">
                                                <div class="dot-profile"></div>
                                            </div>
                                        </a>
                                        <button id="dropdownIcon" class="border-0 bg-transparent ms-2 px-0"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-caret-down fs-6"></i>
                                        </button>
                                        <ul class="dropdown-menu w-100">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa-solid fa-user me-2"></i>
                                                    View Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="login.html">
                                                    <i class="fa-solid fa-right-from-bracket me-2">
                                                    </i>
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars d-md-none pointer ms-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="bottom-main">
                        <div class="content">
                            <div class="container-fluid">
                                <div>
                                    <div>
                                        <h2 class="fs-4 fw-bold">
                                            Service Title
                                        </h2>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        <!-- Question 1 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingOne">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-wrench"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Service Details</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Name, description, duration, and price
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse pt-0 mt-0 collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <form action="">
                                                            <div
                                                                class="d-flex justify-content-between border-bottom pb-4">
                                                                <div class="sda1-lt">
                                                                    <div>
                                                                        <label for=""
                                                                            class="text-black form-label fw-medium small ps-2">
                                                                            Name
                                                                        </label>
                                                                        <input type="text" name="" id=""
                                                                            class="border bg-white w-100 py-2 rounded-3 small px-2"
                                                                            placeholder="Name here">
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <label for=""
                                                                            class="text-black form-label fw-medium small ps-2">
                                                                            Description
                                                                        </label>
                                                                        <textarea name="" id=""
                                                                            class="border bg-white w-100 py-2 rounded-3 small px-2"
                                                                            placeholder="Optional"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="sda1-rt">
                                                                    <img class="service-detail-img"
                                                                        src="../img/hero2.png" alt="">
                                                                    <button type="button" class="p-1 border-0">
                                                                        Delete Image
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="py-4 border-bottom">
                                                                <p class="fw-semibold text-black fs-5">Base Price and
                                                                    Duration</p>
                                                                <div>
                                                                    <div>
                                                                        <p for=""
                                                                            class="text-black form-label fw-medium small ps-2">
                                                                            Base duration
                                                                        </p>
                                                                        <div class="d-inline-block">
                                                                            <div
                                                                                class="d-flex align-items-center border bg-white rounded-3 small overflow-hidden">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 gap-1 border-end">
                                                                                    <input type="number" id="hours"
                                                                                        name="hours" min="0" max="23"
                                                                                        class="border-0 outline-none"
                                                                                        value="0">
                                                                                    <p class="mb-0">Hours</p>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 gap-1 border-end">
                                                                                    <input type="number" id="minutes"
                                                                                        name="minutes" min="0" max="59"
                                                                                        class="border-0 outline-none"
                                                                                        value="0">
                                                                                    <p class="mb-0">Minutes</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-3 mt-3">
                                                                        <div>
                                                                            <label for=""
                                                                                class="text-black form-label fw-medium small ps-2">
                                                                                Base Price
                                                                            </label>
                                                                            <div
                                                                                class="d-flex align-items-center gap-1 border bg-white w-100 py-2 rounded-3 small px-2">
                                                                                <p class="mb-0">
                                                                                    $
                                                                                </p>
                                                                                <input type="number" name="" id=""
                                                                                    class="border-0 outline-none"
                                                                                    value="0">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <label for=""
                                                                                class="text-black form-label fw-medium small ps-2">
                                                                                Minimum Price
                                                                            </label>
                                                                            <div
                                                                                class="d-flex align-items-center gap-1 border bg-white w-100 py-2 rounded-3 small px-2">
                                                                                <p class="mb-0">
                                                                                    $
                                                                                </p>
                                                                                <input type="number" name="" id=""
                                                                                    class="border-0 outline-none"
                                                                                    value="0">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3 d-flex align-items-center gap-2">
                                                                        <input type="checkbox" name="isfree"
                                                                            id="isfree">
                                                                        <label for="isfree">This service is free</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4 border-bottom">
                                                                <p class="fw-semibold text-black fs-5 mb-0">Price
                                                                    Display Options</p>
                                                                <p class="mb-0">Control how pricing should be displayed
                                                                    to customers.</p>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <input type="checkbox" name="priceDisplay"
                                                                        id="priceDisplay">
                                                                    <label for="priceDisplay">Don't show price when
                                                                        booking online</label>
                                                                </div>
                                                                <div class="mt-3 d-inline-block">
                                                                    <label for=""
                                                                        class="text-black form-label fw-medium small ps-2">
                                                                        Display prefix
                                                                    </label>
                                                                    <input type="text" name="" id=""
                                                                        class="border bg-white w-100 py-2 rounded-3 small px-2"
                                                                        placeholder="Estimated Price">
                                                                </div>
                                                            </div>
                                                            <div class="pt-4">
                                                                <p class="fw-semibold text-black fs-5 mb-0">Taxes</p>
                                                                <p class="mb-0">Apply a custom tax rate or fee to this
                                                                    service</p>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <input type="checkbox" name="Chargetax"
                                                                        id="Chargetax">
                                                                    <label for="Chargetax">Charge tax</label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 2 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingTwo">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-tags"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Service Modifiers</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Add selectable options that can be used to customize
                                                                this service's price and duration
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <div class="border-bottom pb-3">
                                                            <p class="mb-0">Service modifiers are groups of options that
                                                                can adjust this service's price and duration when
                                                                selected.</p>
                                                        </div>
                                                        <div class="my-3 d-flex flex-column gap-3">
                                                            <div class="border rounded-3">
                                                                <div
                                                                    class="border-bottom py-2 px-3 d-flex align-items-center justify-content-between">
                                                                    <p class="mb-0 fw-semibold text-black">Replace
                                                                        ceiling fan</p>
                                                                    <div
                                                                        class="d-flex align-items-center gap-2 fw-semibold">
                                                                        <button
                                                                            class="p-1 px-3 border bg-white rounded-2">
                                                                            Edit
                                                                        </button>
                                                                        <button
                                                                            class="p-1 px-3 border bg-white rounded-2">
                                                                            <i class="fa-solid fa-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="p-3">
                                                                    <div class="d-flex items-center gap-2 flex-wrap">
                                                                        <p
                                                                            class="bg-light py-1 px-3 rounded-2 mb-0 fw-medium">
                                                                            Replace ceiling fan</p>
                                                                        <p
                                                                            class="bg-light py-1 px-3 rounded-2 mb-0 fw-medium">
                                                                            Install new ceiling fan in new location</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border rounded-3">
                                                                <div
                                                                    class="border-bottom py-2 px-3 d-flex align-items-center justify-content-between">
                                                                    <p class="mb-0 fw-semibold text-black">What Size is
                                                                        the ceiling Fan?</p>
                                                                    <div
                                                                        class="d-flex align-items-center gap-2 fw-semibold">
                                                                        <button
                                                                            class="p-1 px-3 border bg-white rounded-2">
                                                                            Edit
                                                                        </button>
                                                                        <button
                                                                            class="p-1 px-3 border bg-white rounded-2">
                                                                            <i class="fa-solid fa-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="p-3">
                                                                    <div class="d-flex items-center gap-2 flex-wrap">
                                                                        <p
                                                                            class="bg-light py-1 px-3 rounded-2 mb-0 fw-medium">
                                                                            What Size is the ceiling Fan?</p>
                                                                        <p
                                                                            class="bg-light py-1 px-3 rounded-2 mb-0 fw-medium">
                                                                            54" and Above</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <button
                                                                class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                New Modifier Group
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 3 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingThree">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-list-ul"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Intake Questions</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Add custom form fields to collect additional info
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <div class="border-bottom pb-3">
                                                            <p class="mb-0">Intake questions allow you to collect extra
                                                                information from your customers during the booking
                                                                process using custom fields.</p>
                                                        </div>
                                                        <div class="my-3 d-flex flex-column gap-3">
                                                            <div class="border rounded-3">
                                                                <div
                                                                    class="py-2 px-3 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">How tall is the
                                                                            ceiling at the fan?</p>
                                                                        <p class="mb-0 text-12px fw-semibold">Multiple
                                                                            Choice</p>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center gap-2 fw-semibold">
                                                                        <button
                                                                            class="p-1 px-3 border bg-white rounded-2">
                                                                            Edit
                                                                        </button>
                                                                        <button
                                                                            class="p-1 px-3 border bg-white rounded-2">
                                                                            <i class="fa-solid fa-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <button
                                                                class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                New Intake Question
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 4 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingFour">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-regular fa-clock"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Availability</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Use your business's default hours, or show custom
                                                                timeslots for this service
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <form action="">
                                                            <div>
                                                                <p class="mb-0">You can override your default business
                                                                    hours and availability settings, and offer custom
                                                                    timeslots for this service using an availability
                                                                    template</p>
                                                                <div class="mt-3 d-flex flex-column gap-2">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <input type="radio" name="defaulttime"
                                                                            id="defaulttime">
                                                                        <label class="fw-medium" for="defaulttime">Use
                                                                            default time slots based on your business
                                                                            hours and availability settings</label>
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <input type="radio" name="customtime"
                                                                            id="customtime">
                                                                        <label class="fw-medium text-balck"
                                                                            for="customtime">Use a custom availability
                                                                            template</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 5 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingFive">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive" aria-expanded="false"
                                                    aria-controls="collapseFive">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-clipboard-check"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Team Requirements & Assignment Options
                                                            </p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Add required skills and customize how jobs should be
                                                                assigned for this service
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <p class="fs-5 fw-semibold text-black mb-0">Required skills</p>
                                                        <p class="mb-0">
                                                            Add required skill tags to make sure jobs booked for for
                                                            this service are assigned to the right team members.
                                                        </p>
                                                        <div class="border mt-3 rounded-3">
                                                            <div class="p-2 border-bottom">
                                                                <div
                                                                    class="p-2 d-flex flex-column gap-2 max-h-500px overflow-y-auto">
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill1">
                                                                        <label for="skill1">Appliance Repair</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill2">
                                                                        <label for="skill2">Assembly</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill3">
                                                                        <label for="skill3">Drywall repair</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill4">
                                                                        <label for="skill4">Electrical</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill5">
                                                                        <label for="skill5">Estimate</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill6">
                                                                        <label for="skill6">Gutter Cleaner</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill7">
                                                                        <label for="skill7">Handyman</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill8">
                                                                        <label for="skill8">Hurricane Shutters</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill9">
                                                                        <label for="skill9">Junk Removal</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill10">
                                                                        <label for="skill10">Mounting</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill11">
                                                                        <label for="skill11">Painting</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill12">
                                                                        <label for="skill12">Plumbing</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill13">
                                                                        <label for="skill13">Pressure Cleaning</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill14">
                                                                        <label for="skill14">screen repair</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill15">
                                                                        <label for="skill15">TV mounting</label>
                                                                    </div>
                                                                    <div class="d-flex items-center gap-2">
                                                                        <input type="checkbox" id="skill16">
                                                                        <label for="skill16">Window Repair</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-center align-items-center my-3">
                                                                <button
                                                                    class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                    Create new skill tag
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="py-3 border-bottom">
                                                            <p class="fs-5 fw-semibold text-black mb-0">Minimum crew
                                                                size</p>
                                                            <p class="fw-semibold mb-0">Select the number of service
                                                                providers needed to complete this type of service</p>
                                                            <div
                                                                class="border d-inline-flex rounded-3 overflow-hidden mt-3">
                                                                <div class="border-end">
                                                                    <input class="p-2 border-0" type="number" name=""
                                                                        id="" min="1" value="1">
                                                                </div>
                                                                <div>
                                                                    <button class="p-2 border-0">
                                                                        Service Provider
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="py-3">
                                                            <p class="fs-5 fw-semibold text-black mb-0">Assignment & job
                                                                offers</p>
                                                            <p class="fw-semibold mb-0">Control how providers are
                                                                assigned when this service is booked</p>
                                                            <div class="mt-3 d-flex flex-column gap-2 max-w-500px">
                                                                <div class="d-flex align-items-baseline gap-2">
                                                                    <input type="radio" name="assignment"
                                                                        id="assignment1">
                                                                    <label class="fw-medium" for="assignment1">
                                                                        <p class="mb-0 fw-semibold text-black">Manual
                                                                        </p>
                                                                        <p class="mb-0 small">Jobs for this service will
                                                                            not be automatically assigned or offered</p>
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex align-items-baseline gap-2">
                                                                    <input type="radio" name="assignment"
                                                                        id="assignment2">
                                                                    <label class="fw-medium text-balck"
                                                                        for="assignment2">
                                                                        <p class="mb-0 fw-semibold text-black">
                                                                            Automatically assign</p>
                                                                        <p class="mb-0 small">Assigns the required
                                                                            number of available providers who possess
                                                                            the necessary skill tags to jobs for this
                                                                            service</p>
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex align-items-baseline gap-2">
                                                                    <input type="radio" name="assignment"
                                                                        id="assignment3">
                                                                    <label class="fw-medium text-balck"
                                                                        for="assignment3">
                                                                        <p class="mb-0 fw-semibold text-black">
                                                                            Automatically offer</p>
                                                                        <p class="mb-0 small">Offers jobs for this
                                                                            service to all available providers who
                                                                            possess the necessary skill tags until the
                                                                            required number of providers needed accept
                                                                        </p>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 6 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingSix">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSix" aria-expanded="false"
                                                    aria-controls="collapseSix">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-arrows-rotate"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Recurring Options</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Give customers the option to book this service as a
                                                                recurring appointment
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <img class="max-w-200px" src="../img/feature-hero.png"
                                                            alt="img">
                                                        <p class="fs-5 fw-semibold text-black mb-0 mt-3">Recurring
                                                            options</p>
                                                        <p class="max-w-400px small">
                                                            Let customers schedule this service as a recurring booking
                                                            by adding recurring frequencies that customers will be able
                                                            to choose from. You can also offer discounts for certain
                                                            frequencies.
                                                        </p>
                                                        <div class="mt-3">
                                                            <button
                                                                class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                Create a Recurring Option
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 7 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingSeven">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSeven" aria-expanded="false"
                                                    aria-controls="collapseSeven">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="">
                                                            <span>
                                                                <i class="fas fa-arrow-up"></i>
                                                                <i class="fas fa-arrow-down"></i>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Price Adjustment Rules</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Further customize pricing when certain booking
                                                                conditions are met
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseSeven" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <p class="mb-0">Price adjustment rules allow you to dynamically
                                                            increase or decrease the service price for certain booking
                                                            conditions, like by appointment time, or service location.
                                                        </p>
                                                        <div class="mt-4 d-flex flex-column gap-3 container-fluid">
                                                            <div class="border rounded-3 p-3 row align-items-center">
                                                                <div class="col-md-7 order-2 order-md-1">
                                                                    <p class="mb-0 fw-semibold text-black">Timeslot
                                                                        price rules</p>
                                                                    <p class="mb-0 small mt-3">Adjust pricing based on
                                                                        the weekday and start time of the job.</p>
                                                                    <p class="mb-0 small mt-3">For example, charge more
                                                                        on your busiest days, or offer a discount for
                                                                        times you have trouble filling.</p>
                                                                    <div class="mt-3">
                                                                        <button
                                                                            class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                            Add Rule
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 order-1 order-md-2">
                                                                    <div
                                                                        class="d-flex justify-content-center justify-content-md-end">
                                                                        <img class="w-100 max-w-200px"
                                                                            src="../img/feature-hero.png" alt="img">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border rounded-3 p-3 row align-items-center">
                                                                <div class="col-md-7 order-2 order-md-1">
                                                                    <p class="mb-0 fw-semibold text-black">Booking lead
                                                                        time price rules</p>
                                                                    <p class="mb-0 small mt-3">Adjust pricing based on
                                                                        how far in advance the job is scheduled</p>
                                                                    <div class="mt-3">
                                                                        <button
                                                                            class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                            Add Rule
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 order-1 order-md-2">
                                                                    <div
                                                                        class="d-flex justify-content-center justify-content-md-end">
                                                                        <img class="w-100 max-w-200px"
                                                                            src="../img/feature-hero.png" alt="img">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border rounded-3 p-3 row align-items-center">
                                                                <div class="col-md-7 order-2 order-md-1">
                                                                    <p class="mb-0 fw-semibold text-black">Service
                                                                        territory price rules</p>
                                                                    <p class="mb-0 small mt-3">Adjust pricing based on
                                                                        which territory the service is booked in</p>
                                                                    <div class="mt-3">
                                                                        <button
                                                                            class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                            Add Rule
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 order-1 order-md-2">
                                                                    <div
                                                                        class="d-flex justify-content-center justify-content-md-end">
                                                                        <img class="w-100 max-w-200px"
                                                                            src="../img/feature-hero.png" alt="img">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 8 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingeight">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseeight" aria-expanded="false"
                                                    aria-controls="collapseeight">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-credit-card"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Payments</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Cash, Check, Credit card, Zelle
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseeight" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <div class="border-bottom pb-3">
                                                            <p class="fw-semibold text-black fs-5 mb-0">Require payment
                                                                method</p>
                                                            <p class="mb-0">Require customers provide a valid payment
                                                                method when booking this service online?</p>
                                                            <div class="d-flex align-items-center gap-3 mt-3">
                                                                <p class="mb-0">No</p>
                                                                <div class="checkbox-wrapper-6">
                                                                    <input class="tgl tgl-light" id="cb1-6"
                                                                        type="checkbox">
                                                                    <label class="tgl-btn" for="cb1-6"></label>
                                                                </div>
                                                                <p class="mb-0">Yes</p>
                                                            </div>
                                                        </div>
                                                        <div class="py-3 border-bottom">
                                                            <p class="fw-semibold text-black fs-5 mb-0">Payment methods
                                                            </p>
                                                            <p class="mb-0">Select which types of payment method(s)
                                                                customers can select from when booking</p>
                                                            <div class="border rounded-3 mt-3">
                                                                <div class="border-bottom py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <input type="checkbox" id="payment1" checked>
                                                                        <label
                                                                            class="w-100 d-flex align-items-center gap-3 justify-content-between"
                                                                            for="payment1">
                                                                            <p class="mb-0 fw-semibold text-black">
                                                                                Credit and debit card</p>
                                                                            <p class="mb-0 fs-3">
                                                                                <i class="fa-solid fa-credit-card"></i>
                                                                            </p>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <input type="checkbox" id="payment2" checked>
                                                                        <label
                                                                            class="w-100 d-flex align-items-center gap-3 justify-content-between"
                                                                            for="payment2">
                                                                            <p class="mb-0 fw-semibold text-black">Cash
                                                                            </p>
                                                                            <p class="mb-0 fs-3">
                                                                                <i class="fa-solid fa-money-bill"></i>
                                                                            </p>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <input type="checkbox" id="payment3" checked>
                                                                        <label
                                                                            class="w-100 d-flex align-items-center gap-3 justify-content-between"
                                                                            for="payment3">
                                                                            <p class="mb-0 fw-semibold text-black">Check
                                                                            </p>
                                                                            <p class="mb-0 fs-3">
                                                                                <i class="fa-solid fa-money-check"></i>
                                                                            </p>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <input type="checkbox" id="payment4" checked>
                                                                        <label
                                                                            class="w-100 d-flex align-items-center gap-3 justify-content-between"
                                                                            for="payment4">
                                                                            <p class="mb-0 fw-semibold text-black">Zelle
                                                                            </p>
                                                                            <p class="mb-0 fs-3">
                                                                                <i class="fa-solid fa-wallet"></i>
                                                                            </p>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="Paymentterms"
                                                                    class="fw-semibold text-black fs-5 mb-0 form label">Payment
                                                                    terms</label>
                                                                <textarea
                                                                    class="border bg-white w-100 py-2 rounded-3 small px-2"
                                                                    name="Paymentterms"
                                                                    id="Paymentterms">Our cancellation policy requires a minimum 48-hour notice. Cancellations made within this timeframe will incur a $50 charge.</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 9 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingnine">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsenine" aria-expanded="false"
                                                    aria-controls="collapsenine">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-list-ul"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">How it Works, FAQ, Testimonials, &
                                                                Highlights</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Showcase attributes about this service or your business
                                                                when customers book online
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapsenine" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <p class="mb-0">
                                                            Highlight the features of this service or your business,
                                                            answer common questions customers might have, and showcase
                                                            reviews form other customers.
                                                        </p>
                                                        <div class="mt-4 d-flex flex-column gap-3">
                                                            <div class="container-fluid">
                                                                <div
                                                                    class="border rounded-3 p-3 row align-items-center">
                                                                    <div class="col-md-7 order-2 order-md-1">
                                                                        <p class="mb-0 fw-semibold text-black">
                                                                            Frequently asked questions</p>
                                                                        <p class="mb-0 small max-w-300px">Add questions
                                                                            and answers customers might have about this
                                                                            service.</p>
                                                                        <div class="mt-3">
                                                                            <button
                                                                                class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                                Add
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 order-1 order-md-2">
                                                                        <div
                                                                            class="d-flex justify-content-center justify-content-md-end">
                                                                            <img class="w-100 max-w-250px"
                                                                                src="../img/feature-hero.png" alt="img">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border rounded-3">
                                                                <div class="border-bottom py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div>
                                                                            <p class="fw-semibold text-black mb-0">How
                                                                                it works</p>
                                                                            <p class="mb-0 small">Walk customers through
                                                                                how this service works, including what
                                                                                happens next after booking.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="list-circle">1</div>
                                                                        <p class="mb-0 fw-semibold text-black">Book
                                                                            online</p>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="list-circle">2</div>
                                                                        <p class="mb-0 fw-semibold text-black">Schedule
                                                                            a time/date</p>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="list-circle">3</div>
                                                                        <p class="mb-0 fw-semibold text-black">Work with
                                                                            technician on ideal location</p>
                                                                    </div>
                                                                </div>
                                                                <div class="py-2 px-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="list-circle">4</div>
                                                                        <p class="mb-0 fw-semibold text-black">Sit back
                                                                            and relax</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container-fluid">
                                                                <div
                                                                    class="border rounded-3 p-3 row align-items-center">
                                                                    <div class="col-md-7 order-2 order-md-1">
                                                                        <p class="mb-0 fw-semibold text-black">
                                                                            Bulletpoints</p>
                                                                        <p class="mb-0 small max-w-300px">Emphasize
                                                                            important features of this service or your
                                                                            business to customers.</p>
                                                                        <div class="mt-3">
                                                                            <button
                                                                                class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                                Add
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 order-1 order-md-2">
                                                                        <div
                                                                            class="d-flex justify-content-center justify-content-md-end">
                                                                            <img class="w-100 max-w-250px"
                                                                                src="../img/feature-hero.png" alt="img">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container-fluid">
                                                                <div
                                                                    class="border rounded-3 p-3 row align-items-center">
                                                                    <div class="col-md-7 order-2 order-md-1">
                                                                        <p class="mb-0 fw-semibold text-black">
                                                                            Testimonials</p>
                                                                        <p class="mb-0 small max-w-300px">Showcase
                                                                            reviews and testimonials from customers to
                                                                            add social proof to your service.</p>
                                                                        <div class="mt-3">
                                                                            <button
                                                                                class="py-2 px-3 bg-white rounded-3 border fw-medium">
                                                                                Add
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 order-1 order-md-2">
                                                                        <div
                                                                            class="d-flex justify-content-center justify-content-md-end">
                                                                            <img class="w-100 max-w-250px"
                                                                                src="../img/feature-hero.png" alt="img">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 10 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingten">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseten" aria-expanded="false"
                                                    aria-controls="collapseten">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-clipboard-list"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Booking Page</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Visible on booking page Electrical Default confirmation
                                                                message
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseten" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingten" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div class="pb-3 border-bottom">
                                                        <p class="mb-0 fw-semibold text-black">
                                                            Visibility
                                                        </p>
                                                        <p class="mb-0 small">
                                                            If you hide this service from your booking page, customers
                                                            will only be able to book it if you link directly to it or
                                                            embed it
                                                        </p>
                                                        <div class="mt-3">
                                                            <div class="d-flex flex-column gap-2">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <input type="radio" name="visibility"
                                                                        id="visibility1">
                                                                    <label for="visibility1"
                                                                        class="fw-medium text-black">Show service on
                                                                        booking page</label>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <input type="radio" name="visibility"
                                                                        id="visibility2">
                                                                    <label for="visibility2"
                                                                        class="fw-medium text-black">Hide service on
                                                                        booking page</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="py-3 border-bottom">
                                                        <p class="mb-0 fw-semibold text-black">
                                                            Category
                                                        </p>
                                                        <p class="mb-0 small">
                                                            Select which category this service should be listed under
                                                        </p>
                                                        <div class="mt-3">
                                                            <select
                                                                class="border bg-white w-100 py-2 rounded-3 small px-2 max-w-400px"
                                                                name="" id="">
                                                                <option value="">Electrical</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="pt-3">
                                                        <p class="mb-0 fw-semibold text-black">
                                                            Confirmation Page
                                                        </p>
                                                        <p class="mb-0 small">
                                                            Customize what should happen after a customer books this
                                                            service from your booking page
                                                        </p>
                                                        <div class="mt-3">
                                                            <div class="d-flex flex-column gap-2">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <input type="radio" name="Confirmation"
                                                                        id="Confirmation1">
                                                                    <label for="Confirmation1"
                                                                        class="fw-medium text-black">Display default
                                                                        confirmation message</label>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <input type="radio" name="Confirmation"
                                                                        id="Confirmation2">
                                                                    <label for="Confirmation2"
                                                                        class="fw-medium text-black">Display custom
                                                                        confirmation message</label>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <input type="radio" name="Confirmation"
                                                                        id="Confirmation3">
                                                                    <label for="Confirmation3"
                                                                        class="fw-medium text-black">Redirect to
                                                                        external site</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 11 -->
                                        <div
                                            class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                                            <h2 class="accordion-header rounded-4 border-0 py-0" id="headingeleven">
                                                <button
                                                    class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseeleven" aria-expanded="false"
                                                    aria-controls="collapseeleven">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-3">
                                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                        </div>
                                                        <div>
                                                            <p class="fs-5 mb-0">Booking Link & Widgets</p>
                                                            <p class="text-secondary small fw-medium mb-0">
                                                                Customers can book this service from your booking page.
                                                                You can also link directly to this service or embed it
                                                                inside a widget
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseeleven" class="accordion-collapse pt-0 mt-0 collapse"
                                                aria-labelledby="headingeleven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body pt-0 mt-0 text-secondary">
                                                    <div>
                                                        <div>
                                                            <p class="fw-semibold text-black mb-0">
                                                                Direct link to book this service
                                                            </p>
                                                            <p class="small mb-0">
                                                                You can copy and paste this link to share this service's
                                                                booking form with your customers.
                                                            </p>
                                                        </div>
                                                        <div class="mt-3 d-flex align-items-center gap-3">
                                                            <div
                                                                class="d-flex align-items-center border rounded-3 overflow-hidden">
                                                                <input type="text"
                                                                    class="border bg-white w-100 py-2 border-0 small px-3"
                                                                    value="https://www.example.com/bookings/1234567890"
                                                                    readonly>
                                                                <button
                                                                    class="py-2 px-3 bg-white border-0 border-start fw-medium">
                                                                    Copy
                                                                </button>
                                                            </div>
                                                            <a class="py-2 px-3 bg-white border fw-medium rounded-3 d-flex align-items-center gap-2 text-black text-decoration-none"
                                                                href="#">
                                                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                <span>View</span>
                                                            </a>
                                                        </div>
                                                        <div class="mt-3">
                                                            <p class="fw-semibold text-black mb-0">
                                                                Embed this service
                                                            </p>
                                                            <p class="small mb-0">
                                                                Embed the booking page for this service on your website.
                                                                Choose from four different embed widgets.
                                                            </p>
                                                        </div>
                                                        <div class="mt-3">
                                                            <button
                                                                class="py-2 px-3 bg-white border fw-medium rounded-3 d-flex align-items-center gap-2 text-black"
                                                                href="#">
                                                                <i class="fa-solid fa-code"></i>
                                                                <span>Embed Service</span>
                                                            </button>
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
</body>

</html>