<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <title>Liga Topskor Indonesia</title>

    <style>
        body {
            background-color: rgb(229, 229, 229);
        }

        .nav-link, h5 {
            font-family: 'Rubik', sans-serif;
        }
    </style>

    @yield('head')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/landing.png') }}" height="100" alt="Liga Top Skor"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link {{ Request::is('landing/jadwal*') ? 'active' : '' }}" href="{{ url('landing/jadwal') }}">Jadwal Pertandingan</a>
            <a class="nav-link {{ Request::is('landing/hasil*') ? 'active' : '' }}" href="{{ url('landing/hasil') }}">Hasil Pertandingan</a>
            <a class="nav-link {{ Request::is('landing/klasemen*') ? 'active' : '' }}" href="{{ url('landing/klasemen') }}">Klasemen</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <footer class="mt-5">
        <p class="text-center font-weight-bold">Copyright &copy; 2022</p>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    @yield('script')
</body>
</html>