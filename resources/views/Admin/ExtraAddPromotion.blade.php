<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add Promotion</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('Admin.Dashboard') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Promotion</h5>
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
                    <form action="#" class="">
                        <h4 class="mb-0 blu2 mt-2">Add Promotion</h4>
                        <div class="row mt-3">
                            <div class="col-xxl-8 col-lg-9">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="select-service" class="fw-medium ps-2">Select Service</label>
                                        <select name="service" id="select-service"
                                            class="w-100 bg-nblue border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Picture Hanging ">Picture Hanging </option>
                                            <option value="Drywall Repair">Drywall Repair</option>
                                            <option value="Gutter Cleaning">Gutter Cleaning</option>
                                            <option value="Curtain Rod Install">Curtain Rod Install</option>
                                            <option value="Door Knob/ Handle Lock Install">Door Knob/ Handle Lock
                                                Install</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="promotion-title" class="ps-2 fw-medium">Promotion Title</label>
                                        <input type="text" id="promotion-title"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="promotion-type" class="fw-medium ps-2">Promotion Type</label>
                                        <select name="promotion-type" id="promotion-type"
                                            class="w-100 bg-nblue border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Percentage Dicount">Percentage Dicount</option>
                                            <option value="Flat Discount">Flat Discount</option>
                                            <option value="Bundle Offer">Bundle Offer</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="discount-value" class="fw-medium ps-2">Discount Value</label>
                                        <input type="text" id="discount-value"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="start-date" class="fw-medium ps-2">Start Date</label>
                                        <input type="date" id="start-date"
                                            class="w-100 bg-nblue border rounded-3 p-2">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="end-date" class="fw-medium ps-2">End Date</label>
                                        <input type="date" id="end-date"
                                            class="w-100 bg-nblue border rounded-3 p-2">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="eligibility-criteria" class="fw-medium ps-2">Eligibility Criteria
                                            (Optional)</label>
                                        <input type="text" id="eligibility-criteria"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="maximum-discount" class="fw-medium ps-2">Maximum Discount</label>
                                        <input type="text" id="maximum-discount"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="usage-limit" class="fw-medium ps-2">Usage Limit</label>
                                        <input type="text" id="usage-limit"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="promotion-code" class="fw-medium ps-2">Promotion Code</label>
                                        <input type="text" id="promotion-code"
                                            class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="status" class="fw-medium ps-2">Status</label>
                                        <select name="status" id="status"
                                            class="w-100 bg-nblue border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                            <option value="Draft">Draft</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <label for="description" class="fw-medium ps-2">Description</label>
                                        <textarea id="description" class="w-100 bg-nblue border rounded-3 p-2" rows="6" placeholder="Type here"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="my-3">
                            <button class="border py-2 px-5 bg-sky text-white rounded-3">Save</button>
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
                    <form action="#">
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
                    <form action="#">
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
                                        territory (if applicaable)</label>
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
