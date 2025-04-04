<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add Promotion</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('Admin.Profile') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu fs-5 fw-medium">Profile</h5>
                    </div>
                </div>
                <div class="">
                    @include('Templates.AdminNavbar')
                </div>
            </div>
        </div>
        <div class="px-2">
            <div class="right-bottom1">
                <div class="container-fluid h-100">
                    <form action="{{ route('Admin.Profile') }}" class="">
                        <h4 class="mb-0 blu2 pt-3">Edit Profile</h4>
                        <div class="row mt-3">
                            <div class="col-xxl-8 col-lg-9">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="select-service" class="fw-medium ps-1">Admin Name</label>
                                        <input type="text" id="promotion-title"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="promotion-title" class="ps-2 fw-medium">Phone Number</label>
                                        <input type="text" id="promotion-title"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="promotion-type" class="fw-medium ps-1">Email</label>
                                        <input type="email" id="promotion-title"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="discount-value" class="fw-medium ps-1">Address</label>
                                        <input type="text" id="discount-value"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="start-date" class="fw-medium ps-1">Street Address</label>
                                        <input type="text" id="start-date"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="end-date" class="fw-medium ps-1">City Address</label>
                                        <input type="text" id="end-date" class="w-100 bg-nblue border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="end-date" class="fw-medium ps-1">State Address</label>
                                        <input type="text" id="end-date" class="w-100 bg-nblue border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="maximum-discount" class="fw-medium ps-1">Postal Code</label>
                                        <input type="text" id="maximum-discount"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                </div>
                            </div>
                            <div class="my-3 mx-0">
                                <button type="submit"
                                    class="border mx-0 py-2 px-5 bg-sky text-white rounded-3">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('Templates.Jslinks')
</body>

</html>
