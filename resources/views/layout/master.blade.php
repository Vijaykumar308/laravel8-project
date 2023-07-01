<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Includes Custom CSS files --}}
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
</head>
<body>  
    @include('layout.header')
    <div class="body__wrapper">
        @include('layout.sidebar')
        <div class="content">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>