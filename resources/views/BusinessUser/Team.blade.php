<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Team</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <!-- <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding mb-0 dark-blue">Team</h3>
                            </div> -->
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
                                            Team
                                        </h1>
                                        <p class="mb-0">Here's how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center">
                                        <div
                                            class="d-flex justify-content-between me-lg-3 border-1 rounded-2 bg-white">
                                            <input type="search"
                                                class="border-0 tab-100 px-3 py-2 bg-transparent focus-none"
                                                placeholder="Search Team Member">
                                            <span class="d-flex align-items-center bg-grey text-white">
                                                <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                            </span>
                                        </div>
                                        <div
                                            class="d-flex ps-3 mt-3 mt-lg-0 me-lg-3 align-items-center bg-white border-1 rounded-2">
                                            <label for="alltime"><label>
                                                    <select name="" id="alltime"
                                                        class="border-white tab-100 pe-3 py-2 grey focus-none  bg-transparent">
                                                        <option value="" selected disabled hidden>All Time Member
                                                        </option>
                                                        <option value="Memeber 1">Member 1</option>
                                                        <option value="Memeber 2">Member 2</option>
                                                    </select>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('BusinessUser.NewTeamMember') }}">
                                                <button type="button"
                                                    class="mbl-100 mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0">+
                                                    Add New Team Member</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="reports mt-3 border-1 bg-white rounded-4 px-3 py-3">
                                    <div class="main-tabb">
                                        <ul class="nav rounded-3 px-2 nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item px-2" role="presentation">
                                                <button class="nav-link py-2 px-1 active btn-fs-setting"
                                                    id="pills-active-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-active" type="button" role="tab"
                                                    aria-controls="pills-active" aria-selected="true">Active(20)
                                                </button>
                                            </li>
                                            <li class="nav-item px-2" role="presentation">
                                                <button class="nav-link py-2 px-1 btn-fs-setting" id="pills-invited-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-invited" type="button"
                                                    role="tab" aria-controls="pills-invited"
                                                    aria-selected="false">Invited
                                                    (0)</button>
                                            </li>
                                            <li class="nav-item px-2" role="presentation">
                                                <button class="nav-link py-2 px-1 btn-fs-setting"
                                                    id="pills-deactive-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-deactive" type="button" role="tab"
                                                    aria-controls="pills-deactive"
                                                    aria-selected="false">Deactivated(23)</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane  fade show active" id="pills-active" role="tabpanel"
                                            aria-labelledby="pills-active-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Team Members</th>
                                                            <th class="font-semi">Total Team Members</th>
                                                            <th class="font-semi">Role</th>
                                                            <th class="font-semi">Experience</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Expert</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="table-space border-0"></tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                <a href="{{ route('BusinessUser.TeamMemberDetail') }}"
                                                                    class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/customer1.png') }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                        <span class="lblue font-md">Alexia Haass</span>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="font-md">04</td>
                                                            <td class="font-md">Worker</td>
                                                            <td class="font-md">03</td>
                                                            <td class="font-md">Mon-12 Aug,2024</td>
                                                            <td class="font-md">Expert</td>
                                                            <td class="font-md">
                                                                <div class="d-flex">
                                                                    <div class="team-size">
                                                                        <a href="#"
                                                                            class="text-decoration-none">
                                                                            <img src="{{ asset('img/team-pen.svg') }}"
                                                                                class="image-fluid img">
                                                                        </a>
                                                                    </div>
                                                                    <div class="team-size ms-2">
                                                                        <a href="#"
                                                                            class="text-decoration-none">
                                                                            <img src="{{ asset('img/team-del.svg') }}"
                                                                                class="image-fluid img">
                                                                        </a>
                                                                    </div>
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
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-invited" role="tabpanel"
                                            aria-labelledby="pills-invited-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Team Members</th>
                                                            <th class="font-semi">Total Team Members</th>
                                                            <th class="font-semi">Role</th>
                                                            <th class="font-semi">Experience</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Expert</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="table-space border-0"></tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}"
                                                                        alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </td>
                                                            <td class="font-md">04</td>
                                                            <td class="font-md">Worker</td>
                                                            <td class="font-md">03</td>
                                                            <td class="font-md">Mon-12 Aug,2024</td>
                                                            <td class="font-md">Expert</td>
                                                            <td class="font-md">
                                                                <div class="d-flex">
                                                                    <div class="team-size">
                                                                        <a href="#"
                                                                            class="text-decoration-none">
                                                                            <img src="{{ asset('img/team-pen.svg') }}"
                                                                                class="image-fluid img">
                                                                        </a>
                                                                    </div>
                                                                    <div class="team-size ms-2">
                                                                        <a href="#"
                                                                            class="text-decoration-none">
                                                                            <img src="{{ asset('img/team-del.svg') }}"
                                                                                class="image-fluid img">
                                                                        </a>
                                                                    </div>
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
                                                            class="rounded-3 px-4 py-2 bg-transparent text-black">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue text-black">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-deactive" role="tabpanel"
                                            aria-labelledby="pills-deactive-tab" tabindex="0">
                                            <div class="table-responsive reports-tbl mt-3">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="align-middle">
                                                            <th class="font-semi">Team Members</th>
                                                            <th class="font-semi">Total Team Members</th>
                                                            <th class="font-semi">Role</th>
                                                            <th class="font-semi">Experience</th>
                                                            <th class="font-semi">Date</th>
                                                            <th class="font-semi">Expert</th>
                                                            <th class="font-semi">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="table-space border-0"></tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}"
                                                                        alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </td>
                                                            <td class="font-md">04</td>
                                                            <td class="font-md">Worker</td>
                                                            <td class="font-md">03</td>
                                                            <td class="font-md">Mon-12 Aug,2024</td>
                                                            <td class="font-md">Expert</td>
                                                            <td class="font-md">
                                                                <div class="d-flex">
                                                                    <div class="team-size">
                                                                        <a href="#"
                                                                            class="text-decoration-none">
                                                                            <img src="{{ asset('img/team-pen.svg') }}"
                                                                                class="image-fluid img">
                                                                        </a>
                                                                    </div>
                                                                    <div class="team-size ms-2">
                                                                        <a href="#"
                                                                            class="text-decoration-none">
                                                                            <img src="{{ asset('img/team-del.svg') }}"
                                                                                class="image-fluid img">
                                                                        </a>
                                                                    </div>
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
    </section>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')
</body>

</html>
