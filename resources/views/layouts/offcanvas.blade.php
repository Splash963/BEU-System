<head>
    <style>
        body {
            background-color: #eeeff3;
        }

        .offcanvas-body {
            background-color: #1e3c5cff;
        }

        .icon-card {
            width: 150px;
            height: 150px;
            background-color: #1A3D64;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.9);
        }

        .icon-bg {
            width: 115px;
            height: 115px;
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
            height: 55px;
            background-color: #1A3D64;
            border-radius: 50% /30%;
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

            .icon-card {
                width: 100px;
                height: 100px;
            }

            .icon-bg {
                width: 80px;
                height: 80px;
            }

            .icon-head {
                width: 25px;
                height: 25px;
            }

            .icon-body {
                width: 40px;
                height: 35px;
            }

        }
    </style>
</head>

<body>
    <div>
        <div style="height: 50px;">
        </div>
        <div>
            <nav class="navbar">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start half-screen" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header" style="background-color: #1e3c5cff; display: inline-block;">
                            <div>
                                <div style="display: flex; justify-content: center;">
                                    <div class="icon-card mt-3 mb-3">
                                        <div class="icon-bg">
                                            <div class="icon-head mt-3"></div>
                                            <div class="icon-body mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2" style="display: flex; justify-content: center;">
                                <h3 style="color: white;" class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h3>
                            </div>
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