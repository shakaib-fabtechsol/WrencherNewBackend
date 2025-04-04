<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Dashboard</title>
</head>

<body>
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif
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
                                <h3 class="hding mb-0">Dashboard</h3>
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
                                    <h1 class="fs-4 font-bold">
                                        Good morning, John Smith.
                                    </h1>
                                    <p class="gre font-14">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-lg-flex justify-content-end align-items-center">

                                    <div
                                        class="d-flex ps-3 pe-1 mt-2 mt-lg-0 mx-lg-3 align-items-center bg-white border-1 rounded-2">
                                        <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                        <select name="" id="filter"
                                            class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                            <option value="" selected disabled hidden>Filter</option>
                                            <option value="">Filter by Date</option>
                                            <option value="">Filter by Price</option>
                                        </select>
                                    </div>
                                    <p class="mb-0 font-semi mt-2 mt-lg-0">Today</p>
                                    <div
                                        class="d-flex ps-3 pe-1 mt-2 mt-lg-0 mx-lg-3 align-items-center bg-white border-1 rounded-2">
                                        <select name="" id="filter"
                                            class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                            <option value="" selected disabled hidden>All territories</option>
                                            <option value="">Filter by Date</option>
                                            <option value="">Filter by Price</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="dropdown">
                                            <button
                                                class="mbl-100 mt-3 mt-lg-0 text-center text-decoration-none rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0 dropdown-toggle"
                                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false">+ New</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item rounded-2"
                                                        href="{{ route('BusinessUser.AddNewJob') }}">New
                                                        Job</a>
                                                </li>
                                                <li><button class="dropdown-item rounded-2" data-bs-toggle="modal"
                                                        data-bs-target="#serviceModal">Add Task</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xxl-8 col-lg-6">
                                    <div class="h-100 d-flex align-items-center justify-content-center">
                                        <div class="d-flex flex-column align-items-center">
                                            <img src="{{ asset('img/clipboard.png') }}" alt=""
                                                class="img-fluid">
                                            <p class="font-semi fs-6 mb-0">No schedule jobs</p>
                                            <p class="ex-small mb-0">Looks like you don't have anything to do today.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 mt-lg-0 mt-3">
                                    <div class="fix-height">
                                        <div
                                            class="d-flex flex-wrap align-items-center justify-content-between bg-white p-2 border-1 rounded-3">
                                            <div class="text-center px-4">
                                                <p class="font-semi fs-6 mb-0">0 jobs</p>
                                                <p class="ex-small mb-0">On the schedule</p>
                                            </div>
                                            <div class="text-center px-4 midbrdr">
                                                <p class="font-semi fs-6 mb-0">0h 0m</p>
                                                <p class="ex-small mb-0">Est, duration</p>
                                            </div>
                                            <div class="text-center px-4">
                                                <p class="font-semi fs-6 mb-0">$0</p>
                                                <p class="ex-small mb-0">Est, earnings</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 bg-white p-2 border-1 rounded-3">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3366.1837066589837!2d74.51258247628223!3d32.467777799724324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eebf05050a257%3A0x65c6ed11df82a794!2sFabulous%20Technology%20Solutions!5e0!3m2!1sen!2s!4v1724927757701!5m2!1sen!2s"
                                                height="450" style="border:0;width:100%;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                        <div
                                            class="mt-3 d-flex flex-wrap align-items-center justify-content-between bg-white p-2 border-1 rounded-3">
                                            <div class="text-center px-4">
                                                <p class="font-semi fs-6 mb-0">0 jobs</p>
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
    <div class="modal modal-lg fade" id="serviceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Add Task</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class=" mx-auto">
                                <div class="row">
                                    <div class="mt-3">
                                        <label for="name" class="form-label fw-medium mb-0">Task Name<span
                                                class="red">*</span></label>
                                        <input type="text" id="name" class="modal-input" required>
                                    </div>
                                    <div class="mt-3 col-lg-12">
                                        <label for="des" class="form-label fw-medium mb-0">Description</label>
                                        <textarea name="des" rows="4" id="des" class="modal-input" placeholder="Description here"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div>
                                        <label for="" class="ps-2">Select Customer</label>
                                        <div class="dropdown1">
                                            <div class="dropdown-toggle1 d-flex bg-white">
                                                <div class="w-100">
                                                    <button type="button"
                                                        class="w-100 dropdown-toggle2 border-0 p-0 text-start bg-white">Select
                                                        Here</button>
                                                </div>
                                                <div>
                                                    <i class="fa-solid fa-caret-down"></i>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu1 bg-white shadow rounded-3 p-2">
                                                <button type="button"
                                                    class="create-new-btn text-start shadow-sm rounded-3"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="fa-solid fa-square-plus me-2"></i>Create a new
                                                    customer</button>
                                                <div class="mt-2">
                                                    <div
                                                        class="search-input d-flex align-items-center shadow-sm px-3 py-2">
                                                        <input type="text" placeholder="Search Customer"
                                                            class="w-100 border-0">
                                                        <button class="search-btn"><i
                                                                class="fa-solid fa-magnifying-glass"></i></button>
                                                    </div>
                                                </div>
                                                <ul class="customer-list mt-2">
                                                    <!-- Customer items will be added here dynamically -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <p class="fw-medium mb-0">Assigned To</p>
                                    <div
                                        class="d-flex justify-content-between align-items-center flex-wrap-reverse mt-2">
                                        <div
                                            class="d-flex align-items-center font-md green me-2 selectEmployee pointer">
                                            <i class="fa-solid fa-plus me-2"></i>
                                            <p class="mb-0">Select Employee</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end ms-auto">
                                            <p class="mb-0 me-3">0 Selected</p>
                                            <div class="d-flex align-items-center">
                                                <input class="me-2" type="checkbox" name="" id="">
                                                <p class="mb-0">Select All</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 employees d-none">
                                        <div class="col-sm-6 my-1 col-lg-4">
                                            <div class="d-flex align-items-center">
                                                <input class="me-2" type="checkbox" name="employee1"
                                                    id="employee1">
                                                <label for="employee1">Brandon Spainhoward</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 my-1 col-lg-4">
                                            <div class="d-flex align-items-center">
                                                <input class="me-2" type="checkbox" name="employee2"
                                                    id="employee2">
                                                <label for="employee2">Brandon Spainhoward</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 my-1 col-lg-4">
                                            <div class="d-flex align-items-center">
                                                <input class="me-2" type="checkbox" name="employee3"
                                                    id="employee3">
                                                <label for="employee3">Kayla Kirkham</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-4 my-1">
                                            <div>
                                                <label class="form-label fw-medium mb-0" for="Duedate">Due
                                                    Date</label>
                                                <input class="modal-input" type="date" name="Duedate"
                                                    id="Duedate">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 my-1">
                                            <div>
                                                <label class="form-label fw-medium mb-0" for="Time">Time</label>
                                                <input class="modal-input" type="date" name="Time"
                                                    id="Time">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 my-1">
                                            <div>
                                                <p class="form-label fw-medium mb-0" for="Time">Time Zone</p>
                                                <div class="h-input d-flex align-items-center">
                                                    <p class="mb-0 green">
                                                        Eastern Time (UTC-4)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex flex-column ">
                                        <div>
                                            <label class="fw-medium mb-0" for="TaskColor">Task Color</label>
                                        </div>
                                        <input class="mt-1 p-1 bg-white" type="color" name="TaskColor"
                                            id="TaskColor">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="">
                                            <label class="form-label fw-medium mb-0" for="Status">Status</label>
                                            <select class="modal-input" name="Status" id="Status">
                                                <option value="">Active</option>
                                                <option value="">Done</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="">
                                            <label class="form-label fw-medium mb-0" for="Priority">Priority</label>
                                            <select class="modal-input" name="Priority" id="Priority">
                                                <option value="">High</option>
                                                <option value="">Medium</option>
                                                <option value="">Low</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row justify-content-between mt-5">
                                        <div class="col-sm-4 col-6">
                                            <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                                class="red-bg py-2 px-2 w-100 text-white border-danger border-1 rounded-3">Cancel</button>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <button type="submit"
                                                class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('Templates.Jslinks')

    <script>
        document.querySelector('.selectEmployee').addEventListener('click', function() {
            const employeeRow = document.querySelector('.employees');
            const icon = document.querySelector('.selectEmployee i');
            employeeRow.classList.toggle('d-none');
            if (icon.classList.contains('fa-plus')) {
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            } else {
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            }
        });
    </script>
</body>

</html>
