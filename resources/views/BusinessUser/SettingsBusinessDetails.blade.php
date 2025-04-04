<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Billing Details</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Setting') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Business Details</h5>
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
                                <!-- New Fields: Name, Description, Duration, Price -->
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="name" class="ps-2 fw-semibold">Name</label>
                                        <input type="text" id="name" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Enter name">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="description" class="ps-2 fw-semibold">Description</label>
                                        <input type="text" id="description"
                                            class="w-100 bg-white border rounded-3 p-2" placeholder="Enter description">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="duration" class="ps-2 fw-semibold">Duration</label>
                                        <input type="text" id="duration" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Enter duration">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="price" class="ps-2 fw-semibold">Price</label>
                                        <input type="text" id="price" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Enter price">
                                    </div>
                                </div>

                                <div class="row mt-5 mb-2">
                                    <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                        <button class="border py-2 w-100 rounded-3">Cancel</button>
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
