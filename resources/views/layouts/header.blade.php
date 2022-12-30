<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap@5.2.3/js/bootstrap.min.js"  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Marvel Heroes</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #EC1D24;">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{route('index')}}">Marvel Heroes</a>

            <!-- Menu collapser -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="nav-target">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link">Login</a>
                        </li>

                        <li class="nav-item" class="nav-link">
                            <a href="{{route('registration')}}">Register</a>
                        </li>

                        @else
                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link">Logout</a>
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


    {{-- </div> --}}

