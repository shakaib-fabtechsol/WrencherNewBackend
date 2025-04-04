<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Oppurtunities</title>
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
                                <h3 class="hding mb-0 dark-blue">Opportunities </h3>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.BusinessUserNavBar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="content ">
                        <div class="container-fluid h-100">
                            <!-- <div class="d-xxl-flex align-items-center justify-content-between">
                                <div>
                                    <h1 class="fs-3 fw-semibold">
                                        Opportunities
                                    </h1>
                                </div>
                            </div> -->
                            <div class="bg-white p-3 rounded-3 nav-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Opportunities</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Pipelines</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Bulk Actions</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="0">
                                        <h2 class="fs-3 fw-semibold">Lead Management</h2>
                                        <div
                                            class="d-flex flex-wrap gap-4 justify-content-between align-items-center mt-4">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <div>
                                                    <select class="p-2 min-w-200px border rounded-3" name="filter"
                                                        id="filter">
                                                        <option value="">MAIN PIPELINE</option>
                                                        <option value="">MAIN PIPELINE</option>
                                                        <option value="">MAIN PIPELINE</option>
                                                        <option value="">MAIN PIPELINE</option>
                                                    </select>
                                                </div>
                                                <p class="bg-lblue blu mb-0 p-2 rounded-pill text-12px ms-auto">2
                                                    opportunities</p>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap align-items-center gap-2 ms-auto justify-content-end">
                                                <div class="d-flex">
                                                    <button class="border bg-white px-3 py-2 rounded-start-3"
                                                        for="typegrid">
                                                        <i class="bi bi-grid"></i>
                                                    </button>
                                                    <button class="border bg-white px-3 py-2 rounded-end-3"
                                                        for="typegrid">
                                                        <i class="bi bi-list-ul"></i>
                                                    </button>
                                                </div>
                                                <a class="import-btn" href="#"><i
                                                        class="fa-solid fa-arrow-down me-2"></i>Import</a>
                                                <a class="blue-btn py-2 px-3 rounded-3" href="#"><i
                                                        class="fa-solid fa-plus me-2"></i>Add opportunity</a>
                                            </div>
                                        </div>
                                        <div class="mt-3 d-flex align-items-center gap-2">
                                            <button
                                                class="border rounded-3 d-flex align-items-center gap-2 bg-white px-3 py-2"
                                                for="typegrid">
                                                <i class="bi bi-list-ul"></i>
                                                <span>All</span>
                                            </button>
                                            <button
                                                class="border rounded-3 d-flex align-items-center gap-2 bg-white px-3 py-2"
                                                for="typegrid">
                                                <i class="bi bi-plus-lg"></i>
                                                <span>List</span>
                                            </button>
                                        </div>
                                        <div
                                            class="d-flex flex-wrap gap-4 justify-content-between align-items-center mt-4 border-top pt-4">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <a href="#"
                                                    class="d-flex align-items-center bg-lblue text-decoration-none blu py-2 px-3 rounded-pill">
                                                    <i class="fa-solid fa-filter me-1"></i>
                                                    Advanced Filters
                                                </a>
                                                <a href="#"
                                                    class="d-flex align-items-center bg-lblue text-decoration-none blu py-2 px-3 rounded-pill">
                                                    <i class="fa-solid fa-sort me-1"></i>
                                                    Sort (1)
                                                </a>
                                            </div>
                                            <div class="ms-auto w-100 max-400">
                                                <label class="border p-2 w-100 rounded-3 d-flex align-items-center"
                                                    for="search">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                    <input class="border-0 w-100 px-2" type="search" name="search"
                                                        id="search" placeholder="Search Opportunities">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="overflow-x-auto scroll-y-hidden mt-4">
                                            <div class="row flex-nowrap">
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Lead in</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Information
                                                                        Requested
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Needs Estimate
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">1 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Needs Estimate
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate Sent
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate
                                                                        Approved</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Service
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">1 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Service
                                                                        Performed
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Denied/Not
                                                                        Qualified
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="table-responsive mt-3 h-100">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Leads</th>
                                                        <th>Full Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="lblue font-md">Alexia Haass</span>
                                                        </td>
                                                        <td>+21 090 909 9090</td>
                                                        <td>customer@gmail.com</td>
                                                        <td>locationdetailshere</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-pen.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-del.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="lblue font-md">Alexia Haass</span>
                                                        </td>
                                                        <td>+21 090 909 9090</td>
                                                        <td>customer@gmail.com</td>
                                                        <td>locationdetailshere</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-pen.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-del.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="lblue font-md">Alexia Haass</span>
                                                        </td>
                                                        <td>+21 090 909 9090</td>
                                                        <td>customer@gmail.com</td>
                                                        <td>locationdetailshere</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-pen.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-del.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="lblue font-md">Alexia Haass</span>
                                                        </td>
                                                        <td>+21 090 909 9090</td>
                                                        <td>customer@gmail.com</td>
                                                        <td>locationdetailshere</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-pen.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/team-del.svg')}}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                    class="me-2 cus-img rounded-circle">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="lblue font-md">Alexia Haass</span>
                                                        </td>
                                                        <td>+21 090 909 9090</td>
                                                        <td>customer@gmail.com</td>
                                                        <td>locationdetailshere</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-pen.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                                <div class="ms-2 team-size">
                                                                    <a href="#">
                                                                        <img src="{{ asset('img/team-del.svg') }}"
                                                                            class="image-fluid img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> -->
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab" tabindex="0">
                                        <h2 class="fs-3 fw-semibold">Lead Management</h2>
                                        <div class="overflow-x-auto scroll-y-hidden mt-4">
                                            <div class="row flex-nowrap">
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Lead in</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Information
                                                                        Requested
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Needs Estimate
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">1 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Needs Estimate
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate Sent
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate
                                                                        Approved</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Service
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">1 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Service
                                                                        Performed
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Denied/Not
                                                                        Qualified
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab" tabindex="0">
                                        <h2 class="fs-3 fw-semibold">Lead Management</h2>
                                        <div class="overflow-x-auto scroll-y-hidden mt-4">
                                            <div class="row flex-nowrap">
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Lead in</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Information
                                                                        Requested
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Needs Estimate
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">1 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Needs Estimate
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate Sent
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Estimate
                                                                        Approved</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Service
                                                                        Scheduled
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">1 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Service
                                                                        Performed
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 my-2">
                                                    <div class="card-toggler">
                                                        <div
                                                            class="client-card pointer shadow-none bg-lgrey p-3 rounded-3 client-border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="">
                                                                    <p class="mb-0 fw-medium fs-6 me-2">Denied/Not
                                                                        Qualified
                                                                    </p>
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="me-3 mb-0">0 oppurtunities</p>
                                                                        <p class="fw-semibold mb-0">$0.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toggle-content">
                                                            <div data-bs-target="#opportunityModal"
                                                                data-bs-toggle="modal"
                                                                class="accordian-shadow p-2 rounded-3 bg-white pointer">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <p class="fw-medium mb-0">
                                                                        Suzanne Langlais
                                                                    </p>
                                                                    <div>
                                                                        <img class="img-30px rounded-pill object-cover"
                                                                            src="{{ asset('img/team3.jpg.webp') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-4 gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Source:
                                                                    </p>
                                                                    <p class="mb-0 text-12px">Internal Lead In</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <p class="mb-0 text-12px fw-semibold">
                                                                        Opportunity
                                                                        Value
                                                                    </p>
                                                                    <p class="mb-0 text-12px">$ 0.00</p>
                                                                </div>
                                                                <div class="mt-3 d-flex align-items-center gap-2">
                                                                    <i class="fa-solid fa-phone text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-comment-dots text-secondary"></i>
                                                                    <i class="fa-solid fa-tag text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-file-lines text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-square-check text-secondary"></i>
                                                                    <i
                                                                        class="fa-regular fa-calendar-plus text-secondary"></i>
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
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    <div class="modal fade opportunityModal" id="opportunityModal" tabindex="-1"
        aria-labelledby="opportunityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="p-3">
                    <div class="border-bottom pb-2">
                        <div class="d-flex flex-wrap-reverse justify-content-between align-items-center">
                            <p class="mb-0 fw-semibold fs-4">Edit "Appliance Repair"</p>
                            <button class="bg-transparent border-0" data-bs-dismiss="modal">
                                <i class="fa-solid fa-x"></i>
                            </button>
                        </div>
                        <p class="mb-0 mt-2 text-secondary">
                            Add and edit opportunity details, tasks, notes and
                            appointments.
                        </p>
                    </div>
                    <div class="modal-row py-3">
                        <div class="modal-sidebar p-2">
                            <ul class="nav nav-pills flex-column" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="Opportunity-Details-tab"
                                        data-bs-toggle="pill" data-bs-target="#Opportunity-Details" type="button"
                                        role="tab" aria-controls="Opportunity-Details"
                                        aria-selected="true">Opportunity
                                        Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Appointment-tab" data-bs-toggle="pill"
                                        data-bs-target="#Appointment" type="button" role="tab"
                                        aria-controls="Appointment" aria-selected="false">Appointment</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Tasks-tab" data-bs-toggle="pill"
                                        data-bs-target="#Tasks" type="button" role="tab"
                                        aria-controls="Tasks" aria-selected="false">Tasks</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Notes-tab" data-bs-toggle="pill"
                                        data-bs-target="#Notes" type="button" role="tab"
                                        aria-controls="Notes" aria-selected="false">Notes</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Payments-tab" data-bs-toggle="pill"
                                        data-bs-target="#Payments" type="button" role="tab"
                                        aria-controls="Payments" aria-selected="false">Payments</button>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-tab-contant h-100">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="Opportunity-Details" role="tabpanel"
                                    aria-labelledby="Opportunity-Details-tab">
                                    <div>
                                        <form action="#">
                                            <div>
                                                <div class="d-flex align-items-center gap-2 border-bottom mt-3 pb-2">
                                                    <p class="fw-medium fs-5 mb-0">Contact details</p>
                                                    <i class="fa-regular fa-id-badge"></i>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="name">Primary
                                                                Contact Name</label>
                                                            <input class="form-control focus-none" type="text"
                                                                name="name" id="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="email">Primary
                                                                Email</label>
                                                            <input class="form-control focus-none" type="email"
                                                                name="email" id="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="Phone">Primary
                                                                Phone</label>
                                                            <input class="form-control focus-none" type="tel"
                                                                name="Phone" id="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="addcontact">Additional Contacts
                                                                (Max: 10)</label>
                                                            <select class="form-select focus-none" name="addcontact"
                                                                id="addcontact">
                                                                <option value="" hidden>Add additional contacts
                                                                </option>
                                                                <option value="">Contact 1</option>
                                                                <option value="">Contact 2</option>
                                                                <option value="">Contact 3</option>
                                                                <option value="">Contact 4</option>
                                                                <option value="">Contact 5</option>
                                                                <option value="">Contact 6</option>
                                                                <option value="">Contact 7</option>
                                                                <option value="">Contact 8</option>
                                                                <option value="">Contact 9</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom mt-3 pb-2">
                                                    <p class="fw-medium fs-5 mb-0">Opportunity details</p>
                                                </div>
                                                <div class="row">
                                                    <div class="mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="oppname">Primary
                                                                Contact
                                                                Name</label>
                                                            <input class="form-control focus-none" type="text"
                                                                name="oppname" id="oppname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="pipeline">Pipeline</label>
                                                            <select class="form-select focus-none" name="pipeline"
                                                                id="pipeline">
                                                                <option value="" hidden>Main Pipeline</option>
                                                                <option value="">Pipeline 1</option>
                                                                <option value="">Pipeline 2</option>
                                                                <option value="">Pipeline 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="Stage">Stage</label>
                                                            <select class="form-select focus-none" name="Stage"
                                                                id="Stage">
                                                                <option value="" hidden>Service scheduled
                                                                </option>
                                                                <option value="">In progress</option>
                                                                <option value="">Completed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="Status">Status</label>
                                                            <select class="form-select focus-none" name="Status"
                                                                id="Status">
                                                                <option value="" hidden>Open</option>
                                                                <option value="">Closed</option>
                                                                <option value="">End</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="oppvalue">Opportunity Value</label>
                                                            <input class="form-control focus-none" type="text"
                                                                name="oppvalue" id="oppvalue">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="Owner">Owner</label>
                                                            <select class="form-select focus-none" name="Owner"
                                                                id="Owner">
                                                                <option value="" hidden>Jake Zophres</option>
                                                                <option value="">Owner 1</option>
                                                                <option value="">Owner 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="Followers">Followers</label>
                                                            <select class="form-select focus-none" name="Followers"
                                                                id="Followers">
                                                                <option value="" hidden>Add Followers</option>
                                                                <option value="">Owner 1</option>
                                                                <option value="">Owner 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="BusinessName">Business Name</label>
                                                            <input class="form-control focus-none" type="text"
                                                                name="BusinessName" id="BusinessName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="OpportunitySource">Opportunity
                                                                Source</label>
                                                            <input class="form-control focus-none" type="text"
                                                                name="OpportunitySource" id="OpportunitySource">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div>
                                                            <label class="form-label fw-medium"
                                                                for="Tags">Tags</label>
                                                            <select class="form-select focus-none" name="Tags"
                                                                id="Tags">
                                                                <option value="" hidden>Tags</option>
                                                                <option value="">Tag 1</option>
                                                                <option value="">Tag 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex flex-wrap-reverse gap-2 justify-content-end align-items-center mt-4">
                                                    <button
                                                        class="bg-transparent w-100 w-sm-auto py-2 px-4 rounded-3 border"
                                                        type="button">
                                                        <i class="fa-regular fa-trash-can red"></i>
                                                    </button>
                                                    <button data-bs-dismiss="modal"
                                                        class="bg-transparent w-100 w-sm-auto py-2 px-3 rounded-3 border"
                                                        type="button">Cancel</button>
                                                    <button
                                                        class="blue-btn py-2 px-3 rounded-3 border w-100 w-sm-auto"
                                                        type="submit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Appointment" role="tabpanel"
                                    aria-labelledby="Appointment-tab">Appointment</div>
                                <div class="tab-pane fade" id="Tasks" role="tabpanel"
                                    aria-labelledby="Tasks-tab">Tasks
                                </div>
                                <div class="tab-pane fade" id="Notes" role="tabpanel"
                                    aria-labelledby="Notes-tab">Notes
                                </div>
                                <div class="tab-pane fade" id="Payments" role="tabpanel"
                                    aria-labelledby="Payments-tab">
                                    Payments
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Templates.Jslinks')
    <script>
        $(document).ready(function() {
            $(".toggle-content").hide();

            $(".card-toggler").click(function() {
                $(".toggle-content").not($(this).find(".toggle-content")).slideUp();
                $(this).find(".toggle-content").slideToggle();
            });
        });
    </script>
</body>

</html>
