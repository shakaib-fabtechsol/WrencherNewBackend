<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Service Details</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')
            <div class="right">
                <div class="right-top px-4 input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding fs-4 mb-0">
                                    <span class="sky font-semi">Sales</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span>Services</span>
                                </h3>
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
                                <h4 class="mb-0 fw-semibold">Service Details</h4>
                                <p class="gre font-12">Here’s how The Repair Guy Services is doing today.</p>
                                <div class="bg-white rounded-4 p-3 p-sm-4 p-lg-5 mt-4">
                                    <form action="" class="">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="name"
                                                        class=" form-label fw-medium mb-0 ps-2">Name</label>
                                                    <input type="text" name="" id="name"
                                                        class=" border bg-nblue w-100 py-2 rounded-3 px-2">
                                                </div>
                                                <div class="mt-3">
                                                    <label for="des"
                                                        class=" form-label fw-medium mb-0 ps-2">Description</label>
                                                    <textarea name="" id="des" class=" border bg-nblue w-100 py-2 rounded-3 px-2" rows="5"></textarea>
                                                </div>
                                                <h6 class="mute-blue py-3 mt-4 px-3 rounded-3 fw-semibold shadow-sm">
                                                    Price & Duration</h6>
                                                <div class="p-3 border-bottom">
                                                    <div class="w-100">
                                                        <label for="" class="sky-c fw-medium">Base
                                                            Duration</label>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="number" placeholder="0 hours"
                                                                    class="sky-c border bg-nblue w-100 py-2 rounded-3 px-2">
                                                            </div>
                                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                                <input type="number" placeholder="0 Minutes"
                                                                    class="sky-c border bg-nblue w-100 py-2 rounded-3 px-2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label for=""
                                                            class="sky-c form-label fw-medium">Price</label>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="number" placeholder="0$"
                                                                    class="sky-c border bg-nblue w-100 py-2 rounded-3 px-2">
                                                                <span class="sky-c font-12">Base Price</span>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="number" placeholder="0$"
                                                                    class="sky-c border bg-nblue w-100 py-2 rounded-3 px-2">
                                                                <span class="sky-c font-12">Minimum Price</span>
                                                            </div>
                                                            <div class="col-12 mt-3">
                                                                <input type="checkbox" id="free">
                                                                <label for="free" class="sky-check">This service
                                                                    is
                                                                    free</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom p-3">
                                                    <h6 class="sky-c form-label fw-medium mb-0">Price Display
                                                        Options</h6>
                                                    <p class="gre font-12">Control how pricing should be
                                                        displayed to customers.</p>
                                                    <div class="row">
                                                        <div class="col-12 d-flex">
                                                            <input type="checkbox">
                                                            <label for="" class="fw-medium ms-3">Don't show
                                                                price when booking online</label>
                                                        </div>
                                                        <div class="col-sm-6 d-flex flex-column mt-3">
                                                            <label for="" class="form-label fw-medium">Display
                                                                Prefix</label>
                                                            <input type="text"
                                                                class="sky-c border bg-nblue py-2 rounded-3 px-2 w-100"
                                                                placeholder="Estimated Price">
                                                            <span class="sky-c font-12">5/20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom p-3">
                                                    <h5 class="sky-c form-label fw-medium mb-0">Taxes</h5>
                                                    <p class="gre font-12">Apply a custom tax rate or fee to
                                                        this service.</p>
                                                    <div>
                                                        <input type="checkbox">
                                                        <label for="" class="fw-medium ms-3">Change
                                                            Tax</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xxl-3 mt-lg-0 mt-4">
                                                <div
                                                    class="w-100 d-flex justify-content-center justify-content-lg-end ">
                                                    <label for="Upload" class="cat-up2">
                                                        <i class="fa-solid fa-upload sky-c"></i>
                                                        <p class="sky-c mb-0">Upload Image
                                                        </p>
                                                    </label>
                                                    <input type="file" name="" id="Upload" class="d-none">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center mt-4">
                                            <div>
                                                <button class="border rounded-3 py-2 px-4">Cancel</button>
                                            </div>
                                            <div class="ms-3">
                                                <button
                                                    class="bg-sky border-blue b order-blu text-white py-2 px-sm-4 px-2 rounded-3">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('Templates.Jslinks')

</body>

</html>
