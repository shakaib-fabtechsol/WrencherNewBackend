<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>New service</title>
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
                                <h3 class="hding mb-0 sky">Services ></h3>
                                <h6 class="font-14 mb-0 ms-2">New Services</h6>
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
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="fs-4 font-bold">
                                            Add New Services
                                        </h1>
                                        <p class="mb-0 gre">Here’s how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-sm-flex justify-content-end align-items-center">
                                        <div class="d-flex justify-content-end">
                                            <button type="button"
                                                class="mbl-100 shadow mt-3 mt-lg-0 rounded-2 px-4 text-nowrap py-2 bg-sky text-white border-0">+
                                                Add Services</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded-3 p-3 mt-3">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
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
                                                        <div class="col-sm-6 mt-sm-0 mt-3">
                                                            <div class="w-100">
                                                                <label for="" class="cat-up">
                                                                    <i class="fa-solid fa-upload sky-c"></i>
                                                                    <p class="sky-c mb-0">Upload Image</p>
                                                                </label>
                                                                <input type="file" name="" id=""
                                                                    class="d-none">
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
                                                <h6 class="mute-blue py-3 px-3 rounded-3 fw-semibold shadow-sm mt-4">
                                                    Price & Duration</h6>
                                                <div class="p-3 border-bottom">
                                                    <div class="w-100">
                                                        <label for="" class="sky-c fw-medium">Base
                                                            Duration</label>
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
                                                        <label for=""
                                                            class="sky-c form-label fw-medium">Price</label>
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
                                                    <h6 class="sky-c form-label fw-medium mb-0">Price Display Options
                                                    </h6>
                                                    <p class="gre font-12">Control how pricing should be displayed to
                                                        customers.</p>
                                                    <div class="row">
                                                        <div class="col-12 d-flex">
                                                            <input type="checkbox">
                                                            <label for="" class="fw-semibold ms-3">Don't show
                                                                price when
                                                                booking online</label>
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
                                                    <p class="gre font-12">Apply a custom tax rate or fee to this
                                                        service.</p>
                                                    <div>
                                                        <input type="checkbox">
                                                        <label for="" class="fw-semibold ms-3">Change
                                                            Tax</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-lg-0 mt-3">
                                                <h6 class="mute-blue py-3 px-3 rounded-3 fw-semibold shadow-sm">Users
                                                    Role & Permission</h6>
                                                <div class="p-4">
                                                    <div class="d-flex bg-white p-2 shadow rounded-3">
                                                        <input type="radio" name="worker" id="">
                                                        <label for="" class="ms-3">
                                                            <h4 class="mb-0 sky-c">Worker</h4>
                                                            <p class="mb-0 gre font-12">Can view Only jobs Assigned to
                                                                them. you can customize what job details they can see &
                                                                edit</p>
                                                        </label>
                                                    </div>
                                                    <div class="d-flex bg-white p-2 shadow rounded-3 mt-3">
                                                        <input type="radio" name="worker" id="">
                                                        <label for="" class="ms-3">
                                                            <h4 class="mb-0 sky-c">Scheduler</h4>
                                                            <p class="mb-0 gre font-12">Full Access to all jobs& client
                                                                details. Scheduler can create, dispatch,reschedule &
                                                                edit jobs.</p>
                                                        </label>
                                                    </div>
                                                    <div class="d-flex bg-white p-2 shadow rounded-3 mt-3">
                                                        <input type="radio" name="worker" id="">
                                                        <label for="" class="ms-3">
                                                            <h4 class="mb-0 sky-c">Manager</h4>
                                                            <p class="mb-0 gre font-12">Manager have full access to all
                                                                areas of business , including adding or removing users.
                                                            </p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 text-end">
                                            <button
                                                class="bg-sky text-white shadow py-2 px-3 border-0 rounded-3">Save</button>
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
    @include('Templates.UserLogoutModule')
    @include('Templates.Jslinks')

</body>

</html>
