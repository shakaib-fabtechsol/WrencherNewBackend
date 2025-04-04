<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')

    <title>Settings</title>
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
                                <h3 class="hding mb-0 blu">Settings</h3>
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
                                <div class="p-2">
                                    <h2 class="mt-2">Settings</h2>
                                    <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                    <div class="row  py-3 mt-3">
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <a class="text-decoration-none text-black"
                                                href="{{ route('BusinessUser.SettingsBillingDetails') }}">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/billingset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Billing Details</h5>
                                                        <p class="mb-0">Name, Description, Duration and Price</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <a class="text-decoration-none text-black"
                                                href="{{ route('BusinessUser.SettingsBillingDetails') }}">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/businessset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Business Details</h5>
                                                        <p class="mb-0">Business Name, Description, address</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/brandingset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Branding</h5>
                                                        <p class="mb-0">The purpose of branding is to create
                                                            relationships
                                                            with your customers. The easiest
                                                            way to do this is to treat your brand as a person</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black"
                                                href="{{ route('BusinessUser.SettingsPaymentSetup') }}">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/payment (3).svg') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Payment Setup(Stripe)</h5>
                                                        <p class="mb-0">Cash, Check, Credit card, Stripe</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black"
                                                href="{{ route('BusinessUser.Notifications') }}">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/clientset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Client/Team Notifications</h5>
                                                        <p class="mb-0">Notify clients about new promotions, planned
                                                            maintenance, new product, or new
                                                            server location availability</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black"
                                                href="{{ route('PlanYourService') }}">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/jobset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Job Assignment</h5>
                                                        <p class="mb-0">Give customers the option to book this
                                                            service
                                                            as a
                                                            recurring appointment</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/smsset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Templates for SMS/Email Messages</h5>
                                                        <p class="mb-0">Explore professionally designed message
                                                            templates you can customize and
                                                            share easily</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black"
                                                href="{{ route('BusinessUser.AddNewJob') }}">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/jobformset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Job Form</h5>
                                                        <p class="mb-0">Job Application Form which allows to collect
                                                            personal and contact information,
                                                            current employment status, desired position, available start
                                                            date</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black"
                                                href="{{ route('BusinessUser.AddNewService') }}">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/editserviceset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Add/Edit Services</h5>
                                                        <p class="mb-0">Showcase attributes about this service or
                                                            your
                                                            business when customers book online</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/quickbooksset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Quickbook Integration</h5>
                                                        <p class="mb-0">Integrating apps into QuickBooks can help
                                                            automate
                                                            and streamline tasks such as
                                                            invoicing, expense management, inventory management.</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3 h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/automationset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Automations</h5>
                                                        <p class="mb-0">Connect your business apps and design
                                                            interactive
                                                            workflows to automate
                                                            manual work</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/refralset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Referral System</h5>
                                                        <p class="mb-0">This could be anything from a discount on
                                                            their
                                                            next
                                                            service or free shipping on
                                                            future orders</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <a class="text-decoration-none text-black" href="#">
                                                <div class="scard d-flex align-items-center rounded-3 p-3  h-100">
                                                    <div class="size icon-bg">
                                                        <img src="{{ asset('img/jobsearchset.png') }}"
                                                            class="image-fluid img">
                                                    </div>
                                                    <div class="mx-3 w-100">
                                                        <h5 class="font-c">Job Instruction</h5>
                                                        <p class="mb-0">Job Instruction teaches you how to train
                                                            people
                                                            to
                                                            excel at their jobs, ensuring safety,
                                                            correctness, and conscientiousness.</p>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </a>
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
    @include('Templates.Jslinks')


</body>

</html>
