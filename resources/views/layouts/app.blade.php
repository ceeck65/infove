<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Infove</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <script src="https://use.fontawesome.com/f91d57ab8d.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
@if (Auth::check())
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}"  style="color: #4083F2">
        <img src="assets/img/logo.png" alt="" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Publicidad <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Indicadores
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fa fa-money" aria-hidden="true"></i> Economicos</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-hourglass-half" aria-hidden="true"></i> Tiempo</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/servicios-api') }}"><i class="fa fa-cogs text-primary" aria-hidden="true"></i> API</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-hourglass-half" aria-hidden="true"></i> Tiempo</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a  class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
@endif
<div class="container">
    @yield('content')
</div>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-6">
                <div class="copyright">
                    <i class="fa fa-creative-commons"></i> 2017 Infove - Contenidos bajo licencia Creative Commons
                </div>
            </div>
            <div class="col-xs-6 col-6 hidden-xs">
                <div class="design">
                    <a target="_blank" href="{ url('/') }}">Desarrollado por Infove</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>