<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Signup</title>
</head>

<body>
    <section>
        <div class="loginmain d-flex align-items-center justify-content-center py-4">
            <div class="d-flex justify-content-center">
                <div class="formdiv mb-0 px-4 py-4 h-100 overflow-auto">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class=" d-flex justify-content-center">
                            <img src="{{ asset('img/logo-main.png') }}" alt="logo" class="img-fluid log-logo">
                        </div>
                    </div>
                    <form method="POST" action="{{ route('ProcessSignup') }}">
                        @csrf
                        <h3 class="text-center mt-4 fs-2 fw-bold">Get Started</h3>
                        <p class="text-capitalize text-center">Create Your Account Now</p>
                        <div class="mt-2">
                            <label for="email" class="w-100 fw-md mb-1">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control shadow-none focus-none rounded-3" placeholder="Example@email.com"
                                required>
                            @error('email')
                                <span class="text-danger">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="password" class="w-100 fw-md mb-1">Password</label>
                            <input type="password" name="password" id="password"
                                class="form-control shadow-none focus-none rounded-3"
                                placeholder="at least 8 characters" required>
                            @error('password')
                                <span class="text-danger">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <p class="mb-0 mt-1 small">This is used to help customize your account with industry defaults
                        </p>
                        <div class="mt-4">
                            <button type="submit" class="text-white rounded-3 bg-sky border-0 w-100 px-2 py-2">Create
                                Account</button>
                        </div>
                    </form>
                    <p class="text-center mt-2 mb-0">By creating an account you agree to wrencher <a
                            href="{{ route('Terms') }}">Terns of services</a> and <a href="#">Privacy
                            Policy</a></p>
                    <p class="text-center mt-1">Already using wrencher? <a href="{{ route('Login') }}"
                            class="sky text-decoration-none">Sign in</a></p>

                </div>
            </div>
        </div>
    </section>

    @include('Templates.Jslinks')

</body>

</html>
