<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>add new Industry</title>
</head>

<body class="bg-white">
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('Admin.Industry') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h4 class="mb-0 blu font-j">Add New Industry</h4>
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
                    <form method="post" action="{{ route('Admin.StoreIndustry') }}" class=""
                        enctype="multipart/form-data">
                        @csrf
                        <h4 class="mb-0">Add New Industry</h4>
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
                                                                <input type="text" name="title"
                                                                    value="{{ old('title') }}" id="title"
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
                                                                <input type="file" name="image" id="picture-c"
                                                                    class="d-none" accept="image/png">
                                                                <label for="picture-c" class="uploadbtn2">
                                                                    <a class="uploadbtn2a">Upload Image</a>
                                                                    <p class="mb-0 text-muted filename overflow-hidden">
                                                                        No file chosen</p>
                                                                </label>
                                                                @error('image')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-12">
                                                        <div>
                                                            <label for=""
                                                                class="sky-c form-label fw-medium mb-0 font-12 ps-2">Detail</label>
                                                            <textarea name="" id="" class="sky-c border bg-white w-100 py-2 rounded-3 px-2"
                                                                placeholder="Description" rows="5"></textarea>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-lg-0 mt-5">
                                                <div>
                                                    <a href="{{ route('Admin.Industry') }}" class="text-decoration-none text-dark">
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
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('picture-c');
            const fileNameElement = document.querySelector('.filename');

            fileInput.addEventListener('change', function() {
                if (fileInput.files.length > 0) {
                    let fileName = fileInput.files[0].name;
                    if (fileName.length > 15) {
                        fileName = fileName.substring(0, 12) + '...';
                    }

                    fileNameElement.textContent = fileName;
                } else {
                    fileNameElement.textContent = 'No file chosen';
                }
            });
        });
    </script>
    @include('Templates.Jslinks')
</body>

</html>
