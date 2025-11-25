<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
        background-color: #F5AD18;
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
        height: 29.8rem;
        border-radius: 0;
    }

    .table {
        width: 100%;
        height: 13rem;
        border-radius: 0;
    }

    .item-data {
        display: flex;
    }

    .content {
        flex-shrink: 1;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding-left: 2rem;
        padding-right: 2rem;
    }

    .details {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .buttons {
        display: flex;
        align-items: center;
    }

    .button-cover {
        display: flex;
        gap: 1em;
    }

    .chart-container {
        position: relative;
        width: 100%;
        /* full width of parent */
        max-width: 400px;
        /* cap size for desktop */
        margin: auto;
        /* center it */
    }

    @media(max-width:1024px) {
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

        .content {
            flex-shrink: 1;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding-left: 0.5rem;
            padding-right: 0;
        }

        .details {
            font-size: 10px;
        }

        .btn {
            width: 60px;
            font-size: 8px;
            height: 25px;
        }

        .button-cover {
            display: flex;
            flex-direction: column;
            gap: 0.5em;
        }

        .chart-container {
            max-width: 300px;
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
                        <div class="card-body" style="background-color: #D1D3D4;">
                            <p class="card-title mb-3 fw-semibold fs-4">Pending Items</p>
                            <div class="overflow-y-scroll" style="max-height: 9rem; scrollbar-width: thin;">

                                <div class="item-data" style="background-color: transparent;">
                                    <div class="picture">
                                        <img src="images/pngtree-medical-microscope-isolated-png-image_11975870.png" class="img-fluid" alt="" style="max-height: 8.5rem;">
                                    </div>
                                    <div class="content">
                                        <div class="details">
                                            <p>Item Name :</p>
                                            <p>Item Category :</p>
                                            <p>Item Quantity :</p>
                                        </div>
                                        <div class="buttons">
                                            <div class="button-cover">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="item-data" style="background-color: transparent;">
                                    <div class="picture">
                                        <img src="images/pngtree-medical-microscope-isolated-png-image_11975870.png" class="img-fluid" alt="" style="max-height: 8.5rem;">
                                    </div>
                                    <div class="content">
                                        <div class="details">
                                            <p>Item Name :</p>
                                            <p>Item Category :</p>
                                            <p>Item Quantity :</p>
                                        </div>
                                        <div class="buttons">
                                            <div class="button-cover">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card mb-5 table">
                        <div class="card-body" style="background-color: #D1D3D4;">
                            <p class="card-title fw-semibold fs-4">Low Stock Items</p>
                            <div class="overflow-y-scroll" style="max-height: 9rem; scrollbar-width: thin;">

                                <div class="item-data" style="background-color: transparent;">
                                    <div class="picture">
                                        <img src="images/pngtree-medical-microscope-isolated-png-image_11975870.png" class="img-fluid" alt="" style="max-height: 8.5rem;">
                                    </div>
                                    <div class="content">
                                        <div class="details">
                                            <p>Item Name :</p>
                                            <p>Item Category :</p>
                                            <p>Item Quantity :</p>
                                        </div>
                                        <div class="buttons">
                                            <div class="button-cover">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="item-data" style="background-color: transparent;">
                                    <div class="picture">
                                        <img src="images/pngtree-medical-microscope-isolated-png-image_11975870.png" class="img-fluid" alt="" style="max-height: 8.5rem;">
                                    </div>
                                    <div class="content">
                                        <div class="details">
                                            <p>Item Name :</p>
                                            <p>Item Category :</p>
                                            <p>Item Quantity :</p>
                                        </div>
                                        <div class="buttons">
                                            <div class="button-cover">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="circle">
                    <div class="card circle-card">
                        <div class="card-body">
                            <h5 class="card-title mb-5">Monthly Summury</h5>
                            <div class="chart-container">
                                <canvas id="myDonutChart"></canvas>
                            </div>
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
                maintainAspectRatio: false, // allow CSS height to control chart
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