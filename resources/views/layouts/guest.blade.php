<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Menti School') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>
<body>
    {{ $slot }}

    <!-- Custom JS -->
    <script src="{{ asset('js/signin.js') }}"></script>
</body>
</html>
