<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Profile</title>
</head>

<body>
    
    <section>
        <div class="main">
            @include('Templates.Adminsidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="hding mb-0 blu fs-4 font-j fw-semibold">Profile</span>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.AdminNavbar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="mb-0 fw-semibold">Profile</h3>
                                    <p class="mb-0 gre font-14">Here’s how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="">
                                        <a href="{{ route('Profile') }}"
                                            class="mbl-100 shadow mt-3 mt-lg-0 in-f rounded-2 px-4 text-nowrap py-2 bg-sky text-decoration-none d-inline-block text-white border-0">
                                            <img src="{{ asset('img/edit pic.svg') }}" alt="" class="edit-icon">
                                            Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white mt-3 p-3 rounded-3">
                                <div class="pr-height">
                                    <div class="position-relative pe-2">
                                        <div class="d-flex align-items-end ">
                                            <div class="profile-edit shadow me-2">
                                                @if ($user->img != null)
                                                    <img src="{{ asset('img/' . $user->img) }}" alt=""
                                                        class="f-img">
                                                @else
                                                    <img src="{{ asset('img/user.png') }}" alt=""
                                                        class="f-img">
                                                @endif
                                            </div>
                                            <div class="ps-2">
                                                <h6 class="sky-c fs-5 fw-semibold">{{ $user->name }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 pt-3 border-bottom pe-2">
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Admin Name</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">{{ $user->name }}
                                                {{ $user->lastName }}</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Email</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">{{ $user->email }}</p>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12 mb-2">
                                            <h6 class="mb-0 small fw-medium">Address</h6>
                                            <p class="sky-c mb-0 fs-6 fw-semibold">{{ $user->location ?? 'Null' }}
                                            </p>
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
