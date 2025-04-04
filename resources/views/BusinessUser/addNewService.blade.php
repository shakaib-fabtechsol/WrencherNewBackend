<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>add new services</title>
</head>

<body class="bg-white">

    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Services') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h4 class="mb-0 blu font-j">Add New Service Category</h4>
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
                    <form action="" class="">
                        <h4 class="mb-0">Add New Service</h4>
                        <p class="gre font-12">Use categories to organize your service into groups of relates services
                        </p>
                        <div class="row mt-3 pe-2">
                            <div class=" mx-auto py-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="row">
                                                    <h6 class="mute-blue py-3 px-3 rounded-3 fw-semibold shadow-sm">
                                                        Service Detail</h6>
                                                    <div class="row flex-sm-row flex-column-reverse pe-0">
                                                        <div class="col-sm-6 mt-sm-0 mt-3 pe-0">
                                                            <div>
                                                                <label for=""
                                                                    class="sky-c form-label fw-medium font-12 ps-2">Name</label>
                                                                <input type="text" name="" id=""
                                                                    class="sky-c border bg-white w-100 py-2 rounded-3 px-2"
                                                                    placeholder="Name here">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mt-sm-0 mt-3 pe-0">
                                                            <label for="picture-c"
                                                                class="sky-c form-label fw-medium font-12 ps-2">Upload
                                                                Image</label>
                                                            <div class="w-100 bg-white border rounded-3 p-2">
                                                                <input type="file" name="" id="picture-c"
                                                                    class="d-none">
                                                                <label for="picture-c" class="uploadbtn2">
                                                                    <a class="uploadbtn2a">Upload Image</a>
                                                                    <p class="mb-0 text-muted filename overflow-hidden">
                                                                        No file chosen</p>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div>
                                                            <label for=""
                                                                class="sky-c form-label fw-medium mb-0 font-12 ps-2">Detail</label>
                                                            <textarea name="" id="" class="sky-c border bg-white w-100 py-2 rounded-3 px-2"
                                                                placeholder="Description" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-lg-0 mt-5">
                                                <div>
                                                    <button class="border rounded-3 py-2 px-4">Cancel</button>
                                                </div>
                                                <div class="ms-3">
                                                    <button
                                                        class="bg-sky border-blu text-white p-2 px-sm-4 px-2 rounded-3">Save
                                                        New Services</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-lg-0 mt-4">
                                        <h6 class="mute-blue py-3 px-3 rounded-3 fw-semibold shadow-sm">Price & Duration
                                        </h6>
                                        <div class="p-3 border-bottom">
                                            <div class="w-100">
                                                <label for="" class="sky-c fw-medium">Base Duration</label>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="number" placeholder="0 hours"
                                                            class="sky-c border bg-white w-100 py-2 rounded-3 px-2">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="number" placeholder="0 Minutes"
                                                            class="sky-c border bg-white w-100 py-2 rounded-3 px-2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <label for="" class="sky-c form-label fw-medium">Price</label>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="number" placeholder="0$"
                                                            class="sky-c border bg-white w-100 py-2 rounded-3 px-2">
                                                        <span class="sky-c font-12">Base Price</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="number" placeholder="0$"
                                                            class="sky-c border bg-white w-100 py-2 rounded-3 px-2">
                                                        <span class="sky-c font-12">Minimum Price</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="checkbox">
                                                        <label for="" class="">This service is
                                                            free</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom p-3">
                                            <h6 class="sky-c form-label fw-medium mb-0">Price Display Options</h6>
                                            <p class="gre font-12">Control how pricing should be displayed to
                                                customers.
                                            </p>
                                            <div class="row">
                                                <div class="col-12 d-flex">
                                                    <input type="checkbox">
                                                    <label for="" class="fw-semibold ms-3">Don't show price
                                                        when booking
                                                        online</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" placeholder="0$"
                                                        class="sky-c border bg-white w-100 py-2 rounded-3 px-2">
                                                    <span class="sky-c font-12">Base Price</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" placeholder="0$"
                                                        class="sky-c border bg-white w-100 py-2 rounded-3 px-2">
                                                    <span class="sky-c font-12">Minimum Price</span>
                                                </div>
                                                <div class="col-5 d-flex flex-column mt-3">
                                                    <label for="" class="form-label fw-medium">Display
                                                        Prefix</label>
                                                    <input type="text"
                                                        class="sky-c border bg-white py-2 rounded-3 px-2"
                                                        placeholder="total">
                                                    <span class="sky-c font-12">5/20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom p-3">
                                            <h5 class="sky-c form-label fw-medium mb-0">Taxes</h5>
                                            <p class="gre font-12">Apply a custom tax rate or fee to this service.</p>
                                            <div>
                                                <input type="checkbox">
                                                <label for="" class="fw-semibold ms-3">Change Tax</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('picture-c');
            const fileNameElement = document.querySelector('.filename');

            fileInput.addEventListener('change', function() {
                if (fileInput.files.length > 0) {
                    let fileName = fileInput.files[0].name;
                    if (fileName.length > 15) {
                        fileName = fileName.substring(0, 12) + '...';
                    }

                    fileNameElement.textContent = fileName;
                } else {
                    fileNameElement.textContent = 'No file chosen';
                }
            });
        });
    </script>
    @include('Templates.Jslinks')
</body>

</html>
