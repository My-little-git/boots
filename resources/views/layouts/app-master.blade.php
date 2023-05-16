<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boots | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('layouts.partials.app-header')

@yield('content')

<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
