<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Expense</title>
</head>

<body>
    @if (session('success'))
    <script>
        swal("Good job!", "{{ session('success') }}", "success");
    </script>
@endif
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Sales</span>
                                    <!-- <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Expenses</span> -->
                                </h3>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.BusinessUserNavBar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="d-xxl-flex align-items-center justify-content-between">
                                <div>
                                    <h1 class="fs-4 font-bold">
                                        Expenses
                                    </h1>
                                    <p class="mb-0 gre">Here's how The Repair Guy Services is doing today.</p>
                                </div>
                                <div class="d-xl-flex justify-content-end align-items-center mt-xxl-0 mt-3">
                                    <div class="d-flex align-items-center justify-content-end mt-xl-0 mt-3 me-2 ">
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('BusinessUser.AddNewExpenses') }}">
                                                <button type="button"
                                                    class="mbl-100 btn-sv rounded-2 px-sm-4 px-2 text-nowrap py-2 bg-sky text-white border-0">Add
                                                    Expenses</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-sm-flex align-items-center">
                                        <div
                                            class="d-flex ps-3 align-items-center bg-white border-1 rounded-2 mt-sm-0 mt-2">
                                            <label for="filter"> <i class="fas fa-filter grey"></i></label>
                                            <select name="" id="filter"
                                                class="border-white filter-width pe-3 py-2 grey me-1  focus-none font-md bg-transparent">
                                                <option value="" selected disabled hidden>Filter</option>
                                                <option value="">Filter by Date</option>
                                                <option value="">Filter by Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-3 p-3 mt-3">
                                <div class="d-flex flex-column h-100 justify-content-between">
                                    <div>
                                        <div class="table-responsive mt-3 h-100">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Job</th>
                                                        <th>Invoice Receipt</th>
                                                        <th>Date</th>
                                                        <th>Item Name</th>
                                                        <th>Reimburse to</th>
                                                        <th>Total Expenses</th>
                                                        <th>Payment Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($expenses as $expense)
                                                        <tr class="align-middle">
                                                           
                                                            <td>{{ $expense->job }}</td>
                                                            <td>
                                                                <a href="{{ asset($expense->receipt) }}" src="{{ asset($expense->receipt) }}"
                                                                    alt="Invoice Receipt"
                                                                    class="me-2 cus-img rounded-circle">Click here</a>
                                                            </td>
                                                            <td>{{ $expense->date }}</td>
                                                            <td>{{ $expense->itemName }}</td>
                                                            <td>{{ $expense->reimburseTo }}</td>
                                                            <td>${{ $expense->totalAmount }}</td>
                                                            <td>
                                                                <button type="button"
                                                                    class="bg-{{ $expense->paymentStatus == 'paid' ? 'lgreen' : 'lred' }} text-{{ $expense->paymentStatus == 'paid' ? 'success' : 'danger' }} font-md status-btn text-center px-3 py-2 rounded-pill border-0">
                                                                    {{ $expense->paymentStatus }}
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="team-size">
                                                                        <a href="{{ route('BusinessUser.ExpenseDetails', $expense->id) }}">
                                                                            <img src="{{ asset('img/actioneye.svg') }}"
                                                                                class="image-fluid img">
                                                                        </a>
                                                                    </div>
                                                                    <div class="ms-2 team-size">
                                                                        <a href="{{ route('BusinessUser.EditExpense', $expense->id) }}">
                                                                            <img src="{{ asset('img/team-pen.svg') }}"
                                                                                class="image-fluid img">
                                                                        </a>
                                                                    </div>
                                                                    <div class="ms-2 team-size">
                                                                        <form action="{{ route('BusinessUser.DeleteExpense', $expense->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this expense?');">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="border-0 bg-transparent p-0">
                                                                                <img src="{{ asset('img/team-del.svg') }}"
                                                                                    class="image-fluid img">
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-center">
                                            <div
                                                class="mt-3 d-sm-flex pagination-box shadow align-items-center justify-content-center border-1 rounded-3 py-2 px-sm-3 px-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="border-end border-2 py-1 pe-sm-3 pe-1">
                                                        <p class="mb-0 font-12">Showing 1 to 25 of 350 results</p>
                                                    </div>
                                                    <div class="border-end border-2 px-sm-3 px-1">
                                                        <select name="" id=""
                                                            class="form-select font-12 focus-none shadow-none rounded-3">
                                                            <option value="" selected disabled hidden>30 per page
                                                            </option>
                                                            <option value="">30 per page</option>
                                                            <option value="">30 per page</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-center mt-sm-0 mt-2">
                                                    <div class="border-end border-2 px-3">
                                                        <button
                                                            class="border rounded-3 px-4 py-2 bg-transparent text-black font-12">Previous</button>
                                                    </div>
                                                    <div class="border-1 ps-3">
                                                        <button
                                                            class="rounded-3 border-0 px-4 py-2 bg-lblue font-12">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    @include('Templates.Jslinks')

</body>

</html>
