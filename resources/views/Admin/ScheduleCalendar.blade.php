<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Sechdule Calendar</title>

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
                                <div class="d-xxl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 font-bold">
                                            Schedule Multi Calendar View
                                        </h1>
                                    </div>
                                    <div class="d-xl-flex justify-content-end align-items-center mt-xxl-0 mt-3 ">
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
                                        <div class="d-sm-flex align-items-center justify-content-end  mt-3 mt-xl-0">
                                            <div
                                                class="d-flex ps-3 me-xl-3 align-items-center bg-white border-1 rounded-2 mt-sm-0 mt-3">
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
                        <div>
                            <label class="font-semi">What You Are Looking For?</label>
                            <div class="check-box d-sm-flex flex-wrap mt-2">
                                <div class="mx-3">
                                    <input type="checkbox" id="Quote"> <label for="Quote">Quote</label>
                                </div>
                                <div class="mx-3">
                                    <input type="checkbox" class="ms-0 ms-sm-2" id="Schedule an Estimate"> <label
                                        for="Schedule an Estimate">Schedule an Estimate</label>
                                </div>
                                <div class="mx-3">
                                    <input type="checkbox" class="ms-0 ms-sm-2" id="Other"> <label
                                        for="Other">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="Notes" class="font-semi">Notes</label>
                            <div class="call-textarea">
                                <textarea id="Notes" placeholder="57000" class="w-100 bg-white border rounded-3 p-3"></textarea>
                            </div>
                        </div>
                        <div class="call-pop-btns d-sm-flex flex-wrap justify-content-between align-items-center mt-3">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-red text-white border-0 mb-2 mb-sm-0">Cancel</button>
                            <button type="button"
                                class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-sky text-white border-0">Save</button>
                        </div>
                    </div>
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
                                <img src="{{ asset('../img/clean-calendar.png') }}" alt="Team Meeting" class="clean-img ms-2">
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
