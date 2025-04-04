<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Team Members details</title>
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
                                <h3 class="hding mb-0 dark-blue">Team</h3>
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
                                            Team Members details
                                        </h1>
                                        <p class="mb-0">Here's how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center">
                                        <div
                                            class="d-flex justify-content-between border me-lg-3 rounded-2 bg-white">
                                            <input type="search"
                                                class="border-0 tab-100 px-3 py-2 bg-transparent focus-none w-100"
                                                placeholder="Search Team Member">
                                            <span class="d-flex align-items-center bg-grey text-white">
                                                <i class="fas fa-search px-3 py-2 rounded-2"></i>
                                            </span>
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
                                <div class="reports border mt-3 bg-white rounded-4 px-3 py-3">
                                    <div class="table-responsive reports-tbl mt-3">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr class="table-space border-0"></tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <div class="d-flex align-items-center ">
                                                            <img src="{{ asset('img/memberdeatil.svg') }}"
                                                                alt="customer1" class="me-2 rounded-0 size">
                                                            <div class=" ">
                                                                <p class="mb-0 font-12 font-md">Member Name</p>
                                                                <p class="mb-0 lblue font-md fs-6">Alexia Haass</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Role</p>
                                                            <p class="mb-0 lblue font-md fs-6">Manager</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-m">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Date</p>
                                                            <p class="mb-0 lblue font-md fs-6">Monday-September 2,204
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Expert</p>
                                                            <p class="mb-0 lblue font-md fs-6">Technician</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Experience of Years</p>
                                                            <p class="mb-0 lblue font-md fs-6">03</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <div class="d-flex align-items-center ">
                                                            <img src="{{ asset('img/memberdeatil.svg') }}"
                                                                alt="customer1" class="me-2 rounded-0 size">
                                                            <div class=" ">
                                                                <p class="mb-0 font-12 font-md">Member Name</p>
                                                                <p class="mb-0 lblue font-md fs-6">Alexia Haass</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Role</p>
                                                            <p class="mb-0 lblue font-md fs-6">Manager</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-m">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Date</p>
                                                            <p class="mb-0 lblue font-md fs-6">Monday-September 2,204
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Expert</p>
                                                            <p class="mb-0 lblue font-md fs-6">Technician</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Experience of Years</p>
                                                            <p class="mb-0 lblue font-md fs-6">03</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <div class="d-flex align-items-center ">
                                                            <img src="{{ asset('img/memberdeatil.svg') }}"
                                                                alt="customer1" class="me-2 rounded-0 size">
                                                            <div class=" ">
                                                                <p class="mb-0 font-12 font-md">Member Name</p>
                                                                <p class="mb-0 lblue font-md fs-6">Alexia Haass</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Role</p>
                                                            <p class="mb-0 lblue font-md fs-6">Manager</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-m">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Date</p>
                                                            <p class="mb-0 lblue font-md fs-6">Monday-September 2,204
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Expert</p>
                                                            <p class="mb-0 lblue font-md fs-6">Technician</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Experience of Years</p>
                                                            <p class="mb-0 lblue font-md fs-6">03</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <div class="d-flex align-items-center ">
                                                            <img src="{{ asset('img/memberdeatil.svg') }}"
                                                                alt="customer1" class="me-2 rounded-0 size">
                                                            <div class=" ">
                                                                <p class="mb-0 font-12 font-md">Member Name</p>
                                                                <p class="mb-0 lblue font-md fs-6">Alexia Haass</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Role</p>
                                                            <p class="mb-0 lblue font-md fs-6">Manager</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-m">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Date</p>
                                                            <p class="mb-0 lblue font-md fs-6">Monday-September 2,204
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Expert</p>
                                                            <p class="mb-0 lblue font-md fs-6">Technician</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-md">
                                                        <div>
                                                            <p class="mb-0 font-12 font-md">Experience of Years</p>
                                                            <p class="mb-0 lblue font-md fs-6">03</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
