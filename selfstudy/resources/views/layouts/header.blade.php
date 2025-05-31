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
    <header class="header">
        <h1>Ez a fejléc</h1>
    </header>