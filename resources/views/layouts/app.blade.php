<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menti School of Technology</title>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    @include('partials.navbar')
    
    <div class="main-content">
        @yield('content')
    </div>
    
    @include('partials.footer')
</body>
</html>