<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Sales Online Booking</title>
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
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Dashboard</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Online
                                        Booking</span>
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
                                <div class="d-xl-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 font-bold">
                                            Online Booking Platform
                                        </h1>
                                        <p class="mb-0">Customize, embed, and share the booking page Where customer
                                            can
                                            book your services</p>
                                    </div>
                                </div>
                                <div class="bg-white px-4 py-4 rounded-3 mt-3">
                                    <div class="row">
                                        <div class="">
                                            <div class="col-main-div">
                                                <div class="">
                                                    <label for="url" class="">You Can Share this link this
                                                        customer to
                                                        let them book your services.</label>
                                                    <div class="label-url-btn mb-3 mt-1">
                                                        <div
                                                            class="d-sm-flex justify-content-between align-items-center">
                                                            <div class="col-md-8 col-lg-6">
                                                                <div class="url-btn d-flex px-2 rounded-3">
                                                                    <input type="url" placeholder="link Here"
                                                                        id="url"
                                                                        class="focus-none border-0 py-2 px-1">
                                                                    <button type="button"
                                                                        class="bg-sky text-white border-0 rounded-pill px-3 py-2">Copy
                                                                        Link</button>
                                                                </div>
                                                            </div>
                                                            <div class="mt-sm-0 mt-3 d-flex justify-content-end">
                                                                <button type="button"
                                                                    class="bg-lblue border-0 rounded-3 p-3 d-flex align-items-center justify-content-center">
                                                                    <img src="{{ asset('img/arrow-up-right-from-square-pic.png') }}"
                                                                        alt="icon" class="me-2"> View Page
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-6 my-2">
                                                        <div
                                                            class="d-flex align-items-center h-100 justify-content-between border-dashed px-3 py-2 rounded-3 mb-3">
                                                            <div class="imgicon-content d-flex">
                                                                <div class="content-div ms-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/book1.png') }}"
                                                                            alt="pic" class="me-2 img-fluid">
                                                                        <p class="mb-0 font-semi">Request a Quote</p>
                                                                    </div>
                                                                    <p class="mb-0 mt-3">Add your brand elements and
                                                                        colors
                                                                        to your customer facing booking page.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-6 my-2">
                                                        <div
                                                            class=" d-flex align-items-center h-100 justify-content-between border-dashed px-3 py-2 rounded-3 mb-3">
                                                            <div class="imgicon-content d-flex">
                                                                <div class="content-div ms-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/book2.png') }}"
                                                                            alt="pic" class="me-2">
                                                                        <p class="mb-0 font-semi">Booking Online Now</p>
                                                                    </div>
                                                                    <p class="mb-0 mt-3">Add your brand elements and
                                                                        colors
                                                                        to your customer facing booking page.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6 my-2">
                                                        <div
                                                            class="d-flex align-items-center h-100 justify-content-between border-dashed px-3 py-2 rounded-3">
                                                            <div class="imgicon-content d-flex">
                                                                <div class="content-div ms-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('img/book3.png') }}"
                                                                            alt="pic" class="me-2">
                                                                        <p class="mb-0 font-semi">Book an in Person
                                                                            Estimate</p>
                                                                    </div>
                                                                    <p class="mb-0 mt-3">Add your brand elements and
                                                                        colors
                                                                        to your customer facing booking page.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div
                                                class="col-main-div d-flex flex-column justify-content-center bg-lgrey p-3 p-xl-5 rounded-3 h-100">
                                                <div class="zip-code text-center">
                                                    <h3 class="mb-0 font-semi fs-3">Book Online</h3>
                                                    <p class="mb-3">Let’s get started b entering your ZIP code.</p>
                                                    <form action="">
                                                        <div class="row">
                                                            <label for="service" class="w-100 text-start">What type
                                                                of
                                                                service do you need?</label>
                                                            <div class="col-sm-6 my-2 my-sm-0">
                                                                <select name="" id=""
                                                                    class="border-1 rounded-3 bg-white focus-none w-100 px-3 py-2">
                                                                    <option value="" selected disabled hidden>
                                                                        Select
                                                                        here</option>
                                                                    <option value="Picture Hanging ">Picture Hanging
                                                                    </option>
                                                                    <option value="Drywall Repair">Drywall Repair
                                                                    </option>
                                                                    <option value="Gutter Cleaning">Gutter Cleaning
                                                                    </option>
                                                                    <option value="Curtain Rod Install">Curtain Rod
                                                                        Install</option>
                                                                    <option value="Door Knob/ Handle Lock Install">Door
                                                                        Knob/ Handle Lock Install</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6 my-2 my-sm-0">
                                                                <div
                                                                    class="d-flex align-items-center border-1 rounded-3 bg-white focus-none w-100 px-3 py-2">
                                                                    <i class="fa-solid fa-location-dot me-2"></i>
                                                                    <input type="text" name=""
                                                                        class="border-0" id=""
                                                                        placeholder="Zip Code">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-3">
                                                            <button type="submit"
                                                                class="bg-sky border-0 text-white px-4 py-2 rounded-pill">
                                                                <span class="me-2">Find</span>
                                                                <span><i class="fa-solid fa-chevron-right"></i></span>
                                                            </button>
                                                        </div>
                                                    </form>
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
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')
    <!-- <script>
        document.querySelector('.copy-btn').addEventListener('click', function() {
            const urlInput = document.getElementById('url'); // Get the input element
            const urlValue = urlInput.value; // Get the input value
            if (urlValue) {
                navigator.clipboard.writeText(urlValue).then(() => {
                    alert('URL copied: ' + urlValue); // Show alert after successful copy
                }).catch(err => {
                    alert('Failed to copy text: ', err); // Show error if copying fails
                });
            } else {
                alert('Please enter a valid URL to copy.');
            }
        });


        document.querySelector('.view-page-btn').addEventListener('click', function() {
            const url = document.getElementById('url').value.trim(); // Get and trim URL
            if (url) {
                window.open(url, '_blank'); // Open the URL in a new tab
            } else {
                alert('Please enter a valid URL.');
            }
        });
    </script> -->

</body>

</html>
