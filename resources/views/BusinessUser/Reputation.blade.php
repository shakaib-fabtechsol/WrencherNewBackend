<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.candy.js"></script>

    <script src='https://cdn.plot.ly/plotly-2.35.2.min.js'></script>
    <title>Repuatation Management</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.BusinessUserSideBar')

            <div class="right">
                <div class="right-top px-4 input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <h3 class="hding mb-0">
                                    <span class="sky fs-4 fw-medium">Marketing</span>
                                    <i class="fas fa-chevron-right mx-1 fs-6"></i>
                                    <span class="fs-6">Reputation Management</span>
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
                            <div class="border-bottom py-3">
                                <div>
                                    <h1 class="fs-3 font-semi">
                                        Overview
                                    </h1>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div
                                        class="d-flex ps-2 mt-3 mt-lg-0 me-lg-3 align-items-center bg-white border-1 rounded-2">
                                        <!-- <label for="filter"> <i class="fas fa-filter grey"></i></label> -->
                                        <select name="" id="filter"
                                            class="border-white me-1 filter-width pe-3 py-2 grey  focus-none font-md bg-transparent">
                                            <option value="">Last 6 month</option>
                                            <option value="">Last Week</option>
                                            <option value="">This Week</option>
                                            <option value="">Next Week</option>
                                            <option value="">Last Month</option>
                                            <option value="">This Month</option>
                                            <option value="">Last Year</option>
                                            <option value="">This Year</option>
                                        </select>
                                    </div>
                                    <a href="#"
                                        class="bg-sky px-3 py-2 rounded-2 text-white text-decoration-none">Send
                                        Review Request</a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4 col-sm-6 my-2">
                                    <div class="rounded-3 bg-white py-2 border-1 h-100">
                                        <h2 class="fs-5 text-capitalize fw-semibold px-3 pb-2 border-bottom mb-1">
                                            Invities Goal</h2>
                                        <div class="minus-box d-xxl-flex align-items-center py-4 px-4">
                                            <div id='myDiv' class="py-3 me-3"></div>
                                            <div class="mt-4 d-none d-xxl-block">
                                                <div class="d-flex align-items-center me-3">
                                                    <i class="fas fa-long-arrow-alt-right me-2 text-secondary"></i>
                                                    <span class="text-secondary fw-semibold">0%</span>
                                                </div>
                                                <p class="mb-0 text-secondary text-nowrap fw-semibold">out of 20</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 my-2">
                                    <div class="rounded-3 bg-white py-2 border-1 h-100">
                                        <h2 class="fs-5 text-capitalize fw-semibold px-3 pb-2 border-bottom mb-1">
                                            Reviews Received</h2>
                                        <div class="row align-items-center px-4 minus-box">
                                            <div class="col-xxl-6">
                                                <div class="d-flex align-items-end">
                                                    <div class="d-flex align-items-center pb-3 me-3">
                                                        <i class="fas fa-long-arrow-alt-up me-2 text-success"></i>
                                                        <span class="text-success fw-semibold">100%</span>
                                                    </div>
                                                    <div>
                                                        <p class="fs-2 mb-2 fw-bold">23</p>
                                                        <p class="mb-0 fs-6">vs Previous 6 Months</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="d-flex justify-content-center mt-4">
                                                    <canvas id="triangleCanvas" class="w-100 h-100" width="200"
                                                        height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 my-2">
                                    <div class="rounded-3 bg-white py-2 border-1 h-100">
                                        <h2 class="fs-5 text-capitalize fw-semibold px-3 pb-2 border-bottom mb-1">
                                            Sentiment</h2>
                                        <div class="row align-items-center px-4 py-4 minus-box">
                                            <div class="col-6 d-flex justify-content-center">
                                                <div class="me-4 mt-4">
                                                    <img src="{{ asset('img/hand-green.png') }}" alt="hand-green"
                                                        class="img-fluid">
                                                </div>
                                                <div>
                                                    <p class="fs-1 mb-2 fw-bold">20</p>
                                                    <div class="d-flex align-items-center me-3">
                                                        <i class="fas fa-long-arrow-alt-up me-2 text-success"></i>
                                                        <span class="text-success fw-semibold">100%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center">
                                                <div class="me-4 mt-4">
                                                    <img src="{{ asset('img/hand-yellow.png') }}" alt="hand-yellow"
                                                        class="img-fluid">
                                                </div>
                                                <div class="">
                                                    <p class="fs-1 mb-2 fw-bold">20</p>
                                                    <div class="d-flex align-items-center me-3">
                                                        <i class="fas fa-long-arrow-alt-right me-2 text-secondary"></i>
                                                        <span class="text-secondary fw-semibold">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 my-2">
                                    <div class="rounded-3 bg-white py-2 border-1 h-100">
                                        <h2 class="fs-5 text-capitalize fw-semibold px-3 pb-2 border-bottom mb-1">Avg.
                                            Rating</h2>
                                        <div class="minus-box d-xxl-flex align-items-center py-4 px-4">
                                            <div id='myDiv2' class="py-3 me-3"></div>
                                            <div class="mt-4 d-none d-xxl-block">
                                                <div class="d-flex align-items-center me-3">
                                                    <i class="fas fa-long-arrow-alt-right me-2 text-secondary"></i>
                                                    <span class="text-secondary fw-semibold">0%</span>
                                                </div>
                                                <p class="mb-0 text-secondary text-nowrap fw-semibold">out of 20</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 my-2">
                                    <div class="rounded-3 bg-white py-2 border-1 h-100">
                                        <h2 class="fs-5 text-capitalize fw-semibold px-3 pb-2 border-bottom mb-1">Avg.
                                            Rating</h2>
                                        <div class="row align-items-center px-4 minus-box">
                                            <div class="col-xxl-6">
                                                <div class="d-flex align-items-end">
                                                    <div class="d-flex align-items-center pb-3 me-3">
                                                        <i class="fas fa-long-arrow-alt-up me-2 text-success"></i>
                                                        <span class="text-success fw-semibold">100%</span>
                                                    </div>
                                                    <div>
                                                        <p class="fs-2 mb-2 fw-bold">23</p>
                                                        <p class="mb-0 fs-6">vs Previous 6 Months</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="d-flex justify-content-center mt-4">
                                                    <canvas id="triangleCanvas2" class="w-100 h-100" width="200"
                                                        height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 my-2">
                                    <div class="rounded-3 bg-white py-2 border-1 h-100">
                                        <h2 class="fs-5 text-capitalize fw-semibold px-3 pb-2 border-bottom mb-1">Avg.
                                            Rating</h2>
                                        <div class="row align-items-center px-4 py-4 minus-box">
                                            <div class="col-6 d-flex justify-content-center">
                                                <div class="me-4 mt-4">
                                                    <img src="{{ asset('img/hand-green.png') }}" alt="hand-green"
                                                        class="img-fluid">
                                                </div>
                                                <div>
                                                    <p class="fs-1 mb-2 fw-bold">20</p>
                                                    <div class="d-flex align-items-center me-3">
                                                        <i class="fas fa-long-arrow-alt-up me-2 text-success"></i>
                                                        <span class="text-success fw-semibold">100%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center">
                                                <div class="me-4 mt-4">
                                                    <img src="{{ asset('img/hand-yellow.png') }}" alt="hand-yellow"
                                                        class="img-fluid">
                                                </div>
                                                <div class="">
                                                    <p class="fs-1 mb-2 fw-bold">20</p>
                                                    <div class="d-flex align-items-center me-3">
                                                        <i class="fas fa-long-arrow-alt-right me-2 text-secondary"></i>
                                                        <span class="text-secondary fw-semibold">0%</span>
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

    <!-- <script>
        const dataSource = {
            chart: {
                caption: "",
                lowerlimit: "0",
                upperlimit: "100",
                showvalue: "1",
                numbersuffix: "%",
                theme: "candy",
                showtooltip: "0",
                bgColor: "FFFFFF",
                showBorder: "0",
                showCanvasBorder: "0", // Removes the canvas border
                usePlotGradientColor: "0", // Disables gradient on the plot
                showShadow: "0", // Removes any shadow effects
                baseFontColor: "#000000", // Sets all text to black
                valueFontColor: "#000000" // Sets the value text to black
            },
            colorrange: {
                color: [{
                        minvalue: "0",
                        maxvalue: "50",
                        code: "#F2726F"
                    },
                    {
                        minvalue: "50",
                        maxvalue: "75",
                        code: "#FFC533"
                    },
                    {
                        minvalue: "75",
                        maxvalue: "100",
                        code: "#62B58F"
                    }
                ]
            },
            dials: {
                dial: [{
                    value: "81"
                }]
            }
        };

        FusionCharts.ready(function() {
            var myChart = new FusionCharts({
                type: "angulargauge",
                renderAt: "chart-container",
                width: "100%",
                height: "100%",
                dataFormat: "json",
                dataSource
            });
            myChart.render();
        });
    </script> -->

    <script>
        // first--------
        var canvas = document.getElementById('triangleCanvas');
        var triangleWidth = 300;
        var triangleHeight = 200;

        canvas.width = triangleWidth + 50;
        canvas.height = triangleHeight + 50;

        var ctx = canvas.getContext('2d');
        ctx.beginPath();
        ctx.moveTo(triangleWidth + 50, triangleHeight);
        ctx.lineTo(triangleWidth + 50, triangleHeight - triangleHeight);
        ctx.lineTo(50, triangleHeight);
        ctx.closePath();
        ctx.fillStyle = '#E7F3E6';
        ctx.fill();
        ctx.lineWidth = 2;
        ctx.strokeStyle = 'green';
        ctx.stroke();
        // second-------
        var canvas = document.getElementById('triangleCanvas2');
        var triangleWidth = 300;
        var triangleHeight = 200;
        canvas.width = triangleWidth + 50;
        canvas.height = triangleHeight + 50;
        var ctx = canvas.getContext('2d');
        ctx.beginPath();
        ctx.moveTo(triangleWidth + 50, triangleHeight);
        ctx.lineTo(triangleWidth + 50, triangleHeight - triangleHeight);
        ctx.lineTo(50, triangleHeight);
        ctx.closePath();
        ctx.fillStyle = '#E7F3E6';
        ctx.fill();
        ctx.lineWidth = 2;
        ctx.strokeStyle = 'green';
        ctx.stroke();
    </script>

    <script>
        var data = [{
            domain: {
                x: [0, 1],
                y: [0, 1]
            },
            value: 70,
            title: {
                text: ""
            },
            type: "indicator",
            mode: "gauge+number",
            gauge: {
                axis: {
                    range: [0, 500],
                    showticklabels: false, // Hide tick labels
                    ticklen: 0, // Remove tick length (lines)
                    tickwidth: 0 // Remove tick width (lines)
                },
                bar: {
                    color: "green"
                }, // Needle-style bar
                steps: [{
                        range: [0, 70],
                        color: "green"
                    },
                    {
                        range: [70, 500],
                        color: "lightgrey"
                    }
                ],
                borderwidth: 0 // Remove the black border
            }
        }];

        var layout = {
            autosize: true,
            margin: {
                t: 0,
                b: 0,
                l: 0,
                r: 0
            }
        };

        Plotly.newPlot('myDiv', data, layout, {
            responsive: true
        });

        var data2 = [{
            domain: {
                x: [0, 1],
                y: [0, 1]
            },
            value: 0,
            title: {
                text: ""
            },
            type: "indicator",
            mode: "gauge+number",
            gauge: {
                axis: {
                    range: [0, 500],
                    showticklabels: false, // Hide tick labels
                    ticklen: 0, // Remove tick length (lines)
                    tickwidth: 0 // Remove tick width (lines)
                },
                bar: {
                    color: "green"
                }, // Needle-style bar
                steps: [{
                        range: [0, 0],
                        color: "green"
                    },
                    {
                        range: [0, 500],
                        color: "lightgrey"
                    }
                ],
                borderwidth: 0 // Remove the black border
            }
        }];

        var layout2 = {
            autosize: true,
            margin: {
                t: 0,
                b: 0,
                l: 0,
                r: 0
            }
        };
        Plotly.newPlot('myDiv2', data2, layout2, {
            responsive: true
        });
    </script>



</body>

</html>
