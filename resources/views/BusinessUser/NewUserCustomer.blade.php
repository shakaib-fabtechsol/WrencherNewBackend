<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>New Customer</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="#" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Create New Customer</h5>
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
                        <h4 class="mb-0 blu2">Add New Customer Details</h4>
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="picturec" class="fw-semibold ps-2">Customer Picture</label>
                                        <input type="file" name="" id="picturec"
                                            class="w-100 bg-white border rounded-3 p-2">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="fullname" class="ps-2 fw-semibold">Full Name</label>
                                        <input type="text" id="fullname" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="phone" class="ps-2 fw-semibold">Phone Number</label>
                                        <input type="tel" id="phone" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="email" class="ps-2 fw-semibold">Email</label>
                                        <input type="email" id="email" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="Refer" class="ps-2 fw-semibold">Referral</label>
                                        <input type="text" id="Refer" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                </div>
                                <div class="d-md-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <h5>Customer Address</h5>
                                    </div>
                                    <div class="text-end">
                                        <button data-bs-target="#mapModal" data-bs-toggle="modal" type="button"
                                            class="border py-2 px-4 rounded-3 blu"><i
                                                class="fa-solid fa-location-dot me-2"></i> Search Address</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3">
                                        <label for="street" class="ps-2 fw-semibold">Street Address</label>
                                        <input type="text" id="street" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="apd" class="ps-2 fw-semibold">Apt, floor, bldg (if
                                            applicable)</label>
                                        <input type="text" id="apd" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="ctv" class=" ps-2 fw-semibold">City / town / village</label>
                                        <input type="text" id="ctv" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="pst" class=" ps-2 fw-semibold">Province / state / territory (if
                                            applicaable)</label>
                                        <input type="text" id="pst" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="postal" class=" ps-2 fw-semibold">Postal code (if
                                            applicable)</label>
                                        <input type="text" id="postal" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 mb-2">
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button class="border py-2 w-100 rounded-3">Cancel</button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button class="border py-2 bg-sky text-white w-100 rounded-3">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="modal modal-lg fade" id="mapModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Where's your place located?</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <h5>Your address is only shared with Job Seekers.</h5>
                                <div>
                                    <input id="autocomplete" type="text" class="form-control"
                                        placeholder="Enter a location">
                                    <div id="map" class="mt-3"></div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div>
                                        <p class="blu fw-medium pointer" data-bs-target="#confirmModal"
                                            data-bs-toggle="modal">Enter Manual Address</p>
                                    </div>
                                    <div>
                                        <button class="bg-sky text-white py-2 px-5 rounded-2 border-blu">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-lg fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <h4 class="text-center w-100" id="exampleModalLabel">Confirm your address</h4>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fs-4 fa-circle-xmark text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Street Address</label>
                                    <input type="text" class="modal-input" placeholder="Sialkot, 90 more">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Apt, floor, bldg (if
                                        applicable)</label>
                                    <input type="text" class="modal-input" placeholder="Second Floor">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">City / town /
                                        village</label>
                                    <input type="text" class="modal-input" placeholder="Main Chino ">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Province / state /
                                        territory (if
                                        applicaable)</label>
                                    <input type="text" class="modal-input" placeholder="Punjab">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label fw-medium mb-0">Postal code (if
                                        applicable)</label>
                                    <input type="text" class="modal-input" placeholder="57000">
                                </div>
                                <div class="row justify-content-between mt-5">
                                    <div class="col-sm-4 col-6">
                                        <p class="text-decoration-underline">Clear</p>
                                    </div>
                                    <div class="col-sm-4 col-6">
                                        <button type="submit"
                                            class="bg-sky py-2 px-2 w-100 text-white border-primary border-1 rounded-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
