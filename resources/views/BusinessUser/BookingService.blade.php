<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Booking Service</title>

</head>

<body>
    <div class="d-flex flex-column justify-content-center dvh-100 booking-btn">
        <div class="text-center repair-logo mx-auto">
            <img class="img-fluid" src="{{ asset('img/logo-main.png') }}" alt="">
        </div>
        <div class="text-center mt-4">
            <h4 class="fw-bold mb-0">Book Online</h4>
            <p class="mb-0">Let's get started by entering your ZIP code.</p>
        </div>
        <form action="#">
            <div class="d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="custominput">
                    <div class="my-input d-flex align-items-center">
                        <i class="fa-solid fa-location-dot me-2 sky"></i>
                        <input type="text" id="Name" placeholder="Zip" class="border-0 w-100 bg-transparent">
                    </div>
                </div>
                <button class="nextbtn mt-4 py-2" type="submit">Next</button>
            </div>
        </form>
    </div>
</body>

</html>
