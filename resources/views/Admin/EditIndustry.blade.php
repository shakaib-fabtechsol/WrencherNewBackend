<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Edit Industry</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('Admin.Industry') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h4 class="mb-0 blu font-j">Edit Industry</h4>
                    </div>
                </div>
                <div class="">
                    @include('Templates.AdminNavbar')
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="right-bottom1">
                <div class="container-fluid h-100">
                    <form method="post" action="{{ route('Admin.UpdateIndustry', $industry->id) }}" enctype="multipart/form-data">
                        @csrf
                        <h4 class="mb-0">Edit Industry</h4>
                        <div class="row mt-3 pe-2">
                            <div class=" mx-auto py-2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="row">
                                                    <h6 class="mute-blue py-3 px-3 rounded-3 fw-semibold shadow-sm">
                                                        Industry Detail</h6>
                                                    <div class="row flex-sm-row flex-column-reverse pe-0">
                                                        <div class="col-sm-6 mt-sm-0 mt-3 pe-0">
                                                            <div>
                                                                <label for="title"
                                                                    class="sky-c form-label fw-medium font-12 ps-2">Title</label>
                                                                <input type="text" name="name"
                                                                    value="{{ $industry->name }}" id="title"
                                                                    class="sky-c border bg-white w-100 py-2 rounded-3 px-2"
                                                                    placeholder="Title here">
                                                                @error('title')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 mt-sm-0 mt-3 pe-0">
                                                            <label for="picture-c"
                                                                class="sky-c form-label fw-medium font-12 ps-2">Upload
                                                                Image</label>
                                                            <div class="w-100 bg-white border rounded-3 p-2">
                                                                <input type="file" name="img" id="picture-c"
                                                                    class="d-none"
                                                                    accept="image/png, image/jpeg, image/jpg"
                                                                    onchange="previewImage(event)">

                                                                <label for="picture-c" class="uploadbtn2">
                                                                    <a class="uploadbtn2a">Upload Image</a>
                                                                    <p class="mb-0 text-muted filename overflow-hidden"
                                                                        id="file-name">No file chosen</p>
                                                                </label>

                                                                @error('img')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="mt-2" id="preview-container"
                                                                style="display: block;">
                                                                <img id="preview-img"
                                                                    src="{{ asset('uploads/' . $industry->img) }}"
                                                                    alt="Industry Image" class="img-thumbnail"
                                                                    style="max-width: 150px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-lg-0 mt-5">
                                                <div>
                                                    <a href="{{ route('Admin.Industry') }}"
                                                        class="text-decoration-none text-dark">
                                                        <div class="border rounded-3 py-2 px-4">Cancel</div>
                                                    </a>
                                                </div>
                                                <div class="ms-3">
                                                    <button type="submit"
                                                        class="bg-sky border-blu text-white p-2 px-sm-4 px-2 rounded-3">Save
                                                        New Industry</button>
                                                </div>
                                            </div>
                                        </div>
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
        function previewImage(event) {
            const input = event.target;
            const fileNameElement = document.getElementById("file-name");
            const previewContainer = document.getElementById("preview-container");
            const previewImage = document.getElementById("preview-img");

            if (input.files && input.files[0]) {
                const file = input.files[0];
                fileNameElement.textContent = file.name;

                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.style.display = "block";
                };
                reader.readAsDataURL(file);
            } else {
                fileNameElement.textContent = "No file chosen";
                previewImage.src = "{{ asset('uploads/' . $industry->img) }}";
            }
        }
    </script>


    @include('Templates.Jslinks')
</body>

</html>
