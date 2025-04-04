<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Forget Password</title>
</head>

<body>

    <section>
        <div class="loginmain d-flex align-items-center justify-content-center">
            <div class="w-100 d-flex align-items-center justify-content-center">
                <div class="formdiv px-4 py-5 h-100 overflow-auto">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class=" d-flex justify-content-center">
                            <img src="{{ asset('img/logo-main.png') }}" alt="logo" class="img-fluid log-logo">
                        </div>
                    </div>
                    <form action="{{ route('NewPassword') }}">
                        <p class="fs-5 font-md mt-xl-4">Reset Password</p>
                        <div class="mt-2">
                            <label for="email" class="w-100 font-md mb-1">Email</label>
                            <input type="email" id="email" class="form-control shadow-none focus-none rounded-3"
                                placeholder="Enter the email " required>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="text-white rounded-3 bg-sky border-0 w-100 px-2 py-2">Reset</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    @include('Templates.Jslinks')
</body>

</html>