<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .quick-links {
        display: flex;
        justify-content: space-between;
    }

    .card {
        width: 25rem;
        height: 10rem;
        border-radius: 0;
    }

    .circle-card {
        width: 25rem;
        height: 29rem;
        border-radius: 0;
    }

    .chart-card {
        width: 80.3rem;
        height: 13rem;
        border-radius: 0;
    }

    .charts {
        display: flex;
        justify-content: space-between;
    }

    @media(max-width:768px) {
        .quick-links {
            flex-wrap: wrap;
        }

        .chart-card {
            width: 22rem;
        }

        .charts {
            flex-wrap: wrap;
        }

        .circle-card {
            width: 22rem;
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
        <div style="width: 90%; align-items: center; margin: auto;">

            <div class="quick-links mb-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    </div>
                </div>
            </div>

            <div>
                <h1 class="text-center mt-5">Admin Dashboard</h1>
                <p class="text-center">Welcome to the admin dashboard. Here you can manage the website content and settings.</p>
            </div>

            <div class="charts me-0">
                <div class="bar-Charts">
                    <div class="card mb-5 chart-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        </div>
                    </div>

                    <div class="card chart-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="circle">
                    <div class="card circle-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>