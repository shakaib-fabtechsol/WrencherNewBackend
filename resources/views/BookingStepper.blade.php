<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Booking stepper</title>

</head>

<body>

    <div class="mycontainer booking-btn">
        <form id="stepperForm" action="#" method="POST">
            <div class="d-flex align-items-center justify-content-between mt-4">
                <div class="text-start">
                    <button class="prevBtn" id="prevBtn" type="button" onclick="changeStep(-1)" disabled>
                        <img src="{{ asset('img/stepperarrow.png') }}" alt="">
                    </button>
                </div>
                <img class="stepperlogow" src="{{ asset('img/logo-main.png') }}" alt="">
                <div></div>
            </div>
            <!-- Progress Bar -->
            <div class="progress-bar-container mt-3">
                <div class="progress-bar" id="progressBar"></div>
            </div>

            <!-- Step 1 -->
            <div class="step active">
                <div class="mycontainer">
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 col-sm-10 mb-3">
                            <h2 class="fw-bold">What type of service do you need?</h2>
                            <div class="mt-2">
                                <label for="Default" class="w-100" onclick="changeStep(1)">
                                    <div class="setpperlabel">
                                        <p class="mb-0 fw-bold">Default service category</p>
                                        <img src="{{ asset('img/stepperangle.png') }}" alt="" class="img-fluid">
                                    </div>
                                </label>
                                <input type="radio" id="Default" class="d-none">
                            </div>
                            <div class="mt-2">
                                <label for="Handyman" class="w-100" onclick="changeStep(1)">
                                    <div class="setpperlabel">
                                        <p class="mb-0 fw-bold">Handyman</p>
                                        <img src="{{ asset('img/stepperangle.png') }}" alt="" class="img-fluid">
                                    </div>
                                </label>
                                <input type="radio" id="Handyman" class="d-none">
                            </div>
                            <div class="mt-2">
                                <label for="Appliance" class="w-100" onclick="changeStep(1)">
                                    <div class="setpperlabel">
                                        <p class="mb-0 fw-bold">Appliance Repair</p>
                                        <img src="{{ asset('img/stepperangle.png') }}" alt="" class="img-fluid">
                                    </div>
                                </label>
                                <input type="radio" id="Appliance" class="d-none">
                            </div>
                            <div class="mt-2">
                                <label for="Electrical" class="w-100" onclick="changeStep(1)">
                                    <div class="setpperlabel">
                                        <p class="mb-0 fw-bold">Electrical</p>
                                        <img src="{{ asset('img/stepperangle.png') }}" alt="" class="img-fluid">
                                    </div>
                                </label>
                                <input type="radio" id="Electrical" class="d-none">
                            </div>
                            <div class="mt-2">
                                <label for="Plumbing" class="w-100" onclick="changeStep(1)">
                                    <div class="setpperlabel">
                                        <p class="mb-0 fw-bold">Plumbing</p>
                                        <img src="{{ asset('img/stepperangle.png') }}" alt="" class="img-fluid">
                                    </div>
                                </label>
                                <input type="radio" id="Plumbing" class="d-none">
                            </div>
                            <div class="mt-2">
                                <label for="Painting" class="w-100" onclick="changeStep(1)">
                                    <div class="setpperlabel">
                                        <p class="mb-0 fw-bold">Painting</p>
                                        <img src="{{ asset('img/stepperangle.png') }}" alt="" class="img-fluid">
                                    </div>
                                </label>
                                <input type="radio" id="Painting" class="d-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step">
                <div>
                    <h2 class="fw-bold">Date & Time</h2>
                    <p class="text-muted">Pick a date and time for your appointment, and we'll be there.</p>
                </div>
                <div class="row justify-content-between align-items-start">
                    <div class="col-lg-8">
                        <!-- Date Selector -->
                        <div class="d-flex flex-wrap justify-content-between booking-n align-items-center mt-2">
                            <button class="arrowbutton me-2" id="prevDateBtn" type="button"> <img
                                    src="{{ asset('img/leftangle.png') }}" alt=""> </button>
                            <div class="d-flex flex-grow-1 justify-content-evenly" id="dateContainer"></div>
                            <button class="arrowbutton ms-2" id="nextDateBtn" type="button"> <img
                                    src="{{ asset('img/stepperangle.png') }}" alt=""> </button>
                        </div>

                        <!-- Time Slot Grid -->
                        <div class="row mt-2 gx-2 me-2" id="timeContainer"></div>


                    </div>
                    <div class="col-lg-4 mt-2 mt-lg-0">
                        <div class="side-bg mt-2">
                            <p class="mb-0 font-bold topside">
                                Christmas Light Installation QUOTE REQUEST
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Continue Button -->
                <div class="text-start my-2">
                    <button class="nextbtn py-2" id="continueBtn" type="button"
                        onclick="changeStep(1)">Continue</button>
                </div>

            </div>

            <!-- Step 3 -->
            <div class="step">
                <div class="mycontainer">
                    <div class="row justify-content-between align-items-start">
                        <div>
                            <h2 class="fw-bold">Service Address </h2>

                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="Address" class="ms-2">Address</label>
                                    <input type="text" id="Address" placeholder="Street Address"
                                        class="w-100 custominput max-100" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="Apt" class="ms-2">Apt, Unit, Floor</label>
                                    <input type="text" id="Apt" placeholder="Optional"
                                        class="w-100 custominput max-100" required>
                                </div>
                            </div>
                            <div class="text-start mt-4">
                                <button class="nextbtn py-2" id="continueBtn" type="button"
                                    onclick="changeStep(1)">Continue</button>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="side-bg">
                                <p class="mb-0 font-bold topside">
                                    Christmas Light Installation QUOTE REQUEST
                                </p>
                                <div class="p-3">
                                    <div class="bottomitem">
                                        <img src="{{ asset('img/steppercal.png') }}" alt="">
                                        <div>
                                            <p class="mb-0 fw-bold">
                                                Monday, October 7th
                                            </p>
                                            <p class="mb-0 small">
                                                11:00 AM
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottomitem">
                                        <img src="{{ asset('img/stepperlocat.png') }}" alt="">
                                        <div>
                                            <p class="mb-0 fw-bold">
                                                17021 South Dixie Highway
                                            </p>
                                            <p class="mb-0 small">
                                                Palmetto Bay, FL 33157
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step">
                <div class="mycontainer">
                    <div class="row justify-content-between align-items-start">
                        <div>
                            <h2 class="fw-bold">Almost Done!</h2>
                            <p class="text-muted">Enter your contact info to finalize your appointment.</p>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <label for="Name" class="fw-medium">Full Name</label>
                                    <input type="text" id="Name" placeholder="Enter name"
                                        class="max-100 custominput">
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <label for="Phone" class="fw-medium">Phone</label>
                                    <input type="tel" id="Phone" placeholder="Enter phone"
                                        class="custominput max-100">
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <label for="Email" class="fw-medium">Email</label>
                                    <input type="email" id="Email" placeholder="Enter email"
                                        class="custominput max-100">
                                </div>
                                <div class="col-12 d-flex align-items-center mt-3">
                                    <div class="checkbox-wrapper-23">
                                        <input type="checkbox" id="check-23" />
                                        <label for="check-23" style="--size: 30px">
                                            <svg viewBox="0,0,50,50">
                                                <path d="M5 30 L 20 45 L 45 5"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <label for="check-23" class="small ms-2 text-muted">Send me notifications about
                                        this
                                        appointment via text message</label>
                                </div>
                                <a href="#"
                                    class="text-blue d-inline-block mt-3 fw-bold text-decoration-none">Apply
                                    Coupen</a>
                            </div>
                            <div class="text-start mt-4">
                                <button class="nextbtn py-2 mb-2" id="continueBtn" type="button"
                                    onclick="changeStep(1)">Book
                                    Now</button>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="side-bg">
                                <p class="mb-0 font-bold topside">
                                    Christmas Light Installation QUOTE REQUEST
                                </p>
                                <div class="p-3">
                                    <div class="bottomitem">
                                        <img src="{{ asset('img/steppercal.png') }}" alt="">
                                        <div>
                                            <p class="mb-0 fw-bold">
                                                Monday, October 7th
                                            </p>
                                            <p class="mb-0 small">
                                                11:00 AM
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottomitem">
                                        <img src="{{ asset('img/stepperlocat.png') }}" alt="">
                                        <div>
                                            <p class="mb-0 fw-bold">
                                                17021 South Dixie Highway
                                            </p>
                                            <p class="mb-0 small">
                                                Palmetto Bay, FL 33157
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step">
                <div class="container hght">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <img src="{{ asset('img/stepperthank.png') }}" alt="">
                            <div>
                                <p class="mb-0 fw-bold fs-4 mt-3">Thank You!</p>
                                <p class="mb-0 text-muted mt-2">
                                    Thank you for choosing The Repair Guy Services. We have sent a confirmation
                                    email to xyzcompany@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('Templates.Jslinks')
    <script>
        let currentStep = 0;
        document.getElementById('prevBtn').disabled = false;

        function updateProgressBar() {
            const progressBar = document.getElementById('progressBar');
            const totalSteps = document.querySelectorAll('.step').length;
            const progress = ((currentStep + 1) / totalSteps) * 100;
            progressBar.style.width = progress + '%';
        }

        function changeStep(direction) {
            const steps = document.querySelectorAll('.step');

            if (currentStep === 0 && direction === -1) {
                window.location.href = '{{ route('BookingService') }}';
                return;
            }

            // Hide current step
            steps[currentStep].classList.remove('active');

            // Update step index
            currentStep += direction;

            // Show new step
            steps[currentStep].classList.add('active');

            // Update Progress Bar
            updateProgressBar();

            const laststep = document.getElementById('prevBtn');
            laststep.disabled = currentStep === 4;
            if (currentStep === 4) {
                laststep.style.display = 'none';
            } else {
                laststep.style.display = '';
            }
            document.getElementById('prevBtn').disabled = false;
            document.getElementById('nextBtn').disabled = currentStep === steps.length - 1;
            document.getElementById('nextBtn').textContent = currentStep === steps.length - 1 ? 'Submit' : 'Next';


        }

        // Initialize Progress Bar
        updateProgressBar();
    </script>
    <script>
        const dateContainer = document.getElementById('dateContainer');
        const timeContainer = document.getElementById('timeContainer');
        const prevDateBtn = document.getElementById('prevDateBtn');
        const nextDateBtn = document.getElementById('nextDateBtn');

        // Default values
        let currentMonth = new Date().getMonth(); // Current month
        let currentYear = new Date().getFullYear(); // Current year
        let visibleStartIndex = 0; // Start index for visible dates
        const visibleDateCount = 4; // Number of visible dates
        let allDates = []; // Store all dates for the current month

        // Sample time slots
        const timeSlots = [
            '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM', '11:00 AM',
            '11:30 AM', '12:00 PM', '12:30 PM', '1:00 PM', '1:30 PM', '2:00 PM', '2:30 PM'
        ];

        // Generate all dates for the current month
        function generateDates(month, year) {
            allDates = [];
            const lastDay = new Date(year, month + 1, 0); // Last day of the month
            for (let day = 1; day <= lastDay.getDate(); day++) {
                allDates.push(new Date(year, month, day));
            }
        }

        // Render visible dates
        function renderVisibleDates() {
            dateContainer.innerHTML = '';
            const visibleDates = allDates.slice(visibleStartIndex, visibleStartIndex + visibleDateCount);

            visibleDates.forEach((date, index) => {
                const dateItem = document.createElement('div');
                dateItem.className = 'date-item text-center';
                dateItem.innerHTML = `
                    <div class="fw-bold">${date.toLocaleDateString('en-US', { weekday: 'short' }).toUpperCase()}</div>
                    <div>${date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' })}</div>
                `;

                // Set the first visible date as active by default
                if (index === 0 && visibleStartIndex === 0) {
                    dateItem.classList.add('active');
                    renderTimeSlots(date); // Render time slots for the active date
                }

                // Add click event for selecting a date
                dateItem.addEventListener('click', function() {
                    document.querySelectorAll('.date-item').forEach((item) => item.classList.remove(
                        'active'));
                    dateItem.classList.add('active');
                    renderTimeSlots(date); // Render time slots for the selected date
                });

                dateContainer.appendChild(dateItem);
            });

            // Disable buttons if out of bounds
            prevDateBtn.disabled = visibleStartIndex === 0;
            nextDateBtn.disabled = visibleStartIndex + visibleDateCount >= allDates.length;
        }

        // Render time slots for the selected date
        function renderTimeSlots(selectedDate) {
            timeContainer.innerHTML = '';
            timeSlots.forEach((time, index) => {
                const timeButton = document.createElement('button');
                timeButton.className = 'time-item w-100';
                timeButton.textContent = time;
                timeButton.type = 'button';

                // Set the first time slot as active by default
                if (index === 0) {
                    timeButton.classList.add('active');
                }

                // Add click event for selecting a time slot
                timeButton.addEventListener('click', function() {
                    document.querySelectorAll('.time-item').forEach((t) => t.classList.remove('active'));
                    timeButton.classList.add('active');
                });

                const col = document.createElement('div');
                col.className = 'col-6';
                col.appendChild(timeButton);
                timeContainer.appendChild(col);
            });
        }

        // Event listeners for Previous and Next buttons
        prevDateBtn.addEventListener('click', function() {
            if (visibleStartIndex > 0) {
                visibleStartIndex--;
                renderVisibleDates();
            }
        });

        nextDateBtn.addEventListener('click', function() {
            if (visibleStartIndex + visibleDateCount < allDates.length) {
                visibleStartIndex++;
                renderVisibleDates();
            }
        });

        // Initial render
        generateDates(currentMonth, currentYear);
        renderVisibleDates();
    </script>
</body>

</html>
