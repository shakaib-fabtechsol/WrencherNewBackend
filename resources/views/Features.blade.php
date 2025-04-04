<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Feature</title>
</head>

<body>
    <header class="header-bg">
        @include('Templates.Header')
        <section class="bg-effect pt-5">
            <div class="mycontainer">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <h2 class="fs-1 text-black text-center text-lg-start fw-bold">
                            Wrencher will be the one
                            and only software you will
                            need for your business
                        </h2>
                        <p class="mb-0 mt-4 text-center text-lg-start">Start your free 14-day trial and access all .
                            features, no credit card required.</p>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center mt-5">
                        <img src="{{ asset('img/feature-hero.png') }}" alt="hero" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section>
        <div class="mycontainer">
            <div class="row justify-content-center py-5">
                <h2 class="text-center mt-5 fw-semibold">
                    Working with world class partners.<br>
                    We`re partner first!
                </h2>
            </div>
        </div>
    </section>
    <section class="bg-black">
        <div class="mycontainer">
            <div class="row py-4 align-items-center justify-content-center">
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo1.png') }}" alt="logo1" class="img-fluid">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo2.png') }}" alt="logo2" class="img-fluid">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo3.png') }}" alt="logo3" class="img-fluid">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo4.png') }}" alt="logo4" class="img-fluid">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo5.png') }}" alt="logo5.png" class="img-fluid">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo6.png') }}" alt="logo6.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-lg-4">
        <div class="mycontainer">
            <h2 class="fw-bold text-center mb-5">
                Platform Features
            </h2>
        </div>
        <div class="unlock-sec ">
            <div class="mycontainer">
                <div class="row px-3 px-md-0 pt-3 pb-5">
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Scheduling</h5>
                            <p class="mb-0">Schedule all jobs on the calendar and assign team
                                members to each job.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">CRM </h5>
                            <p class="mb-0">never loose a customer again. Organize all
                                leads that come in, details where the customer
                                is in the sales process. (Lead in, Follow up call,
                                Needs estimate, Estimate follow up, Job won) Estimates/Quotes - create estimates that
                                close
                                more leads with easy acceptance, online
                                booking and more.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Two way communications</h5>
                            <p class="mb-0">Organize your calls/texts in one location that you
                                or your team can respond to. Allows the ability
                                to send an auto missed call SMS to follow up
                                with lead when your busy.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Invoices</h5>
                            <p class="mb-0">Collect payments and organize materials,
                                labor cost and more.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Website builder</h5>
                            <p class="mb-0">Build your website with easy to use templets.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Automations </h5>
                            <p class="mb-0">Reduce admin workload, automate tasks to close
                                more jobs, make less mistakes.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Reputation management</h5>
                            <p class="mb-0"> Get more 5 star reviews to rank higher on
                                google, yelp, next door and more.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Marketing</h5>
                            <p class="mb-0">Organize all your marketing in one place, ads,
                                email campaigns and more.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Online Booking platform</h5>
                            <p class="mb-0">Put your services online, allow customers to book
                                directly online.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Customizable services</h5>
                            <p class="mb-0">customize all services you provide for easy
                                invoicing, estimates, booking.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Pricebook</h5>
                            <p class="mb-0">Organize all materials, cost and inventory
                                management.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Team member accounts</h5>
                            <p class="mb-0">Technician accounts to assign jobs, edit
                                availability and more..</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Internal chat system</h5>
                            <p class="mb-0">Chat directly with your field technicians with
                                notifications Chat directly with your field
                                technicians with notifications.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Job Organization</h5>
                            <p class="mb-0">Organize all open, closed, unscheduled jobs.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Contracts</h5>
                            <p class="mb-0">create contracts for each job.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Contracts</h5>
                            <p class="mb-0">create contracts for each job.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Reports</h5>
                            <p class="mb-0">Key metrics about your business.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 position-relative potential-box">
                        <div class="trans-shadow unlock-card p-4 rounded-4 h-100">
                            <h5 class="fw-semi">Resources</h5>
                            <p class="mb-0">Free tools to help you succeed home page
                                content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="why-wrencher">
        <div class="mycontainer">
            <div class=" py-4">
                <h2 class="black-color fw-semibold text-center mb-4">
                    Why Wrencher
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="simplihost-card shadow p-3 h-100">
                            <div>
                                <img src="{{ asset('img/why1.png') }}" alt="reason" class="w-100 h-100" />
                            </div>
                            <div>
                                <p class="mb-0 fs-5 fw-semi sky fw-semibold mt-3">
                                    All-In-One Awesomeness
                                </p>
                            </div>
                            <p class="mb-0 light-grey mt-2">No need to buy separate systems for cleaning
                                or remote locks—it’s all</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="simplihost-card shadow p-3 h-100">
                            <div>
                                <img src="{{ asset('img/why2.png') }}" alt="reason" class="w-100 h-100" />
                            </div>
                            <div>
                                <p class="mb-0 fs-5 fw-semi sky fw-semibold mt-3">
                                    Free Personal Onboarding
                                </p>
                            </div>
                            <p class="mb-0 light-grey mt-2">We’ll get you up and running in no time with
                                personalized help from a real live person.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="simplihost-card shadow p-3 h-100">
                            <div>
                                <img src="{{ asset('img/why3.png') }}" alt="reason" class="w-100 h-100" />
                            </div>
                            <div>
                                <p class="mb-0 fs-5 fw-semi sky fw-semibold mt-3">
                                    No Extra Charges
                                </p>
                            </div>
                            <p class="mb-0 light-grey mt-2">Access every feature from day one, with no
                                hidden fees or add-ons.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-lgrey py-5 mt-lg-5">
        <div class="mycontainer">
            <div class="row">
                <div class="col-g-10 mx-auto">
                    <h2 class="fw-semibold text-center">What our customers say</h2>
                    <p class="text-center mt-4">"Thank you for your trust in Crypt Land! We are grateful for your
                        feedback and are
                        committed to providing the best [products/services offered]. Read what our clients have to say
                        about their
                        experience with us.</p>
                </div>
            </div>
            <div class="d-flex flex-wrap mt-4">
                <div class="test-col">
                    <div class="bg-white p-xl-4 p-3 rounded-3 d-flex flex-column justify-content-between ">
                        <p class="mb-0 text-secondary">Teamollo delivered the site within the timeline as they
                            requested. Inthe end,
                            the client found a 50% increase in traffic with in days since its launch. They also had an
                            impressive
                            ability to use technologies that the company hasn`t used, which have also proved to be easy
                            to use and
                            reliable.</p>
                        <div class="mt-5 d-flex align-items-center">
                            <div>
                                <img src="{{ asset('img/ashley.png') }}" alt="" class="ashley-img">
                            </div>
                            <div class="ps-1">
                                <p class="fw-medium fs-5 mb-0">Ashley Cooper</p>
                                <div class="d-flex align-items-center mt-1">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-col">
                    <div class="bg-white p-xl-4 p-3 rounded-3 d-flex flex-column justify-content-between noah">
                        <p class="mb-0 text-secondary">Teamollo delivered the site within the timeline as they
                            requested. Inthe end,
                            the client found a 50% increase in traffic with in days since its launch. </p>
                        <div class="mt-5 d-flex align-items-center">
                            <div>
                                <img src="{{ asset('img/noah-jack.png') }}" alt="" class="ashley-img">
                            </div>
                            <div class="ps-1">
                                <p class="fw-medium fs-5 mb-0">Ashley Cooper</p>
                                <div class="d-flex align-items-center mt-1">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-col">
                    <div class="bg-white p-xl-4 p-3 rounded-3 d-flex flex-column justify-content-between ">
                        <p class="mb-0 text-secondary">Teamollo delivered the site within the timeline as they
                            requested. Inthe end,
                            the client found a 50% increase in traffic with in days since its launch. They also had an
                            impressive
                            ability to use technologies that the company hasn`t used, which have also proved to be easy
                            to use and
                            reliable.</p>
                        <div class="mt-5 d-flex align-items-center">
                            <div>
                                <img src="{{ asset('img/ashley.png') }}" alt="" class="ashley-img">
                            </div>
                            <div class="ps-1">
                                <p class="fw-medium fs-5 mb-0">Ashley Cooper</p>
                                <div class="d-flex align-items-center mt-1">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-col">
                    <div class="bg-white p-xl-4 p-3 rounded-3 d-flex flex-column justify-content-between h-100">
                        <p class="mb-0 text-secondary">Teamollo delivered the site within the timeline as they
                            requested. Inthe end,
                            the client found a 50% increase in traffic with in days since its launch. They also had an
                            impressive
                            ability to use technologies that the company hasn`t used, which have also proved to be easy
                            to use and
                            reliable.</p>
                        <div class="mt-5 d-flex align-items-center">
                            <div>
                                <img src="{{ asset('img/ashley.png') }}" alt="" class="ashley-img">
                            </div>
                            <div class="ps-1">
                                <p class="fw-medium fs-5 mb-0">Ashley Cooper</p>
                                <div class="d-flex align-items-center mt-1">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-col margin-nv">
                    <div class="bg-white p-xl-4 p-3 rounded-3 d-flex flex-column justify-content-between h-100">
                        <p class="mb-0 text-secondary">Teamollo delivered the site within the timeline as they
                            requested. Inthe end,
                            the client found a 50% increase in traffic with in days since its launch. They also had an
                            impressive
                            ability to use technologies that the company hasn`t used, which have also proved to be easy
                            to use and
                            reliable.Teamollo delivered the site within the timeline as they requested. Inthe end, the
                            client found a
                            50% increase in traffic with in days since its launch. </p>
                        <div class="mt-5 d-flex align-items-center">
                            <div>
                                <img src="{{ asset('img/ashley.png') }}" alt="" class="ashley-img">
                            </div>
                            <div class="ps-1">
                                <p class="fw-medium fs-5 mb-0">Ashley Cooper</p>
                                <div class="d-flex align-items-center mt-1">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-col">
                    <div class="bg-white p-xl-4 p-3 rounded-3 d-flex flex-column justify-content-between h-100">
                        <p class="mb-0 text-secondary">Teamollo delivered the site within the timeline as they
                            requested. Inthe end,
                            the client found a 50% increase in traffic with in days since its launch. They also had an
                            impressive
                            ability to use technologies that the company hasn`t used, which have also proved to be easy
                            to use and
                            reliable.</p>
                        <div class="mt-5 d-flex align-items-center">
                            <div>
                                <img src="{{ asset('img/ashley.png') }}" alt="" class="ashley-img">
                            </div>
                            <div class="ps-1">
                                <p class="fw-medium fs-5 mb-0">Ashley Cooper</p>
                                <div class="d-flex align-items-center mt-1">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="mycontainer">
            <div>
                <div class="row justify-content-between">
                    <h2 class="fs-2 fw-bold text-center">Frequently Asked Questions</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <!-- Question 1 -->
                    <div class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                        <h2 class="accordion-header rounded-4 border-0 py-0" id="headingOne">
                            <button class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Is there a free trial available?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse pt-0 mt-0 collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free,
                                personalized
                                30-minute onboarding call to get you up and running as soon as possible.
                            </div>
                        </div>
                    </div>
                    <!-- Question 2 -->
                    <div class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                        <h2 class="accordion-header rounded-4 border-0 py-0" id="headingTwo">
                            <button class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Can I change my plan later?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse pt-0 mt-0 collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                Absolutely! You can switch plans at any time to accommodate your changing needs.
                            </div>
                        </div>
                    </div>
                    <!-- Question 3 -->
                    <div class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                        <h2 class="accordion-header rounded-4 border-0 py-0" id="headingThree">
                            <button class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                What is your cancellation policy?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse pt-0 mt-0 collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                We offer a hassle-free cancellation policy. You can cancel your subscription anytime
                                before the next
                                billing cycle.
                            </div>
                        </div>
                    </div>
                    <!-- Question 4 -->
                    <div class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                        <h2 class="accordion-header rounded-4 border-0 py-0" id="headingFour">
                            <button class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                How does billing work?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse pt-0 mt-0 collapse"
                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                Billing is monthly and occurs at the start of each billing period. You can find all
                                billing details
                                in your account settings.
                            </div>
                        </div>
                    </div>
                    <!-- Question 5 -->
                    <div class="accordion-item my-3 border-0 accordian-shadow py-2 rounded-4 px-md-2">
                        <h2 class="accordion-header rounded-4 border-0 py-0" id="headingFive">
                            <button class="accordion-button shadow-none bg-white rounded-4 fs-6 fw-bold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Are there any discounts available?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse pt-0 mt-0 collapse"
                            aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-0 mt-0 text-secondary">
                                Yes, we offer discounts for annual subscriptions. Additionally, there are seasonal
                                promotions, so
                                keep an eye out!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @include('Templates.Footer')
    @include('Templates.Jslinks')
</body>

</html>
