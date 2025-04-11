<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Request Quote</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('PlanYourService') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Request a Quote</h5>
                    </div>
                </div>
                <div class="">
                    {{-- @include('Templates.BusinessUserNavBar') --}}
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="right-bottom1">
                <div class="container-fluid h-100">
                    <form action="#" class="">
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <div class="row">
                                    <h5>Contact Information</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="fullname" class="ps-2 fw-semibold">Full Name</label>
                                        <input type="text" id="fullname" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="phone" class="ps-2 fw-semibold">Phone Number</label>
                                        <input type="tel" id="phone" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="email" class="ps-2 fw-semibold">Email Address</label>
                                        <input type="email" id="email" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="service_type" class="ps-2 fw-semibold">Service Type</label>
                                        <select id="service_type" class="w-100 bg-white border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Electrician">Electrician</option>
                                            <option value="Plumber">Plumber</option>
                                            <option value="Carpenter">Carpenter</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Project Details</h5>
                                    <div class="col-sm-12 mb-3">
                                        <label for="issue_description" class="ps-2 fw-semibold">Briefly describe the
                                            issue or service you need</label>
                                        <textarea id="issue_description" class="w-100 bg-white border rounded-3 p-2" rows="5" placeholder="Please provide a detailed explanation of your query."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 mb-2">
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <a href="{{ route('PlanYourService') }}" class="text-decoration-none text-dark">
                                    <div class="border py-2 w-100 rounded-3 text-center">Cancel</div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button type="submit"
                                    class="border py-2 bg-sky text-white w-100 rounded-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    
    @include('Templates.Jslinks')
</body>

</html>
