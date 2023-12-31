<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Master Kendaraan</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYux4FN3HsvzrLbRQGbfjMqQ/dq6p1RIhpJT8Pe8aU2z6BzA3qW8jRlW3Z5O" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-light">
    <div class="container py-2">
        <div class="navbar-nav justify-content-between w-100">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/Logo Crop.png') }}" alt="TelU" height="50"></a>
                <div class="d-flex">
                    <a class="nav-link" href="{{ route('kendaraans.create') }}">Add</a>
                    <a class="nav-link" href="{{ route('kendaraans.index') }}">List</a>
                </div>
                <li class="nav-item dropdown">
                    <img src="{{ asset('img/logout.png') }}" alt="TelU" height="50" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('kendaraans.index') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('kendaraans.index') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center mt-3">
                    <!-- <div class="col-md-12">
                        
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success text-center" role="alert">
                                {{ $message }}
                            </div>
                        @endif

                        
                        @yield('content')
                        
                        <div class="row justify-content-center text-center mt-3">
                        </div>
                    </div> -->
                </div>
            </div>
        </main>
    </div>
</body>
</html>