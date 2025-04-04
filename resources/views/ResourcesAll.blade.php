<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>All Resources</title>
</head>

<body>
    <header class="header-bg">
        @include('Templates.Header')
        <section class="bg-effect">
            <div class="mycontainer">
                <div class="row align-items-center py-5 justify-content-between">
                    <div class="col-lg-6">
                        <h2 class="fs-1 text-black text-center text-lg-start fw-bold">
                            Trainings
                        </h2>
                        <p class="mb-0 mt-4 text-center text-lg-start">Expert advice, entrepreneur success stories, best
                            practices, and tools
                            to run smarter, more efficient service businesses.</p>
                        <p class="mb-0 mt-4 text-center text-lg-start">Expert advice, entrepreneur success stories, best
                            practices, and tools
                            to run smarter, more efficient service businesses.</p>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center ">
                        <img src="{{ asset('img/training-all.png') }}" alt="hero" class="img-fluid">
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
    <section class="my-5 position-relative">
        <div class="mycontainer">
            <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between align-items-center">
                <div class="my-2 me-3">
                    <div class="search-topics d-flex align-items-center shadow-sm">
                        <input type="text" placeholder="Search Topics" class="w-100 px-2 border-0 small">
                        <button class="search-btn bg-search-btn rounded-inherit px-2 py-1 text-white"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
                <div class="d-flex justify-content-end my-2 d-sm-none">
                    <div class="search-topics-toggle-btn pointer">
                        <i class="fas fa-bars fs-5"></i>
                    </div>
                </div>
                <div class="my-2 ms-auto">
                    <div class="d-flex align-items-center">
                        <p class="fw-semibold mb-0">Filter by Topics:</p>
                        <div class="ms-2">
                            <div
                                class="d-flex ps-3 my-lg-0 me-lg-2 filter-width mt-sm-0 mt-2 align-items-center border bg-white rounded-2">
                                <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                <select name=""
                                    class="w-100 pe-3 py-2 focus-none border-white me-1 font-md bg-transparent">
                                    <option value="" selected disabled hidden>All</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 search-topics-left d-sm-block ">
                    <div class="bg-white p-3 p-sm-0 custom-left">
                        <div class="d-flex justify-content-end d-sm-none">
                            <i class="fas fa-times pointer close-filter"></i>
                        </div>
                        <ul class="topics-lists">
                            <li><a class="topics-link active" href="#">All</a></li>
                            <li><a class="topics-link" href="#">Entrepreneur Inspiration</a></li>
                            <li><a class="topics-link" href="#">Managing Your Business</a></li>
                            <li><a class="topics-link" href="#">Pricing and Payments</a></li>
                            <li><a class="topics-link" href="#">Sales and Marketing</a></li>
                            <li><a class="topics-link" href="#">Starting Your Business</a></li>
                            <li><a class="topics-link" href="#">Working with Clients</a></li>
                        </ul>
                        <ul class="topics-lists">
                            <li><a class="topics-link active" href="#">Industry</a></li>
                            <li><a class="topics-link" href="#">Handyman</a></li>
                            <li><a class="topics-link" href="#">Plumbing</a></li>
                            <li><a class="topics-link" href="#">Electrical</a></li>
                            <li><a class="topics-link" href="#">HVAC</a></li>
                            <li><a class="topics-link" href="#">Window Cleaning</a></li>
                            <li><a class="topics-link" href="#">Landscaping</a></li>
                            <li><a class="topics-link" href="#">Roofing</a></li>
                            <li><a class="topics-link" href="#">General Contractor</a></li>
                            <li><a class="topics-link" href="#">Painters</a></li>
                            <li><a class="topics-link" href="#">Pressure Washing</a></li>
                            <li><a class="topics-link" href="#">Concrete</a></li>
                            <li><a class="topics-link" href="#">Junk Removal</a></li>
                            <li><a class="topics-link" href="#">Home Cleaning</a></li>
                            <li><a class="topics-link" href="#">Appliance Repair</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide1.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide2.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide3.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide1.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide2.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide3.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide1.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide2.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide3.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide1.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide2.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide3.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide1.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide2.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-3">
                            <div class="rounded-4 overflow-hidden h-100">
                                <div>
                                    <img class="w-100" src="{{ asset('img/slide3.png') }}" alt="img">
                                </div>
                                <div class="text-center">
                                    <p class="brown fw-semibold fs-5 mb-0 mt-2">18 Min Read</p>
                                    <p class="mb-0 small">How to Start a Lawn Care Business (According to 6 Experts)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-end p-3">
                        <div class="d-flex align-items-center">
                            <a href="#">
                                <img class="icon-40px" src="{{ asset('img/arrow-left.png') }}" alt="img">
                            </a>
                            <p class="brown mb-0 mx-4 fw-semibold">1 / 40</p>
                            <a href="#">
                                <img class="icon-40px" src="{{ asset('img/arrow-right.png') }}" alt="img">
                            </a>
                        </div>
                    </div>
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
    <section class="bg-lgrey mt-5 py-lg-5 py-4">
        <div class="mycontainer py-4">
            <div class="text-center">
                <h2>Calculators</h2>
                <p>
                    What do leading service businesses invest in hiring and retaining top talent? Access current U.S.
                    salary data,
                    categorized by state, experience level, and job title.
                </p>
            </div>
            <div class="position-relative">
                <div class="rightarrow2">
                    <i class="fa-solid fa-arrow-right sldright"></i>
                </div>
                <div class="slider2 px-sm-3">
                    <div class="slides p-2 h-100">
                        <div class="text-center bg-white rounded-4 p-3 mt-2 h-100">
                            <img src="{{ asset('img/calculator.png') }}" alt="" class="w-100 ">
                            <div class="text-start mt-2">
                                <p class="slideheading mb-0 fs-5 fw-semibold sky">Plumber</p>
                                <p class="slidetext mb-0">
                                    No need to buy separate systems for cleaning
                                    or remote locks—it’s all
                                </p>
                                <button class="mt-2 bluebtn border-0">
                                    See Salary Guide
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="slides p-2 h-100">
                        <div class="text-center bg-white rounded-4 p-3 mt-2 h-100">
                            <img src="{{ asset('img/calculator.png') }}" alt="" class="w-100 ">
                            <div class="text-start mt-2">
                                <p class="slideheading mb-0 fs-5 fw-semibold sky">HVAC</p>
                                <p class="slidetext mb-0">
                                    We’ll get you up and running in no time with
                                    personalized help from a real live person.
                                </p>
                                <button class="mt-2 bluebtn border-0">
                                    See Salary Guide
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="slides p-2 h-100">
                        <div class="text-center bg-white rounded-4 p-3 mt-2 h-100">
                            <img src="{{ asset('img/calculator2.png') }}" alt="" class="w-100 ">
                            <div class="text-start mt-2">
                                <p class="slideheading mb-0 fs-5 fw-semibold sky">Cleaner</p>
                                <p class="slidetext mb-0">
                                    Access every feature from day one, with no
                                    hidden fees or add-ons.
                                </p>
                                <button class="mt-2 bluebtn border-0">
                                    See Salary Guide
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="slides p-2 h-100">
                        <div class="text-center bg-white rounded-4 p-3 mt-2 h-100">
                            <img src="{{ asset('img/calculator.png') }}" alt="" class="w-100 ">
                            <div class="text-start mt-2">
                                <p class="slideheading mb-0 fs-5 fw-semibold sky">Plumber</p>
                                <p class="slidetext mb-0">
                                    No need to buy separate systems for cleaning
                                    or remote locks—it’s all
                                </p>
                                <button class="mt-2 bluebtn border-0">
                                    See Salary Guide
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="slides p-2 h-100">
                        <div class="text-center bg-white rounded-4 p-3 mt-2 h-100">
                            <img src="{{ asset('img/calculator.png') }}" alt="" class="w-100 ">
                            <div class="text-start mt-2">
                                <p class="slideheading mb-0 fs-5 fw-semibold sky">HVAC</p>
                                <p class="slidetext mb-0">
                                    We’ll get you up and running in no time with
                                    personalized help from a real live person.
                                </p>
                                <button class="mt-2 bluebtn border-0">
                                    See Salary Guide
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="slides p-2 h-100">
                        <div class="text-center bg-white rounded-4 p-3 mt-2 h-100">
                            <img src="{{ asset('img/calculator2.png') }}" alt="" class="w-100 ">
                            <div class="text-start mt-2">
                                <p class="slideheading mb-0 fs-5 fw-semibold sky">Cleaner</p>
                                <p class="slidetext mb-0">
                                    Access every feature from day one, with no
                                    hidden fees or add-ons.
                                </p>
                                <button class="mt-2 bluebtn border-0">
                                    See Salary Guide
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="leftarrow2">
                    <i class="fa-solid fa-arrow-left sldright"></i>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="{{ route('ResourcesAll') }}"
                    class="bg-sky px-5 text-white text-decoration-none py-2 rounded-pill">View All</a>
            </div>
        </div>
    </section>
    <section class="bg-lgrey py-4 py-lg-5">
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
    <script>
        $(document).ready(function() {
            $('.slider1').slick({
                arrows: true,
                prevArrow: $('.leftarrow'),
                nextArrow: $('.rightarrow'),
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 990,
                        settings: {
                            arrows: false,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.slider2').slick({
                arrows: true,
                prevArrow: $('.leftarrow2'),
                nextArrow: $('.rightarrow2'),
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 990,
                        settings: {
                            arrows: false,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
