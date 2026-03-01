<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Veniceland</a>

            <div>
                <a class="nav-link d-inline" href="/">Home</a>
                <a class="nav-link d-inline" href="/prenota">Prenota</a>
                <a class="nav-link d-inline" href="/contact">Contact</a>
                <a class="nav-link d-inline" href="/fonts">Fonts</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        @yield('content')
    </div>

</body>

</html>
