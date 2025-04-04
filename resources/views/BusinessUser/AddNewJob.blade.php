<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add new job</title>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
</head>

<body>
    @if (session('message'))
        <script>
            swal("Oops", "{{ session('message') }}", "error")
        </script>
    @endif
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success")
        </script>
    @endif
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="col-6">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.scheduleCalendar') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h4 class="mb-0 blu font-j">Add New Job</h4>
                    </div>
                </div>
                <div class="col-6">
                    @include('Templates.BusinessUserNavBar')
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="right-bottom1">
                <div class="container-fluid">
                    <form action="">
                        <h4 class="blu2">Customer</h4>
                        <div class="border p-3 rounded-3 mt-3">
                            <h5>Add or select customer</h5>
                            <div class="row">
                                <div class="col-xl-6 col-md-8 col-sm-10">
                                    <p class="gre">Which customer would you like to create this job for? If they’ve
                                        booked you can
                                        search them by name, email, or phone.</p>
                                    <div>
                                        <label for="" class="form-label fw-semibold">Select Customer</label>
                                        <div class="dropdown1">
                                            <div class="dropdown-toggle1 d-flex bg-nblue">
                                                <div class="w-100">
                                                    <button type="button"
                                                        class="w-100 dropdown-toggle2 border-0 p-0 text-start bg-nblue">Select
                                                        Here</button>
                                                </div>
                                                <div>
                                                    <i class="fa-solid fa-caret-down"></i>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu1 bg-white shadow rounded-3 p-2">
                                                <button type="button"
                                                    class="create-new-btn text-start shadow-sm rounded-3"
                                                    data-bs-toggle="modal" data-bs-target="#customerModal"><i
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
                            </div>
                        </div>
                        <div class="border p-3 rounded-3 mt-3">
                            <h5>Select address</h5>
                            <div class="row">
                                <div class="col-xl-6 col-md-8 col-sm-10">
                                    <p class="gre">Which customer would you like to create this job for? If they’ve
                                        booked you can
                                        search them by name, email, or phone.</p>
                                    <div>
                                        <label for="" class="form-labelfw-medium">Job Address</label>
                                        <div class="border rounded-3 bg-nblue d-flex align-items-center pe-2">
                                            <select name="" id=""
                                                class="form-control bg-nblue border-0 shadow-none">
                                                <option value="">Select here</option>
                                            </select>
                                            <img src="{{ asset('img/edit.png') }}" alt="" class="img-edit">
                                        </div>
                                        <span class="blu fw-medium pointer" data-bs-target="#mapModal"
                                            data-bs-toggle="modal">New Address</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border p-3 rounded-3 mt-3">
                            <h5>Link Job</h5>
                            <div class="row">
                                <div class="">
                                    <div>
                                        <label for="" class="form-label">Name the Job</label>
                                        <div class="d-lg-flex">
                                            <div class="d-sm-flex align-items-center mt-2 mt-lg-0">
                                                <div class="d-flex align-items-center me-sm-4">
                                                    <input id="custom" type="radio" name="job" class="me-1"
                                                        checked>
                                                    <label for="custom">Custom Job</label>
                                                </div>
                                                <div class="d-flex align-items-center ">
                                                    <input id="quote" type="radio" name="job" class="me-1">
                                                    <label for="quote">Link to a Quote or Invoice</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h2 class="fs-3 fw-semibold mb-3 mt-3">Line Items </h2>
                        <div class="border p-2 mt-3 rounded-3">
                            <div
                                class="d-flex flex-sm-row flex-column-reverse align-items-sm-center justify-content-between">
                                <div class="mt-sm-0 mt-3">
                                    <h5 class="mb-0">Line Items</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="#" id="addLineItem"
                                        class="btn-blue py-2 px-3 text-decoration-none d-inline-block text-white rounded-2">Add
                                        Line Item</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-8 col-sm-10">
                                    <p class="gre">Which customer would you like to create this job for? If they’ve
                                        booked you can search them by name, email, or phone.</p>
                                </div>
                            </div>
                            <div id="lineItemsContainer">
                                <!-- Line items will be dynamically inserted here -->
                            </div>
                        </div>

                        <div class="border p-3 rounded-3 mt-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-0">Job Notes</h6>
                                    <p class="mb-0">Add an internal note just for teammates to see...</p>
                                </div>
                                <div class="mt-sm-0 mt-3 text-end">
                                    <button class="btn-blue text-white border-blu px-3 py-2 rounded-2">Select a
                                        File</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="border rounded-3 px-2 py-1 bg-nblue w-100">
                                        <label for="" class="font-12 gre">Note Details</label>
                                        <textarea name="" id="" class="bg-nblue border-0 w-100 p-0" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="border p-3 rounded-3 mt-3">
                            <div class="">
                                <div>
                                    <h6 class="mb-0 fs-5 fw-semibold">Payment Method</h6>
                                    <p class="mb-0">Attach a credit or debit card to charge at a later time when the job
                                        is completed</p>
                                </div>
                                <span class="sky-c fw-medium  d-block">+Add Payment Method</span>
                                <h6 class="mb-0 fs-5 mt-3 fw-semibold">Add Payment Method</h6>
                                <div class="py-2">
                                    <p class="mb-1">Credit card (2.99 per transaction)</p>
                                    <img src="{{ asset('img/credit.png') }}" alt="credit" class="img-fluid">
                                </div>
                                <div class="py-2">
                                    <p class="mb-1">Bank transfer (1% max $15 per transaction)</p>
                                    <img src="{{ asset('img/credit.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="py-2">
                                    <p class="mb-1">Paypal card (2.99 per transaction)</p>
                                    <img src="{{ asset('img/paypal.png') }}" alt="paypal" class="img-fluid">
                                </div>
                            </div>
                        </div> -->
                        <div class="border p-3 rounded-3 mt-3">
                            <h5>Add a Checklist</h5>
                            <div class="row">
                                <div class="col-xl-6 col-md-8 col-sm-10">
                                    <p class="gre">You can set up a checklist for employees.</p>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt1" id="opt1">
                                            <label for="opt1">Greet the customer with a professional and friendly
                                                smile</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt2" id="opt2">
                                            <label for="opt2">Review the work order or project details with them to
                                                ensure everything is accurate</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt3" id="opt3">
                                            <label for="opt3">Set clear expectations for the work process and
                                                timeline</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt4" id="opt4">
                                            <label for="opt4">Assess and Prepare the Work Area, Using drop cloths,
                                                tarps, or painter's tape</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt5" id="opt5">
                                            <label for="opt5">Wear appropriate safety gear, such as gloves,
                                                goggles, or
                                                a dust mask</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt6" id="opt6">
                                            <label for="opt6">Execute the Job, Follow the agreed-upon scope of work
                                                step
                                                by step.</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt7" id="opt7">
                                            <label for="opt7">Clean Up, Remove all debris, dust, and leftover
                                                materials
                                                from the workspace</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt8" id="opt8">
                                            <label for="opt8">Take photos of the completed job for records, if
                                                applicable</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt9" id="opt9">
                                            <label for="opt9">Provide the customer with an invoice and process
                                                payment.</label>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <input type="checkbox" name="opt10" id="opt10">
                                            <label for="opt10">Request feedback on your services and encourage the
                                                customer to leave a review on your preferred platform.</label>
                                        </div>
                                    </div>
                                    <span data-bs-toggle="modal" data-bs-target="#checklistModal"
                                        class="blu pointer fw-medium mt-2 d-block"><i
                                            class="fa-solid fa-square-plus me-2"></i>Select Checklists</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-5 col-lg-6">
                                <h2 class="fs-3 fw-semibold mb-3">Schedule</h2>
                                <div class="border p-2 rounded-3">
                                    <div class="d-sm-flex align-items-center justify-content-between">
                                        <div>
                                            <h5>Pick a date and time</h5>
                                        </div>
                                        <div class="mt-sm-0 mt-3">
                                            <p class="blu fw-medium">Hide Calendar</p>
                                        </div>
                                    </div>
                                    <p class="gre">Which customer would you like to create this job for? If they’ve
                                        booked you can
                                        search them by name, email, or phone.</p>
                                    <h5>Estimated Experation Date</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <button
                                                class="btn-blue text-white py-2 px-3 w-100 border-blu rounded-3">One
                                                Time</button>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-3">
                                            <button
                                                class="bg-white text-dark py-2 px-3 w-100 border rounded-3">Recurring
                                                Job</button>
                                        </div>
                                    </div>
                                    <div class="bg-white border rounded-2 p-2 mt-3">
                                        <div class="row time-font">
                                            <div class="col-xl-4 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('img/calendar.png') }}" alt="">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="mb-0">Fri, Aug 24, 2024</h6>
                                                        <p class="gre mb-0 font-12">Fri, Aug 24, 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-6">
                                                <h6 class="mb-0">09:00 AM</h6>
                                                <p class="gre mb-0 font-12">09:00 AM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="fs-6 mt-3 fw-medium">Estimated Job Duration</h4>
                                    <div class="bg-white border rounded-2 p-2 mt-3">
                                        <div class="row align-items-center">
                                            <div class="col-sm-5">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('img/time.png') }}" alt="">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="mb-0">1hr</h6>
                                                        <p class="gre mb-0">Estimated Job Duration</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 main-range mt-sm-0 mt-3">
                                                <input type="range" class="w-100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border bg-white mt-2 rounded-2 p-2">
                                        <div class="d-sm-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="{{ asset('img/work-t.png') }}" alt="">
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0">1 worker • 0 Skill Tags</h6>
                                                    <p class="gre mb-0">Team Required</p>
                                                </div>
                                            </div>
                                            <div class="text-end mt-sm-0 mt-3">
                                                <button type="button"
                                                    class="btn-blue border-blu py-2 px-4 rounded-2 text-white"
                                                    id="assign-btn">+ Assign</button>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5>Assign to team</h5>
                                            <div class="row" id="input-container">
                                                <!-- New input fields will be added here -->
                                            </div>
                                            <div class="main-check d-flex align-items-center">
                                                <input type="checkbox" id="assignment" checked>
                                                <label for="assignment" class="ps-2">Email team about
                                                    assignment</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 mt-lg-0 mt-3">
                                <div class="border p-2 rounded-3">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h6 class="fw-semibold">Customer Notification</h6>
                            <div class="col-md-8 d-sm-flex justify-content-between col-lg-6 col-xl-5 ">
                                <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                    <div>
                                        <h6 class="mb-0 me-4">Emails</h6>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <label class="switch-label">Off</label>
                                            <input type="checkbox" class="switch-input" id="toggle">
                                            <label class="switch-slider" for="toggle"></label>
                                            <label class="switch-label">On</label>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex mt-3 mt-sm-0 align-items-center justify-content-between border-bottom pb-3">
                                    <div>
                                        <h6 class="mb-0 me-4">Text Messages</h6>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <label class="switch-label">Off</label>
                                            <input type="checkbox" class="switch-input" id="toggle1">
                                            <label class="switch-slider" for="toggle1"></label>
                                            <label class="switch-label">On</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="border rounded-3 p-2 mt-3">
                            <h5>Subtotal</h5>
                            <div class="row">
                                <div class="col-xl-5 col-sm-8">
                                    <p class="gre">Which customer would you like to create this job for? If they’ve
                                        booked you can
                                        search them by name, email, or phone.</p>
                                    <div>
                                        <label for="" class="form-label fw-medium">Add Discount</label>
                                        <input type="text" class="form-control shadow-none bg-nblue"
                                            placeholder="Type here">
                                    </div>
                                    <div class="mt-3">
                                        <label for="" class="form-label fw-medium">Add Tax</label>
                                        <input type="text" class="form-control shadow-none bg-nblue"
                                            placeholder="Type here">
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <h6 class="mb-0">Total:</h6>
                                        <p class="mb-0 ms-3">USD:</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="d-flex align-items-center mt-5">
                            <div>
                                <button class="btn-sv py-2 border rounded-3">Cancel</button>
                            </div>
                            <div class="ms-3">
                                <button class="bg-sky text-white py-2 px-3 btn-sv rounded-3">Save & Create Job</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="modal modal-lg fade" id="customerModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Add New Customer</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('BusinessUser.StoreCustomer')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <!-- <div>
                                    <div>
                                        <div>
                                            <img src="asset('img/user.png')}}" alt="" class="user-file">
                                        </div>
                                        <div class="mt-2">
                                            <label for="file-up" class="bg-sky py-2 px-3 rounded-2 text-white">
                                                Add Image
                                            </label>
                                        </div>
                                    </div>
                                    <input type="file" id="file-up" class="d-none">
                                </div> -->
                                <div class="mt-3">
                                    <label for="name" class="form-label fw-medium mb-0">Full Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                                        class="modal-input" placeholder="Enter Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label for="company" class="form-label fw-medium mb-0">Company</label>
                                    <input type="text" id="company" name="company" value="{{ old('company') }}"
                                        class="modal-input" placeholder="Enter Company Name">
                                    @error('company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label for="phone" class="form-label fw-medium mb-0">Phone</label>
                                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                        class="modal-input" placeholder="Enter Phone Number">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label for="email" class="form-label fw-medium mb-0">Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        class="modal-input" placeholder="Enter Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label for="Password" class="form-label fw-medium mb-0">Password</label>
                                    <input type="password" name="password" id="Password" class="modal-input"
                                        placeholder="Enter Password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label for="location" class="form-label fw-medium mb-0">Address</label>
                                    <input type="text" id="location" name="location" value="{{ old('location') }}"
                                        class="modal-input" placeholder="Enter Address">
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label for="referrance" class="form-label fw-medium mb-0">Referrance</label>
                                    <input type="text" id="referrance" name="referrance" value="{{ old('referrance') }}"
                                        id="" class="modal-input" placeholder="Enter Referrance">
                                    @error('referrance')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row justify-content-between mt-5">
                                    <div class="col-sm-4 col-6">
                                        <button type="button"
                                            class="red-bg py-2 px-2 w-100 text-white border-danger border-1 rounded-3 "
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <button type="submit"
                                            class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-lg fade" id="mapModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Where's your place located?</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <h5>Your address is only shared with Job Seekers.</h5>
                                <div>
                                    <input id="autocomplete" type="text" class="form-control"
                                        placeholder="Enter a location">
                                    <div id="map" class="mt-3"></div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div>
                                        <p class="blu fw-medium pointer" data-bs-target="#confirmModal"
                                            data-bs-toggle="modal">Enter Manual Address</p>
                                    </div>
                                    <div>
                                        <button class="bg-sky text-white py-2 px-5 rounded-2 border-blu">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-lg fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Confirm your address</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <p class="text-center fw-semibold">Your address is only shared with guests after they’ve made a
                            reservation.</p>
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Street Address</label>
                                    <input type="text" class="modal-input" placeholder="Sialkot, 90 more">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Apt, floor, bldg (if
                                        applicable)</label>
                                    <input type="text" class="modal-input" placeholder="Second Floor">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">City / town /
                                        village</label>
                                    <input type="text" class="modal-input" placeholder="Main Chino ">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Province / state /
                                        territory (if
                                        applicaable)</label>
                                    <input type="text" class="modal-input" placeholder="Punjab">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Postal code (if
                                        applicable)</label>
                                    <input type="text" class="modal-input" placeholder="57000">
                                </div>
                                <div class="row justify-content-between mt-5">
                                    <div class="col-sm-4 col-6">
                                        <input type="reset" value="Clear"
                                            class="text-decoration-underline border-0 bg-transparent" name=""
                                            id="">
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <button type="button" data-bs-target="#AddressModal" data-bs-toggle="modal"
                                            class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AddressModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('img/claim.png') }}" alt="">
                        </div>
                        <div class="ms-2">
                            <h6 class="fw-bold mb-0">We don't recognize that address</h6>
                            <p class="fw-medium gre mb-0">Are you sure that it's correct?</p>
                        </div>
                    </div>
                    <div class="row mt-4 align-items-center">
                        <div class="col-sm-6 text-center">
                            <p class="pointer sky text-decoration-underline font-c py-2 mb-0"
                                data-bs-target="#confirmModal" data-bs-toggle="modal">No, edit the address</p>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit"
                                class="bg-sky text-white border-blu py-2 w-100 px-2 rounded-3 font-c"
                                data-bs-dismiss="modal" aria-label="Close">Yes, my address is correct</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-md fade" id="checklistModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Select Checklists</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="mx-auto px-4">
                                <div class="mt-3">
                                    <input type="checkbox" id="general">
                                    <label for="general" class="form-label fw-medium mb-0">General Checklist</label>
                                </div>

                                <div class="row justify-content-between mt-5">
                                    <div class="col-sm-4 col-6">
                                        <button
                                            class="red-bg py-2 px-2 w-100 text-white border-danger border-1 rounded-3">Close</button>
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <button type="submit"
                                            class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Set
                                            Selected</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('Templates.UserLogoutModule')
    <script>
        let map;
        let autocomplete;

        function initAutocomplete() {
            // Initialize the map
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                }, // Default center
                zoom: 8 // Default zoom
            });

            // Initialize the autocomplete functionality
            var input = document.getElementById('autocomplete');
            autocomplete = new google.maps.places.Autocomplete(input, {
                types: ['geocode'] // Restrict the types of predictions.
            });

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();

                if (!place.geometry) {
                    console.log("No details available for input: '" + place.name + "'");
                    return;
                }

                // Get the address components and fill the city and state fields.
                var addressComponents = place.address_components;
                var city = '';
                var state = '';

                for (var i = 0; i < addressComponents.length; i++) {
                    var component = addressComponents[i];
                    if (component.types.includes('locality')) {
                        city = component.long_name;
                    }
                    if (component.types.includes('administrative_area_level_1')) {
                        state = component.short_name; // or use component.long_name for full state name
                    }
                }

                // Center the map on the selected place
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu1gwHCSzLG9ACacQqLk-LG8oJMkarNF0&libraries=places&callback=initAutocomplete">
    </script>
    @include('Templates.Jslinks')
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: ''
                },

            });

        });

        @if ($errors->any())

            document.addEventListener("DOMContentLoaded", function() {
                var myModal = new bootstrap.Modal(document.getElementById('customerModal'));
                myModal.show();
            });
        @endif
    </script>
</body>

</html>
