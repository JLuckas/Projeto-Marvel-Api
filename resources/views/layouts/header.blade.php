<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Marvel Heroes</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #EC1D24;">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fs-3" href="{{route('index')}}">Marvel Heroes</a>

            <!-- Menu collapser -->
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation -->
            <div class="navbar-collapse collapse" id="btn" style>
                <ul class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item">
                        <a href="{{route('registration')}}" class="nav-link" >Register</a>
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

