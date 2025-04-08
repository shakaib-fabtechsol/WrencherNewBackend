<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Business Management</title>
</head>

<body>
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
                                            Business Management
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
                                <div class="bg-white px-3 py-2 mt-3 rounded-3 nav-tabs">
                                    <div class="table-responsive reports-tbl mt-2">

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
                                                @foreach ($users as $user)
                                                    <tr class="align-middle">
                                                        <td class="font-md">{{ $user->id ?? 'N/A' }}</td>
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}"
                                                                        alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">{{ $user->name ?? 'N/A' }}</td>
                                                        <td class="font-md">{{ $user->lastName ?? 'N/A' }}</td>
                                                        <td class="font-md">{{ $user->phone ?? 'N/A' }}</td>
                                                        <td>{{ $user->email ?? 'N/A' }}</td>
                                                        <td>{{ $user->location ?? 'N/A' }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button
                                                                    class="border-0 bg-lgrey2 text-black rounded-2 px-2 py-2"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href=" }}">
                                                                            <i class="fa-solid fa-pencil me-2"></i>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="">
                                                                            <i class="fa-solid fa-trash me-2"></i>
                                                                            Delete
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="{{ route('Admin.ViewDetail') }}">
                                                                            <i class="fa-solid fa-eye me-2"></i>
                                                                            View Details
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href=" }}">
                                                                            <i class="fa-solid fa-envelope me-2"></i>
                                                                            Send Message
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href=" }}">
                                                                            <i class="fa-solid fa-ban me-2"></i>
                                                                            Deactivate Account
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
</body>

</html>
