<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Automations</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <!-- <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Marketing</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Automations</span>
                                </h3> -->
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
                            <div class="d-lg-flex align-items-center justify-content-between">
                                <div>
                                    <h4>Automations</h4>
                                    <p class="gre mb-0">Keep tabs on every part of your business with over 10 built-in
                                        reports to choose from.</p>
                                </div>
                                <div class="text-end">
                                    <a href="{{ route('BusinessUser.AutomationSettings') }}"
                                        class="shadow mt-3 mt-lg-0  rounded-2 px-4 text-nowrap py-2 bg-sky text-decoration-none d-inline-block text-white border-0">Add
                                        Automation</a>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Automations</th>
                                            <th>Trigger</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-medium">
                                        <tr class="align-middle ">
                                            <td>Email Automation Review Follow Up</td>
                                            <td>Email Review</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>Email Booking Confirmations</td>
                                            <td>Email Booking</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>Email Booking Appointment Reminders</td>
                                            <td>Appointment Reminders</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>SMS’ I Sent Over an Estimate</td>
                                            <td>Estimate</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>Email Quote Follow up</td>
                                            <td>Email Review</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>Missed call Auto SMS </td>
                                            <td>Estimate</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>Auto Reply to Google reviews</td>
                                            <td>Estimate</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>Automated responses to texts</td>
                                            <td>Estimate</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>SMS Quote Follow up</td>
                                            <td>Email Review</td>
                                            <td>
                                                <p class="mb-0 green">Active</p>
                                            </td>
                                            <td>
                                                <div class="action-td bg-bin">
                                                    <a href="#"><img src="{{ asset('img/delete-pic.svg') }}"
                                                            alt="pic" class="table-bin"></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')

</body>

</html>
