<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>New Contract</title>
</head>

<body>
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="col-6">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Contract') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h4 class="mb-0 dark-blue font-j">Create New Contracts</h4>
                    </div>
                </div>
                <div class="col-6">
                    @include('Templates.BusinessUserNavBar')
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="right-bottom1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="p-sm-4">
                            <h3 class="expense-color">New Contracts</h3>
                            <div class="stepper-form  mt-3">
                                <div class="step-content-container">
                                    <div class="step-content active">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-xxl-4 mb-3">
                                                <div>
                                                    <label for="" class="ps-2 fw-semibold">Select
                                                        Customer</label>
                                                    <div class="dropdown1">
                                                        <div class="dropdown-toggle1 d-flex bg-white">
                                                            <div class="w-100">
                                                                <button type="button"
                                                                    class="w-100 dropdown-toggle2 border-0 p-0 text-start bg-white">Select
                                                                    Here</button>
                                                            </div>
                                                            <div>
                                                                <i class="fa-solid fa-caret-down"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu1 bg-white shadow rounded-3 p-2">
                                                            <button type="button"
                                                                class="create-new-btn text-start shadow-sm rounded-3"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="fa-solid fa-square-plus me-2"></i>Create a
                                                                new
                                                                customer</button>
                                                            <div class="mt-2">
                                                                <div
                                                                    class="search-input d-flex align-items-center shadow-sm px-3 py-2">
                                                                    <input type="text" placeholder="Search Customer"
                                                                        class="w-100 border-0">
                                                                    <button class="search-btn"><i
                                                                            class="fa-solid fa-magnifying-glass"></i></button>
                                                                </div>
                                                            </div>
                                                            <ul class="customer-list mt-2">
                                                                <!-- Customer items will be added here dynamically -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xxl-4 mb-3">
                                                <label for="" class="fw-semibold">Please choose</label>
                                                <div class="d-flex mt-2">
                                                    <div class="me-3 me-xl-5">
                                                        <input type="radio" name="link" id="estimate">
                                                        <label for="estimate">Link to estimate</label>
                                                    </div>
                                                    <div class="">
                                                        <input type="radio" checked name="link" id="quote">
                                                        <label for="quote">Link to quote</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0 lh-font">
                                                This Independent Contractor Agreement (“Agreement”) is made between
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="John Doe">
                                                with a mailing address of
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="123 Main St">
                                                City of
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="Los Angeles">
                                                State of
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="California">
                                                ("Client")
                                            </p>

                                            <p class="fw-bold text-center my-4">AND</p>

                                            <p class="lh-font mb-0">
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="Jane Smith">
                                                with a principal place of business at
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="456 Business Rd">
                                                City of
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="San Francisco">
                                                State of
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="California">
                                                ("Contractor")
                                            </p>

                                            <p class="lh-font mb-0 mt-3">The Client and Contractor shall be known
                                                collectively as the “Parties”.</p>

                                            <p class="lh-font mb-0 mt-3">
                                                WHEREAS this Agreement shall be made effective on the
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="15th">
                                                days of
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="January">
                                                20
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="2025">.
                                            </p>

                                            <p class="mt-3 lh-font mb-0">THE PARTIES AGREE AS FOLLOWS:</p>

                                            <h6 class="fw-bold">1. Services to Be Performed</h6>
                                            <p class="lh-font">
                                                Contractor agrees to perform the following services:
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black"
                                                    id="" value="Web Development">
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black"
                                                    id="" value="SEO Optimization">
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black"
                                                    id="" value="UI/UX Design">
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black"
                                                    id="" value="Testing">
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black"
                                                    id="" value="Documentation">
                                                ("Services")
                                            </p>

                                            <h6 class="fw-bold">2. Payment</h6>
                                            <p class="lh-font">
                                                In consideration for the Services to be performed by Contractor, Client
                                                agrees to pay Contractor in the following manner:
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black"
                                                    id="" value="$50 per hour">
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black"
                                                    id="" value="via Bank Transfer">.
                                                Contractor shall be paid within a reasonable time after Contractor
                                                submits an invoice to Client. The invoice should include the following:
                                                an invoice number, the dates covered by the invoice, a summary of the
                                                work performed, and any other information or details in accordance with
                                                this Agreement.
                                            </p>

                                            <h6 class="fw-bold">3. Expenses <span class="fw-normal">(Check one)</span>
                                            </h6>
                                            <div class="d-flex align-items-baseline mb-3">
                                                <input type="checkbox" checked checked>
                                                <label for="" class="ms-3">Contractor shall be responsible
                                                    for all
                                                    expenses incurred while performing Services
                                                    under this Agreement. This includes automobile, truck, and other
                                                    travel expenses;
                                                    vehicle maintenance and repair costs; vehicle and other license fees
                                                    and permits;
                                                    insurance premiums; road, fuel, and other taxes; fines; radio,
                                                    pager, and cell phone
                                                    expenses; meals; and all salary, expenses, and other compensation
                                                    paid to employees
                                                    or contract personnel the Contractor hires to complete the work
                                                    under this Agreement. </label>
                                            </div>
                                            <div class="mt-5 d-sm-flex ">
                                                <div class="d-flex">
                                                    <p class="mb-0">Client's Initials- </p><input type="text"
                                                        value="A" name="" value="A"
                                                        class="border-bottom border-0 bg-transparent border-black mx-1"
                                                        id="">
                                                </div>
                                                <div class="d-sm-flex ms-sm-4">
                                                    <p class="mb-0 text-nowrap">Contractor's Initials-</p> <input
                                                        type="text" value="A" name="" value="A"
                                                        class="border-bottom border-0 bg-transparent w-100 border-black mx-1"
                                                        id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-content">
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Client shall reimburse Contractor
                                                within thirty
                                                (30) days after receipt of an itemized
                                                statement for the following expenses that are attributable directly to
                                                the Services
                                                performed under this Agreement:<input type="text" value="Service A"
                                                    name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id=""> </label>
                                        </div>
                                        <div>
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service A">
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service B">
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service C">
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service D">
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service E">
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service F">
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service G">
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service H">
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black"
                                                id="" value="Service I">
                                        </div>

                                        <h6 class="fw-bold mt-3">4. Vehicles and Equipment</h6>
                                        <p>Contractor will furnish all vehicles, equipment, tools, and materials used to
                                            provide the
                                            Services required by this Agreement. Client will not require Contractor to
                                            rent or
                                            purchase any equipment, product, or service as a condition of entering into
                                            this
                                            Agreement.</p>
                                        <h6 class="fw-bold">5. Independent Contractor Status</h6>
                                        <p>Contractor is an independent contractor, and neither Contractor nor
                                            Contractor's
                                            employees or contract personnel are, or shall be deemed, Client's employees.
                                            In its
                                            capacity as an independent contractor, Contractor agrees and represents, and
                                            Client
                                            agrees, as follows:<br>

                                            (check all that apply)
                                        </p>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Contractor has the right to perform
                                                Services for
                                                others during the term of this
                                                Agreement. </label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Contractor has the sole right to
                                                control and
                                                direct the means, manner, and method
                                                by which the Services required by this Agreement will be performed.
                                                Contractor shall
                                                select the routes taken, starting and quitting times, days of work, and
                                                order the work is
                                                performed</label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Contractor has the right to hire
                                                assistants as
                                                subcontractors or to use employees to
                                                provide the Services required by this Agreement.</label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Neither Contractor nor Contractor's
                                                employees or
                                                contract personnel shall be
                                                required to wear any uniforms provided by Client.</label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">The Services required by this
                                                Agreement shall be
                                                performed by Contractor,
                                                Contractor's employees, or contract personnel, and Client shall not
                                                hire, supervise, or
                                                pay any assistants to help Contractor.</label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Neither Contractor nor Contractor's
                                                employees or
                                                contract personnel shall receive
                                                any training from Client in the professional skills necessary to perform
                                                the Services
                                                required by this Agreement.
                                            </label>
                                        </div>
                                        <div class="mt-5 d-sm-flex ">
                                            <div class="d-flex">
                                                <p class="mb-0">Client's Initials- </p><input type="text"
                                                    value="A" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="">
                                            </div>
                                            <div class="d-sm-flex ms-sm-4">
                                                <p class="mb-0 text-nowrap">Contractor's Initials-</p> <input
                                                    type="text" value="A" name=""
                                                    class="border-bottom border-0 bg-transparent w-100 border-black mx-1"
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-content">
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Neither Contractor nor Contractor's
                                                employees or
                                                contract personnel shall be
                                                required by Client to devote full time to the performance of the
                                                Services required by this
                                                Agreement.
                                            </label>
                                        </div>
                                        <h6 class="fw-bold mt-3">6. Business Licenses, Permits, and Certificates</h6>
                                        <p class="ps-sm-4">Contractor represents and warrants that Contractor and
                                            Contractor's employees and
                                            contract personnel will comply with all federal, state, and local laws
                                            requiring drivers and
                                            other licenses, business permits, and certificates required to carry out the
                                            Services to
                                            be performed under this Agreement.
                                        </p>
                                        <h6 class="fw-bold mt-3">7. State and Federal Taxes</h6>
                                        <p class="ps-sm-4">Client shall not: Withhold FICA (Social Security and
                                            Medicare
                                            taxes) from Contractor's
                                            payments or make FICA payments on Contractor's behalf; Make state or federal
                                            unemployment compensation contributions on Contractor's behalf; or Withhold
                                            state or
                                            federal income tax from Contractor's payments.<br>
                                            Contractor shall pay all taxes incurred while performing Services under this
                                            Agreement—including all applicable income taxes and, if Contractor is not a
                                            corporation, self-employment (Social Security) taxes. Upon demand,
                                            Contractor shall
                                            provide Client with proof that such payments have been made.

                                        </p>
                                        <h6 class="fw-bold mt-3">8. Fringe Benefits</h6>
                                        <p class="ps-sm-4">Contractor understands that neither Contractor nor
                                            Contractor's employees or contract
                                            personnel are eligible to participate in any employee pension, health
                                            benefits, vacation
                                            pay, sick pay, or other fringe benefit plan of Client.
                                        </p>
                                        <h6 class="fw-bold mt-3">9. Unemployment Compensation</h6>
                                        <p class="ps-sm-4">Client shall make no state or federal unemployment
                                            compensation payments on behalf
                                            of Contractor or Contractor's employees or contract personnel. Contractor
                                            will not be
                                            entitled to these benefits in connection with work or Services performed
                                            under this
                                            Agreement.
                                        </p>
                                        <h6 class="fw-bold mt-3">10. Workers' Compensation</h6>
                                        <p class="ps-sm-4">Client shall not obtain workers' compensation insurance on
                                            behalf of Contractor or
                                            Contractor's employees. If Contractor hires employees to perform any work
                                            under this
                                            Agreement, Contractor will cover them with workers' compensation insurance
                                            to the
                                            extent required by law and provide Client with a certificate of workers'
                                            compensation
                                            insurance before the employees begin work.
                                        </p>
                                        <h6 class="fw-bold mt-3">11. Insurance </h6>
                                        <p class="ps-sm-4">Client shall not provide insurance coverage of any kind for
                                            Contractor or Contractor's
                                            employees or contract personnel. Contractor shall obtain the following
                                            insurance
                                            coverage and maintain it during the entire term of this Agreement:<br>

                                            (check all that apply)
                                        </p>
                                        <div class="mt-5 d-sm-flex ">
                                            <div class="d-flex">
                                                <p class="mb-0">Client's Initials- </p><input type="text"
                                                    value="A" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="">
                                            </div>
                                            <div class="d-sm-flex ms-sm-4">
                                                <p class="mb-0 text-nowrap">Contractor's Initials-</p> <input
                                                    type="text" value="A" name=""
                                                    class="border-bottom border-0 bg-transparent w-100 border-black mx-1"
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-content">
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">
                                                Automobile liability insurance for each vehicle used in the performance
                                                of this
                                                Agreement -- including owned, non-owned (for example, owned by
                                                Contractor's
                                                employees), leased, or hired vehicles -- in the minimum amount of
                                                <strong>$</strong>
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="1,000,000">
                                                combined single limit per occurrence for bodily injury and property
                                                damage.
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">
                                                Comprehensive or commercial general liability insurance coverage in the
                                                minimum
                                                amount of <strong>$</strong>
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="2,000,000">
                                                combined single limit, including coverage for bodily injury, personal
                                                injury, broad form
                                                property damage, contractual liability, and cross-liability.
                                            </label>
                                        </div>

                                        <p class="lh-font ">Before commencing any Services, Contractor shall provide
                                            Client with proof of this
                                            insurance and with proof that Client has been made an additional insured
                                            under the
                                            policies.
                                        </p>
                                        <h6 class="fw-bold mt-3">12. Indemnification </h6>
                                        <p class="ps-sm-4">Contractor shall indemnify and hold Client harmless from any
                                            loss or liability arising
                                            from performing Services under this Agreement.
                                        </p>
                                        <h6 class="fw-bold mt-3">13. Term of Agreement </h6>
                                        <p class="ps-sm-4">This agreement will become effective on the Effective Date
                                            after being signed by both
                                            parties and will terminate on the earlier of: the date Contractor completes
                                            the Services
                                            required by this Agreement or the Client or Contractor terminates this
                                            Agreement in
                                            accordance with Section 14.
                                        </p>
                                        <h6 class="fw-bold mt-3">14. Terminating the Agreement </h6>
                                        <p class="ps-sm-4">
                                            With reasonable cause, either Client or Contractor may terminate this
                                            Agreement,
                                            effective immediately upon giving written notice. Reasonable cause includes:
                                            A material
                                            violation of this Agreement; Any act exposing the other party to liability
                                            to others for
                                            personal injury or property damage; or Either party terminating this
                                            Agreement at any
                                            time by giving
                                            <input type="text" name=""
                                                class="border-bottom border-0 bg-transparent border-black mx-1"
                                                id="" value="30">
                                            days' written notice to the other party of the intent to terminate.
                                        </p>
                                        <h6 class="fw-bold mt-3">15. Exclusive Agreement </h6>
                                        <p class="ps-sm-4">This is the entire Agreement between Contractor and Client.
                                        </p>
                                        <div class="mt-5 d-sm-flex ">
                                            <div class="d-flex">
                                                <p class="mb-0">Client's Initials- </p><input type="text"
                                                    value="A" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="">
                                            </div>
                                            <div class="d-sm-flex ms-sm-4">
                                                <p class="mb-0 text-nowrap">Contractor's Initials-</p> <input
                                                    type="text" value="A" name=""
                                                    class="border-bottom border-0 bg-transparent w-100 border-black mx-1"
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-content">
                                        <h6 class="fw-bold mt-3">16. Modifying the Agreement </h6>
                                        <p class="ps-sm-4">This Agreement may be modified only in writing and signed by
                                            both parties.
                                        </p>
                                        <h6 class="fw-bold mt-3">17. Resolving Disputes <span class="fw-normal">(check
                                                one) </span> </h6>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">
                                                If a dispute arises under this Agreement, any party may take the matter
                                                to Florida
                                                state court, jurisdiction of the county of
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="Miami-Dade">
                                                or
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">
                                                If a dispute arises under this Agreement, the parties agree to first try
                                                to resolve the
                                                dispute with the help of a mutually agreed-upon mediator in
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="Miami">
                                                County, State of Florida. Any costs and fees other than attorney fees
                                                associated with
                                                the mediation shall be shared equally by the parties. If it proves
                                                impossible to arrive
                                                at a
                                                mutually satisfactory solution through mediation, the parties agree to
                                                submit the dispute
                                                to a mutually agreed-upon arbitrator in
                                                <input type="text" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="" value="Broward">
                                                County, State of Florida.
                                                Judgment upon the award rendered by the arbitrator may be entered in any
                                                court
                                                having jurisdiction to do so. Costs of arbitration, including attorney
                                                fees,
                                                will be allocated
                                                by the arbitrator.
                                            </label>
                                        </div>

                                        <h6 class="fw-bold mt-3">18. Confidentiality</h6>
                                        <p class="">Contractor acknowledges that it will be necessary for Client
                                            to
                                            disclose certain
                                            confidential and proprietary information to Contractor in order for
                                            Contractor to perform
                                            duties under this Agreement. Contractor acknowledges that disclosure to a
                                            third party or
                                            misuse of this proprietary or confidential information would irreparably
                                            harm Client.
                                            Accordingly, Contractor will not disclose or use, either during or after the
                                            term of this
                                            Agreement, any proprietary or confidential information of Client without
                                            Client's prior
                                            written permission except to the extent necessary to perform Services on
                                            Client's
                                            behalf.<br>
                                            Proprietary or confidential information includes:<br>
                                            The written, printed, graphic, or electronically recorded materials
                                            furnished by Client for
                                            Contractor to use; Any written or tangible information stamped
                                            “confidential,”
                                            “proprietary,” or with a similar
                                            legend, or any information that Client makes reasonable
                                            efforts to maintain the secrecy of; Business or marketing plans or
                                            strategies, customer
                                            lists, operating procedures, trade secrets, design formulas,
                                            know-how and processes,
                                            computer programs and inventories, discoveries and improvements of any kind,
                                            sales
                                            projections, and pricing information; Information belonging to customers and
                                            suppliers
                                            of Client about whom Contractor gained knowledge as a result of Contractor's
                                            Services
                                            to Client; and Other (if any): <input type="text" value="Specify here"
                                                name=""
                                                class="border-bottom border-0 bg-transparent border-black mx-1"
                                                id=""><br>
                                            <br>Upon termination of Contractor's Services to Client, or at Client's
                                            request, Contractor
                                            shall deliver to Client all materials in Contractor's possession relating to
                                            Client's
                                            business.
                                            Contractor acknowledges that any breach or threatened breach of Section 18
                                            of this
                                            Agreement will result in irreparable harm to Client for which damages would
                                            be an
                                            inadequate remedy. Therefore, Client shall be entitled to equitable relief,
                                            including an
                                            injunction, in the event of such breach or threatened breach of Section 18
                                            of this
                                            Agreement. Such equitable relief shall be in addition to Client's rights and
                                            remedies
                                            otherwise available at law.
                                        </p>
                                        <div class="mt-5 d-sm-flex ">
                                            <div class="d-flex">
                                                <p class="mb-0">Client's Initials- </p><input type="text"
                                                    value="A" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="">
                                            </div>
                                            <div class="d-sm-flex ms-sm-4">
                                                <p class="mb-0 text-nowrap">Contractor's Initials-</p> <input
                                                    type="text" value="A" name=""
                                                    class="border-bottom border-0 bg-transparent w-100 border-black mx-1"
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-content">
                                        <h6 class="fw-bold mt-3">19. Proprietary Information. </h6>
                                        <p class="ps-sm-4">The product of all work performed under this Agreement
                                            (“Work
                                            Product”), including
                                            without limitation all notes, reports, documentation, drawings, computer
                                            programs,
                                            inventions,
                                            creations, works, devices, models, works-in-progress, and deliverables will
                                            be the sole property of the Client, and Contractor hereby assigns to the
                                            Client all right,
                                            title, and interest therein,
                                            including, but not limited to, all audiovisual, literary, moral
                                            rights and other copyrights, patent rights, trade secret rights, and other
                                            proprietary rights
                                            therein. Contractor retains no right to use
                                            the Work Product and agrees not to challenge
                                            the validity of the Client’s ownership in the Work Product.<br>Contractor
                                            hereby assigns to the Client all right, title, and interest in any and all
                                            photographic images and videos or audio recordings made by the Client during
                                            Contractor’s work for them, including,
                                            but not limited to, any royalties, proceeds, or other
                                            benefits derived from such photographs or recordings.
                                            <br>
                                            The Client will be entitled to use Contractor’s name and/or likeness use in
                                            advertising
                                            and other materials.
                                        </p>
                                        <h6 class="fw-bold mt-3">20. No Partnership </h6>
                                        <p class="ps-sm-4">This Agreement does not create a partnership relationship.
                                            Contractor does not have
                                            authority to enter into contracts on Client's behalf.
                                        </p>
                                        <h6 class="fw-bold mt-3">21. Assignment and Delegation <span
                                                class="fw-normal">(check one)</span> </h6>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Either Contractor or Client may
                                                assign rights and
                                                may delegate duties under this
                                                Agreement.
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">Contractor may not assign or
                                                subcontract any
                                                rights or delegate any of its duties
                                                under this Agreement without Client's prior written approval.

                                            </label>
                                        </div>
                                        <h6 class="fw-bold mt-3">22. Applicable Law </h6>
                                        <p class="ps-sm-4">This Agreement shall be governed under the laws in the State
                                            of Florida, without giving
                                            effect to conflict of laws principles.
                                        </p>
                                        <h6 class="fw-bold mt-3">23. Attachments. <span class="fw-normal">(check
                                                one)</span> </h6>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">There are no additional attachments
                                                or addendums
                                                to this Agreement.
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-baseline mb-3">
                                            <input type="checkbox" checked>
                                            <label for="" class="ms-3">
                                                There are additional attachments or addendums to this Agreement
                                                described as:
                                            </label>
                                            <div class="mt-2">
                                                <input type="text" name=""
                                                    placeholder="Attachment or Addendum 1"
                                                    class="border-bottom border-0 w-100 bg-transparent border-black mx-1 mb-2"
                                                    id="">
                                                <input type="text" name=""
                                                    placeholder="Attachment or Addendum 2"
                                                    class="border-bottom border-0 w-100 bg-transparent border-black mx-1"
                                                    id="">
                                            </div>

                                        </div>

                                        <div class="mt-5 d-sm-flex ">
                                            <div class="d-flex">
                                                <p class="mb-0">Client's Initials- </p><input type="text"
                                                    value="A" name=""
                                                    class="border-bottom border-0 bg-transparent border-black mx-1"
                                                    id="">
                                            </div>
                                            <div class="d-sm-flex ms-sm-4">
                                                <p class="mb-0 text-nowrap">Contractor's Initials-</p> <input
                                                    type="text" value="A" name=""
                                                    class="border-bottom border-0 bg-transparent w-100 border-black mx-1"
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-content">
                                        <h6 class="fw-bold mt-3">24. Signature Area</h6>
                                        <div class="row align-items-end">
                                            <!-- Client's Signature -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Client’s
                                                        Signature</label>
                                                    <input type="text" name="client_signature" value="John Doe"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                    <button
                                                        class="bg-lgrey border px-3 py-2 rounded-2 ms-2">Apply</button>
                                                </div>
                                            </div>

                                            <!-- Client's Date -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Date</label>
                                                    <input type="text" name="client_date" value="2025-01-14"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                </div>
                                            </div>

                                            <!-- Client's Print Name -->
                                            <div class="col-12 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Print Name</label>
                                                    <input type="text" name="client_print_name" value="John Doe"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                </div>
                                            </div>

                                            <!-- Contractor's Signature -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Contractor's
                                                        Signature</label>
                                                    <input type="text" name="contractor_signature"
                                                        value="Jane Smith"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                    <button
                                                        class="bg-lgrey border px-3 py-2 rounded-2 ms-2">Apply</button>
                                                </div>
                                            </div>

                                            <!-- Contractor's Date -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Date</label>
                                                    <input type="text" name="contractor_date" value="2025-01-14"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                </div>
                                            </div>

                                            <!-- Contractor's Print Name -->
                                            <div class="col-12 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Print Name</label>
                                                    <input type="text" name="contractor_print_name"
                                                        value="Jane Smith"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                </div>
                                            </div>

                                            <!-- Name of Company -->
                                            <div class="col-12 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Name of Company</label>
                                                    <input type="text" name="company_name" value="ABC Solutions"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                </div>
                                            </div>

                                            <!-- Title of Signer -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Title of Signer</label>
                                                    <input type="text" name="signer_title" value="CEO"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                </div>
                                            </div>

                                            <!-- Taxpayer ID Number -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label for="" class="text-nowrap">Taxpayer ID Number
                                                        (EIN)</label>
                                                    <input type="text" name="taxpayer_id" value="123-45-6789"
                                                        class="border-bottom border-0 w-100 bg-transparent border-black mx-1">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end mt-4">
                                    <button type="button" class="py-2 me-2 px-3 bg-lgrey text-dark border rounded-2"
                                        id="cancelBtn">Cancel</button>
                                    <button type="button" class="py-2 me-2 px-3 bg-sky text-white border-0 rounded-2"
                                        id="nextBtn">Next</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stepContents = document.querySelectorAll('.step-content');
            const nextBtn = document.getElementById('nextBtn');
            const cancelBtn = document.getElementById('cancelBtn');

            let currentStep = 0;

            function updateStep() {
                // Update step content visibility
                stepContents.forEach((content, index) => {
                    content.classList.toggle('active', index === currentStep);
                });

                // Update button text
                if (currentStep === stepContents.length - 1) {
                    nextBtn.textContent = 'Done';
                } else {
                    nextBtn.textContent = 'Next';
                }
            }

            nextBtn.addEventListener('click', () => {
                if (currentStep < stepContents.length - 1) {
                    currentStep++;
                    updateStep();
                } else {
                    alert('Form completed!');
                    currentStep = 0;
                    updateStep();
                }
            });

            cancelBtn.addEventListener('click', () => {
                currentStep = 0;
                updateStep();
            });

            updateStep();
        });
    </script>
</body>

</html>
