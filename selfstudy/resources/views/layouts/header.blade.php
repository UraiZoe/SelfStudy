<!DOCTYPE html>
<html lang="en-hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- A <head> részben (például layouts/app.blade.php) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

            <!-- Mobilnézetben megjelenő toggler gomb -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Navigáció összecsukása">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Jobb oldali rész: Bejelentkezés és Regisztráció linkek -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Ha még nincs definiálva a login route, akkor egyszerűen: /login -->
                        <a class="nav-link" href="/login">Bejelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <!-- Ha még nincs definiálva a register route, akkor egyszerűen: /register -->
                        <a class="nav-link" href="/register">Regisztráció</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>