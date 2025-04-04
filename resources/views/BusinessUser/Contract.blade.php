<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Contracts</title>
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
                                    <span class="fs-6">Contracts</span> -->
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
                                    <h3 class="mb-0">Contracts</h3>
                                    <p class="mb-0 gre">Keep tabs on every part of your business with over 10 built-in
                                        reports to choose from.</p>
                                </div>
                                <div class="d-lg-flex justify-content-end align-items-center mt-xl-0 mt-2">
                                    <div
                                        class="d-flex ps-3 mt-3 mt-lg-0 me-lg-3 align-items-center bg-white border-1 rounded-2">
                                        <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                        <select name="" id="filter"
                                            class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                            <option value="" selected disabled hidden>Filter</option>
                                            <option value="">Filter by Date</option>
                                            <option value="">Filter by Price</option>
                                        </select>
                                    </div>
                                    <div class="d-lg-flex justify-content-end">
                                        <a href="{{ route('BusinessUser.AddNewContract') }}">
                                            <button type="button"
                                                class="mbl-100 shadow mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0">Create
                                                Contract</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="reports mt-3 border-1 bg-white rounded-4 px-3 py-3">
                                <div class="table-responsive reports-tbl mt-3 ">
                                    <table class="table">
                                        <thead>
                                            <tr class="align-middle">
                                                <th class="font-semi">Contract Number</th>
                                                <th class="font-semi">Start Date</th>
                                                <th class="font-semi">End Date</th>
                                                <th class="font-semi">Signature</th>
                                                <th class="font-semi">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-space border-0"></tr>
                                            <tr class="align-middle">
                                                <td class="font-md">132</td>
                                                <td class="font-md">09/03/2024</td>
                                                <td class="font-md">09/03/2024</td>
                                                <td class="font-md">Haseeb</td>
                                                <td class="font-md">
                                                    <div class="d-flex">
                                                        <div class="team-size">
                                                            <a href="{{ route('BusinessUser.EditContract') }}"
                                                                class="text-decoration-none">
                                                                <img src="{{ asset('img/team-pen.svg') }}"
                                                                    class="image-fluid img">
                                                            </a>
                                                        </div>
                                                        <div class="team-size ms-2">
                                                            <a href="#" class="text-decoration-none">
                                                                <img src="{{ asset('img/team-del.svg') }}"
                                                                    class="image-fluid img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle"></tr>
                                            <td class="font-md">132</td>
                                            <td class="font-md">09/03/2024</td>
                                            <td class="font-md">09/03/2024</td>
                                            <td class="font-md">Haseeb</td>
                                            <td class="font-md">
                                                <div class="d-flex">
                                                    <div class="team-size">
                                                        <a href="{{ route('BusinessUser.EditContract') }}"
                                                            class="text-decoration-none">
                                                            <img src="{{ asset('img/team-pen.svg') }}"
                                                                class="image-fluid img">
                                                        </a>
                                                    </div>
                                                    <div class="team-size ms-2">
                                                        <a href="#" class="text-decoration-none">
                                                            <img src="{{ asset('img/team-del.svg') }}"
                                                                class="image-fluid img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>
                                            <tr class="align-middle"></tr>
                                            <td class="font-md">132</td>
                                            <td class="font-md">09/03/2024</td>
                                            <td class="font-md">09/03/2024</td>
                                            <td class="font-md">Haseeb</td>
                                            <td class="font-md">
                                                <div class="d-flex">
                                                    <div class="team-size">
                                                        <a href="{{ route('BusinessUser.EditContract') }}"
                                                            class="text-decoration-none">
                                                            <img src="{{ asset('img/team-pen.svg') }}"
                                                                class="image-fluid img">
                                                        </a>
                                                    </div>
                                                    <div class="team-size ms-2">
                                                        <a href="#" class="text-decoration-none">
                                                            <img src="{{ asset('img/team-del.svg') }}"
                                                                class="image-fluid img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>
                                            <tr class="align-middle"></tr>
                                            <td class="font-md">132</td>
                                            <td class="font-md">09/03/2024</td>
                                            <td class="font-md">09/03/2024</td>
                                            <td class="font-md">Haseeb</td>
                                            <td class="font-md">
                                                <div class="d-flex">
                                                    <div class="team-size">
                                                        <a href="{{ route('BusinessUser.EditContract') }}"
                                                            class="text-decoration-none">
                                                            <img src="{{ asset('img/team-pen.svg') }}"
                                                                class="image-fluid img">
                                                        </a>
                                                    </div>
                                                    <div class="team-size ms-2">
                                                        <a href="#" class="text-decoration-none">
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
