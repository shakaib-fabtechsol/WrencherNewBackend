<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Material Subcategory</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="#" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h4 class="mb-0 blu font-j">Add New Material SubCategory</h4>
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
                    <form action="" class="h-100">
                        <div class="row h-100">
                            <div class="col-lg-5 col-md-8 h-100">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <div>
                                        <h5 class="mb-0">Create a Material Sub-Category</h5>
                                        <p class="gre font-12">Use Sub-Categories to organize your Material into groups
                                            of related Materials.</p>
                                        <h6 class="mute-blue py-3 px-3 rounded-3 fw-semibold shadow-sm">Category Detail
                                        </h6>
                                        <div>
                                            <label for=""
                                                class="sky-c form-label fw-medium mb-0 font-12 ps-2">Sub-Categories
                                                Name</label>
                                            <input type="text" name="" id=""
                                                class="sky-c border bg-white w-100 py-2 rounded-3 px-2"
                                                placeholder="Name here">
                                            <span class="gre font-12 ">Customers will see this name when pick a
                                                category</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <button class="bg-sky border-blu text-white p-2 px-sm-4 px-2 rounded-3">Add
                                                Sub Category</button>
                                        </div>
                                        <div class="ms-2">
                                            <button class="border rounded-3 py-2 px-4">Add Item</button>
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

    @include('Templates.Jslinks')
</body>

</html>
