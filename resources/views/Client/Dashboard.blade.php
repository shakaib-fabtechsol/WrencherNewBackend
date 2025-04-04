<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Dashboard</title>
</head>

<body>
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif
    <section>
        <div class="main">
            @include('Templates.ClientSidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Dashboard</span>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.ClientNavbar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="bottom-main">
                        <div class="content ">
                            <div class="container-fluid">
                                <div
                                    class="d-xl-flex pb-2 border-bottom border-1 align-items-center justify-content-between">
                                    <div class="my-2">
                                        <h1 class="fs-4 font-bold">
                                            Good morning, Jake Zophres.
                                        </h1>
                                        <p class="mb-0">Here’s how The Repair Guy Services is doing today.</p>
                                    </div>
                                    <div class="d-lg-flex my-2 justify-content-end align-items-center">
                                        <div
                                            class="d-flex ps-3 pe-1 mt-2 mt-lg-0 me-lg-2 align-items-center bg-white border-1 rounded-2">
                                            <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                            <select name="" id="filter"
                                                class="border-white filter-width pe-3 py-2 grey w-100 focus-none font-md bg-transparent">
                                                <option value="" selected disabled hidden>Filter</option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                        <p class="mb-0 font-semi mt-2 mt-lg-0 me-2">Today</p>
                                        <div
                                            class="d-flex ps-3 pe-1 mt-2 mt-lg-0 mx-lg-0 align-items-center bg-white border-1 rounded-2 me-lg-2">
                                            <select name="" id="filter"
                                                class="border-white tab-100 pe-3 py-2 grey  focus-none font-md bg-transparent">
                                                <option value="" selected disabled hidden>All territories</option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 max-w-1200px">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                        <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                            <div class="profit d-flex align-items-center mb-2">
                                                <div class="profit-img profit-size me-3">
                                                    <img src="{{ asset('img/openEstimate.svg') }}" alt="pic">
                                                </div>
                                                <p class="mb-0 fw-medium fs-4">15</p>
                                            </div>
                                            <p class="mb-0">Total Open Estimates</p>
                                            <p class="mb-0 skin fw-medium"><span class="green">+8.7%</span> than last
                                                month</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                        <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                            <div class="profit d-flex align-items-center mb-2">
                                                <div class="profit-img profit-size me-3">
                                                    <img src="{{ asset('img/24-hours.svg') }}" alt="pic">
                                                </div>
                                                <p class="mb-0 fw-medium fs-4">12</p>
                                            </div>
                                            <p class="mb-0">Total Open Jobs</p>
                                            <p class="mb-0 skin fw-medium"><span class="green">+8.7%</span> than last
                                                month</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                        <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                            <div class="profit d-flex align-items-center mb-2">
                                                <div class="profit-img profit-size me-3">
                                                    <img src="{{ asset('img/closed.svg') }}" alt="pic">
                                                </div>
                                                <p class="mb-0 fw-medium fs-4">10</p>
                                            </div>
                                            <p class="mb-0">Total Closed Jobs</p>
                                            <p class="mb-0 skin fw-medium"><span class="red">+8.7%</span> than last
                                                month
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
                                        <div class="col3-main b-shadow p-3 rounded-3 profit-border-btm">
                                            <div class="profit d-flex align-items-center mb-2">
                                                <div class="profit-img profit-size me-3">
                                                    <img src="{{ asset('img/suitcase.svg') }}" alt="pic">
                                                </div>
                                                <p class="mb-0 fw-medium fs-4">22</p>
                                            </div>
                                            <p class="mb-0">Jobs Timeline</p>
                                            <p class="mb-0 skin fw-medium"><span class="red">+8.7%</span> than last
                                                month
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-xl-8">
                                        <h3 class="lblue font-semi mb-4">Upcoming Jobs</h3>
                                        <div class="table-responsive reports-tbl mt-2">
                                            <table class="table">
                                                <thead>
                                                    <tr class="align-middle">
                                                        <th class="font-semi">Job</th>
                                                        <th class="font-semi">Date</th>
                                                        <th class="font-semi">Team</th>
                                                        <th class="font-semi">Total Price</th>
                                                        <th class="font-semi">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-middle">
                                                        <td class="font-md">Celling fan install</td>
                                                        <td class="font-md">Mon - Agu 13,2024</td>
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <a href="#"><img src="{{ asset('img/CalendarIcon.png') }}"
                                                                        alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/EditIcon.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/DeleteIcon.png') }}" alt=""></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td class="font-md">Celling fan install</td>
                                                        <td class="font-md">Mon - Agu 13,2024</td>
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <a href="#"><img src="{{ asset('img/CalendarIcon.png') }}"
                                                                        alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/EditIcon.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/DeleteIcon.png') }}" alt=""></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td class="font-md">Celling fan install</td>
                                                        <td class="font-md">Mon - Agu 13,2024</td>
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <a href="#"><img src="{{ asset('img/CalendarIcon.png') }}"
                                                                        alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/EditIcon.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/DeleteIcon.png') }}" alt=""></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td class="font-md">Celling fan install</td>
                                                        <td class="font-md">Mon - Agu 13,2024</td>
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <a href="#"><img src="{{ asset('img/CalendarIcon.png') }}"
                                                                        alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/EditIcon.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/DeleteIcon.png') }}" alt=""></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td class="font-md">Celling fan install</td>
                                                        <td class="font-md">Mon - Agu 13,2024</td>
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <a href="#"><img src="{{ asset('img/CalendarIcon.png') }}"
                                                                        alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/EditIcon.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/DeleteIcon.png') }}" alt=""></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td class="font-md">Celling fan install</td>
                                                        <td class="font-md">Mon - Agu 13,2024</td>
                                                        <td>
                                                            <a href="#" class="text-decoration-none">
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ asset('img/customer1.png') }}" alt="customer1"
                                                                        class="me-2 cus-img rounded-circle">
                                                                    <span class="lblue font-md">Alexia Haass</span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="font-md">$250.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <a href="#"><img src="{{ asset('img/CalendarIcon.png') }}"
                                                                        alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/EditIcon.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('img/DeleteIcon.png') }}" alt=""></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="h-100">
                                            <div class="border p-3 bg-white max-h-500px h-100 rounded-4">
                                                <iframe class="w-100 h-100 rounded-4"
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53863.65240727781!2d74.51117165!3d32.459897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1737637203586!5m2!1sen!2s"
                                                    style="border:0;" allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                            <div class="bg-white py-3 px-5 border rounded mt-3">
                                                <p class="font-semi mb-0">6 Jobs</p>
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


    @include('Templates.Jslinks')
</body>

</html>