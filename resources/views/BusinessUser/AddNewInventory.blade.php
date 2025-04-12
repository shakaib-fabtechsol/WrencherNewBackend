<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>New Inventory</title>
</head>

<body class="bg-white">
    @if (session('success'))
        <script>
            swal("Good Job!", "{{ session('success') }}", "success");
        </script>
    @endif
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Inventory') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Create a New Inventory</h5>
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
                    <form method="post" action="{{ route('BusinessUser.CreateInventory') }}">
                        @csrf
                        <h4 class="mb-0 blu2 mt-3">Add New Item Details</h4>
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="name" class="ps-2 fw-semibold">Item Name</label>
                                        <input type="text" id="name" name="name" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="description" class="ps-2 fw-semibold">Item Description</label>
                                        <input type="text" id="description" name="description" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="type" class="ps-2 fw-semibold">Item Type</label>
                                        <input type="text" id="type" name="type" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="quantity" class="ps-2 fw-semibold">Item Quantity</label>
                                        <input type="text" id="quantity" name="quantity" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="date" class="ps-2 fw-semibold">Date</label>
                                        <input type="date" id="date" name="date" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="trackingStatus" class="ps-2 fw-semibold">Tracking Status</label>
                                        <select id="trackingStatus" name="trackingStatus" class="w-100 bg-white border rounded-3 p-2" name="trackingStatus" id="">
                                            <option value="high">High</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-6 mb-3 d-flex justify-content-between align-content-center">
                                        <label for="ref" class="ps-2 fw-semibold">Low Stock Alert</label>
                                        <div class="switch">
                                            <input type="checkbox" class="switch-input" id="toggle">
                                            <label class="switch-slider" for="toggle"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 d-flex justify-content-between align-items-center">
                                        <label for="ref" class="ps-2 fw-semibold">Send alert when stock is at or
                                            below</label>
                                        <div class="d-flex align-items-center">
                                            <input type="number" class="form-control focus-none me-2" min="1"
                                                value="1">
                                            <select name="" id="" class="form-select focus-none">
                                                <option value="Days">Days</option>
                                                <option value="Weeks">Weeks</option>
                                                <option value="Month">Month</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="d-md-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <h5>Customer Address</h5>
                                    </div>
                                    <div class="text-end">
                                        <button  data-bs-target="#mapModal" data-bs-toggle="modal" type="button" class="border py-2 px-4 rounded-3 blu"><i class="fa-solid fa-location-dot me-2"></i> Search Address</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3">
                                        <label for="streetad" class="ps-2 fw-semibold">Street Address</label>
                                        <input type="text" id="streetad" class="w-100 bg-white border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="apt" class="ps-2 fw-semibold">Apt, floor, bldg (if applicable)</label>
                                        <input type="text" id="apt" class="w-100 bg-white border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="ctv" class=" ps-2 fw-semibold">City / town / village</label>
                                        <input type="text" id="ctv" class="w-100 bg-white border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="pst" class=" ps-2 fw-semibold">Province / state / territory (if applicaable)</label>
                                        <input type="text" id="pst" class="w-100 bg-white border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="postal" class=" ps-2 fw-semibold">Postal code (if applicable)</label>
                                        <input type="text" id="postal" class="w-100 bg-white border rounded-3 p-2" placeholder="Type here">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="row mt-5 mb-2">
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button class="border py-2 w-100 rounded-3">Cancel</button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button type="submit" class="border py-2 bg-sky text-white w-100 rounded-3">Save</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('picture-c');
            const fileNameElement = document.querySelector('.filename');

            fileInput.addEventListener('change', function() {
                if (fileInput.files.length > 0) {
                    let fileName = fileInput.files[0].name;
                    if (fileName.length > 40) {
                        fileName = fileName.substring(0, 37) + '...';
                    }

                    fileNameElement.textContent = fileName;
                } else {
                    fileNameElement.textContent = 'No file chosen';
                }
            });
        });
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu1gwHCSzLG9ACacQqLk-LG8oJMkarNF0&libraries=places&callback=initAutocomplete">
    </script>
    @include('Templates.Jslinks')
</body>

</html>
