<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logonya.png') }}" />
    <title>PTIPD | UINSGD</title>

    <style>
        body {
            padding: 10px;
            background-image: url(img/uin.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        .navbar {
            color: black;
            border-radius: 5px;

        }

        .container {
            background-color: rgba(255, 255, 255, 0.852);
            color: black;
            border-radius: 5px;
        }

        .hr{
            size: 10px;
        }

    </style>
    {{-- CSS --}}
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-sm bg-light navbar-black">
        <!-- Brand/logo -->
        {{-- <a class="navbar-brand" href="#">Logo</a> --}}
        <a class="navbar-brand">
            <img src="img/logonya.png" style="width:50px;" alt="Avatar Logo" class="rounded-pill">
        </a>
        <h4>PTIPD UIN SUNAN GUNUNG DJATI BANDUNG</h4>

        @if (Route::has('login'))
            @auth
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('DashboardUser') }}" :active="request()->routeIs('DashboardUser')" class="nav-link btn btn-success">Dashboard</a>
                    </li>
                </ul>
        @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-2">
                        <i class="material-icons" aria-hidden="true"></i>
                        <a href="{{ route('login') }}" class="nav-link btn btn-success">Masuk</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item ml-2">
                            <a href="{{ route('register') }}" class="nav-link btn btn-secondary">Register</a>
                        </li>
                    @endif
                </ul>
            @endauth
        @endif
    </nav>
    <br><br>
    <div class="container">
        <div class="row">
            <center>
                <h1>Selamat datang di <br> Universitas Islam Negeri Bandung</h1>
                <p>Jl. A.H. Nasution No. 105 Cibiru Bandung 40614 <i class='fas fa-tty'></i> (022) 7800525 Fax.
                    (022)7803936 <br> Website: <a href="http://ptipd.uinsgd.ac.id">http://ptipd.uinsgd.ac.id</a> E-mail:
                    ptipd@uinsgd.ac.id</p>
                <p>
                    <img src="img/uiin.png" width="20%">
                </p>
            </center>
        </div>
    </div>
</body>

</html>
