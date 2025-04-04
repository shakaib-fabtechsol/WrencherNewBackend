<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Appliance</title>
</head>

<body>
    <section>
        <div class="main">
            {{-- side Bar --}}
            @include('Templates.BusinessUserSideBar')
            {{-- side Bar --}}
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <!-- <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Schedule</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Jobs</span>
                                </h3> -->
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
                                <div class="d-xl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 font-bold">
                                            Appliance repair for Lucas Hood
                                        </h1>
                                        <p class="mb-0">Here's how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center">
                                        <div
                                            class="d-flex justify-content-between me-lg-3 border-1 rounded-2 bg-white">
                                            <input type="search"
                                                class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                placeholder="Search Job">
                                            <span class="d-flex align-items-center bg-grey text-white">
                                                <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <select
                                                class="rounded-2 bg-sky text-white border-0 focus-none px-3 py-2 mbl-100 mt-3 mt-lg-0">
                                                <option value="" selected disabled hidden>Mark As Enroute
                                                </option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-4 mt-3 rounded-3">
                                    <div class="row">
                                        <div class="col-xxl-8">
                                            <div class="schedule-angle d-flex flex-wrap">
                                                <a href="#" class="text-decoration-none">
                                                    <div class="schedule-content d-flex align-items-center mb-2">
                                                        <div
                                                            class="schedule-icon d-flex align-items-center bg-dgrey rounded-5 px-3 py-2">
                                                            <i class="fa-regular fa-clock me-2 dgrey f-16"></i>
                                                            <p class="mb-0 dgrey f-16">Scheduled</p>
                                                        </div>
                                                        <i class="fa-solid fa-angle-right mx-3 dgrey"></i>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-decoration-none">
                                                    <div class="schedule-content d-flex align-items-center mb-2">
                                                        <div
                                                            class="schedule-icon d-flex align-items-center bg-dgrey rounded-5 px-3 py-2">
                                                            <i class="fa-solid fa-arrow-right me-2 dgrey f-16"></i>
                                                            <p class="mb-0 dgrey f-16">En Route</p>
                                                        </div>
                                                        <i class="fa-solid fa-angle-right mx-3 dgrey"></i>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-decoration-none">
                                                    <div class="schedule-content d-flex align-items-center mb-2">
                                                        <div
                                                            class="schedule-icon d-flex align-items-center bg-dgrey rounded-5 px-3 py-2">
                                                            <i class="fa-solid fa-play me-2 dgrey f-16"></i>
                                                            <p class="mb-0 dgrey f-16">Started</p>
                                                        </div>
                                                        <i class="fa-solid fa-angle-right mx-3 dgrey"></i>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-decoration-none">
                                                    <div class="schedule-content d-flex align-items-center mb-2">
                                                        <div
                                                            class="schedule-icon d-flex align-items-center bg-dgrey rounded-5 px-3 py-2">
                                                            <i class="fa-solid fa-check me-2 dgrey f-16"></i>
                                                            <p class="mb-0 dgrey f-16">Completed</p>
                                                        </div>
                                                        <i class="fa-solid fa-angle-right mx-3 dgrey"></i>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-decoration-none">
                                                    <div class="schedule-content d-flex align-items-center mb-2">
                                                        <div
                                                            class="schedule-icon d-flex align-items-center bg-dgrey rounded-5 px-3 py-2">
                                                            <i class="fa-regular fa-credit-card me-2 dgrey f-16"></i>
                                                            <p class="mb-0 dgrey f-16">Paid</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xxl-4 d-flex justify-content-md-end justify-content-start align-items-center mt-md-0 mt-3 delete-invoice-btns">
                                            <button type="button"
                                                class="border-0 py-2 px-3 rounded-2 bg-sky text-white me-2 deletejob-btn">Delete
                                                Job
                                                Details</button>
                                            <button type="button"
                                                class="border-0 py-2 px-3 rounded-2 bg-sky text-white generateinvoice-btn"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">Generate
                                                Invoice</button>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-xxl-6 mb-2">
                                            <div>
                                                <div class="heading3 bg-skybblue px-3 py-2 rounded-3">
                                                    <h3>Job Information</h3>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-xl-6">
                                                        <p class="mb-0 h-100"><iframe class="rounded-3 fram"
                                                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13513.106663324086!2d74.51349063588144!3d32.459974707011774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1725364268956!5m2!1sen!2s"
                                                                allowfullscreen="" loading="lazy"
                                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </p>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="row mb-2 border-btm p-2">
                                                            <div class="col-xxl-6">
                                                                <p class="mb-0 skyyblue font-12">Job Location</p>
                                                                <div class="location-icon d-flex align-items-center">
                                                                    <div class="loc-icon me-2">
                                                                        <a href="#"><img
                                                                                src="{{ asset('img/locatin pic.svg') }}"
                                                                                alt="pic" class="img-size"></a>
                                                                    </div>
                                                                    <div class="loc-content">
                                                                        <p class="mb-0 font-12 font-semi">2345 Lantern
                                                                            Bay
                                                                            Dr
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 font-12">Jupiter, Fl 3456, USA</p>
                                                            </div>
                                                            <div
                                                                class="col-xxl-6 d-flex flex-column align-items-end mt-2">
                                                                <div class="loc-btn1 mb-2">
                                                                    <button
                                                                        class="d-flex align-items-center justify-content-center btn1-cstm bg-white">
                                                                        <div class="btn1-icon">
                                                                            <img src="{{ asset('img/message pic.svg') }}"
                                                                                alt="pic"
                                                                                class="img-size me-1 skyyblue">
                                                                        </div>
                                                                        <div class="btn1-text">
                                                                            <p class="mb-0 font-12 skyyblue">Show
                                                                                Directions
                                                                            </p>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <div class="loc-btn2">
                                                                    <button
                                                                        class="d-flex align-items-center justify-content-center btn1-cstm border-0 bg-skyyblue text-white">
                                                                        <div class="btn1-icon">
                                                                            <img src="{{ asset('img/edit pic.svg') }}"
                                                                                alt="pic"
                                                                                class="img-size me-1 mb-1">
                                                                        </div>
                                                                        <div class="btn1-text">
                                                                            <p class="mb-0 font-12">Edit Address</p>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row border-btm p-2">
                                                            <div class="col-xxl-6">
                                                                <p class="mb-0 skyyblue font-12">Job Time & Date</p>
                                                                <div class="location-icon d-flex align-items-center">
                                                                    <div class="loc-icon me-2">
                                                                        <a href="#"><img
                                                                                src="{{ asset('img/calender pic.svg') }}"
                                                                                alt="pic" class="img-size"></a>
                                                                    </div>
                                                                    <div class="loc-content">
                                                                        <p class="mb-0 font-12 font-semi">09:00 AM
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 font-12">Wednesday , 09 may 2024</p>
                                                            </div>
                                                            <div
                                                                class="col-xxl-6 d-flex flex-column align-items-end mt-2">
                                                                <div class="loc-btn1 mb-2">
                                                                    <button
                                                                        class="d-flex align-items-center justify-content-center btn2-cstm">
                                                                        <div class="btn1-icon">
                                                                            <img src="{{ asset('img/redcross.svg') }}"
                                                                                alt="pic" class="img-size me-1">
                                                                        </div>
                                                                        <div class="btn1-text">
                                                                            <p class="mb-0 font-12">Cancel</p>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <div class="loc-btn2">
                                                                    <button
                                                                        class="d-flex align-items-center justify-content-center btn1-cstm border-0 bg-skyyblue text-white">
                                                                        <div class="btn1-icon">
                                                                            <img src="{{ asset('img/arrow-up.svg') }}"
                                                                                alt="pic"
                                                                                class="img-size me-2 mb-1">
                                                                        </div>
                                                                        <div class="btn1-text">
                                                                            <p class="mb-0 font-12">Reschedule</p>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xxl-6 mt-2">
                                                                <p class="mb-0 skyyblue font-12">Job Details</p>
                                                                <div class="location-icon d-flex align-items-center">
                                                                    <div class="loc-icon me-2">
                                                                        <a href="#"><img
                                                                                src="{{ asset('img/preferences-pic.svg') }}"
                                                                                alt="pic" class="img-size"></a>
                                                                    </div>
                                                                    <div class="loc-content">
                                                                        <p class="mb-0 font-12 font-semi">Appliance
                                                                            Repair
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 font-12">Appliance Repair, 1 Hour</p>
                                                            </div>
                                                            <div
                                                                class="col-xxl-6 d-flex flex-column align-items-end mt-2">
                                                                <div class="loc-btn2 mt-4">
                                                                    <button
                                                                        class="d-flex align-items-center justify-content-center btn1-cstm border-0 bg-skyyblue text-white">
                                                                        <div class="btn1-icon">
                                                                            <img src="{{ asset('img/edit pic.svg') }}"
                                                                                alt="pic"
                                                                                class="img-size me-2 mb-1">
                                                                        </div>
                                                                        <div class="btn1-text">
                                                                            <p class="mb-0 font-12">Edit Details</p>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="heading3 bg-skybblue px-3 py-2 rounded-3">
                                                <h3>Team</h3>
                                            </div>
                                            <div class="row mt-2 p-2 border-btm">
                                                <div class="col-lg-6">
                                                    <div class="team-details1">
                                                        <p class="mb-0 skyyblue font-16">Job Requirement</p>
                                                        <div class="location-icon d-flex align-items-center">
                                                            <div class="loc-icon me-2">
                                                                <a href="#"><img
                                                                        src="{{ asset('img/worker-pic.svg') }}"
                                                                        alt="pic" class="img-size"></a>
                                                            </div>
                                                            <div class="loc-content">
                                                                <p class="mb-0 font-16 font-semi">Workers Needed
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 font-16">01</p>
                                                    </div>
                                                    <div class="team-details2">
                                                        <div class="location-icon d-flex align-items-center">
                                                            <div class="loc-icon me-2">
                                                                <a href="#"><img
                                                                        src="{{ asset('img/skill-level-pic.svg') }}"
                                                                        alt="pic" class="img-size"></a>
                                                            </div>
                                                            <div class="loc-content">
                                                                <p class="mb-0 font-16 font-semi">Skills Needed
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 font-16">01</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="team-btn d-flex justify-content-end">
                                                        <button
                                                            class="d-flex align-items-center justify-content-center btn1-cstm border-0 bg-skyyblue text-white">
                                                            <div class="btn1-icon">
                                                                <img src="{{ asset('img/edit pic.svg') }}"
                                                                    alt="pic" class="img-size me-1 mb-1">
                                                            </div>
                                                            <div class="btn1-text">
                                                                <p class="mb-0 font-12">Edit Address</p>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-6">
                                                    <div class="team-img-details">
                                                        <p class="mb-0 skyyblue font-16">Assigned</p>
                                                        <div class="img-detls-main d-flex align-items-center mt-2">
                                                            <div class="img-detls me-2">
                                                                <img src="{{ asset('img/team3.jpg.webp') }}"
                                                                    alt="pic" class="team-img">
                                                            </div>
                                                            <p class="mb-0 skyyblue font-semi me-2">Alexia Haass</p>
                                                            <p class="mb-0 dgrey font-12">Electrician ,FL</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="team-img-detls-btn d-flex justify-content-end">
                                                        <button type="button"
                                                            class="btn1-cstm border-0 bg-skyyblue text-white font-14">+
                                                            Assign More</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-xxl-6">
                                            <div class="heading3 bg-skybblue px-3 py-2 rounded-3">
                                                <h3>Customer</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-6">
                                                    <div class="border-btm">
                                                        <div class="row mt-3 py-1 px-1 h-100 ">
                                                            <div class="col-sm-6 h-100">
                                                                <div class="team-img-details h-100">
                                                                    <p class="mb-0 skyyblue font-12">Personal
                                                                        Information</p>
                                                                    <div
                                                                        class="img-detls-main d-flex align-items-center mt-2">
                                                                        <div class="img-detls me-2">
                                                                            <img src="{{ asset('img/team3.jpg.webp') }}"
                                                                                alt="pic" class="team-img">
                                                                        </div>
                                                                        <p class="mb-0 skyyblue font-semi me-2">
                                                                            Alexia
                                                                            Haass</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 h-100">
                                                                <div
                                                                    class="team-btn d-flex justify-content-end mt-sm-0 mt-2">
                                                                    <button
                                                                        class="d-flex align-items-center justify-content-center btn1-cstm border-0 bg-skyyblue text-white">
                                                                        <div class="btn1-icon">
                                                                            <img src="{{ asset('img/edit pic.svg') }}"
                                                                                alt="pic"
                                                                                class="img-size me-1 mb-1">
                                                                        </div>
                                                                        <div class="btn1-text">
                                                                            <p class="mb-0 font-12">Edit Details</p>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6">
                                                    <div class=" border-btm">
                                                        <div class="row mt-3 p-1 h-100">
                                                            <div class="col-sm-6 h-100">
                                                                <div class="team-img-details h-100">
                                                                    <p class="mb-0 skyyblue font-12">Billing Address
                                                                    </p>
                                                                    <div
                                                                        class="img-detls-main d-flex align-items-center mt-2">
                                                                        <div class="img-detls me-2">
                                                                            <img src="{{ asset('img/billing-circle.svg') }}"
                                                                                alt="pic" class="mb-1">
                                                                        </div>
                                                                        <p class="mb-0 skyyblue font-semi me-2 ">
                                                                            Alexia
                                                                            Haass</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 h-100">
                                                                <div
                                                                    class="team-btn d-flex justify-content-end mt-sm-0 mt-2">
                                                                    <button
                                                                        class="d-flex align-items-center justify-content-center btn1-cstm border-0 bg-skyyblue text-white">
                                                                        <div class="btn1-icon">
                                                                            <img src="{{ asset('img/edit pic.svg') }}"
                                                                                alt="pic"
                                                                                class="img-size me-1 mb-1">
                                                                        </div>
                                                                        <div class="btn1-text">
                                                                            <p class="mb-0 font-12">Edit Details</p>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <div class="call-detail-main d-flex align-items-center mb-3">
                                                        <div class="call me-2">
                                                            <img src="{{ asset('img/call-pic.svg') }}" alt="pic"
                                                                class="img-size">
                                                        </div>
                                                        <p class="mb-0">Phone Number</p>
                                                    </div>
                                                    <div class="call-detail-main d-flex align-items-center">
                                                        <div class="call me-2">
                                                            <img src="{{ asset('img/email-pic.svg') }}"
                                                                alt="pic" class="img-size">
                                                        </div>
                                                        <p class="mb-0">User@Domain.com</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-sm-0 mt-2">
                                                    <p class="mb-3 skyyblue font-12">Expected Payment Method</p>
                                                    <div class="call-detail-main d-flex align-items-center">
                                                        <div class="call me-2">
                                                            <img src="{{ asset('img/card-pic.png') }}" alt="pic"
                                                                class="img-size">
                                                        </div>
                                                        <p class="mb-0 font-12">No Payment Method on File</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="team-img-detls-btn d-flex justify-content-end mt-3">
                                                        <button type="button"
                                                            class="border-0 bg-skyyblue text-white font-14 px-3 py-2 rounded-3 Charge-later-btn">+
                                                            Add a Card To Charge Later</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 mt-3 mt-xxl-0">
                                            <div class="heading3 bg-skybblue px-3 py-2 rounded-3">
                                                <h3>Notes</h3>
                                            </div>
                                            <div class="notes-para mt-4 mb-3">
                                                <p class="mb-0 skyyblue font-12">PINNED</p>
                                            </div>
                                            <div class="notes-property bg-elblue p-2 rounded-3 mb-5">
                                                <h5>Sending Properly</h5>
                                                <p class="mb-0 font-12">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Ducimus, numquam aperiam minima sapiente hic
                                                    accusantium quos explicabo quam dolorem animi ea voluptatibus,
                                                    quisquam accusamus, laborum consectetur recusandae perspiciatis
                                                    deleniti suscipit.</p>
                                                <p class="mb-0 font-12">Feb 8, 2021</p>
                                            </div>
                                            <div
                                                class="notes-rdaio-btn d-flex justify-content-between align-items-center">
                                                <div class="notes-content">
                                                    <p class="mb-0 skyyblue font-12">Offer Job to Service Providers
                                                    </p>
                                                    <p class="mb-0 font-12">Allows qualified, available providers to
                                                        see & claim this job <a href="">Learn More</a></p>
                                                </div>
                                                <div class="notes-btn">
                                                    <div class="switch">
                                                        <input type="checkbox" class="switch-input" id="toggle">
                                                        <label class="switch-slider" for="toggle"></label>
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

        </div>
        </div>
    </section>

    <div class="modal modal-lg  fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div class="text-center w-100" id="exampleModalLabel">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <h3>Invoice</h3>
                            </div>
                            <div class="ms-2">
                                <p class="mb-0 font-12 invoiced-bg bg-lgrey p-2 rounded-3">Draft</p>
                            </div>
                        </div>
                        <p class="mb-0">Due Jun 11, 2024</p>
                    </div>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-wrap justify-content-end">
                        <div class="mb-3">
                            <form>
                                <select class="bg-sky form-select py-2 text-white shadow-none">
                                    <option value="" selected disabled hidden>Add Payment</option>
                                    <option value="">Payment 1</option>
                                    <option value="">Payment 2</option>
                                </select>
                            </form>
                        </div>
                        <div class="ms-3 mb-3">
                            <a href="#" class="bg-lgrey py-2 px-3 rounded-3 d-block">
                                <img src="{{ asset('img/msg.png') }}" class="image-fluid img">
                            </a>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#" class="bg-lgrey py-2 px-3 rounded-3 d-block">
                                <img src="{{ asset('img/print.png') }}" class="image-fluid img">
                            </a>
                        </div>
                        <div class="model-size ms-3 mb-3">
                            <a href="#" class="bg-lgrey py-2 px-3 rounded-3 d-block">
                                <i class="fa-solid fa-ellipsis text-dark"></i>
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
                            <div class="size ms-2">
                                <a href="#"><img src="{{ asset('img/invoicep.svg') }}"
                                        class="image-fluid img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-6 mt-3">
                            <a href="#" class="text-decoration-none">
                                <p class="mb-0 invoice-amount font-md">+ Add line Item</p>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <div class="me-5">
                                <div class="d-flex">
                                    <p class="mb-0 w-100">Sub Total</p>
                                    <p class="mb-0">$80.00</p>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0 invoice-amount skyyblue w-100">Discount</p>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0 invoice-amount skyyblue w-100">Add Tax</p>
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
                                    <p class="mb-0 fw-semibold w-100">Total Due</p>
                                    <p class="mb-0 fw-semibold">$80.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')
</body>

</html>
