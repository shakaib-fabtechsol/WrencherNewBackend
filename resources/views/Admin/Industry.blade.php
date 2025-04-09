<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Industries</title>
</head>

<body>

    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif
    @if (session('delete'))
        <script>
            swal("Good job!", "{{ session('delete') }}", "success");
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
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Industries</span>
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
                                            Industries
                                        </h1>
                                    
                                    </div>
                                    <div class="d-lg-flex justify-content-end align-items-center mt-3">
                                        <div class="d-sm-flex justify-content-end">
                                            <a href="{{ route('Admin.AddNewIndustry') }}"
                                                class="mbl-100 d-flex justify-content-center align-items-center mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white text-decoration-none">
                                                <i class="fas fa-plus me-1"></i>
                                                <span>Add Industry</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @if ($industries->count() >= 1)
                                    <div
                                        class="bg-white px-3 py-2 mt-3 rounded-3 nav-tabs d-flex flex-column tblheight">
                                        <div class="table-responsive reports-tbl mt-2">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">ID</th>
                                                        <th class="font-semi">Title</th>
                                                        <th class="font-semi">Image</th>
                                                        <th class="font-semi">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($industries as $industry)
                                                        <tr class="align-middle">
                                                            <td class="font-md">{{ $industry->id ?? 'N/A' }}</td>
                                                            <td class="font-md">{{ $industry->name ?? 'N/A' }}</td>
                                                            <td>
                                                                <a href="#" class="text-decoration-none">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('uploads/' . $industry->img) }}"
                                                                            alt="customer1"
                                                                            class="me-2 cus-img rounded-circle">
                                                                    </div>
                                                                </a>
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
                                                                                href="{{ route('Admin.EditIndustry', $industry->id) }}">
                                                                                <i class="fa-solid fa-pencil me-2"></i>
                                                                                Edit
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="{{ route('Admin.DeleteIndustry', $industry->id) }}">
                                                                                <i class="fa-solid fa-trash me-2"></i>
                                                                                Delete
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
                                                class="mt-3 d-inline-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-3">
                                                <div class="border-end border-2 py-1 pe-3">
                                                    <p class="mb-0">
                                                        Showing {{ $industries->firstItem() }} to
                                                        {{ $industries->lastItem() }} of {{ $industries->total() }}
                                                        results
                                                    </p>
                                                </div>
                                                <div class="border-end border-2 px-3">
                                                    @if ($industries->onFirstPage())
                                                        <button class="border rounded-3 px-4 py-2 text-black bg-light"
                                                            disabled>Previous</button>
                                                    @else
                                                        <a href="{{ $industries->previousPageUrl() }}"
                                                            class="border rounded-3 px-4 py-2 text-black bg-transparent text-decoration-none">Previous</a>
                                                    @endif
                                                </div>
                                                <div class="border-1 ps-3">
                                                    @if ($industries->hasMorePages())
                                                        <a href="{{ $industries->nextPageUrl() }}"
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
                                            <h4 class="text-primary fw-bold mb-2">No Industries Available.</h4>
                                            <p class="mb-0 text-muted">
                                                You currently have no industries, please add a new industry.
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
