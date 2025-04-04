<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Automations Settings</title>
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

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Automations') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Create Automations</h5>
                    </div>
                </div>
                <div class="">
                    @include('Templates.BusinessUserNavBar')
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="right-bottom1">
                <div class="container-fluid h-100">
                    <form action="#" class="">
                        <h4 class="mb-0 blu2">Set Automations Settings</h4>
                        <div class="switch-field-main d-sm-flex flex-wrap align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle">
                                    <label class="switch-slider" for="toggle"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2">
                                <p class="mb-0">Email Automation Review Follow Up</p>
                            </div>
                            <div class="fields mt-3">
                                <input type="number" placeholder="00"
                                    class="border-0 tab-100 px-3 py-2 focus-none font-md bg-white rounded-3 mb-2">
                                <select name="" id="filter"
                                    class="border-white tab-100 pe-5 py-2 focus-none font-md bg-white rounded-3">
                                    <option value="" selected disabled hidden>Days</option>
                                    <option value="">Days</option>
                                    <option value="">Days</option>
                                </select>
                            </div>
                        </div>
                        <div class="switch-field-main d-sm-flex align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle2">
                                    <label class="switch-slider" for="toggle2"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2">
                                <p class="mb-0">Email Booking Confirmations</p>
                            </div>
                        </div>
                        <div class="switch-field-main d-sm-flex align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle3">
                                    <label class="switch-slider" for="toggle3"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2 ">
                                <p class="mb-0">Email Booking Appointment Reminders</p>
                            </div>
                            <div class="fields mt-3">
                                <input type="number" placeholder="00"
                                    class="border-0 tab-100 px-3 py-2 focus-none font-md bg-white rounded-3 mb-2">
                                <select name="" id="filter"
                                    class="border-white tab-100 pe-5 py-2 focus-none font-md bg-white rounded-3">
                                    <option value="" selected disabled hidden>Days</option>
                                    <option value="">Days</option>
                                    <option value="">Days</option>
                                </select>
                            </div>
                        </div>
                        <div class="switch-field-main d-sm-flex align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle4">
                                    <label class="switch-slider" for="toggle4"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2">
                                <p class="mb-0">SMS’ I Sent Over an Estimate</p>
                            </div>
                        </div>
                        <div class="switch-field-main d-sm-flex align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle5">
                                    <label class="switch-slider" for="toggle5"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2">
                                <p class="mb-0">SMS Quote Follow Up</p>
                            </div>
                        </div>
                        <div class="switch-field-main d-sm-flex align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle6">
                                    <label class="switch-slider" for="toggle6"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2">
                                <p class="mb-0">Email Quote Follow Up</p>
                            </div>
                        </div>
                        <div class="switch-field-main d-sm-flex align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle7">
                                    <label class="switch-slider" for="toggle7"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2">
                                <p class="mb-0">Miss Call Auto SMS</p>
                            </div>
                        </div>
                        <div class="switch-field-main d-sm-flex align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle8">
                                    <label class="switch-slider" for="toggle8"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2">
                                <p class="mb-0">Auto Reply to Google Reviews</p>
                            </div>
                        </div>
                        <div class="switch-field-main d-sm-flex align-items-center mt-4 p-2 border-bottom">
                            <div class="border-right">
                                <div class="switch3 me-3 d-flex align-items-center">
                                    <label class="switch-label">No</label>
                                    <input type="checkbox" class="switch-input" id="toggle9">
                                    <label class="switch-slider" for="toggle9"></label>
                                    <label class="switch-label">Yes</label>
                                </div>
                            </div>
                            <div class="me-sm-5 ms-sm-4 ms-0 Automation-para mt-sm-0 mt-2">
                                <p class="mb-0">Automated Responses to Textes</p>
                            </div>
                            <div class="fields mt-3">
                                <input type="number" placeholder="00"
                                    class="border-0 tab-100 px-3 py-2 focus-none font-md bg-white rounded-3 mb-2">
                                <select name="" id="filter"
                                    class="border-white tab-100 pe-5 py-2 focus-none font-md bg-white rounded-3">
                                    <option value="" selected disabled hidden>Days</option>
                                    <option value="">Days</option>
                                    <option value="">Days</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-5 mb-2">
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button class="border py-2 w-100 rounded-3">Cancel</button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button class="border py-2 bg-sky text-white w-100 rounded-3">Save Automation</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('Templates.UserLogoutModule')

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu1gwHCSzLG9ACacQqLk-LG8oJMkarNF0&libraries=places&callback=initAutocomplete">
    </script>
    @include('Templates.Jslinks')
</body>

</html>
