<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add Package</title>
</head>

<body class="bg-white">

    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('Admin.Packages') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Add new Package</h5>
                    </div>
                </div>
                <div class="">
                    @include('Templates.AdminNavbar')
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="right-bottom1">
                <div class="container-fluid h-100">
                    <form action="{{ route('Admin.Savepackage') }}" method="post">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="pkg_name" class="ps-2 fw-semibold">Package Name</label>
                                        <input type="text" name="name" id="pkg_name"
                                            class="w-100 bg-white border rounded-3 p-2 @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" placeholder="Enter package name">
                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="price" class="ps-2 fw-semibold">Package Price</label>
                                        <input type="number" name="price" id="price"
                                            class="w-100 bg-white border rounded-3 p-2 @error('price') is-invalid @enderror"
                                            value="{{ old('price') }}" placeholder="Enter price">
                                        @error('price')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="discount" class="ps-2 fw-semibold">Discount</label>
                                        <input type="number" name="discount" id="discount"
                                            class="w-100 bg-white border rounded-3 p-2 @error('discount') is-invalid @enderror"
                                            value="{{ old('discount') }}" placeholder="Enter discount">
                                        @error('discount')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-5 mb-2">
                                    <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                        <a href="{{ route('Admin.Packages') }}" class="text-decoration-none text-dark">
                                            <div class="border py-2 w-100 rounded-3 text-center">Cancel</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                        <button type="submit"
                                            class="border py-2 bg-sky text-white w-100 rounded-3">Submit</button>
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
