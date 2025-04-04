<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add Promotion</title>
    <style>
        #ferror {
            display: none;
        }
    </style>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('Admin.Dashboard') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h5 class="mb-0 blu font-j">Add Sub Admin</h5>
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
                    <!-- <h4 class="mb-0 blu2 mt-2">Add Promotion</h4> -->
                    <div class="row mt-3">
                        <div class="col-sm-8">
                            <form id="dynamicForm" action="#" class="">
                                <div class="row" id="formFieldsContainer">
                                    <!-- Dynamic Fields will be added here -->
                                </div>
                                <div class="my-3">
                                    <button type="submit" id="saveButton"
                                        class="border py-2 px-5 bg-sky text-white rounded-3"
                                        style="display: none;">Save</button>
                                </div>
                                <div id="fieldError" class="ferror text-danger">
                                    Please select a field.
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center">
                            <div class="d-inline-flex flex-column w-100">
                                <label for="fieldSelector" class="fw-medium ">Select Fields</label>
                                <select id="fieldSelector" class="form-select focus-none shadow-none">
                                    <option value="" selected disabled hidden>Select a field</option>
                                    <option value="nameField">Name</option>
                                    <option value="emailField">Email</option>
                                    <option value="phoneField">Phone</option>
                                    <option value="passwordField">Password</option>
                                </select>
                            </div>
                        </div>




                    </div>


                </div>
            </div>
        </div>
    </section>


    @include('Templates.Jslinks')

    <script>
        // Predefined fields data
        const fields = {
            nameField: `
                <div class="col-sm-6 mb-3" id="nameField">
                    <label for="name" class="ps-2 fw-medium">Name</label>
                    <input type="text" id="name" class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                </div>`,
            emailField: `
                <div class="col-sm-6 mb-3" id="emailField">
                    <label for="email" class="ps-2 fw-medium">Email</label>
                    <input type="email" id="email" class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                </div>`,
            phoneField: `
                <div class="col-sm-6 mb-3" id="phoneField">
                    <label for="phone" class="fw-medium ps-2">Phone Number</label>
                    <input type="tel" id="phone" class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                </div>`,
            passwordField: `
                <div class="col-sm-6 mb-3" id="passwordField">
                    <label for="password" class="fw-medium ps-2">Password</label>
                    <input type="password" id="password" class="w-100 bg-nblue border rounded-3 p-2" placeholder="Type here">
                </div>`
        };

        const fieldSelector = document.getElementById("fieldSelector");
        const formFieldsContainer = document.getElementById("formFieldsContainer");
        const saveButton = document.getElementById("saveButton");
        const fieldError = document.getElementById("fieldError");

        // Handle field selection and toggling
        fieldSelector.addEventListener("change", function() {
            const selectedValue = fieldSelector.value;

            // If no value is selected, return early
            if (!selectedValue) return;

            const fieldElement = document.getElementById(selectedValue);
            const selectedOption = fieldSelector.querySelector(`option[value="${selectedValue}"]`);

            if (fieldElement) {
                // If field is already present, remove it
                fieldElement.remove();
                selectedOption.style.backgroundColor = ""; // Reset background
                selectedOption.style.color = ""; // Reset text color
            } else {
                // Add the field
                formFieldsContainer.insertAdjacentHTML("beforeend", fields[selectedValue]);
                selectedOption.style.backgroundColor = "#007bff"; // Highlight
                selectedOption.style.color = "#fff"; // White text
            }

            // Reset the dropdown to "Select a field" option after selection
            fieldSelector.value = "";
            toggleSaveButton();
            fieldError.style.display = "none";
        });

        function toggleSaveButton() {
            const hasFields = formFieldsContainer.children.length > 0;
            saveButton.style.display = hasFields ? "block" : "none";

            if (!hasFields) {
                fieldError.style.display = "block";
            } else {
                fieldError.style.display = "none"; 
            }
        }
        const form = document.getElementById("dynamicForm");
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            toggleSaveButton(); 
        });
    </script>


</body>

</html>
