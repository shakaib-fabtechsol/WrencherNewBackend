<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>In person estimate</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('PlanYourService') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Schedule an in person estimate</h5>
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
                    <form action="#" class="">
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <div class="row">
                                    <h5>Booking Options</h5>
                                    <div class="col-sm-12 mb-3">
                                        <label class="ps-2 fw-semibold">Choose how you want to book:</label>
                                        <div class="d-flex gap-3">
                                            <div>
                                                <input type="radio" id="customer_service" name="booking_type"
                                                    value="customer_service" checked>
                                                <label for="customer_service">Have customer service confirm</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="book_online" name="booking_type"
                                                    value="book_online">
                                                <label for="book_online">Book online directly</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="customer_service_options">
                                    <h5>Preferred Date & Time</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="preferred_date" class="ps-2 fw-semibold">Select Date</label>
                                        <input type="date" id="preferred_date"
                                            class="w-100 bg-white border rounded-3 p-2">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="time_range" class="ps-2 fw-semibold">Select Time Range</label>
                                        <select id="time_range" class="w-100 bg-white border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="morning">Morning</option>
                                            <option value="afternoon">Afternoon</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" id="book_online_options" style="display: none;">
                                    <h5>Direct Booking</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="booking_datetime" class="ps-2 fw-semibold">Book Date & Time</label>
                                        <input type="datetime-local" id="booking_datetime"
                                            class="w-100 bg-white border rounded-3 p-2">
                                    </div>
                                </div>

                                <div class="row">
                                    <h5>Credit Card on File (Optional)</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="credit_card" class="ps-2 fw-semibold">Card Number</label>
                                        <input type="text" id="credit_card"
                                            class="w-100 bg-white border rounded-3 p-2" placeholder="Enter card number">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 mb-2">
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <a href="{{ route('PlanYourService') }}" class="text-decoration-none text-dark">
                                    <div class="border py-2 w-100 rounded-3 text-center">Cancel</div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button type="submit"
                                    class="border py-2 bg-sky text-white w-100 rounded-3">Submit</button>
                            </div>
                        </div>
                    </form>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const customerServiceRadio = document.getElementById("customer_service");
                            const bookOnlineRadio = document.getElementById("book_online");
                            const customerServiceOptions = document.getElementById("customer_service_options");
                            const bookOnlineOptions = document.getElementById("book_online_options");

                            function toggleBookingOptions() {
                                if (customerServiceRadio.checked) {
                                    customerServiceOptions.style.display = "block";
                                    bookOnlineOptions.style.display = "none";
                                } else {
                                    customerServiceOptions.style.display = "none";
                                    bookOnlineOptions.style.display = "block";
                                }
                            }

                            customerServiceRadio.addEventListener("change", toggleBookingOptions);
                            bookOnlineRadio.addEventListener("change", toggleBookingOptions);
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    <script>
        let map;
        let autocomplete;

        function initAutocomplete() {
            // Initialize the map
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                }, // Default center
                zoom: 8 // Default zoom
            });

            // Initialize the autocomplete functionality
            var input = document.getElementById('autocomplete');
            autocomplete = new google.maps.places.Autocomplete(input, {
                types: ['geocode'] // Restrict the types of predictions.
            });

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();

                if (!place.geometry) {
                    console.log("No details available for input: '" + place.name + "'");
                    return;
                }

                // Get the address components and fill the city and state fields.
                var addressComponents = place.address_components;
                var city = '';
                var state = '';

                for (var i = 0; i < addressComponents.length; i++) {
                    var component = addressComponents[i];
                    if (component.types.includes('locality')) {
                        city = component.long_name;
                    }
                    if (component.types.includes('administrative_area_level_1')) {
                        state = component.short_name; // or use component.long_name for full state name
                    }
                }

                // Center the map on the selected place
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
            });
        }
    </script>
    @include('Templates.Jslinks')
</body>

</html>
