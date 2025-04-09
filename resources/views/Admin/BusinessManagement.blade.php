<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Business Users</title>
</head>

<body>

    <section>
        <div class="main">
            @include('Templates.Adminsidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Business Users</span>
                            </div>
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
                                <div class="d-xl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-3 font-semi">
                                            Business Users
                                        </h1>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-3">
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
                                @if ($users->count() >= 1)
                                    <div
                                        class="bg-white px-3 py-2 mt-3 rounded-3 nav-tabs d-flex flex-column tblheight">
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
                                                                                href="{{ route('Admin.EditUser', $user->id) }}">
                                                                                <i class="fa-solid fa-pencil me-2"></i>
                                                                                Edit
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="{{ route('Admin.DeleteUser', $user->id) }}">
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
                                                                            <a class="dropdown-item" href="#">
                                                                                <i
                                                                                    class="fa-solid fa-envelope me-2"></i>
                                                                                Send Message
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#">
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

                                        <div class="d-flex justify-content-end mb-3 mt-auto">
                                            <div
                                                class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border rounded-3 py-2 px-3">
                                                <div class="border-end pe-3">
                                                    <p class="mb-0">
                                                        Showing {{ $users->firstItem() }} to
                                                        {{ $users->lastItem() }} of {{ $users->total() }} results
                                                    </p>
                                                </div>
                                                <div class="border-end px-3">
                                                    @if ($users->onFirstPage())
                                                        <button class="border rounded-3 px-4 py-2 text-black bg-light"
                                                            disabled>Previous</button>
                                                    @else
                                                        <a href="{{ $users->previousPageUrl() }}"
                                                            class="border rounded-3 px-4 py-2 text-black bg-transparent text-decoration-none">Previous</a>
                                                    @endif
                                                </div>
                                                <div class="ps-3">
                                                    @if ($users->hasMorePages())
                                                        <a href="{{ $users->nextPageUrl() }}"
                                                            class="rounded-3 border-0 px-4 py-2 text-black bg-lblue text-decoration-none">Next</a>
                                                    @else
                                                        <button class="rounded-3 border-0 px-4 py-2 text-black bg-light"
                                                            disabled>Next</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center">
                                        <div
                                            class="d-flex flex-column align-items-center justify-content-center p-5 rounded mt-5 altertclass">
                                            <i class="fa-solid fa-circle-info fa-3x text-primary mb-3"></i>
                                            <h4 class="text-primary fw-bold mb-2">No Business Users Available.</h4>
                                            <p class="mb-0 text-muted">
                                                You currently have no business users.
                                            </p>
                                        </div>
                                    </div>
                                @endif
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
