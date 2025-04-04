<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Home</title>
</head>

<body>
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif
    <header class="header-bg">
        @include('Templates.Header')
        <section class="bg-effect pt-5">
            <div class="mycontainer">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-7 col-lg-8 py-4">
                        <h2 class="fs-1 text-black text-center fw-bold">
                            Accessories Maintenance Services with 100% Accessories Care and Support
                        </h2>
                        <p class="text-center">Let our Exports take care of your Accessories so that can focus on your
                            Goals.</p>
                        <div class="mt-5 d-flex justify-content-center">
                            <a href="{{ route('PlanYourService') }}"
                                class="bg-sky text-white text-decoration-none text-capitalize rounded-pill px-5 py-3">Plan
                                your service</a>
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-4">
                        <img src="{{ asset('img/hero3.png') }}" alt="hero1" class="w-100 h-100">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('img/hero2.png') }}" alt="hero1" class="w-100 h-100">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('img/hero1.png') }}" alt="hero1" class="w-100 h-100">
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section>
        <div class="mycontainer">
            <div class="row justify-content-center py-5">
                <div class="col-md-10 col-xl-8">
                    <div class="row">
                        <div class="col-sm-4 d-flex justify-content-sm-center my-2 align-items-center">
                            <img src="{{ asset('img/working1.png') }}" class="me-2 img-fluid w-auto h-auto"
                                alt="">
                            <p class="mb-0">Administration</p>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-sm-center my-2 align-items-center">
                            <img src="{{ asset('img/working2.png') }}" class="me-2 img-fluid w-auto h-auto"
                                alt="">
                            <p class="mb-0">Tcations Panel</p>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-sm-center my-2 align-items-center">
                            <img src="{{ asset('img/working3.png') }}" class="me-2 img-fluid w-auto h-auto"
                                alt="">
                            <p class="mb-0">User Panel</p>
                        </div>
                    </div>
                </div>
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
                    <img src="{{ asset('img/logo1.png') }}" alt="logo1" class="img-fluid w-auto h-auto">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo2.png') }}" alt="logo2" class="img-fluid w-auto h-auto">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo3.png') }}" alt="logo3" class="img-fluid w-auto h-auto">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo4.png') }}" alt="logo4" class="img-fluid w-auto h-auto">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo5.png') }}" alt="logo5.png" class="img-fluid w-auto h-auto">
                </div>
                <div class="col-4 col-sm-3 col-md-2 d-flex align-items-center justify-content-center px-2 px-md-3 my-3">
                    <img src="{{ asset('img/logo6.png') }}" alt="logo6.png" class="img-fluid w-auto h-auto">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-ngrey1 mt-5">
        <div class="mycontainer">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5 d-flex justify-content-center">
                    <img src="{{ asset('img/progress.png') }}" alt="" class="img-fluid w-100 h-100">
                </div>
                <div class="col-md-6 col-lg-5 ps-5">
                    <h2 class="fs-2 fw-semibold">
                        Overall Technician Complete Projects
                    </h2>
                    <h3 class="fs-5">Sort out the most important and urgent tasks & concentrate on them first base
                        your priorities
                    </h3>
                    <p class="text-secondary">Multi-voting helps a committee or group narrow down a large number of
                        items into
                        just a few items on which to focus & similar to multi-voting, this approach.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="mycontainer">
            <h2 class="text-center mt-5 fw-semibold">
                Check all features
            </h2>
            <div class="row">
                <div class="col-sm-6 col-md-4 my-3">
                    <img src="{{ asset('img/feature1.png') }}" alt="feature1" class="img-fluid w-auto h-auto">
                    <h2 class="fs-4 mt-3 fw-semibold">Resource Management</h2>
                    <p class="mb-0">Resource management is the process of pre-planning, scheduling, and allocating
                        your resources
                        to maximize efficiency.</p>
                </div>
                <div class="col-sm-6 col-md-4 my-3">
                    <img src="{{ asset('img/feature2.png') }}" alt="feature1" class="img-fluid w-auto h-auto">
                    <h2 class="fs-4 mt-3 fw-semibold">Increase Productivity</h2>
                    <p class="mb-0">Increased productivity means greater output from the same amount of input & It is
                        getting
                        important things done consistently.</p>
                </div>
                <div class="col-sm-6 col-md-4 my-3">
                    <img src="{{ asset('img/feature3.svg') }}" alt="feature1" class="img-fluid w-auto h-auto">
                    <h2 class="fs-4 mt-3 fw-semibold">Easy Collaboration</h2>
                    <p class="mb-0">Working collaboratively helps improve productivity and gives employees a sense of
                        purpose in
                        the organization.</p>
                </div>
                <div class="col-sm-6 col-md-4 my-3">
                    <img src="{{ asset('img/feature4.png') }}" alt="feature1" class="img-fluid w-auto h-auto">
                    <h2 class="fs-4 mt-3 fw-semibold">Unified Reporting</h2>
                    <p class="mb-0">With unified reporting, all the project stakeholders can view the test reports
                        for functional
                        tests on dashboard.</p>
                </div>
                <div class="col-sm-6 col-md-4 my-3">
                    <img src="{{ asset('img/feature5.svg') }}" alt="feature1" class="img-fluid w-auto h-auto">
                    <h2 class="fs-4 mt-3 fw-semibold">Advanced Inventory</h2>
                    <p class="mb-0">With Advanced Inventory, you're equipped with an automated system that calculates
                        the quantity
                        and true value of your inventory.</p>
                </div>
                <div class="col-sm-6 col-md-4 my-3">
                    <img src="{{ asset('img/feature6.svg') }}" alt="feature1" class="img-fluid w-auto h-auto">
                    <h2 class="fs-4 mt-3 fw-semibold">Optimize Workflow</h2>
                    <p class="mb-0">Operations Optimization is the process of ensuring that your operations are
                        performing as
                        efficient & effective.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="mycontainer">
            <div class="row align-items-center bg-black rounded-4 px-4 py-5">
                <div class="col-md-6">
                    <h2 class="fs-3 text-white">About Our Services</h2>
                    <p class="mt-3 text-lwhite">Premium maintenance services at your doorstep</p>
                    <p class="mt-2 text-lwhite">
                        The Company Name Here is a maintenance & repair company that
                        provides services to residential and commercial clients. The company
                        is registered with Intonations Engineering Council and also provides
                        construction, renovation and complete facilities management services.
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <p class="fs-2 me-2 text-white fw-semibold">12K+</p>
                                <p class="text-lwhite small">Projects
                                    Successfully Complete</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <p class="fs-2 me-2 text-white fw-semibold">2024</p>
                                <p class="text-lwhite small">Agencies Registered</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-md-1 mt-4 mt-md-0 col-md-5">
                    <img src="{{ asset('img/contact.png') }}" alt="" class="img-fluid w-100 h-100">
                </div>
            </div>
        </div>
    </section>
    <section id="industries" class="py-4 py-md-5">
        <div class="mycontainer">
            <h2 class="text-center mt-5 fw-semibold">
                Industries
            </h2>
            <p class="text-center">Resource management is the process of pre-planning, scheduling, and allocating your
                resources to maximize efficiency.</p>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 my-3">
                    <div class="rounded-3 p-2 bg-white shadow h-100">
                        <div class="bg-bluenew  rounded-3 d-flex justify-content-center py-3">
                            <img src="" alt="" class="ind-img">
                        </div>
                        <p class="fw-medium my-3 text-center">title</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-lgrey py-5 mt-5">
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
    <section class="my-5">
        <div class="mycontainer">
            <div class="bg-contactus px-3 py-4 px-sm-5 rounded-4">
                <h2 class="fs-3 fw-semibold text-center">How can we help you?</h2>
                <div class="row">
                    <div class="col-md-6 my-3">
                        <div class="bg-white p-3 rounded-4">
                            <div class="d-flex align-items-center">
                                <img class="icon-60px me-3" src="{{ asset('img/mail-icon.png') }}" alt="Mail">
                                <p class="fw-semibold fs-5 mb-0">Email Us</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="bg-white p-3 rounded-4">
                            <div class="d-flex align-items-center">
                                <img class="icon-60px me-3" src="{{ asset('img/phone-icon.png') }}" alt="Mail">
                                <p class="fw-semibold fs-5 mb-0">Request a call</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="#">
                    <div class="row my-4">
                        <div class="col-12 col-md-4">
                            <div class="d-flex w-100 flex-column bg-contact-info text-white p-4 rounded-3 max-w-300px">
                                <div>
                                    <p class="fw-semibold">Contact Information</p>
                                    <i class="fa-solid fa-phone-volume small"></i>
                                    <p><a class="c-info-link" href="tel:+231 886- 73- 150">+231 886- 73- 150</a>,<a
                                            class="c-info-link" href="tel:+231 886- 57- 279">886-
                                            57-
                                            279</a>,<a class="c-info-link" href="tel:+231 770- 76- 313">770- 76-
                                            313</a></p>
                                    <i class="fa-solid fa-envelope small"></i>
                                    <p><a class="c-info-link" href="mailto:example@gmail.com">example@gmail.com</a>
                                    </p>
                                    <i class="fa-solid fa-location-dot small"></i>
                                    <p class="small mb-0">examplelacationdetailhere</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mt-5 mt-md-0">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="small fw-medium" for="fname">Full Name</label>
                                    <input class="crneinput" type="text" name="fname" id="fname"
                                        placeholder="Type name here">
                                </div>
                                <div class="col-sm-6">
                                    <label class="small fw-medium" for="email">Your Email</label>
                                    <input class="crneinput" type="email" name="email" id="email"
                                        placeholder="Type here">
                                </div>
                                <div class="mt-3">
                                    <label class="small fw-medium" for="message">Message</label>
                                    <textarea class="crneinput" rows="7" name="message" id="message" placeholder="Type here"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <input class="btn-submit rounded-pill py-2 py-sm-3 px-4 px-sm-5" type="submit"
                            value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('Templates.Footer')
    </script>
    @include('Templates.Jslinks')
</body>

</html>
