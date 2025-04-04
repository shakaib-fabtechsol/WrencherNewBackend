<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Profile</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ url()->previous() }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu fs-5 fw-medium">Edit Profile</h5>
                    </div>
                </div>
                <div class="">
                    @include('Templates.BusinessUserNavBar')
                </div>
            </div>
        </div>
        <div class="px-2">
            <div class="right-bottom1">
                <div class="container-fluid h-100">
                    <form method="post" action="{{ route('UpdateProfile') }}" class="">
                        @csrf
                        <h4 class="mb-0 blu2 pt-3">Edit Profile</h4>
                        <div class="row mt-3">
                            <div class="col-xxl-8 col-lg-9">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="select-service" class="fw-medium ps-1">First Name</label>
                                        <input type="text" name="name" id="promotion-title"
                                            value="{{ $sharedUser->name }}" class="w-100 bg-nblue border rounded-3 p-2"
                                            placeholder="Type here">

                                        <input type="hidden" name="id" value="{{ $sharedUser->id }}">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="promotion-title" class="ps-2 fw-medium">Last Name</label>
                                        <input type="text" name="lastName" id="promotion-title"
                                            value="{{ $sharedUser->name }}" class="w-100 bg-nblue border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="promotion-type" class="fw-medium ps-1">Email</label>
                                        <input type="email" name="email" id="promotion-title"
                                            value="{{ $sharedUser->email }}" class="w-100 bg-nblue border rounded-3 p-2"
                                            placeholder="Type here" required>
                                        @error('email')
                                            <span class="text-danger">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="end-date" class="fw-medium ps-1">Password</label>
                                        <input type="password" name="password" id="end-date" name=""
                                            value="{{ $sharedUser->password }}"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                        @error('password')
                                            <span class="text-danger">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="discount-value" class="fw-medium ps-1">Company</label>
                                        <input type="text" name="company" id="discount-value"
                                            class="w-100 bg-nblue border rounded-3 p-2"
                                            value="{{ $sharedUser->company }}" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="start-date" class="fw-medium ps-1">Location</label>
                                        <input type="text" name="location" id="start-date"
                                            value="{{ $sharedUser->location }}"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="industry" class="form-label fw-medium mb-1">Industry</label>
                                        <select name="industry" id="industry" class="form-select modal-input" required>
                                            <option value="Industry name" selected disabled hidden>Industry name
                                            </option>
                                            @foreach ($GetIndustry as $industry)
                                                <option value="{{ $industry->id }}"
                                                    {{ 'industry' == $industry->id ? 'selected' : '' }}>
                                                    {{ $industry->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label for="maximum-discount" class="fw-medium ps-1">Referrance</label>
                                        <input type="text" name="referrance" id="maximum-discount"
                                            value="{{ $sharedUser->referrance }}"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>

                                </div>

                            </div>
                            <div class="my-3 mx-0">
                                <button type="submit"
                                    class="border mx-0 py-2 px-5 bg-sky text-white rounded-3">Update</button>
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
