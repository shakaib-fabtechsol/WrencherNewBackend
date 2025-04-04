<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add New Team Member</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Team') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 dark-blue font-j">Add New Team Member</h5>
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
                        <h4 class="mb-0 blu2">Create New Team Member</h4>
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="fname" class="ps-2 fw-semibold">Full Name*</label>
                                        <input type="text" id="fname" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="email" class="ps-2 fw-semibold">Email*</label>
                                        <input type="email" id="email" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="phone" class="ps-2 fw-semibold">Phone Number*</label>
                                        <input type="tel" id="phone" class="w-100 bg-white border rounded-3 p-2"
                                            placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div>
                                            <label for="" class="ps-2 fw-semibold">Choose pemrissions</label>
                                            <div class="dropdown-container">
                                                <div class="dropdown-trigger d-flex bg-white">
                                                    <div class="w-100">
                                                        <button type="button"
                                                            class="w-100 dropdown-toggle-btn border-0 p-0 text-start bg-white">Select
                                                            Here</button>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-caret-down"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-content bg-white shadow rounded-3 p-2 mt-2">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between shadow-sm rounded-3 bg-white p-2">
                                                        <div>
                                                            <button type="button"
                                                                class="create-new-btn text-start">Choose
                                                                pemrissions</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="bg-sky text-white rounded-3 py-2 px-3 border-0 shadow-sm"
                                                                data-bs-toggle="modal" data-bs-target="#rolepop">Add New
                                                                Role
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <ul class="customer-list mt-2">
                                                        <!-- Customer items will be added here dynamically -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-white px-3 py-2 mx-3 mt-4 rounded-3">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center justify-content-between p-2 mt-2">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold">Service Provider</h6>
                                                    <p class="mb-0">Can this Team Member be assigned to jobs?</p>
                                                </div>
                                                <div>
                                                    <div class="switch">
                                                        <input type="checkbox" class="switch-input" id="toggle1">
                                                        <label class="switch-slider" for="toggle1"></label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Appliance
                                                Repair</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Assembly</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Drywall
                                                Repair</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Electrical</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Estimate</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Gutter
                                                Cleaning</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Handyman</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Junk
                                                Removal</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Mounting</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Painting</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Plumbing</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Pressure
                                                Cleaning</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Screen
                                                Repair</span>
                                            <span
                                                class="border-1 rounded-pill px-3 py-2 my-2 text-nowrap d-inline-block me-3">Window
                                                Repair</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 mb-2">
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <button class="border py-2 w-100 rounded-3">Cancel</button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 mb-2">
                                <a href="#">
                                    <button class="border py-2 bg-sky text-white w-100 rounded-3">Save Team
                                        Member</button>
                                </a>
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
                                <div class="row justify-con
                                tent-between mt-5">
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

    <!-- Modal for Adding New Role -->
    <div class="modal fade" id="rolepop" tabindex="-1" aria-labelledby="rolepopLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-5">
                <div class="modal-header">
                    <div class="text-center w-100" id="rolepopLabel">
                        <h3>Add a New Role for Members</h3>
                    </div>
                    <button type="button" class="border-0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fs-4 fa-circle-xmark text-danger"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <p class="mb-3 font-semi">Please fill in all required fields.</p>
                        <label for="text-free" class="font-semi">Role Name</label>
                        <input type="text" id="text-free" placeholder="Type here"
                            class="form-control focus-none mb-4">
                        <button type="button"
                            class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-sky text-white border-0">Save</button>
                    </div>
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
    <script>
        document.querySelector('.dropdown-trigger').addEventListener('click', function() {
            const dropdownMenu = document.querySelector('.dropdown-content');
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', function(event) {
            const isClickInside = document.querySelector('.dropdown-container').contains(event.target);
            if (!isClickInside) {
                document.querySelector('.dropdown-content').style.display = 'none';
            }
        });

        // Sample customer data
        const customers = [{
                name: 'Customer',
                p: 'jhgjklk'
            },
            {
                name: 'Customer',
                p: 'jhgjklk'
            },
            {
                name: 'Customer',
                p: 'jhgjklk'
            },
            {
                name: 'Customer',
                p: 'jhgjklk'
            },
            {
                name: 'Customer',
                p: 'jhgjklk'
            },
        ];

        const customerList = document.querySelector('.customer-list');
        const dropdownToggle = document.querySelector('.dropdown-toggle-btn');

        customers.forEach(customer => {
            const li = document.createElement('li');
            li.className = 'customer-list-item d-flex flex-column align-items-start';
            li.innerHTML = `<h6 class="mb-0">${customer.name}</h6><p class="mb-0">${customer.p}</p>`;
            li.addEventListener('click', function() {
                dropdownToggle.textContent = customer.name; // Update the dropdown button text
                document.querySelector('.dropdown-content').style.display =
                    'none'; // Close the dropdown menu
            });
            customerList.appendChild(li);
        });
    </script>
</body>

</html>
