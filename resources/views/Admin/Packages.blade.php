<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Packages</title>
</head>

<body>
    
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif

    <section>
        <div class="main">
            @include('Templates.Adminsidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Packages</span>
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
                                            Packages
                                        </h1>
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-3">
                                        <div class="d-sm-flex justify-content-end">
                                            <a href="{{ route('Admin.AddNewPackage') }}"
                                                class="mbl-100 d-flex justify-content-center align-items-center mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white text-decoration-none">
                                                <i class="fas fa-plus me-1"></i>
                                                <span>Add Package</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @if ($packages->count() >= 1)
                                    <div
                                        class="bg-white px-3 py-2 mt-3 rounded-3 nav-tabs d-flex flex-column tblheight">
                                        <div class="table-responsive reports-tbl mt-2">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">ID</th>
                                                        <th class="font-semi">Title</th>
                                                        <th class="font-semi">Price</th>
                                                        <th class="font-semi">Discount %</th>
                                                        <th class="font-semi">Discounted Price</th>
                                                        <th class="font-semi">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($packages as $package)
                                                        <tr class="align-middle">
                                                            <td class="font-md">{{ $package->id ?? 'N/A' }}</td>
                                                            <td class="font-md">{{ $package->name ?? 'N/A' }}</td>
                                                            <td class="font-md">{{ $package->price ?? 'N/A' }}</td>
                                                            <td class="font-md">{{ $package->discount ?? 'N/A' }}%</td>
                                                            <td class="font-md">{{ $package->discountedprice ?? 'N/A' }}
                                                            </td>
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
                                                                                href="{{ route('Admin.EditPackage', $package->id) }}">
                                                                                <i
                                                                                    class="fa-solid fa-pencil me-2"></i>Edit
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="{{ route('Admin.DeletePackage', $package->id) }}">
                                                                                <i
                                                                                    class="fa-solid fa-trash me-2"></i>Delete
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
                                                        Showing {{ $packages->firstItem() }} to
                                                        {{ $packages->lastItem() }} of {{ $packages->total() }}
                                                        results
                                                    </p>
                                                </div>
                                                <div class="border-end px-3">
                                                    @if ($packages->onFirstPage())
                                                        <button class="border rounded-3 px-4 py-2 text-black bg-light"
                                                            disabled>Previous</button>
                                                    @else
                                                        <a href="{{ $packages->previousPageUrl() }}"
                                                            class="border rounded-3 px-4 py-2 text-black bg-transparent text-decoration-none">Previous</a>
                                                    @endif
                                                </div>
                                                <div class="ps-3">
                                                    @if ($packages->hasMorePages())
                                                        <a href="{{ $packages->nextPageUrl() }}"
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
                                            <h4 class="text-primary fw-bold mb-2">No Packages Available.</h4>
                                            <p class="mb-0 text-muted">
                                                You currently have no packages, please add a new package.
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
