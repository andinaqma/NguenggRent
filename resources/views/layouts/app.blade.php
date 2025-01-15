<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial
scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<style>
    /* Pastikan latar belakang memenuhi seluruh halaman */
    html, body {
        height: 100%;
        margin: 0;
    }

    body {
        background-image: url('/images/bglagi.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* Menjaga gambar tetap di tempat */
    }
</style>
<body style="background-image: url('/images/bglagi.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    @include('layouts.nav')
    @yield('content')
    @vite('resources/js/app.js')
</body>

</html>
