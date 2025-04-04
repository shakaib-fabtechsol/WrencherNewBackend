<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Plumbing Details</title>
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
                                    <span class="sky fs-4 fw-medium">Sales</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Quotes</span>
                                </h3>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.BusinessUserNavBar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="mb-0 fw-semibold">Plumbing Details</h3>
                                    <p class="mb-0 gre font-14">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="me-2">
                                        <a href="#"
                                            class="mbl-100 shadow mt-3 mt-lg-0 in-f rounded-2 px-4 text-nowrap py-2 bg-lwhite text-decoration-none d-inline-block text-dark border-0">Edit
                                            Item</a>
                                    </div>
                                    <div class="me-2">
                                        <a href="#"
                                            class="mbl-100 shadow mt-3 mt-lg-0 in-f rounded-2 px-4 text-nowrap py-2 bg-red text-decoration-none d-inline-block text-white border-0">Delete
                                            item</a>
                                    </div>
                                    <div class="">
                                        <a href="{{ route('BusinessUser.NewServiceFields') }}"
                                            class="mbl-100 shadow mt-3 mt-lg-0 in-f rounded-2 px-4 text-nowrap py-2 bg-sky text-decoration-none d-inline-block text-white border-0">Add
                                            New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white mt-3 p-3 rounded-3">
                                <div class="pr-height">
                                    <div class="position-relative pe-2">
                                        <p class="mb-1">Product Image</p>
                                        <img src="{{ asset('img/men-pic.svg') }}" alt="" class="men-img">
                                    </div>
                                    <div class="row mt-4 pt-3 border-bottom pe-2">
                                        <h3 class="fw-semibold">Item Detail</h3>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Item Name</h6>
                                            <p class="sky-c mb-0 fw-semibold">Alexia Haass</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Cost</h6>
                                            <p class="sky-c mb-0 fw-semibold">$: 90.00</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Mark up</h6>
                                            <p class="sky-c mb-0 fw-semibold">10%</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Sale Price</h6>
                                            <p class="sky-c mb-0 fw-semibold">$100.00</p>
                                        </div>
                                    </div>

                                    <div class="row mt-3 pt-3 border-bottom pe-2">
                                        <h3 class="fw-semibold fs-4">Item Description</h3>
                                        <div class=" mb-2">
                                            <p class=" mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Atque corporis iste, eius magni dolorum unde, ipsam laborum repudiandae
                                                expedita dignissimos consequatur repellat incidunt iure dolores facilis
                                                inventore! Nulla, ipsam quam!</p>
                                        </div>
                                        <div class="mb-2">

                                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                Et
                                                neque deleniti assumenda quasi quibusdam vitae nulla modi, aliquid nam
                                                veniam vero ipsum consectetur ab ea perferendis ipsa accusamus tenetur
                                                voluptatum.</p>
                                        </div>

                                    </div>
                                    <div class="row mt-3 border-bottom pe-2">
                                        <h3 class="fw-semibold fs-4">Item Location Detail</h3>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Street</h6>
                                            <p class="sky-c mb-0 fw-semibold">Alexia Haass 90 Street</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">City</h6>
                                            <p class="sky-c mb-0 fw-semibold">Sialkot</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">State</h6>
                                            <p class="sky-c mb-0 fw-semibold">Sialkot</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="mb-0 small">Postal Code</h6>
                                            <p class="sky-c mb-0 fw-semibold">909090</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3 border-bottom pe-2">
                                        <h3 class="fw-semibold fs-4">Vendor Detail</h3>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="small mb-0">Vendor Name</h6>
                                            <p class="sky-c mb-0 fw-semibold">Alexia Haass</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-2">
                                            <h6 class="small mb-0">Link</h6>
                                            <a href="#"
                                                class="sky-c text-decoration-none mb-0 fw-semibold">https://example.com</a>
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

</body>

</html>
