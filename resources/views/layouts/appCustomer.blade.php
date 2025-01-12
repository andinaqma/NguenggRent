<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body style="background-image: url('/images/bgneh.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    @include('layouts.navCustomer')
    
    @yield('content')
    @vite('resources/js/app.js')
</body>
</html>
