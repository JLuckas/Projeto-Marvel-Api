<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Marvel Heroes</title>
</head>
<body>
    <nav class="navbar navbar-expand-md sticky-bar is-sticky navbar-light navbar-expand-lg mb-5" style="background-color: #ec1d24;">
        <div class="container">
            <a class="navbar-brand navbar-fixed mr-auto" href="{{route('index')}}" style="color: #ffff;">Marvel Heroes</a>
            <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('registration')}}">Register</a>
                    </li>

                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>

                    @endguest
                </ul>
            </div>
        </div>

    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <div class="container">

        </div>
    {{-- </div> --}}

