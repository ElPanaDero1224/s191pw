<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>




    @vite(['resources/js/app.js'])

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; 
        }


        .content {
            padding-top: 60px;
            flex: 1; 
        }

        footer {

            bottom: 0;
            width: 100%;
            height: 100px;
            background-color: #efdd58;
        }

 
        .page-container {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }
    </style>
</head>
<body class="bg-light">

<div class="page-container">

    <nav class="navbar navbar-expand-lg" style="background-color: #efdd58;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('menu')}}">{{__('Biblioteca Épica')}}</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('menu')}}">{{__('Inicio')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registro') }}">{{__('Registrar Libro')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="content">
        @yield('contenido')
    </div>

    <footer class="text-center">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <p class="mb-0">{{__('Biblioteca Épica')}}</p>
            <small>&copy; 2024 copyright reserved</small>
            <time datetime="2024-10-28">October 28, 2024</time>
        </div>
    </footer>
</div>

</body>
</html>
