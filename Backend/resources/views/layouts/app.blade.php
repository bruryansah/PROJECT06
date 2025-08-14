<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Thamsies</title>
    <link rel="icon"
        href="https://smktamansiswa2jakarta.sch.id/wp-content/uploads/2022/03/LOGO-TAMSIS-MATERIAL-DESIGN.png"
        sizes="any">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="welcome-page">
        @include('layouts.navbar')

        <div class="main-container">
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>
</body>
</html>
