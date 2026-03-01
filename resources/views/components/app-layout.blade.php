<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Veniceland</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">

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

    <main class="flex-fill container-fluid py-5">
        <div class="vl-max">
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto d-flex fixed-bottom">
        © 2026 Veniceland
    </footer>

</body>

</html>
