<head>
    <style>
        .offcanvas-body {
            background-color: #113F67;
        }

        .icon-card {
            width: 150px;
            height: 150px;
            background-color: #1A3D64;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5);
        }

        .icon-bg {
            width: 100px;
            height: 100px;
            background-color: white;
            border-radius: 50%;
        }

        .icon-head {
            width: 40px;
            height: 40px;
            background-color: #1A3D64;
            border-radius: 50%;
            margin: 10px auto 0 auto;
        }

        .icon-body {
            width: 60px;
            height: 60px;
            background-color: #1A3D64;
            border-radius: 50% / 50%;
            margin: 5px auto 0 auto;
        }

        .nav-link {
            color: black;
            font-family: Arimo, sans-serif;
            font-weight: 100;
            font-size: 16px;
        }

        .logout {
            margin-top: auto;
            display: flex;
            justify-content: center;
        }

        .logout-link {
            color: black;
            font-family: Arimo, sans-serif;
            font-weight: 100;
            font-size: 16px;
            text-align: center;
            width: 100%;
            padding: 10px;
            display: block;
            text-decoration: none;
        }

        .logout-link:hover {
            background-color: #E50046;
            color: white !important;
            text-align: center;
            transition: background-color 0.3s ease;
        }


        .navbar-nav .nav-item .nav-link:hover {
            background-color: #E50046;
            color: white;
            width: 100%;
        }

        .navbar-nav .nav-link.active {
            color: white !important;
            background-color: #C7253E;
        }

        .navbar-nav .nav-link:hover {
            color: white !important;
        }

        .navbar-brand {
            padding: 20px;
            font-weight: bold;
            font-family: 'Arimo', sans-serif;
        }

        @media (max-width: 768px) {

            .offcanvas.half-screen {
                width: 60% !important;
            }

        }
    </style>
</head>

<body>
    <div>
        <div style="height: 50px;">
        </div>
        <div>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start half-screen" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header" style="background-color: #113F67; display: inline-block;">
                            <div style="display: flex; justify-content: center;">
                                <div class="icon-card mt-3 mb-3">
                                    <div class="icon-bg">
                                        <div class="icon-head"></div>
                                        <div class="icon-body"></div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dashboard</h5>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>