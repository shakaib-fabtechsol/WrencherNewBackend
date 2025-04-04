<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')

    <title>Schedule Calendar</title>

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
                                <h3 class="hding mb-0 blu font-j">Schedule</h3>
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
                                <div class="d-xxl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 font-bold">
                                            Schedule Multi Calendar View
                                        </h1>
                                        <p class="mb-0">Here's how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-xxl-flex justify-content-end align-items-center mt-xxl-0 mt-3 ">
                                        <div class="d-sm-flex align-items-center w-100">
                                            <div
                                                class="d-flex ps-2 mt-3 mt-lg-0 me-lg-3 align-items-center me-2 bg-white border-1 rounded-2 w-100">
                                                <label for="filter"> <i
                                                        class="bi bi-geo-alt-fill trash-b p-1 rounded-2"></i></label>
                                                <select name="" id="filter"
                                                    class="border-white form-select shadow-none tab-100 pe-3 w-100 py-2 grey  focus-none font-md bg-transparent">
                                                    <option value="" selected disabled hidden>All territories
                                                    </option>
                                                    <option value="">Today</option>
                                                </select>
                                            </div>
                                            <div
                                                class="d-flex ps-2 mt-3 mt-lg-0 me-xl-3 align-items-center bg-white border-1 rounded-2 w-100">
                                                <label for="filter"> <i
                                                        class="bi bi-person-fill-up trash-b p-1 rounded-2"></i></label>
                                                <select name="" id="filter"
                                                    class="border-white form-select shadow-none tab-100 pe-3 py-2 grey w-100  focus-none font-md bg-transparent">
                                                    <option value="" selected disabled hidden>All Jobs</option>
                                                    <option value="">Today</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-sm-flex align-items-center justify-content-end  mt-3 mt-xxl-0">
                                            <div class="d-flex justify-content-end me-sm-2">
                                                <div class="dropdown">
                                                    <button
                                                        class="mbl-100 mt-3 mt-lg-0 text-center text-decoration-none rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0 dropdown-toggle"
                                                        type="button" id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">+ New</button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item rounded-2"
                                                                href="{{ route('BusinessUser.AddNewJob') }}">New
                                                                Job</a>
                                                        </li>
                                                        <li><button class="dropdown-item rounded-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#serviceModal">Add Task</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex ps-3 me-lg-3 align-items-center bg-white border-1 rounded-2 mt-sm-0 mt-3">
                                                <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                                <select name="" id="filter"
                                                    class="border-white form-select shadow-none tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                                    <option value="" selected disabled hidden>Filter</option>
                                                    <option value="">Today</option>
                                                    <option value="">Last Week</option>
                                                    <option value="">This Week</option>
                                                    <option value="">Next Week</option>
                                                    <option value="">Last Month</option>
                                                    <option value="">This Month</option>
                                                    <option value="">Last Year</option>
                                                    <option value="">This Year</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="mt-3 main-calendar">
                                    <div class="fix-w">
                                        <div id="calendar" class="fix-w1">

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
    <div class="modal modal-lg fade" id="callpop" tabindex="-1" aria-labelledby="callpopLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div class="text-center w-100" id="callpopLabel">
                        <h3>Add New Call</h3>
                    </div>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fs-4 fa-circle-xmark text-danger"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-sm-5">
                        <label for="Customer Name" class="font-semi">Customer Name</label>
                        <input type="text" id="Customer Name" placeholder="Lucas Hood"
                            class="form-control focus-none mb-2">
                        <label for="Phone" class="font-semi">Phone</label>
                        <input type="number" id="Phone" placeholder="1234567" required
                            class="form-control focus-none mb-2">
                        <label for="email" class="font-semi">Email (Optional)</label>
                        <input type="email" id="email" placeholder="awesomaa1@domain.com"
                            class="form-control focus-none mb-2">
                        <label for="address" class="font-semi">Address (Optional)</label>
                        <input type="text" id="address" placeholder="123 Eve, Rookers Block Las Vegas"
                            class="form-control focus-none mb-2">
                        <label class="font-semi">What You Are Looking For?</label>
                        <div class="check-box d-sm-flex flex-wrap">
                            <div>
                                <input type="checkbox" id="Quote"> <label for="Quote">Quote</label>
                            </div>
                            <div>
                                <input type="checkbox" class="ms-0 ms-sm-2" id="Schedule an Estimate"> <label
                                    for="Schedule an Estimate">Schedule an Estimate</label>
                            </div>
                            <div>
                                <input type="checkbox" class="ms-0 ms-sm-2" id="Other"> <label
                                    for="Other">Other</label>
                            </div>
                        </div>
                        <label for="Notes" class="font-semi">Notes</label>
                        <div class="call-textarea">
                            <textarea id="Notes" placeholder="57000" class="w-100 bg-white border rounded-3 p-3"></textarea>
                        </div>
                        <div class="call-pop-btns d-sm-flex flex-wrap justify-content-between align-items-center mt-3">
                            <button type="button"
                                class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-red text-white border-0 mb-2 mb-sm-0">Cancel</button>
                            <button type="button"
                                class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-sky text-white border-0">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Templates.UserLogoutModule')
    <div class="modal modal-lg fade" id="serviceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Add Task</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
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
        $(document).ready(function() {
            console.log("Initializing FullCalendar...");

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,title,next',
                    center: '',
                    right: ''
                },
                defaultView: 'agendaWeek',
                editable: true,
                events: [{
                        title: '',
                        start: moment().startOf('week').add(2, 'days').add(10, 'hours').toISOString(),
                        end: moment().startOf('week').add(2, 'days').add(12, 'hours').toISOString(),
                        description: `
                    <div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0">Home Cleaning:</p>
                            <div class="d-flex align-items-center">
                                <p class="mb-0">9AM 2hago</p>
                                <img src="{{ asset('img/clean-calendar.png') }}" alt="Team Meeting" class="clean-img ms-2">
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Technician Name:</p>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 ms-3">Alex John</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Client Name:</p>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 ms-3">Alex John</p>
                            </div>
                        </div>
                    </div>
                `
                    },
                    {
                        title: 'Client Call',
                        start: moment().startOf('week').add(3, 'days').add(15, 'hours').toISOString(),
                        end: moment().startOf('week').add(3, 'days').add(16, 'hours').toISOString(),
                        description: `
                    <p>Call with the client to review requirements.</p>
                    <img src="https://via.placeholder.com/150" alt="Client Call" class="clean-img">
                `
                    }
                ],
                eventRender: function(event, element) {
                    if (event.description) {
                        element.find('.fc-content').append(event.description);
                    }
                },
                eventClick: function(event) {
                    if (event.description) {
                        $('#callpop').modal('show');
                    }
                }
            });
        });
    </script>
</body>

</html>
