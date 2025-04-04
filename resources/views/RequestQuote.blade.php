<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Request Quote</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('PlanYourService') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Request a Quote</h5>
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
                                    <h5>Contact Information</h5>
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
                                        <label for="email" class="ps-2 fw-semibold">Email Address</label>
                                        <input type="email" id="email" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="service_type" class="ps-2 fw-semibold">Service Type</label>
                                        <select id="service_type" class="w-100 bg-white border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Electrician">Electrician</option>
                                            <option value="Plumber">Plumber</option>
                                            <option value="Carpenter">Carpenter</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Project Details</h5>
                                    <div class="col-sm-12 mb-3">
                                        <label for="issue_description" class="ps-2 fw-semibold">Briefly describe the
                                            issue or service you need</label>
                                        <textarea id="issue_description" class="w-100 bg-white border rounded-3 p-2" rows="5" placeholder="Type here"></textarea>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="service_type_specific" class="ps-2 fw-semibold">Is this a repair,
                                            installation, or maintenance service?</label>
                                        <select id="service_type_specific" class="w-100 bg-white border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Repair">Repair</option>
                                            <option value="Installation">Installation</option>
                                            <option value="Maintenance">Maintenance</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Location Details</h5>
                                    <div class="col-sm-12 mb-3">
                                        <label for="address" class="ps-2 fw-semibold">Address</label>
                                        <input type="text" id="address" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="property_type" class="ps-2 fw-semibold">Is this a residential or
                                            commercial property?</label>
                                        <select id="property_type" class="w-100 bg-white border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Residential">Residential</option>
                                            <option value="Commercial">Commercial</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Urgency</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="urgency" class="ps-2 fw-semibold">How urgent is the
                                            service?</label>
                                        <select id="urgency" class="w-100 bg-white border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Emergency">Emergency</option>
                                            <option value="Within 24 hours">Within 24 hours</option>
                                            <option value="Flexible">Flexible</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Scope of Work</h5>
                                    <div class="col-sm-12 mb-3">
                                        <label for="requirements" class="ps-2 fw-semibold">Specific requirements or
                                            instructions</label>
                                        <textarea id="requirements" class="w-100 bg-white border rounded-3 p-2" rows="5" placeholder="Type here"></textarea>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="materials_provided" class="ps-2 fw-semibold">Materials or parts
                                            availability</label>
                                        <select id="materials_provided" class="w-100 bg-white border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Access Details</h5>
                                    <div class="col-sm-12 mb-3">
                                        <label for="access_details" class="ps-2 fw-semibold">Access restrictions or
                                            special instructions</label>
                                        <textarea id="access_details" class="w-100 bg-white border rounded-3 p-2" rows="5" placeholder="Type here"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Timing Preferences</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="timing" class="ps-2 fw-semibold">Preferred date and time</label>
                                        <input type="datetime-local" id="timing"
                                            class="w-100 bg-white border rounded-3 p-2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Budget</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="budget" class="ps-2 fw-semibold">Budget (optional)</label>
                                        <input type="number" id="budget"
                                            class="w-100 bg-white border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Additional Services</h5>
                                    <div class="col-sm-12 mb-3">
                                        <label for="additional_services" class="ps-2 fw-semibold">Would you like to
                                            bundle other services?</label>
                                        <select id="additional_services" class="w-100 bg-white border rounded-3 p-2">
                                            <option value="" selected disabled hidden>Select here</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Pictures or Videos</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="media" class="ps-2 fw-semibold">Upload pictures or
                                            videos</label>
                                        <input type="file" id="media"
                                            class="w-100 bg-white border rounded-3 p-2" multiple>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Referral Information</h5>
                                    <div class="col-sm-6 mb-3">
                                        <label for="referral" class="ps-2 fw-semibold">How did you hear about
                                            us?</label>
                                        <input type="text" id="referral"
                                            class="w-100 bg-white border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5>Special Requests or Notes</h5>
                                    <div class="col-sm-12 mb-3">
                                        <label for="special_notes" class="ps-2 fw-semibold">Additional
                                            information</label>
                                        <textarea id="special_notes" class="w-100 bg-white border rounded-3 p-2 " rows="5" placeholder="Type here"></textarea>
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
