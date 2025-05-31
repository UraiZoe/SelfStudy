<!DOCTYPE html>
<html lang="en-hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap beillesztése-->
    <script src="https://kit.fontawesome.com/af0adec3b9.js" crossorigin="anonymous"></script>
    <!-- Fontawsome/iconok linkelése-->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!--Css link -->
    <title>@yield("title")</title>
    <!--Cím kiszedése az oldaltol függöen -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Bal oldali rész: logó + szöveg -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <!-- Logó kép -->
                <img src="{{ asset('images/selfstudyLogo.png') }}" alt="Logo" width="80" height="80"
                    class="d-inline-block align-text-top">
                <!-- Szöveg a logó mellett -->
                <span class="ms-2">SelfStudy</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Navigáció összecsukása">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Bezárás</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>