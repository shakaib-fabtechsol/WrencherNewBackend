<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Edit User</title>
</head>

<body class="bg-white">

    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('Admin.BusinessManagement') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu fs-5 fw-medium">Edit User</h5>
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
                    <form action="{{ route('Admin.UpdateUser', $user->id) }}" method="POST">
                        @csrf
                        <h4 class="mb-0 blu2 pt-3">Edit User</h4>
                        <div class="row mt-3">
                            <div class="col-xxl-8 col-lg-9">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="First" class="fw-medium ps-1">First Name</label>
                                        <input type="text" id="First" name="name" value="{{ $user->name }}"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="Last" class="fw-medium ps-1">Last Name</label>
                                        <input type="text" id="Last" name="lastName"
                                            value="{{ $user->lastName }}" class="w-100 bg-nblue border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="promotion-title" class="ps-2 fw-medium">Phone Number</label>
                                        <input type="text" id="promotion-title" name="phone"
                                            value="{{ $user->phone }}" class="w-100 bg-nblue border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="Email" class="fw-medium ps-1">Email</label>
                                        <input type="email" id="Email" name="email" value="{{ $user->email }}"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="Address" class="fw-medium ps-1">Address</label>
                                        <input type="text" id="Address" name="location"
                                            value="{{ $user->location }}" class="w-100 bg-nblue border rounded-3 p-2"
                                            placeholder="Type here">
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
