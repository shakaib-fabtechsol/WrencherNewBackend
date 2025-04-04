<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Login</title>
</head>

<body>
    <section>
        <div class="loginmain d-flex align-items-center justify-content-center">
            <div class="w-100 d-flex align-items-center justify-content-center">
                <div class="formdiv px-4 py-4 h-100 overflow-auto">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class=" d-flex justify-content-center">
                            <img src="{{ asset('img/logo-main.png') }}" alt="logo" class="img-fluid log-logo">
                        </div>
                    </div>
                    <form method="POST" action="{{ route('ProcessLogin') }}">
                        @csrf
                        <h3 class="text-center mt-4 fw-bold">Welcome Back</h3>
                        <p class="fs-5 font-md mt-xl-4">Enter Login</p>
                        <div class="mt-2">
                            <label for="email" class="w-100 font-md mb-1">Email</label>
                            <input type="email" id="email" name="email"
                                class="form-control shadow-none focus-none rounded-3" placeholder="Enter the email "
                                required>
                            @error('email')
                                <span class="text-danger">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                            @if (session('error'))
                                <span class="text-danger">
                                    <p>{{ session('error') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="mt-4">
                            <label for="password" class="w-100 font-md mb-1">Password</label>
                            <input type="password" id="password" name="password"
                                class="form-control shadow-none focus-none rounded-3" placeholder="Enter the Password"
                                required>
                            @error('password')
                                <span class="text-danger">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="{{ route('ForgetPassword') }}" class="small text-decoration-none sky">Forgot
                                Password?</a>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="text-white rounded-3 bg-sky border-0 w-100 px-2 py-2">Log
                                In</button>
                        </div>
                    </form>
                    <p class="text-center mt-3">Don’t have an Account? <a href="{{ route('Signup') }}"
                            class="sky text-decoration-none">Sign Up</a></p>

                </div>
            </div>
        </div>
    </section>

    @include('Templates.Jslinks')
</body>

</html>
