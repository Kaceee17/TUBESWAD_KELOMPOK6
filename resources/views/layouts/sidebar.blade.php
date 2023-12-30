<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>User Management</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYux4FN3HsvzrLbRQGbfjMqQ/dq6p1RIhpJT8Pe8aU2z6BzA3qW8jRlW3Z5O" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    .navbar {
    z-index: 2;
    position: relative;
    padding-left: 10;
    padding-right: 10;
    width: 1000vw;
    margin-left: 200px;
    margin-right: 0;
    }

    form.navbar-search {
    margin-right: 20px;
    width: 500px;
    }

    form.navbar-search input {
    padding-left: 10;
    border-radius: 5px;
    border: 1px solid #ccc;
    }

    form.navbar-search button {
    padding: 8px 12px;
    border-radius: 5px;
    background-color: #4e73df;
    color: #fff;
    border: 1px solid #007bff;
    }

    .nav-item.dropdown .nav-link .vertical-divider {
    border-left: 2px solid #ccc;
    height: 100px;
    margin-right: 20px;
    }

    .sidebar {
    height: 100%;
    width: 200px; /* Adjusted width */
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #AD2727;
    padding-top: 20px;
    padding-left: 10px;
    color: white;
    }

    h1 {
    font-size: small;
    display: inline-block;
    padding-top: 10px;
    }

    .nav-link {
    border: 1px solid transparent;
    border-radius: 5px;
    padding: 8px 10px;
    margin-bottom: 5px;
    cursor: pointer;
    color: white;
    }

    .nav-link:hover,
    .nav-link:focus {
    background-color: #ffffff;
    border-right-width: auto;
    color: #AD2727;
    }

    .dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #3a3b45;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    }

    .dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #eaecf4;
    }

    .logo {
    padding-bottom: 20px;
    height: 100px;
    }

    .option {
    color: #ffffff;
    }

    .dropdown-item img {
    margin-right: 10px;
    max-width: 30px;
    max-height: 30px;
    vertical-align: middle;
    }

    .noborder {
    border: none;
    }

    .card-container-table {
    margin-left: 260px;
    }

    .card-container {
    margin-left: 220px;
    }

    /* Add this style to make sure cards don't go under the sidebar when the screen is small */
    @media (max-width: 767.98px) {
    .card-container {
        margin-left: 0;
    }
    }

    .table{
    margin-top: 20px;
    }

    .logout{
    position: absolute;
    right: 100px;
    }

    .dropdown-list {
    background-color: white;
    }

    .dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    color: #858796;
    white-space: nowrap;
    }

    .dropdown-menu-right {
    right: 0;
    left: auto;
    }

    .dropdown .dropdown-menu .dropdown-header {
    font-weight: 800;
    font-size: 0.65rem;
    color: #b7b9cc;
    }

    .topbar .dropdown-list .dropdown-header {
    background-color: #4e73df;
    border: 1px solid #4e73df;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #fff;
    }

    .topbar .dropdown-list .dropdown-item .dropdown-list-image {
    position: relative;
    height: 2.5rem;
    width: 2.5rem;
    }

    .topbar .dropdown-list .dropdown-item {
    white-space: normal;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    border-left: 1px solid #e3e6f0;
    border-right: 1px solid #e3e6f0;
    border-bottom: 1px solid #e3e6f0;
    line-height: 1.3rem;
    }

    .topbar .dropdown-list .dropdown-item .dropdown-list-image img {
    height: 2.5rem;
    width: 2.5rem;
    }

    .topbar .dropdown-list .dropdown-item .dropdown-list-image .status-indicator {
    background-color: #eaecf4;
    height: 0.75rem;
    width: 0.75rem;
    border-radius: 100%;
    position: absolute;
    bottom: 0;
    right: 0;
    border: 0.125rem solid #fff;
    }

    .dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #3a3b45;
    }

    .navbar-nav .dropdown-menu {
    position: static;
    float: none;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
    }

    .dropdown .dropdown-menu {
    font-size: 0.85rem;
    }

    .topbar .dropdown .dropdown-menu {
    width: calc(100% - 1.5rem);
    right: 0.75rem;
    }

    .card .card-header .dropdown .dropdown-menu {
    line-height: 1.5;
    }

    .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0 0;
    margin: 0 0 0;
    font-size: 0.85rem;
    color: #858796;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e3e6f0;
    border-radius: 0.35rem;
    }

    .dropdown.no-arrow .dropdown-toggle::after {
    display: none;
    }

    .topbar .dropdown-list .dropdown-item .text-truncate {
    max-width: 13.375rem;
    }

    .dropdown-item:hover, .dropdown-item:focus {
    color: #2e2f37;
    text-decoration: none;
    background-color: #eaecf4;
    }

    .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #4e73df;
    }

    .dropdown-item.disabled, .dropdown-item:disabled {
    color: #b7b9cc;
    pointer-events: none;
    background-color: transparent;
    }

    .sidebar .nav-item.dropdown .dropdown-toggle::after,
    .topbar .nav-item.dropdown .dropdown-toggle::after {
    width: 1rem;
    text-align: center;
    float: right;
    vertical-align: 0;
    border: 0;
    font-weight: 900;
    content: '\f105';
    font-family: 'Font Awesome 5 Free';
    }

    .sidebar .nav-item.dropdown.show .dropdown-toggle::after,
    .topbar .nav-item.dropdown.show .dropdown-toggle::after {
    content: '\f107';
    }

    .align-items-center {
    align-items: center !important;
    }

    .animated--grow-in, .sidebar .nav-item .collapse {
    -webkit-animation-name: growIn;
    animation-name: growIn;
    -webkit-animation-duration: 200ms;
    animation-duration: 200ms;
    -webkit-animation-timing-function: transform cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
    animation-timing-function: transform cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
    }

    .topbar {
    height: 4.375rem;
    }

    .bg-success {
    background-color: #1cc88a !important;
    }
        </style>

</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-light">
    <div class="container py-2">
        <div class="navbar-nav justify-content-between w-100">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/Logo Crop.png') }}" alt="TelU" height="50"></a>
                <div class="d-flex justify-content-end">
                    <a class="nav-link" href="{{ route('login') }}" style="color: black" >{{ __('Login') }}</a>
                    <a class="nav-link" href="{{ route('register') }}" style="color: black" >{{ __('Register') }}</a>
                </div>
                <img src="{{ asset('img/logout.png') }}" alt="TelU" height="50" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <img src="svg\search.svg" alt="Search" width="25">
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    
                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="svg\bell.svg" alt="Notification" width="25">
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="svg\message.svg" alt="Message" width="25">
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <div class="d-flex align-items-center">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="vertical-divider"></span>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-weight: bold;">Pengelola</span>
                                <img class="img-profile rounded-circle" src="svg\undraw_profile.svg" width="40">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <img src="svg\profile.svg" alt="Logout Icon" class="mr-2" style="width: 20px; height: 20px;">
                                    
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <img src="svg\settings.svg" alt="Logout Icon" class="mr-2" style="width: 20px; height: 20px;">
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <img src="svg\activitylog.svg" alt="Logout Icon" class="mr-2" style="width: 20px; height: 20px;">
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <img src="svg\logout.svg" alt="Logout Icon" class="mr-2" style="width: 20px; height: 20px;">
                                    Logout
                                </a>
                                
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Navbar -->
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12">
                        
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success text-center" role="alert">
                                {{ $message }}
                            </div>
                        @endif

                        
                        @yield('content')
                        
                        <div class="row justify-content-center text-center mt-3">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>


