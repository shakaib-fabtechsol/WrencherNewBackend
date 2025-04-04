<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Payment Setup</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Setting') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Payment Setup</h5>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="bg-white p-3 border rounded-3">
                            <h6 class="gre font-14">Edit default settings</h6>
                            <h6>Payment Details</h6>
                            <h6>Accepted Payment Methods</h6>
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <p class="gre fw-medium font-12 mb-0">Stripe (2.99 per transaction)</p>
                                    <div>
                                        <img src="{{ asset('img/stripe.png') }}" alt="" class="stripe-img">
                                    </div>
                                </div>
                                <div>
                                    <div class="switch">
                                        <input type="checkbox" class="switch-input" id="toggle4" checked>
                                        <label class="switch-slider" for="toggle4"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-3">
                                <div>
                                    <p class="gre fw-medium font-12 mb-0">Paypal (2.99 per transaction)</p>
                                    <div>
                                        <img src="{{ asset('img/s-p.png') }}" alt="" class="stripe-img">
                                    </div>
                                </div>
                                <div>
                                    <div class="switch">
                                        <input type="checkbox" class="switch-input" id="toggle">
                                        <label class="switch-slider" for="toggle"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu1gwHCSzLG9ACacQqLk-LG8oJMkarNF0&libraries=places&callback=initAutocomplete">
    </script>
    @include('Templates.Jslinks')
</body>

</html>
