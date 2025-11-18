<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
    .main {
        width: 90%;
        align-items: center;
        margin: auto;
    }

    .quick-links {
        display: flex;
        gap: 2em;
    }

    .card {
        width: 20rem;
        height: 10rem;
        border-radius: 0;
        flex-grow: 1;
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.3);
    }

    .data1,
    .data2,
    .data3,
    .data4 {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1em;
    }

    .data1 {
        background-color: #154D71;
        color: white;
        font-weight: bold;
    }

    .data2 {
        background-color: #006769;
        color: white;
        font-weight: bold;
    }

    .data3 {
        background-color: #FAB12F;
        color: white;
        font-weight: bold;
    }

    .data4 {
        background-color: #CD2C58;
        color: white;
        font-weight: bold;
    }

    .charts {
        display: flex;
        gap: 2em;
    }

    .tables {
        flex-grow: 1;
    }

    .circle-card {
        width: 20rem;
        height: 29rem;
        border-radius: 0;
    }

    .table {
        width: 100%;
        height: 13rem;
        border-radius: 0;
    }
    @media(max-width:768px) {
        .main {
            width: 95%;
        }

        .data1,
        .data2,
        .data3,
        .data4 {
            gap: 5px;
        }

        .quick-links {
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 10rem;
        }

        .charts {
            flex-wrap: wrap;
        }

        .chart-card {
            width: 100%;
        }

        .circle {
            width: 100%;
            order: 1;
        }

        .circle-card {
            width: 100%;
        }

        .tables {
            flex-grow: 1;
            order: 2;
        }

        .table {
            width: 100%;
        }
    }
</style>

<body>

    <head>
        @include('layouts.offcanvas')
        @include('layouts.spinner')
    </head>

    <body>

        <!-- Quick links -->
        <div class="main">

            <div>
                <h1 class="text-center mt-5">Admin Dashboard</h1>
                <p class="text-center">Welcome to the admin dashboard. Here you can manage the website content and settings.</p>
            </div>

            <div class="quick-links mb-5">
                <div class="card">
                    <div class="card-body data1">
                        <h5 class="card-title">All Items :</h5>
                        <h5 class="card-title">10</h5>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body data2">
                        <h5 class="card-title">Pending Items :</h5>
                        <h5 class="card-title">23</h5>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body data3">
                        <h5 class="card-title">Low Stock Items :</h5>
                        <h5 class="card-title">3</h5>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body data4">
                        <h5 class="card-title">Damaged Items :</h5>
                        <h5 class="card-title">2</h5>
                    </div>
                </div>
            </div>


            <div class="charts me-0 mb-5">
                <div class="tables">
                    <div class="card mb-5 table">
                        <div class="card-body" style="background-color: #CD2C58; color: white;">
                            <h5 class="card-title">Low Stock Items</h5>
                            <div class="overflow-y-scroll" style="max-height: 9rem;">
                                <div class="card mb-3" style="border-radius: 0;">
                                    <div class="row g-0" style="width: 100%;">
                                        <div class="col-4">
                                            <img class="img-fluid" style="border-radius: 0;" src="images/pngtree-medical-microscope-isolated-png-image_11975870.png" alt="">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body d-flex flex-column justify-content-between text-center" style="height: 120px;">
                                                <div class="d-flex align-items-center justify-content-center flex-grow-1">
                                                    <p class="fw-semibold title" style="max-height: 115px;">some texts</p>
                                                </div>
                                                <p class="card-text mb-0">
                                                    <small class="text-body-secondary date">date</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card table">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="circle">
                    <div class="card circle-card">
                        <div class="card-body">
                            <h5 class="card-title mb-5">Monthly Summury</h5>
                            <canvas id="myDonutChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        const ctx = document.getElementById('myDonutChart').getContext('2d');
        const myDonutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Get Items', 'Not Added Items', 'Newly Added Items', 'Damaged items'],
                datasets: [{
                    data: [25, 20, 30, 25],
                    backgroundColor: ['#36a2eb', '#ffce56', '#4bc0c0', '#ff6384'],
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>