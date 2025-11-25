<head>
  @vite(['resources/css/offcanvas.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <div class="navbar-head">
            <div style="width: 80%;">
                <div class="logo">
                    <img src="images/biomedical-logo.png" class="img-fluid logo-img" alt="...">
                    <p class="logo-text">Biomedical Engineering Unit</p>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <div style="display: flex; gap: 1em; align-items: center; justify-content: flex-end;">
                        <button type="button" class="btn position-relative" style="max-height: 3rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                            </svg>
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                        <div class="profile">
                            <img src="images/IMG_6341.JPG" class="img-fluid profile-img" alt="...">
                            <p class="profile-text">Theekshana Hirushan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.line')
        <div>
            <nav class="navbar">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="offcanvas offcanvas-start half-screen" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header" style="background-color: #1B3C53; display: inline-block;">
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
                                <li class="nav-item">
                                    <div style="color: white;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-check-fill" viewBox="0 0 16 16">
                                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                            <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z" />
                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514" />
                                        </svg>
                                    </div>
                                    <div class="nav-link">
                                        <a>Home</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div style="color: #FFCC00;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z" />
                                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </div>
                                    <div class="nav-link">
                                        <a>Pending Items</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div style="color: green;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-microsoft" viewBox="0 0 16 16">
                                            <path d="M7.462 0H0v7.19h7.462zM16 0H8.538v7.19H16zM7.462 8.211H0V16h7.462zm8.538 0H8.538V16H16z" />
                                        </svg>
                                    </div>
                                    <div class="nav-link">
                                        <a>All Items</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div style="color: black;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                                        </svg>
                                    </div>
                                    <div class="nav-link">
                                        <a>Categories</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div style="color: #A4CCD9;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg>
                                    </div>
                                    <div class="nav-link">
                                        <a>Employees</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div style="color: #F5EEDC;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1" />
                                        </svg>
                                    </div>
                                    <div class="nav-link">
                                        <a>Report</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>